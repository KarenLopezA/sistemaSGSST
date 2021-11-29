@extends('layouts.app')

@section('template_title')
    {{ $configuracione->name ?? 'Show Configuracione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostar Configuracione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('configuraciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $configuracione->name }}
                        </div>
                        <div class="form-group">
                            <strong>Nit:</strong>
                            {{ $configuracione->nit }}
                        </div>
                        <div class="form-group">
                            <strong>Georeferencing:</strong>
                            {{ $configuracione->georeferencing }}
                        </div>
                        <div class="form-group">
                            <strong>Economic Activity:</strong>
                            {{ $configuracione->economic_activity }}
                        </div>
                        <div class="form-group">
                            <strong>Risk Level:</strong>
                            {{ $configuracione->risk_level }}
                        </div>
                        <div class="form-group">
                            <strong>Number Of Workers:</strong>
                            {{ $configuracione->number_of_workers }}
                        </div>
                        <div class="form-group">
                            <strong>Legal Nature:</strong>
                            {{ $configuracione->legal_nature }}
                        </div>
                        <div class="form-group">
                            <strong>Telephone Contacts:</strong>
                            {{ $configuracione->telephone_contacts }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $configuracione->email }}
                        </div>
                        <div class="form-group">
                            <strong>Type Of Company:</strong>
                            {{ $configuracione->type_of_company }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
