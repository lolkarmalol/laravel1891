<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('trucks.store') }}" method="POST">
        @csrf
        <label for="model">Model:</label>
        <input type="text" name="model" required>
        <label for="license_plate">License Plate:</label>
        <input type="text" name="license_plate" required>
        <button type="submit">Add Truck</button>
    </form>

</body>
</html>
