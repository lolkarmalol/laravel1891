<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>FORMULARIO USUARIO</h1>

    <form action="{{ route('usuario.store') }}" method="POST">
        @csrf

        <label>
            Text de Usuario:
            <br>
            <input type="text" name="text">
        </label>
        <br>
      
        <br><br><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>
