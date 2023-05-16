<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function indexRegister(){
        return view('auth.register');
    }

   

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
 
        $user = $request->only('email', 'password');
        if(Auth::attempt($user)){
            return redirect('/dashboard');
        }
    }

   

    
}