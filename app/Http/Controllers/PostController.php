<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Para protejer al usuario
    public function __construct(){
        $this->middleware('auth');  /* ESTE CONSTRUCTOR PORTEGE MIS DATOS, IMPORTANTE¡! */
    }
    public function index(){
        /* dd("Hola desde el muro"); */
        return view('dashboard');
        /* dd(auth()->user()); */
    }
}
