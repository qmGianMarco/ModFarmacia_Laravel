<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|correo',
            'contrasena' => 'required',
        ]);

        if (Auth::attempt($request->only('correo', 'contrasena'))) {
            return redirect()->route('home')->with('success', '¡Bienvenido!');
        }

        return back()->withErrors([
            'correo' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', '¡Has cerrado sesión!');
    }
}
