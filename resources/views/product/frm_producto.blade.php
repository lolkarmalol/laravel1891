<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIO</title>
</head>
<body>
    <h1>FORMURARIO PRODUCTO</h1>

    <form action="{{route('produc.store')}}" method="POST" enctype="multipart/form-data">
  
    @csrf


    
    <label>
        Ingrese el nombre del producto:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Ingrese el precio:
        <br>
        <input type="number" name="price">
    </label>
    <br>
    <label>
        Ingrese descripcion:
        <br>
        <input type="text" name="descripcion">
    </label>
    <br>
    <label>
        Ingrese la catidad:
        <br>
        <input type="number" name="cantidad">
    </label>
    <br>
    <label>
        Ingrese Fecha de Expedicion:
        <br>
        <input type="date" name="fecha">
        
    </label>
    
    <br><br><br>

    <button type="submit">Enviar Formurario:</button>
    </form>

</body>
</html>