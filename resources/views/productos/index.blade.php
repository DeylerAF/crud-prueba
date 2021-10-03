<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <title>Productos</title>
</head>

<body>

    <h1>Productos</h1>
    <a type="button" href="{{ route('productos.create') }}">CREAR</a>

    @foreach ($productos as $producto)
    <div>
        <div>
            ID: {{ $producto->id }}
        </div>
        <div>
            NOMBRE: {{ $producto->nombre }}
        </div>
        <div>
            DESCRIPCION: {{ $producto->descripcion }}
        </div>
        <div>
            IMAGEN:
            <img src="/imagen/{{ $producto->imagen }}" alt="{{ $producto->nombre }}">
        </div>
        <div>
            ACCIONES:
            <a type="button" href="{{ route('productos.edit', $producto->id) }}">EDITAR</a>

            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" class="formEliminar">
                @csrf
                @method('DELETE')
                <button type="submit">BORRAR</button>
            </form>

        </div>
    </div>
    @endforeach

    <div>
        {!! $productos->links() !!}
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.formEliminar')
            Array.prototype.slice.call(forms)
                .forEach(function (form){
                    form.addEventListener('submit', function (event) {
                        event.preventDefault()
                        event.stopPropagation()

                        Swal.fire({
                            title: 'Eliminar producto',
                            text: "¿Confirmar la eliminación del registro?",
                            icon: 'info',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Confirmar',
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                            Swal.fire(
                            'Eliminado!',
                            'El registro ha sido eliminado exitosamente.',
                            'success'
                            )
                        }
                        })
                    }, false)
                })
        })()
    </script>
</body>

</html>
