<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom</title>
</head>
<body>
    <h1>Bienvenidos a laravel </h1>


    <p>Condicionales con blade</p>
    @if ($name=="Marcoss")
        Hola admin
    @else
        No eres el admin
    @endif
    <hr>
    
    <p>Condicionales foreach con blade</p>
    @foreach ($array as $a )
        <p>{{$a}}
    @endforeach
    <hr>
    <p>Condicionales forelse con blade</p>
    @forelse ($array as $a )
        <p>{{$a}}</p>
    @empty
        No hay data
    @endforelse
    <hr>
    <p>Nombre->{{$name}}</p>
    <p>Edad->{{$age}}</p>
    <p>Edad->{{--$age--}}</p>
    <p>{!!$html!!}</p>
</body>

</html>