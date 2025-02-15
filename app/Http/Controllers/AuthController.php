<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use Illuminate\Validation\Rule;
use \Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
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

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('home');
    }

    public function profileEdit(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'login' => [
                'required', 'string', 'max:255', 
                Rule::unique('users', 'login')->ignore($user->id) 
            ],
            'email' => [
                'required', 'email', 'max:255', 
                Rule::unique('users', 'email')->ignore($user->id)
            ],
        ]);

        $user->update($validated);

        return route('home');
    }

    public function passwordEdit(Request $request){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8',
        ]);
    
        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Текущий пароль введён неверно.']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return view('home');
    }
}
