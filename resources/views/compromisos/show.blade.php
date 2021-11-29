@extends('layouts.app')

@section('template_title')
    {{ $compromiso->name ?? 'Show Encargadosg' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver firmas</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compromisos.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $compromiso->name }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo que ocupa:</strong>
                            {{ $compromiso->position_held }}
                        </div>

                        </div>
                        <div class="form-group">
                            <strong>Firma_pdf:</strong>
                            <a href="{{asset($compromiso->signature_pdf)}}" target="_blank" rel="noopener noreferrer">Descargar formato</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
