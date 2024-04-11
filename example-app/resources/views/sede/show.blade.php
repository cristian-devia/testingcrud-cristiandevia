@extends('layouts.app')

@section('template_title')
    <!-- {{ $sede->name ?? "{{ __('Mostrar') Equipo" }} -->
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Descripcion') }} Equipo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sedes.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Equipo:</strong>
                            {{ $sede->nombre_sede }}
                        </div>
                        <div class="form-group">
                            <strong>Serial:</strong>
                            {{ $sede->encargadosede }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $sede->ubicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
