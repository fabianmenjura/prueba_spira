@extends('layouts.app')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('template_title')
Create Curso
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Crear Curso</span>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" method="POST" action="{{ route('cursos.store') }}" role="form" enctype="multipart/form-data" novalidate>
                                @csrf

                                @include('curso.form')


                            </form>
                            @section('js')
                            <script>
                                // Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
                                (function() {
                                    'use strict'

                                    // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
                                    var forms = document.querySelectorAll('.needs-validation')

                                    // Bucle sobre ellos y evitar el envío
                                    Array.prototype.slice.call(forms)
                                        .forEach(function(form) {
                                            form.addEventListener('submit', function(event) {
                                                if (!form.checkValidity()) {
                                                    event.preventDefault()
                                                    event.stopPropagation()
                                                }

                                                form.classList.add('was-validated')
                                            }, false)
                                        })
                                })()
                            </script>
                            @endsection
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection