<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #350400;
        }

        form {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #350400;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ff1500;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff8b80;
        }
    </style>
</head>
<body>

    <form action="{{route('curso.update', $curso)}}" method="POST">
        @csrf
        @method ('put')
        <label>
            Ingrese el nombre del curso:
            <br>
            <input name="name" type="text" value="{{old('name',$curso->name)}}">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <input name="descripcion" type="text" value="{{old('descripcion',$curso->descripcion)}}">
        </label>
        <br><br><br>

        <button type="submit">Actualizar Curso</button>
    </form>
</body>
</html>
