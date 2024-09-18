<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br><br>
        <h3>Lista de alumnos del DSM43</h3>
        <h5>CRUD:Alumnos</h5>
        <hr>
        <p style="text-align: right;">
            <a href="{{route('alumno_alta')}}">
                <button type="button" class="btn btn-primary btn-sm">Nuevo registro de alumno</button>
            </a>
        </p>
        <br><br>
        <table class="table">
            <tr>
                <th>Foto</th>
                <th>Numero</th>
                <th>Nombre</th>
                <th>FN</th>
                <th>Otros</th>
            </tr>
            @foreach ($alumnos as $alumno)
            <tr>
                <td> <img src="{{'img/'.$alumno->foto}}" style="width:30 px;height:30px;"></td>
                <td>{{$alumno->id_alumno}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->fn}}</td>
                <td>
                    <a href="{{route('alumno_detalle',['id' =>$alumno->id_alumno])}}">
                        <button type="button" class="btn btn-primary btn-sm">Detalle</button>
                    </a>
                    <a href="{{route('alumno_editar',['id' =>$alumno->id_alumno])}}">
                        <button type="button" class="btn btn-primary btn-sm">Editar</button>
                    </a>  <a href="{{route('alumno_borrar',['id' =>$alumno->id_alumno])}}">
                        <button type="button" class="btn btn-primary btn-sm">Borrar</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>