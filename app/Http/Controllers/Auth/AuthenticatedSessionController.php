<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
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

        if (auth()->user()->tipus == 'gerent') {
            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);

        } elseif (auth()->user()->tipus == 'treballador') {
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