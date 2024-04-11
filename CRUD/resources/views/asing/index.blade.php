
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos asignados</title>
    <style>
        /* css/styles.css */

        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif; /* Cambia 'Your Desired Font' por la fuente deseada */
           
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
            background-color: #3498db;
            color: red;
        }

        .navbar-brand img {
            width: 100px;
            /* Ancho personalizado para el logo */
            height: 50px;
            /* Altura automática para mantener la proporción */
            margin-right: 10px;
        }
        .h1{
            font-size: 3em; /* Tamaño del texto */
            font-weight: bold; /* Peso de la fuente */
            color: #007bff; /* Color del título */
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
@extends('layouts.app')

@section('template_title')
Asing
@endsection

@section('content')
<div class="navbar navbar-light bg-light navbar-top">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('pictures/logo.png') }}" alt="Logo" width="200" height="300">
            <h1>
                Universidad cooperativa
            </h1>

        </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">s</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
<li class="nav-item">
    <a class="nav-link" href="{{ url('/products') }}">Elementos</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/garants') }}">Garantias</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/sedes') }}">Sedes</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ url('/repars') }}">Elementos reparados</a>
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
                            {{ __('Asing') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('asings.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Fecha de prestamo</th>
                                    <th>Fecha de entrega</th>
                                    <th>Serial</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cargo</th>


                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($asings as $asing)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $asing->descripcion }}</td>
                                    <td>{{ $asing->estado }}</td>
                                    <td>{{ $asing->fecha_de_prestamo }}</td>
                                    <td>{{ $asing->fecha_de_entrega }}</td>
                                    <td>{{ $asing->serial }}</td>
                                    <td>{{ $asing->nombre }}</td>
                                    <td>{{ $asing->apellido }}</td>
                                    <td>{{ $asing->cargo }}</td>

                                    <td>
                                        <form action="{{ route('asings.destroy',$asing->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('asings.show',$asing->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('asings.edit',$asing->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $asings->links() !!}
        </div>
    </div>
</div>
@endsection


</body>

</html>