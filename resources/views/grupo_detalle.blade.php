<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Detalle de Grupo</title>
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        h3, h5 {
            text-align: center;
        }
    </style>
    <div class="container">
        <h3>Detalle del Grupo</h3>
        <h5>CRUD: Grupos -> Detalle</h5>
        <hr>
        <br>
        <b>ID del Grupo:</b> {{ $grupo->id_grupos }}<br>
        <b>Clave:</b> {{ $grupo->clave }}<br>
        <b>Nombre del Grupo:</b> {{ $grupo->nombre }}<br>
        <b>Cuatrimestre:</b> {{ $grupo->cuatrimestre }}<br>
        <br>
        <a href="{{ route('grupos') }}">
            <button type="button" class="btn btn-success">Regresar</button>
        </a>
    </div>
</body>
</html>
