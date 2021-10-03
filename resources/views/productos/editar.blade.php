<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>

<body>
    <h1>Editar</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')

        <input type="text" name="nombre" value="{{ $producto->nombre }}" placeholder="Nombre">

        <input type="text" name="descripcion" value="{{ $producto->descripcion }}" placeholder="Descripcion">

        {{-- <div>
            <img src="imagenSeleccionada" style="max-height: 300px;">
        </div> --}}

        <input id="imagen" type="file" name="imagen" value="{{ $producto->imagen }}">

        <a href="{{ route('productos.index') }}">Cancelar</a>
        <button type="submit">Guardar</button>
    </form>


    <a type="button" href="{{ route('productos.index') }}">Regresar</a>
</body>

</html>
