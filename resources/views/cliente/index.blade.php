<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listar clientes</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="clear">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">INICIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Número social</th>
                <th scope="col">Código</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($clientes as $cliente)

                <tr>
                    <th scope="row">{{ $cliente->id }}</th>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->num_social }}</td>
                    <td>{{ $cliente->codigo }}</td>
                    <td>{{ $cliente->domicilio }}</td>
                    <td>
                        <button type="button" class="btn btn-info"
                            onclick="location.href='{{route('cliente.show', $cliente->id)}}'">Mostrar</button>
                        <button type="button" class="btn btn-warning"
                            onclick="location.href='{{route('cliente.edit', $cliente->id)}}'">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#cliente{{$cliente->id}}">Borrar</button>
                        <!-- Modal eliminar -->
                        <div class="modal fade" id="cliente{{$cliente->id}}" tabindex="-1"
                            aria-labelledby="cliente{{$cliente->id}}Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="cliente{{$cliente->id}}Label">Eliminar Registro
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>¿Seguro que quieres eliminarlo?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                        <form action="{{route('cliente.destroy', $cliente->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-success w-10"
            onclick="location.href='{{route('cliente.create')}}'">Crear</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>