<?php

namespace App\Http\Controllers;

use app\Models\user;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Facades\Hash;

class RegisterController extends Controller
{
    //funcion para mensaje
    public function index(){
        //add(Bloquiemos_a_Pablo);
        return view('auth.register');
    }
    public function store(Request $request) {
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request, [
            'name'=>'required | max:30',
            'username'=>'required |unique:users|min:3|max:30',
            'email' =>'required |unique:users|email|max:60',
            'password' =>'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
            //'password' => bcrypt($request->password)
        ]);

        dd("Insertando los datos del formulario");
    }
}