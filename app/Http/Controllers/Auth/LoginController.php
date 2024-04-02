<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('auth.login');
        }
    }

    public function doLogin(Request $request)
    {
        // Validate the login request
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard'); // Redirect to the dashboard route
        }

        // Authentication failed, return back with error
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
