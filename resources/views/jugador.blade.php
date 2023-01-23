<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>JUGADORES</h1>
    @foreach ($jugadores as $item)
        <div>
            <label><b>{{$item->nombres}}</b></label>
            <label><b>{{$item->edad}}</b></label>
            <label><b><a href="{{url('Jugador/edit/'.$item->id)}}">Editar</a></b></label>
            <label>
                <form action="{{url('Jugador/delete/'.$item->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">Borrar</button>
                </form>
            </label>
        </div>
    @endforeach
    <br>
    <form action="{{url('/Jugador/store')}}" method="POST">
        @csrf
            <div>
                <label><b>Nombres</b> <input type="text" name="nombres"></label>
                <label><b>Edad</b> <input type="text" name="edad"></label>
            </div>
            <br>
            <div>
                <button type="submit">REGISTRAR</button>
            </div>
    </form>

</body>
</html>