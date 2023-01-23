<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EL ID ES: {{$id}}</h1>

    <form action="{{url('Jugador/update/'.$jugador->id)}}"  method="Post">
        @method('put')
        @csrf
            <div>
                <label><b>Nombres</b> <input type="text" name="Nuevonombres" value="{{$jugador->nombres}}"></label>
                <label><b>Edad</b> <input type="text" name="Nuevaedad" value="{{$jugador->edad}}"></label>
            </div>
            <br>
            <div>
                <button type="submit">REGISTRAR</button>
            </div>
    </form>

</body>
</html>