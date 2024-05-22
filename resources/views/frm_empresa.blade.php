<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIO EMPRESA</title>
</head>
<body>
    <h1>FORMULARIO EMPRESA</h1>

    <form action="{{ route('company.store') }}" method="POST">
        @csrf

        <label>
            Nombre de la empresa:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        
        <label>
            NIT de la empresa:
            <br>
            <input type="number" name="NIT">
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
