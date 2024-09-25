<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Editar Grupos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <style>
        h3, h5 {
            text-align: center;
        }
    </style>
    <div class="container">
        <h3>Editar Grupos</h3>
        <h5>CRUD: Grupos -> Editor</h5>
        <hr>
        <br>
        <form action="{{ route('grupo_salvar', ['id' => $grupo->id_grupos]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <h3>Datos del Grupo</h3>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="clave" value="{{ $grupo->clave }}" id="floatingClave" placeholder="Ejemplo: GRP123" aria-describedby="claveHelp">
                <label for="floatingClave">Clave</label>
                <div id="claveHelp" class="form-text">
                    @if ($errors->first('clave'))<i>El campo Clave no es correcto</i>@endif
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre" value="{{ $grupo->nombre }}" id="floatingNombre" placeholder="Ejemplo: Grupo A" aria-describedby="nombreHelp">
                <label for="floatingNombre">Nombre</label>
                <div id="nombreHelp" class="form-text">
                    @if ($errors->first('nombre'))<i>El campo Nombre no es correcto</i>@endif
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="cuatrimestre" value="{{ $grupo->cuatrimestre }}" id="floatingCuatrimestre" placeholder="Ejemplo: Primer Cuatrimestre" aria-describedby="cuatrimestreHelp">
                <label for="floatingCuatrimestre">Cuatrimestre</label>
                <div id="cuatrimestreHelp" class="form-text">
                    @if ($errors->first('cuatrimestre'))<i>El campo Cuatrimestre no es correcto</i>@endif
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('grupos') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>
    </div>
</body>
</html>
