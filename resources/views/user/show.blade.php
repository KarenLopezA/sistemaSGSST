@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Atrás</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $user->lastname }}
                        </div>
                        <div class="form-group">
                            <strong>Identificación:</strong>
                            {{ $user->identification }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $user->telephone }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $user->cellphone }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $user->address }}
                        </div>
                        <div class="form-group">
                            <strong>Código Rol:</strong>
                            {{ $user->role_id }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
