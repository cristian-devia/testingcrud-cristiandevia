<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset ('css/Style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/Header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/footer.css') }}">

    <link href="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('css/estilos-dash-admin.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/jquery.dataTables.min.css') }}">
    <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel='stylesheet'>

    <link rel="shortcut icon" href="{{ asset('pictures/iconlogo.png') }}">
    <title>PcCOL | Bienvenidos</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <header class="dash-menu">
        <h1>PcCOL</h1>
        <!-- <img class="logo-dash-admin" src="{{ asset('pictures/logo.png') }}" alt="logo"> -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/sedes') }}">Equipos</a>
        </li>


        <ul class="list-menu-ul">
            <li><a href="{{ url('/login')}}" class="btn-ingresar"> <img class="img-login" src="" alt="ingresar"></a></li>
        </ul>
    </header>
    <center>
        <div class="body1">
            <div class="content">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators" id="itemCarrousel">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" id="conteCarrousel">
                            <img src="{{ asset('pictures/01.png') }}" alt="" class="d-block w-100">
                        </div>
                        <div class="carousel-item" id="conteCarrousel">
                            <img src="{{ asset('pictures/02.png') }}" alt="" class="d-block w-100">
                        </div>
                        <div class="carousel-item" id="conteCarrousel">
                            <img src="{{ asset('pictures/03.png') }}" alt="" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" id="itemCarrouselArrows"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon" id="itemCarrouselArrows"></span>
                    </button>
                </div>

                <div class="categorias">
                    <section class="informativo">
                        <p class="titulo-principal"> CONTROL DE PUNTOS </p>

                        <div class="producto">
                            <img class="img-productos" src="{{ asset('pictures/one.png') }}" alt="producto1">
                            <p class="texto-categorias"> SEDES </p>
                        </div>

                        
                    </section>
                </div>
            </div>
        </div>
    </center>

    <footer>
        <div class="pie_pagina">
            
            <div class="group2">
                <small>&copy;2024 <b>PcCOL</b> </small>
            </div>
        </div>
    </footer>
    <script src="{{ asset ('https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>


</body>

</html>