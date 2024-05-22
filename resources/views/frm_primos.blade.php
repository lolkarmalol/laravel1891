<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar si un número es primo</title>
</head>
<body>
    <h1>Verificar si un número es primo</h1>
    <form action="{{ route('calcularprimo.store') }}" method="POST">
        @csrf
        <label for="number">Ingrese un número:</label>
        <input type="number" name="number" required>
        <button type="submit">Verificar</button>
    </form>
    @isset($result)
        <p>{{ $result }}</p>
    @endisset
</body>
</html>