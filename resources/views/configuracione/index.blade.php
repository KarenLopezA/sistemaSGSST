@extends('layouts.app')

@section('template_title')
    Configuracione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Configuracione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('configuraciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Name</th>
										<th>Nit</th>
										<th>Georeferencing</th>
										<th>Economic Activity</th>
										<th>Risk Level</th>
										<th>Number Of Workers</th>
										<th>Legal Nature</th>
										<th>Telephone Contacts</th>
										<th>Email</th>
										<th>Type Of Company</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($configuraciones as $configuracione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $configuracione->name }}</td>
											<td>{{ $configuracione->nit }}</td>
											<td>{{ $configuracione->georeferencing }}</td>
											<td>{{ $configuracione->economic_activity }}</td>
											<td>{{ $configuracione->risk_level }}</td>
											<td>{{ $configuracione->number_of_workers }}</td>
											<td>{{ $configuracione->legal_nature }}</td>
											<td>{{ $configuracione->telephone_contacts }}</td>
											<td>{{ $configuracione->email }}</td>
											<td>{{ $configuracione->type_of_company }}</td>

                                            <td>
                                                <form action="{{ route('configuraciones.destroy',$configuracione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('configuraciones.show',$configuracione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('configuraciones.edit',$configuracione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $configuraciones->links() !!}
            </div>
        </div>
    </div>
@endsection
