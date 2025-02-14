<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $data = $request->validate([
            "login" => 'required|string|max:255',
            'password'=> 'required|string|min:8',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended('home');
        }

        
        return back()->withErrors([
            'email' => 'Предоставленные учетные данные не соответствуют нашим записям.',
        ])->onlyInput('login');
    }
}
