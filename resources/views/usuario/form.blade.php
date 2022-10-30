<div class="box box-info padding-1">
    <div class="box-body">

        <!-- ========== CRUD CON COMANDO FACIL ========== 
       <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $usuario->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('intensidad') }}
            {{ Form::text('intensidad', $usuario->intensidad, ['class' => 'form-control' . ($errors->has('intensidad') ? ' is-invalid' : ''), 'placeholder' => 'Intensidad']) }}
            {!! $errors->first('intensidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       <!-- ========== End Section ========== -->
        <form class="row g-3 needs-validation">
            <div class="col-md-4">
                <label for="id_u" class="form-label">Documento</label>
                <input type="text" minlength="7" maxlength="10" pattern="^[0-9]+" class="form-control" id="id_u" name="id_u" value="{{$usuario->id_u}}" required placeholder="Digite el número de documento">
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, escribe número de documento válido.
                </div>
            </div>

            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" minlength="3" maxlength="20" class="form-control" id="nombre" name="nombre" value="{{$usuario->nombre}}" required placeholder="Digite nombre">
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, digite nombre.
                </div>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" minlength="3" maxlength="20" class="form-control" id="apellido" name="apellido" value="{{$usuario->apellido}}" required placeholder="Digite apellido">
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, digite apellido.
                </div>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" class="form-control" id="email" name="email" value="{{$usuario->email}}" required placeholder="Ej.: ejemplo@servidor.com">
                  
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, digite un Email válido.
                </div>
            </div>
            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>

</div>
<!-- ========== Start Section ========== 
        <form class="row g-3 needs-validation">
                <div class="col-md-4">
                    <label for="documento" class="form-label">Documento</label>
                    <input type="text"  minlength="7" maxlength="10" pattern="^[0-9]+" class="form-control" id="documento" name="documento" value="{{$usuario->id_u}}" required placeholder="Digite el documento">
                    <div class="valid-feedback">
                        ¡Se ve bien!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, un número de documento válido.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" minlength="3" maxlength="20" class="form-control" id="nombre" name="nombre" value="{{$usuario->nombre}}" required placeholder="Digite nombre de usuario">
                    <div class="valid-feedback">
                        ¡Se ve bien!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, digite nombre.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="apellido" class="form-label">apellido</label>
                    <input type="text" minlength="3" maxlength="20" class="form-control" id="apellido" name="apellido" value="{{$usuario->apellido}}" required placeholder="Digite apellido de usuario">
                    <div class="valid-feedback">
                        ¡Se ve bien!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, digite apellido.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" class="form-control" id="email" name="email" value="{{$usuario->email}}" required placeholder="Ej.: ejemplo@servidor.com">
                    <div class="valid-feedback">
                        ¡Se ve bien!
                    </div>
                    <div class="invalid-feedback">
                        Por favor, digite un Email válido.
                    </div>
                </div>
                ========== End Section ========== -->