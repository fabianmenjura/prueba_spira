@extends('layouts.app')

@section('template_title')
    {{ $cursousuario->name ?? 'Show Cursousuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Visualizar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursousuarios.index') }}"> Anterior</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $cursousuario->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $cursousuario->usuario->id_u }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cursousuario->usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $cursousuario->usuario->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $cursousuario->curso->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
