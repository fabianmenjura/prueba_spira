@extends('layouts.app')

@section('template_title')
    Actualizar Curso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Curso</span>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" method="POST" action="{{ route('cursos.update', $curso->id) }}"  role="form" enctype="multipart/form-data" novalidate>
                            {{ method_field('PATCH') }}
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
    </section>
@endsection
