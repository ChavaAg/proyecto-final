<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica final</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
</head>
<body >
    <div class = "linea"></div>

    @if (Route::has('login'))
                <div class="menu" >
                    <a href="reservacion/create" class="d">Crear nueva reservacion</a>
                    <br>
                    @auth
                        <a href="{{ url('reservacion') }}" class="d">HOME</a>
                        <br>
                        <form method="POST" action="{{ route('logout') }}">
                         @csrf

                          <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <p class="d"> CLOSE </p>
                        </a>
                        </div>
                    </form>
    @else
                        <a href="{{ route('login') }}" class="d">LOG IN</a>
                        <br>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="d">REGISTER</a>
                        @endif
                    @endauth
                </div>
                <div class="margen"></div>
    @endif
    <div class="table">
        <p>Reservaciones</p>
        <div class="b"></div>
    <table BORDER>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Habitacion</th>
            <th>Servicios</th>
            <th>Costo</th>
            <th>Acciones</th>
        </tr>

        @foreach ($reservaciones as $reservacion)
            <tr>
                <td>{{$reservacion->id}}</td>
                <td>{{$reservacion->user->name}}</td>
                <td>{{$reservacion->habitacion->tipo}}</td>
                <td>
                    @foreach ($reservacion->servicios as $servicio )
                        {{$servicio->servicio}} <br>
                    @endforeach
                </td>
                <td>{{$reservacion->costo}}</td>
                <td>
                    <a href="reservacion/{{$reservacion->id}}">Detalles </a>
                    <br>
                    <a href="reservacion/{{$reservacion->id}}/edit">EDIT</a>
                    <form action="/reservacion/{{$reservacion->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="botton">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    </div>
</body>
</html>
