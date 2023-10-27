<?php

namespace App\Http\Controllers;
use App\Models\User; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register (Request $request){
        //validar datos
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user-> save();

        Auth::login($user);
        return view('inicio');
    }
    

    public function login(Request $request) {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        return view('inicio');
    
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            $request->session()->start(); // Iniciar una nueva sesión
        } else {
            return view('login');
        }
    }
    
    public function logout (Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return view('login');
    }

}


   

