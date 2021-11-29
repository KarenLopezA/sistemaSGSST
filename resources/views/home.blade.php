@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('¡Trabajando por la protección y promoción de tu salud!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('PÁGINA PRINCIPAL DEL SISTEMA GESTIÓN SST') }}
                </div>
            </div>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <tittle><center></center> </tittle>
    <link rel="stylesheet" href="style.css">
    <body bgcolor="#18c898">
        <center><img src="https://institutodeseguridad.edu.pe/wp-content/uploads/2020/08/sistema-de-gestion-de-seguridad-y-salud-en-el-trabajo.jpg" alt=""></center>

       </body>
</head>
</html>

@endsection
