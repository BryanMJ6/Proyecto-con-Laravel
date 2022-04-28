<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenido a Blood Buddy</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger text-white">
            <div class="container-fluid">
                <a class="navbar-brand text-dark-800" href="#">Blood Buddy</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a @click="abrirForm('alumno')" class="nav-link text-white" href="#">informacion de
                                contacto</a>
                        </li>
                        <li class="nav-item">
                            <a @click="abrirForm('docente')" class="nav-link text-white" href="#">Seccion de Ayuda</a>
                        </li>
                    </ul>
                </div>

                <body class="antialiased">
                    <div
                        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            <ul class="navbar-nav ms-auto">
                                <a class=" nav-link text-white""
                                    href=" {{ route('equipos.index') }}">{{ __('Quienes Somos') }}</a>
                                <a class="nav-link text-white "
                                    href=" {{ route('terminos.index') }}">{{ __('Terminos y condiciones') }}</a>
                                @auth
                                <a href="{{ url('/home') }}"
                                    class="navbar-brand btn btn-outline-dark text-white">Inicio</a>
                                @else
                                <a href="{{ route('login') }}"
                                    class=" navbar-brand btn btn-outline-dark text-white">Iniciar
                                    sesion</a>

                                @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="navbar-brand btn btn-outline-dark text-white">Registrarme</a>
                                @endif
                                @endauth
                        </div>
                        @endif
                    </div>
                </body>

</html>