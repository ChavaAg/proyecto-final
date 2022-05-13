<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
    <title>Black Moon Detalles</title>
</head>
<body>
    @if (Route::has('login'))
                <div class="menu" >
                    <a href="evento/create" class="d">CREATE NEW EVENT</a>
                    <br>
                    @auth
                        <a href="{{ url('evento') }}" class="d">HOME</a>
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


    <h1>Mostrar evento</h1>
    <h3>Usuario: {{$evento->user->name}}</h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Lugar</th>
            <th>Grupo</th>
            <th>Descripcion</th>
        </tr>
            <tr>
                <td>{{$evento->id}}</td>
                <td>{{$evento->nombre}}</td>
                <td>{{$evento->lugar}}</td>
                <td>{{$evento->grupo}}</td>
                <td>{{$evento->descripcion}}</td>
            </tr>
    </table>
</body>
</html>
