<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clases</title>
</head>
<body>
    <div>
        Esta es la vista de las clases.
        <h1>El primer nombre de la persona es: {{$nom}}</h1><br>
        <h1>El apellido de las persona es: {{$ape}}</h1>
    </div>

    <?php
        echo 'El nombre de la persona enviado hacia la vista es: '.$nom.' '.$ape

    ?>

    
</body>
</html>