<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(){
        $data = User::all();

        return view ('edit.index', [
            'title' => 'Data User',
        ], compact('data'));
    }

    public function adduser(){
         return view('edit.adduser', [
            'title' => 'Add user',
         ]);
    }

    public function insertuser(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5',
            'role' => 'required|in:user, admin',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);
        return redirect('edit')->with('berhasil', 'Penambahan User Berhasil!');
    }

    public function showdata($id){
        $data=User::find($id);
        return view ('edit.showdata', ['title' => 'Edit',], compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = User::find($id);
        $data->update($request->all());
        return redirect('edit')->with('berhasil', 'Edit data user berhasil!');
    }

    public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect('edit')->with('berhasil', 'Data user berhasil dihapus');
    }
}
