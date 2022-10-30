@extends('layouts.app')

@section('template_title')
{{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title"> {{ $usuario->nombre }} {{ $usuario->apellido }}</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <strong>Documento:</strong>
                        {{ $usuario->id_u }}
                    </div>
                    <div class="form-group">
                        <strong>Nombres:</strong>
                        {{ $usuario->nombre }}
                    </div>
                    <div class="form-group">
                        <strong>Apellidos:</strong>
                        {{ $usuario->apellido }}
                    </div>
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $usuario->email }}
                    </div>


                    <div class="card">

                        <div class="card-body">
                            <h4 class="card-title">Cursos asigandos</h4>

                            @if (count($datos)>0)
                            @foreach ($datos as $dato)
                            <li> {{ $dato->nombre }}</li>
                            @endforeach
                            @else
                            <div class="alert alert-danger">
                              El usuario no tiene cursos asignados
                            </div>

                            @endif



                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
@endsection