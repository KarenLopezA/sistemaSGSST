@extends('layouts.app')

@section('template_title')
    Configuración
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Configuracion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('configuracions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
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
										<th>Nit</th>
										<th>Georreferenciación</th>
										<th>Actividad Económica</th>
										<th>Nivel de riesgo</th>
										<th>Cantidad de trabajadores</th>
										<th>Naturaleza jurídica</th>
										<th>Teléfonos de contacto</th>
										<th>Correo electrónico</th>
										<th>Tipo de empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($configuracions as $configuracion)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $configuracion->name }}</td>
											<td>{{ $configuracion->nit }}</td>
											<td>{{ $configuracion->georeferencing }}</td>
											<td>{{ $configuracion->economic_activity }}</td>
											<td>{{ $configuracion->risk_level }}</td>
											<td>{{ $configuracion->number_of_workers }}</td>
											<td>{{ $configuracion->legal_nature }}</td>
											<td>{{ $configuracion->telephone_contacts }}</td>
											<td>{{ $configuracion->email }}</td>
											<td>{{ $configuracion->type_of_company }}</td>

                                            <td>
                                                <form action="{{ route('configuracions.destroy',$configuracion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('configuracions.show',$configuracion->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('configuracions.edit',$configuracion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
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
