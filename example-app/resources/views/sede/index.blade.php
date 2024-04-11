<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Equipos</title>
    <style>
        /* css/styles.css */

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* Cambia 'Your Desired Font' por la fuente deseada */
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            margin-right: 10px;
        }

        .navbar-top {
            background-color: #000;
            color: black;
        }

        .navbar {
            background-color: #3498db;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: rebeccapurple;
        }

        .navbar-nav .nav-link:hover {
            color: #f39c12;
        }

        .navbar-custom {
            background-color: #000;
            color: red;
        }

        .navbar-brand img {
            width: 100px;
            height: 50px;
            margin-right: 10px;
        }

        .h1 {
            font-size: 3em;
            /* Tamaño del texto */
            font-weight: bold;
            /* Peso de la fuente */
            color: #007bff;
            /* Color del título */
            margin-bottom: 10px;
            margin-right: 60%;
        }

        
    </style>
</head>

<body>
@extends('layouts.app')

@section('template_title')
Equipos
@endsection

@section('content')
<div class="navbar navbar-light bg-light navbar-top">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('pictures/logo2.png') }}" alt="Logo" width="600" height="600">
        <h1 class="centered-text">
            PcCOL
        </h1>
    </a>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom ">
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">Inicio</a>
            </li>
            
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Equipo') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('sedes.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear') }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('sedes.index') }}" method="GET">
                        <div class="form-group">
                            <label for="nombre_sede">Nombre Equipo:</label>
                            <input type="text" class="form-control" id="nombre_sede" name="nombre_sede" value="{{ request()->input('nombre_sede') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Filtrar</button>
                    </form>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Nombre sede</th>
                                    <th>Encargado Sede</th>
                                    <th>Ubicación</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sedes as $sede)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $sede->nombre_sede }}</td>
                                    <td>{{ $sede->encargadosede }}</td>
                                    <td>{{ $sede->ubicacion }}</td>
                                    <td>
                                        <form action="{{ route('sedes.destroy',$sede->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary" href="{{ route('sedes.show',$sede->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('sedes.edit',$sede->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $sedes->links() !!}
        </div>
    </div>
</div>
@endsection

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>