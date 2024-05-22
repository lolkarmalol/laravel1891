<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIO APRENDIZ</title>
</head>
<body>
    <h1>FORMULARIO APRENDIZ</h1>

    <form action="{{ route('apprentice.store') }}" method="POST">
        @csrf

        <label>
            Nombre del aprendiz:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        <label>
            Correo electrónico:
            <br>
            <input type="email" name="email">
        </label>
        <br>

        <label>
            Teléfono:
            <br>
            <input type="text" name="phone">
        </label>
        <br><br><br>

        <button type="submit">Enviar Formulario</button>
    </form>

</body>
</html>
