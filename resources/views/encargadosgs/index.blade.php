@extends('layouts.app')

@section('template_title')
    Encargadosg
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Encargados SG SST') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('encargadosg.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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

										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Identificación</th>
										<th>Nivel de Estudios</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($encargadosg as $encargadosg)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $encargadosg->name }}</td>
											<td>{{ $encargadosg->lastname }}</td>
											<td>{{ $encargadosg->identification }}</td>
											<td>{{ $encargadosg->study_level }}</td>

                                            <td>
                                                <form action="{{ route('encargadosgs.destroy',$encargadosg->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('encargadosgs.show',$encargadosg->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('encargadosgs.edit',$encargadosg->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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
