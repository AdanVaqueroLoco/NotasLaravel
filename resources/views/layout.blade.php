<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'App de notas')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"></a>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item {{ url()->current() == route('listar') ? 'active' : '' }}">
                        <a href="{{ url('/') }}" class="main-nav-link">
                            <i class="icon icon-th-list"></i>
                            <span>Ver notas</span>
                        </a>
                    </li>
                    <li class="main-nav-item {{ url()->current() == route('nuevanota') ? 'active' : '' }}">
                        <a href="{{ url('agregar') }}" class="main-nav-link">
                            <i class="icon icon-pen"></i>
                            <span>Nueva nota</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        @yield('content')

        <footer class="foot">
            <div class="ad">
                <p>
                    Esta app es desarrollada en el curso
                    <a href="">BASE DE DATOS II</a>.
                </p>
            </div>
            <div class="license">
                <p>© 2022 UNIVERSIDAD LA SALLE NOROESTE</p>
            </div>
        </footer>
    </div>
</body>
</html>
