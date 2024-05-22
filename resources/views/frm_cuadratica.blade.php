<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Ecuación Cuadrática</title>
</head>
<body>
    <h1>Calculadora de Ecuación Cuadrática</h1>
    <form action="{{ route('calculate.store') }}" method="POST">
        @csrf
        <label for="a">Coeficiente a:</label>
        <input type="number" name="a" required><br>
        <label for="b">Coeficiente b:</label>
        <input type="number" name="b" required><br>
        <label for="c">Coeficiente c:</label>
        <input type="number" name="c" required><br>
        <button type="submit">Calcular</button>
    </form>

    @isset($result)
        <h2>Resultado</h2>
        <p>Coeficiente a: {{ $result->a }}</p>
        <p>Coeficiente b: {{ $result->b }}</p>
        <p>Coeficiente c: {{ $result->c }}</p>
        <p>x1: {{ $result->x1 }}</p>
        <p>x2: {{ $result->x2 }}</p>
    @endisset
</body>
</html>