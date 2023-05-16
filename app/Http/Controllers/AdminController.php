<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexDash()
    {
        $data = User::count();
        return view("dashboard.index", compact('data'));
    }



    public function index()
    {
        //User
        $data = User::all();
        return view('dashboard.user', compact('data'));
    }

    public function editUser($id)

    {
        $data = User::where('id' , $id)->first();
        return view('dashboard.edit-user', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $data = User::where('id', $id)->first();


        $data->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,

        ]);

        return redirect()->route('dashboard.index')->with('god', 'Wahahahha');
    }

    public function destroy(Request $request, $id)
    {

         User::where('id', $id)->delete();

        return redirect('/user')->with('berhasil', 'berhasil di hapus ');
    }

}