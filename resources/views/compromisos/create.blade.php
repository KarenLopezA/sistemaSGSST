@extends('layouts.app')

@section('template_title')
    Añadir compromiso y responsabilidad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Añadir compromiso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('compromisos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('compromisos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
