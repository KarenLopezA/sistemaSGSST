@extends('layouts.app')

@section('template_title')
    {{ $aliado->name ?? 'Show Aliado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Aliados y proveedores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aliados.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $aliado->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $aliado->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Certificado ARL pdf:</strong>
                            <a href="{{asset($aliado->security_file_pdf)}}" target="_blank" rel="noopener noreferrer">Ver PDF</a>

                        </div>

                        <div class="form-group">
                            <strong>Documento de seguridad social pdf:</strong>
                            <a href="{{asset($aliado->security_file_pdf)}}" target="_blank" rel="noopener noreferrer">Ver PDF</a>

                        </div>

                        <div class="form-group">
                            <strong>Ficha de seguridad:</strong>
                            <a href="{{asset($aliado->security_file_pdf)}}" target="_blank" rel="noopener noreferrer">Ver PDF</a>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
