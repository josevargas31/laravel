<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

       

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="bg-slate-200">
        <header class="flex items-center justify-between border-b p-5  bg-white shadow">
             <h1 class="text-3xl font-bold">Jose¡!</h1> 

             @auth()

             <nav class="flex gap-2 items-center">
                 <a  class="font-bold uppercase text-gray-600" href="#">Oha <span class="font-bold">{{ auth()->user()->username }}</span></a>

                 <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button class="font-old uppercase text-gray-600">Cerrar sesión</button>

                 </form>
     
                 {{-- <a href="{{route('logout')}}" class="font-bold uppercase text-gray-600">Cerrar sessión</a> --}}
             </nav>
                 
             @endauth
     
             @guest()
     
             <nav class="flex gap-2 items-center">
                 <a href="{{route('login.index')}}" class="font-bold uppercase text-gray-600">Login</a>
                 <a href="{{route('register.index')}}" class="font-bold uppercase text-gray-600">Crear cuenta</a>
             </nav>
                 
             @endguest


        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
            @yield('pepeganga')
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Todos los derechos reservados {{ date('Y')}}
        </footer>

{{-- este codigo coloca la negrita font-bold --}}
{{-- este codigo coloca mayuscula uppercase --}}
{{-- este codigo coloca el tamaño de la letra text-3xl --}}
    </body>
</html>
