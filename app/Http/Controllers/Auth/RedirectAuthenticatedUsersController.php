<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAuthenticatedUsersController extends Controller
{
    public function home()
    {
        if (auth()->user()->role == 'admin') {
            return redirect('/dashboard');
        }
        elseif(auth()->user()->role == 'basic'){
            return redirect('/dashboardbasic');
        }        
        else{
            return auth()->logout();
        }
    }
}
