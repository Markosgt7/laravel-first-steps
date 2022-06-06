<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom</title>
</head>
<body>
    <h1>Bienvenidos</h1>
    <h2>Laravel</h2>
    <a href="/custom">Custom</a><br>
    <a href="{{ route('custom')}}">Custom(url con name)</a>
    <br>
    <p>Usuario</p>
    <em> {{ $user->name}}</em>
    <p>Correo</p>
    <em> {{ $user->email}}</em>
</body>

</html>