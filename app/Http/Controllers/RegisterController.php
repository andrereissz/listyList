<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RegisterController extends Controller
{
    public function index(): View {
        return view('auth.register');
    }

    public function register(Request $request) : Route {
        
    }
}
