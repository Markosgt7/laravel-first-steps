<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Nuevo Post</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <label for="title">Título
            <input type="text" name="title" >
        </label>
        <br>
        <br>
        <label for="Slug">Slug-Modificado
            <input type="text" name="slug" >
        </label>
        <br>
        <br>
        <label for="content">Contenido
            <textarea name="content" cols="15" rows="3"></textarea>
        </label>
        <br>
        <br>
        <label for="description">Descripción
            <textarea name="description" cols="15" rows="3"></textarea>
        </label>
        <br>
        <br>
        <button type="submit">Enviar</button>


    </form>
</body>
</html>