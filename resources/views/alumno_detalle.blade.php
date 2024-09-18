<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Documento</title>
    <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <style>
        h3, h5{
            text-align: center;
        }
    </style>
    <div class="container">
        <h3>Detalle de alumno</h3>
        <h5>Crud:Alumnos->Detalle</h5>
        <hr>
        <br>
        <img src="{{url('/img/'.$alumno->foto)}}"  style="width:200 px;">{{url('img/'.$alumno->foto)}}<br>
        <br>
        <a href="{{url('/img/.$alumno->foto')}}" target="_blank">
         <button type="button" class="btn btn-success">Archivo</button>"></a>
        <hr>
        <b>ID:</b>{{$alumno->id_alumno}}<br>
        <b>Nombre:</b>{{$alumno->nombre}}<br>
        <b>Fecha de nacimiento:</b>{{$alumno->id_fn}}<br>
        <br>
        <a href="{{route('alumnos')}">
        <button type="button" class="btn btn-success">Regresar</button>
        </a>
    </div>
</body>
</html>