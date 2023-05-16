<?php

namespace App\Http\Controllers;

use App\Models\Messege;
use Illuminate\Http\Request;

class MessegeController extends Controller
{
    public function messege(Request $request){
        $request->validate([
            'nama' => 'required',
            'messege' => 'required'
        ]);

        Messege::create($request->all());
        return redirect('/');
    }
}
