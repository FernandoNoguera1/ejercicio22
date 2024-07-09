<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear proyecto</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="clear">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route('proyecto.index')}}">INICIO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Crear proyecto</h1>
        <form class="w-25" action="{{route('proyecto.store')}}" method="POST">
            @csrf
           
            <div class="form-floating mb-3">
                <input name="codigo" type="text" class="form-control" id="codigo" >
                <label for="codigo">codigo</label>
            </div>
            <div class="form-floating mb-3">
                <input name="descripcion" type="text" class="form-control" id="descripcion" >
                <label for="descripcion">Descripción</label>
            </div>
            <div class="form-floating mb-3">
                <input name="cuantia" type="number" class="form-control" id="cuantia" >
                <label for="cuantia">Cuantía</label>
            </div>
            <div class="form-floating mb-3">
                <input name="fecha_inicio" type="date" class="form-control" id="fecha_inicio" >
                <label for="fecha_inicio">Fecha de inicio</label>
            </div>
            <div class="form-floating mb-3">
                <input name="fecha_fin" type="date" class="form-control" id="fecha_fin">
                <label for="fecha_fin">Fecha de fin</label>
            </div>
            <div class="form-floating">
                <select name="cliente_id" class="form-select mb-3" id="cliente" aria-label="Floating label select example">
                  <option selected>Selecciona una opción</option>
                  @foreach($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->codigo}}</option>
                  @endforeach
                </select>
                <label for="cliente">Cliente</label>
            </div>

            <button type="submit" class="btn btn-success w-100">Crear</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>