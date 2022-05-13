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


    @isset($evento)
    <div class="from">
    <h2>EVENT FORM</h2> <br>
        <form action="/evento/{{$evento->id}}" method="POST"> {{-- editar --}}
            @method('PATCH')

    @else
    <div class="from">
    <h2>EVENT FORM</h2> <br>
        <form action="/evento" method="POST"> {{-- crear --}}
    @endisset

        @csrf

        <label for="nombre"> NAME
        <input type="text" class="frome" name="nombre" value={{isset($evento) ? $evento->nombre : ''}}{{old('nombre')}}></label><br>
        <br>
        <label for="lugar">PLACE</label>
        <input type="text" class="frome" name="lugar" value={{isset($evento) ? $evento->lugar : ''}}{{old('lugar')}}><br>
        <br>
        <label for="grupo">GROUP</label>
        <input type="text" class="frome" name="grupo" value={{isset($evento) ? $evento->grupo : ''}}{{old('grupo')}}><br>
        <br>
        <label for="descripcion">DESCRIPTION</label><br>
        <textarea name="descripcion" class="frome" cols="30" rows="10">{{isset($evento) ? $evento->descripcion : ''}}{{old('descripcion')}}</textarea><br>
        <input type="submit" class="botton" value="SEND">

    </form>
    </div>
</body>

</html>
