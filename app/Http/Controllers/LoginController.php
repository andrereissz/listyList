<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() : View {
        return view('auth.login');
    }

    public function login(Request $request){
    }

    public function logout() : Route {
        auth()->logout();
        return redirect()->route('/');
    }
}
