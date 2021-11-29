@extends('layouts.app')

@section('template_title')
Actualizar Compromiso y responsabilidad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar compromiso y responsabilidad</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('compromisos.update', $compromiso->id) }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('compromisos.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
