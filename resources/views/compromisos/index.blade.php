@extends('layouts.app')

@section('template_title')
    Compromisos y responsabilidades de la empresa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Compromisos y responsabilidades') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('compromisos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir compromiso') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre</th>
										<th>Cargo que ocupa</th>
										<th>Firma en pdf</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compromiso as $compromiso)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $compromiso->name }}</td>
											<td>{{ $compromiso->position_held }}</td>
											<td>{{ $compromiso->signature_pdf }}</td>

                                            <td>
                                                <form action="{{ route('compromisos.destroy',$compromiso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('compromisos.show',$compromiso->id) }}"><i class="fa fa-fw fa-eye"></i> Cargar nuevo formato</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('compromisos.edit',$compromiso->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar acuerdo</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
