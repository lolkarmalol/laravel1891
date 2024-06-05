<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('truckers.store') }}" method="POST">
        @csrf
        <label for="dni">DNI:</label>
        <input type="text" name="dni" required>
        <label for="population">Population:</label>
        <input type="text" name="population" required>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>
        <label for="address">Address:</label>
        <input type="text" name="address" required>
        <label for="salary">Salary:</label>
        <input type="text" name="salary" required>
        <label for="package_id">Package:</label>
        <select name="package_id">
            <option value="">None</option>
            @foreach($packages as $package)
                <option value="{{ $package->id }}">{{ $package->description }}</option>
            @endforeach
        </select>
        <button type="submit">Add Trucker</button>
    </form>

</body>
</html>
