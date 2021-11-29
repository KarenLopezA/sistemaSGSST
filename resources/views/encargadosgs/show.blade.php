@extends('layouts.app')

@section('template_title')
    {{ $encargadosg->name ?? 'Show Encargadosg' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Encargados SG SST</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('encargadosgs.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $encargadosg->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $encargadosg->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Identificación:</strong>
                            {{ $encargadosg->identification }}
                        </div>
                        <div class="form-group">
                            <strong>Nivel de Estudios:</strong>
                            {{ $encargadosg->study_level }}
                        </div>
                        <div class="form-group">
                            <strong>Hoja de Vida Pdf:</strong>
                            <a href="{{asset($encargadosg->curriculum_pdf)}}" target="_blank" rel="noopener noreferrer">Ver PDF</a>

                        </div>
                        <div class="form-group">
                            <strong>Diploma Pdf:</strong>
                            <a href="{{asset($encargadosg->diploma_pdf)}}" target="_blank" rel="noopener noreferrer">Ver PDF</a>

                        </div>
                        <div class="form-group">
                            <strong>Curso 50 Horas Pdf:</strong>
                            <a href="{{asset($encargadosg->curse_pdf)}}" target="_blank" rel="noopener noreferrer">Ver PDF</a>

                        </div>
                        <div class="form-group">
                            <strong>Seccional de Salud Pdf:</strong>
                            <a href="{{asset($encargadosg->healt_pdf)}}" target="_blank" rel="noopener noreferrer">Ver PDF</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
