<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles de la reservacion</title>
    <link rel="stylesheet" href="{{ asset('css/inicios.css')}}">
</head>
<body>
    <div class = "linea"> 
        <h1>
            WELCOME UCHIHA RESORTS
        </h1>
    </div>
    @if (Route::has('login'))
                <div class="menu">
                    @auth
                        <a href="{{ url('reservacion') }}" >HOME</a>
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
    </form>

    <div class="table">
    <p>Reservacion</p>
    <p>Hecha por: {{$reservacion->user->name}}</p>
    <div class="b"></div>
    <table>
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
    </table>
    </div>
    <br><br>
    <ul>
        @foreach ($reservacion->archivos as $archivo)
            <li>{{$archivo->nombre}}</li>
        @endforeach
    </ul>
</body>
</html>
