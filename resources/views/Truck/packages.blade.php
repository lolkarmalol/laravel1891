<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <form action="{{ route('packages.store') }}" method="POST">
        @csrf
        <label for="code">Code:</label>
        <input type="text" name="code" required>
        <label for="description">Description:</label>
        <input type="text" name="description" required>
        <label for="addressee">Addressee:</label>
        <input type="text" name="addressee" required>
        <label for="address">Address:</label>
        <input type="text" name="address" required>
        <button type="submit">Add Package</button>
    </form>

</body>
</html>

