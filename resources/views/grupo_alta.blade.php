<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Nuevo registro de Grupos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <style>
        h3, h5{
            text-align: center;
        }
    </style>
    <div class="container">
        <h3>Nuevo registro de Grupos</h3>
        <h5>Crud:Grupos->Registro</h5>
        <hr>
        <br>
        <form action="{{route('grupo_registrar')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Datos</h3>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="clave" value="{{ old('clave') }}" id="floatingclave" placeholder="ejemplo=43" aria-describedby="claveHelp">
                <label for="floatingclave">Clave</label>
                <div id="claveHelp" class="form-text">@if($errors->first('clave'))<i>El campo clave no es correcto</i>@endif</div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" id="floatingnombre" placeholder="ejemplo:dsm" aria-describedby="nombreHelp">
                <label for="floatingnombre">Nombre</label>
                <div id="nombreHelp" class="form-text">@if($errors->first('nombre'))<i>El campo nombre no es correcto</i>@endif</div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="cuatrimestre" value="{{ old('cuatrimestre') }}" id="floatingcuatrimestre" placeholder="ejemplo:cuarto" aria-describedby="cuatrimestreHelp">
                <label for="floatingcuatrimestre">Cuatrimestre</label>
                <div id="cuatrimestreHelp" class="form-text">@if($errors->first('cuatrimestre'))<i>El campo cuatrimestre no es correcto</i>@endif</div>
            </div>

            <hr><hr>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('grupos')}}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>
    </div>
</body>
</html>
