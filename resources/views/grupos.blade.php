<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Grupos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!--Forma de interactuar con el usuario final-->
    <div class="container">
        <br><br>
        <h3>Lista de grupos</h3>
        <h5>CRUD:Grupos</h5>
        <hr>
        <p style="text-align: right;">
            <!--si esta entre '{}' es codigo de laravel,define que hara-->
            <a href="{{route('grupo_alta')}}">
                <button type="button" class="btn btn-primary btn-sm">Nuevo registro de grupo</button>
            </a>
        </p>
        <br><br>
        <table class="table">
            <tr>
                <th>Numero</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Cuatrimestre</th>
                <th>Otros</th>
            </tr>
            @foreach ($grupos as $grupo)
            <tr>
                <td>{{$grupo->id_grupos}}</td>
                <td>{{$grupo->clave}}</td>
                <td>{{$grupo->nombre}}</td>
                <td>{{$grupo->cuatrimestre}}</td>
                <td>
                    <a href="{{route('grupo_detalle',['id' =>$grupo->id_grupos])}}">
                        <button type="button" class="btn btn-primary btn-sm">Detalle</button>
                    </a>
                    <a href="{{route('grupo_editar',['id' =>$grupo->id_grupos])}}">
                        <button type="button" class="btn btn-primary btn-sm">Editar</button>
                    </a>  <a href="{{route('grupo_borrar',['id' =>$grupo->id_grupos])}}">
                        <button type="button" class="btn btn-primary btn-sm">Borrar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>