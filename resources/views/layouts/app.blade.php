<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>My first project</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="bg-gray-200">
    <header class="flex justify-between align-center border-b p-5 bg-white  font-bold shadow">
        <h1 class="align-center text-3xl text-center">Devstagram</h1>
        <nav class="uppercase text-gray-500">
            <a href="">login</a>
            <a href="/register">crear cuenta</a>
        </nav>
    </header>

    <main class="container mx-auto mt-10 ">
        <h2 class="font-black text-center text-3xl mb-10 ">
            <h2 class="text-center text-2xl font-bold uppercase ">@yield('titulo')</h2>
        </h2>
        
        @yield('contenido')

    </main>
    <footer class="text-center p-5 text-gray-500 font-bold uppercase">
        todos los derechos reservados {{date('Y')}}
    </footer>
    </body>
</html>