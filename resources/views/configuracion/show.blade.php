@extends('layouts.app')

@section('template_title')
    {{ $configuracion->name ?? 'Show Configuracion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Configuracion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('configuracions.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $configuracion->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $configuracion->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Georreferenciación:</strong>
                            <a href="{{asset($configuracion->georeferencing)}}" target="_blank" rel="noopener noreferrer">Ver Imágen de dirección</a>

                        <div class="form-group">
                            <strong>Actividad económica:</strong>
                            {{ $configuracion->economic_activity }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel de riesgo:</strong>
                            {{ $configuracion->risk_level }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad de trabajadores:</strong>
                            {{ $configuracion->number_of_workers }}
                        </div>
                        <div class="form-group">
                            <strong>Naturaleza jurídica:</strong>
                            {{ $configuracion->legal_nature }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfonos de contacto:</strong>
                            {{ $configuracion->telephone_contacts }}
                        </div>
                        <div class="form-group">
                            <strong>Correo electrónico:</strong>
                            {{ $configuracion->email }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de empresa:</strong>
                            {{ $configuracion->type_of_company }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
