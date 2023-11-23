@extends('layouts.app')

@section('titulo')
     En Devstagram
@endsection

@section('contenido')
    <div class="md:flex flex justify-center items-center text-center">
        <div class="md:w-6/12">
            <img class="md:w-6/12" src="{{ asset('img/usuario___3965563667cdede___.svg') }}" alt="Imagen de login">
        </div>
        <div>
            <h1 class="md:w-2/12">Hola juaz!</h1>
        </div>
    </div>

@endsection