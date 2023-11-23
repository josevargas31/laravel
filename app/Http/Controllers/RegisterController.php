<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;

class RegisterController extends Controller{

    public function index(){
        //dd("#Bloquiemos_a_pablo");
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required | max:30',
            'username'=>'required |unique:users|min:3|max:30',
            'email' =>'required |unique:users|email|max:60',
            'password' =>'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => Str::lower($request->username),
            'email' => $request->email,
            'password' => Hash::make($request->password) /* Para encriptar la contraseña Hash::check() */
        ]);

        /* auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]); */
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('post.index');
    }

}
