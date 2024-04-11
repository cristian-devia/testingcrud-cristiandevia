@extends('layouts.app')

@section('template_title')
{{ $asing->name ?? "{{ __('Show') Asing" }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">{{ __('Show') }} Asing</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('asings.index') }}"> {{ __('Back') }}</a>
                    </div>
                </div>

                <div class="card-body">

    

                    <div class="form-group">
                        <strong>Descripcion:</strong>
                        {{ $asing->descripcion }}
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $asing->estado }}
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $asing->fecha_de_prestamo }}
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $asing->fecha_de_entrega }}
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $asing->serial }}
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $asing->nombre }}
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $asing->apellido }}
                    </div>

                    <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $asing->cargo }}
                    </div>

                    







                    
                    


                </div>
            </div>
        </div>
    </div>
</section>
@endsection