
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Amigos</title>
</head>
<body>
    <h1>¿Son numeros amigos?</h1>

    <form action="{{ route('amigo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>
            Primer numero:
            <br>
            <input type="number" name="num1">
        </label>
        <br>

        <label>
            Segundo numero:
            <br>
            <input type="number" name="num2">
        </label>
        <br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>
