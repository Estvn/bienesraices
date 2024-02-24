<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar Registro</title>
</head>
<body>
    <h1 style='color:red;'>¿Esta seguro de eliminar este registro?</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Color</th>
                <th>Metros</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$propiedad->codigoPropiedad}}</td>
                <td>{{$propiedad->color}}</td>
                <td>{{$propiedad->metros}}</td>
                <td>{{$propiedad->metros*$propiedad->costoxmtr}}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <a href='{{route('propiedad.home')}}' class="btn btn-warning">Cancelar</a>
        <a href='{{route('propiedad.destroy', $propiedad->codigoPropiedad)}}' class="btn btn-danger">Eliminar</a>
    </div>

</body>
</html>