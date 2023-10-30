<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        // Validar datos
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);
        return view('inicio');
    }

    public function login(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            // Si las credenciales son correctas, iniciar sesión y redirigir a la vista 'inicio'
            $request->session()->regenerate();
            return view('inicio');
        } else {
            // Si las credenciales son incorrectas, mostrar un mensaje de error
            return view('login')->with('error', 'Acceso denegado, usuario inexistente');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('login');
    }
}


   

