<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Estoy en autos</h1>
<div>
    <form action="{{url('/autos/create')}}" method='post'>
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">marca:</label>
                <input type="text" class="form-control" name="marca">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Modelo:</label>
                <input type="text" class="form-control" name="modelo">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
    </form>
</div>
    
    <div>
        @foreach ($autos as $item)
        <div>
            <b>Modelo:</b> {{$item->model}}
            <b>Marca:</b> {{$item->marca}}
            <a href="{{url('/autos/edit/'.$item->id)}}">Editar</a>
        </div>
        @endforeach
    </div>

</body>
</html>