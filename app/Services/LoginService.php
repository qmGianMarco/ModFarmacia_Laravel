<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class LoginService
{
    public function login($credentials)
    {
        // Lógica de autenticación utilizando las credenciales
        if (Auth::attempt($credentials)) {
            return true;  // Usuario autenticado correctamente
        }

        return false; // Falló la autenticación
    }

    public function logout()
    {
        Auth::logout(); // Cerrar sesión del usuario
    }
}