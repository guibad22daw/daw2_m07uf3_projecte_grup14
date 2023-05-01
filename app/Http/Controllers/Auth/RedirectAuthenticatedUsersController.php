<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->tipus == 'Gerent') {
            return redirect('/dashboard');
        }
        elseif(auth()->user()->tipus == 'Treballador'){
            return redirect('/dashboard-basic');
        }        
        else{
            return auth()->logout();
        }
    }
}
