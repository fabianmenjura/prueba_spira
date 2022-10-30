@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('template_title')
    Asignar curso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignar curso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cursousuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                        <table id="cursousuario" class="table table-striped" style="width:100%">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Documento</th>
										<th>Alumno</th>
										<th>Curso asignado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursousuarios as $cursousuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $cursousuario->usuario->id_u }}</td>
											<td>{{ $cursousuario->usuario->nombre }}</td>
											<td>{{ $cursousuario->curso->nombre }}</td>

                                            <td>
                                                <form action="{{ route('cursousuarios.destroy',$cursousuario->id) }}" method="POST">
                                                   <!-- 
                                                     <a class="btn btn-sm btn-primary " href="{{ route('cursousuarios.show',$cursousuario->id) }}"><i class="fa fa-fw fa-eye"></i> Visualizar</a>
                                                   -->
                                                     <a class="btn btn-sm btn-success" href="{{ route('cursousuarios.edit',$cursousuario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('¿Eliminar registro?')"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @section('js')
                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                           <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                           <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
                            <script>
                                $(document).ready(function () {
                                 $('#cursousuario').DataTable();
                                 
                                    });
                            </script>
                           @endsection
                        </div>
                    </div>
                </div>
                {!! $cursousuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
