<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class AuthenticatedSessionController extends Controller
{
    public function fEnviaMail($nomTreballador, $darreraConnexio){
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);
        $mail->SMTPDebug  = 0; 
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com"; #Adreça del servidor SMTP                          
        $mail->Mailer = "smtp";
        $mail->SMTPAuth = true;
        $mail->Username = "15587039.clot@fje.edu"; #Nom de l'usuari dins del servidor                 
        $mail->Password = getenv("MAIL_PASSWORD"); # Password de l'usuari usuari@domini.tld 
        $mail->Port = 25; # Port del servidor. Normalment 25 per connexions sense TLs/SSL
        $mail->SetFrom("15587039.clot@fje.edu","Guillem"); # From del missatge.
        $mail->addAddress("gbtrilux@gmail.com","Guillem"); #To del missatge
        $mail->isHTML(true);
        $mail->Subject = "Nou login - Happy Flower Family Hotel"; # Subject del misstage
        $mail->Body = "<p>S'ha registrat un nou login.</p> <p><b>Usuari:</b> ".$nomTreballador."</p> <p><b>Hora de connexió:</b> ".$darreraConnexio."</p>";
        $mail->Alt = "<p>El correu no s'ha enviat correctament.<p>";
        
        $mail->send();
    }
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = auth()->user();
        $user->darrera_hora_entrada = Carbon::now()->timezone('Europe/Madrid');
        
        /** @var \App\Models\User $user **/
        $user->save();

        if (auth()->user()->tipus == 'Gerent') {
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);

        } elseif (auth()->user()->tipus == 'Treballador') {
            $b = new AuthenticatedSessionController;
            $b->fEnviaMail(auth()->user()->nom_complet, $user->darrera_hora_entrada);
            return redirect()->intended(RouteServiceProvider::BASIC_HOME);
        } else {
            return auth()->logout();
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $user = auth()->user();
        $user->darrera_hora_sortida = Carbon::now()->timezone('Europe/Madrid');

        /** @var \App\Models\User $user **/
        $user->save();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}