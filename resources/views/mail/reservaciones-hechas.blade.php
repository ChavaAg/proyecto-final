<h1>Registro de reservaciones hechas</h1>

<ul>
    @foreach ($reservaciones as $reservacion )
        <li>{{$reservacion->}}</li>
    @endforeach
</ul>
