<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$auto->marca}}
    <div>
    <form action="{{url('/autos/edit/.$autos->id')}}" method='post'>
        @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">marca:</label>
                <input type="text" class="form-control" name="marca" value="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Modelo:</label>
                <input type="text" class="form-control" name="modelo" >
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
    </form>
</div>
</body>
</html>