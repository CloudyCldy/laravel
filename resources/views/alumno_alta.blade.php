<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Documento</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <style>
        h3, h5{
            text-align: center;
        }
    </style>
    <div class="container">
        <h3>Nuevo registro de alumnos</h3>
        <h5>Crud:Alumnos->Registro</h5>
        <hr>
        <br>
        <form action="{{route('alumno_registrar')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <h3>Datos personales</h3>
            <div class="form_floating mb-3">
                <input type="input" class="form-control" name="nombre" value="{{old('nombre')}}" id="floatingNombre"
                placeholder="ejemplo=Cloudy" aria-describedby="NombreHelp">
                <label for="floatingNombre">Nombre</label>
                <div id="fnHelp" class="form-text">@if($errors->first('nombre'))<i>El campo Nombre no es correcto</i>@endif</div>
            </div>
            <div class="form_floating mb-3">
                <input type="date" class="form-control" name="fn" value="{{old('fn')}}" id="floatingfn" placeholder="ejemplo:17/04" aria-describedby="fnHelp">
                <label for="floatingfn">Fecha de nacimiento</label>
                <div id="fnHelp" class="form-text">Coloque su fecha de nacimiento(<i>Formato</i>: dia/mes/año)</div>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="foto" id="floatingfoto" placeholder="----" aria-describedby="fotoHelp">
                <label for="floatingfoto">Foto</label>
                <div id="fotoHelp" class="form-text">Busque una imagen(<i>Formatos</i>:jpg/png/bmp>)</div>
            </div>
            <hr><hr>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{route('alumnos')}}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>
    </div>
</body>
</html>