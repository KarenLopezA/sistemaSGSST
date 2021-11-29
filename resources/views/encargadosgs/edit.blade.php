@extends('layouts.app')

@section('template_title')
Actualizar Encargado SG SST
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Encargado SG SST</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('encargadosgs.update', $encargadosg->id) }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            @include('encargadosgs.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
