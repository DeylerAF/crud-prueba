<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
</head>

<body>
    <h1>Crear Nuevo</h1>

    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="nombre" placeholder="Nombre">

        <input type="text" name="descripcion" placeholder="Descripcion">

        {{-- <div>
            <img src="imagenSeleccionada" style="max-height: 300px;">
        </div> --}}

        <input id="imagen" type="file" name="imagen">

        <a href="{{ route('productos.index') }}">Cancelar</a>
        <button type="submit">Guardar</button>
    </form>


    <a type="button" href="{{ route('productos.index') }}">Regresar</a>
</body>

</html>
