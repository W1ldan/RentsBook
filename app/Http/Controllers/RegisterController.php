<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validateDate = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
        ]); 

        $validateDate['password'] = bcrypt($validateDate['password']);

        User::create($validateDate);

        // return back()->with('berhasil', 'Register Berhasil');
        return redirect('/login')->with('successRegister', 'Berhasil menambahkan akun, silahkan login');
    }

    public function indexLogin(){
        return view('auth.login');
    }
}


