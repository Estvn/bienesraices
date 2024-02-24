<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar Datos</title>
</head>
<body>
    <h1>Edite los Datos de este Registro</h1>
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{route('propiedad.actualizar', $propiedad->codigoPropiedad)}}" method='POST'>
                @csrf
                @method('PUT')
                <div><label>Cdigo del dueño</label><input type="text" value='{{$propiedad->codigoPropiedad}}' readonly></div>
                <div><label>Color</label><input type="text" name="color" value='{{$propiedad->color}}'></div>
                <div><label>Metros</label><input type="text" name="metros" value='{{$propiedad->metros}}'></div>
                <div><label>Tipo de propiedad</label><input type="text" name="tipoPropiedad" value='{{$propiedad->tipoPropiedad}}'></div>
                <div><label>Costo por Metro</label><input type="text" name="costoxmtr" value='{{$propiedad->costoxmtr}}'></div>
                <div><label>Codigo de dueño</label><input type="text" name="codigoDuenio" value='{{$propiedad->codigoDuenio}}'></div>
                <div><label>Dirección</label><input type="text" name="direccion" value='{{$propiedad->direccion}}'></div>
                <div><label>Pisos</label><input type="text" name="pisos" value='{{$propiedad->pisos}}'></div>
                <div><button class="btn btn-success" type="text">guardar</button></div>
            </form>
        </div>
    </div>

</body>
</html>