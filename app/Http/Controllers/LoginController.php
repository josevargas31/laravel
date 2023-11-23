<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){ /* lo que queremos mostrar retornando */

        return view('auth.login');
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('mensaje','Error, algo no conincide');
        }
        return redirect()->route('post.index');
    }

}
