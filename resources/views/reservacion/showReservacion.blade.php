<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
</head>
<body>
    @if (Route::has('login'))
                <div class="menu" >
                    <a href="resercacion/create" class="d">CREATE NEW EVENT</a>
                    <br>
                    @auth
                        <a href="{{ url('reservacion') }}" class="d">HOME</a>
                        <br>
    @else
                        <a href="{{ route('login') }}" class="d">LOG IN</a>
                        <br>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="d">REGISTER</a>
                        @endif
                    @endauth
                </div>
    @endif
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <br>
        <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        this.closest('form').submit();">
            <p class="d">RETURN MAIN</p>
        </a>
    </form>


    <h1>Reservacion</h1>
    <h3>Hecha por: {{$reservacion->user->name}}</h3>

    <table BORDER>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Habitacion</th>
            <th>Fecha</th>
            <th>Dias</th>
            <th>Costo</th>
        </tr>
            <tr>
                <td>{{$reservacion->id}}</td>
                <td>{{$reservacion->user->name}}</td>
                <td>{{$reservacion->user->email}}</td>
                <td>{{$reservacion->habitacion->tipo}}</td>
                <td>{{$reservacion->inicia}}</td>
                <td>{{$reservacion->dias}}</td>
                <td>{{$reservacion->costo}}</td>
            </tr>
    </table><br><br>

    <form action="archivo" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="reservacion_id" value="{{$reservacion->id}}">
        <input type="file" name="archivos[]" multiple accept="image/*"><br>
        <input type="submit" value="Enviar" class="botton">
    </form>

    <ul>
        @foreach ($reservacion->archivos as $archivo)
            <li>{{$archivo->nombre}}</li>
        @endforeach
    </ul>
</body>
</html>
