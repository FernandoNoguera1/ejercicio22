<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mostrar cliente</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route('cliente.index')}}">INICIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Mostrar cliente</h1>
        <div class="w-25">
            
        <div class="form-floating mb-3">
                <input name="telefono" type="text" value="{{$cliente->telefono}}" class="form-control" id="telefono" placeholder="Numero de teléfono">
                <label for="telefono">Número de teléfono</label>
            </div>
            <div class="form-floating mb-3">
                <input name="num_social" type="date" value="{{$cliente->num_social}}" class="form-control" id="num_social" placeholder="Número social">
                <label for="num_social">Número social</label>
            </div>
            <div class="form-floating mb-3">
                <input name="codigo" type="text" value="{{$cliente->codigo}}" class="form-control" id="codigo" placeholder="Código">
                <label for="codigo">Código</label>
            </div>
            <div class="form-floating mb-3">
                <input name="domicilio" type="text" value="{{$cliente->domicilio}}" class="form-control" id="domicilio" placeholder="Domicilio">
                <label for="domicilio">Domicilio</label>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>