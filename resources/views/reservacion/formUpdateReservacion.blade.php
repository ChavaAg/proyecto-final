<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
    <title>Formulario</title>
</head>

<body>
    @if ($errors->any())

        <div class="formulario">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="from">
    <h2>EVENT FORM</h2> <br>
    <form action="/reservacion/{{$reservacion->id}}" method="POST"> {{-- editar --}}
        @method('PATCH')
        @csrf

        <label for="dias">Dias</label>
        <input type="number" name="dias" value="{{$reservacion->dias}}{{old('dias')}}"><br>
        <label for="inicia">Fecha</label>
        <input type="date" name="inicia" value="{{$reservacion->inicia}}{{old('inicia')}}"><br>
        <label for="habitacion_id">Tipo de habitacion</label>
        <select name="habitacion_id" >
            @foreach ($habitaciones as $habitacion)
                <option value="{{$habitacion->id}}" {{array_search($habitacion->id, $reservacion->habitacion->pluck('id')->toArray()) != false ? ' selected' : ''}}>{{$habitacion->tipo}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Enviar">




    </form>
    </div>
</body>

</html>