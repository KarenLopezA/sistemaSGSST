@extends('layouts.app')

@section('template_title')
Actualizar proveedor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar aliado o proveedor</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('aliados.update', $aliado->id) }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('aliados.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
