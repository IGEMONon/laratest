<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return view('login_success');
        } else {
            return redirect()->back()->with('error', 'failed');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect("/");
    }
}
