<div class="box box-info padding-1">
    <div class="box-body">

        <!-- ========== CRUD CON COMANDO FACIL ========== 
       <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $curso->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('intensidad') }}
            {{ Form::text('intensidad', $curso->intensidad, ['class' => 'form-control' . ($errors->has('intensidad') ? ' is-invalid' : ''), 'placeholder' => 'Intensidad']) }}
            {!! $errors->first('intensidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       ========== End Section ========== -->
            <form class="row g-3 needs-validation">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <label for="nombre" class="form-label">Nombre curso</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$curso->nombre}}" required placeholder="Introduzca el nombre del curso">
                    <div class="valid-feedback">
                        ¡Se ve bien!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, escribe un curso.
                    </div>
                </div>

                <div class="col-md-8">
                    <label for="intensidad" class="form-label">Intensidad curso</label>
                    <input type="text" min="1" pattern="^[0-9]+" class="form-control" id="intensidad" name="intensidad" value="{{$curso->intensidad}}" required placeholder="Introduzca la intensidad">
                    <div class="valid-feedback">
                        ¡Se ve bien!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, elige la intensidad numérica.
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                <div class="col-md-auto">
                <div class="btn btn-primary">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
                </div>
                </div>
                </div>
            
            </form>
    </div>

</div>