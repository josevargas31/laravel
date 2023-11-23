<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store() {
       /*  dd("Hola, cerrando sessión"); */
       auth()->logout();
       return redirect()->route("login.index");
    }
}
