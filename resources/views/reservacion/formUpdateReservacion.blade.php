<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/formulario.css')}}">
    <title>Edicion De Reservaciones</title>
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

    <div class = "linea"> 
            <h1>
                EDIT FOR YOUR RESERVATION IN UCHIHA RESORTS
            </h1>
        </div>
        <img src="https://i.pinimg.com/originals/fd/ed/0d/fded0d1dd49a00d37107588ff85cccfc.jpg" class ="logo">
        <div class = "slider">
            <ul>
                <li >
                <img src="https://i.pinimg.com/originals/7a/61/f2/7a61f20a646909810d8219632fa8e29a.jpg">
                </li>
                <li>
                <img src="https://i.pinimg.com/originals/11/44/02/114402f27c3e08f4ce42729dfbd80a51.jpg">
                </li>
                <li>
                <img src="https://i.pinimg.com/originals/8b/8c/51/8b8c514701406afc3784c6a8d11caddd.jpg">
                </li>
                <li>
                <img src="https://i.pinimg.com/originals/1d/e3/13/1de313650e1e4bf51b6663e617f88bf3.jpg">
                </li>
                <li>
                <img src="https://i.pinimg.com/originals/fc/4d/cb/fc4dcb11f21572f206e3ee64df5b7b37.jpg" alt="">
                </li>
                <li>
                <img src="https://i.pinimg.com/originals/43/5f/e1/435fe19e32240bdc73906461556f61b9.jpg" alt="">
                </li>
                <li>
                <img src="https://i.pinimg.com/originals/7b/d1/09/7bd109a1490130e7c4a562b6d0b1f49f.jpg" alt="">
                </li>
                <li>
                <img src="https://i.pinimg.com/originals/dd/28/ba/dd28bab35af7dc19b23429a4e588f8d5.jpg" alt="">
                </li>
            </ul>
        </div>
    <div class="from">
    <form action="/reservacion/{{$reservacion->id}}" method="POST"> {{-- editar --}}
        @method('PATCH')
        @csrf
        <div class="d">
        <label for="dias">Dias</label>
        <input type="number" name="dias" value="{{$reservacion->dias}}{{old('dias')}}"><br>
        <label for="inicia">Fecha</label>
        <input type="date" name="inicia" value="{{$reservacion->inicia}}{{old('inicia')}}"><br>
        <label for="habitacion_id">Tipo de habitacion</label>
        <select name="habitacion_id" >
            @foreach ($habitaciones as $habitacion)
                <option value="{{$habitacion->id}}" {{ $habitacion->id == $reservacion->habitacion->id ? ' selected' : ''}}>{{$habitacion->tipo}}</option>
            @endforeach
        </select><br>
        <label for="servicio_id">Servicios</label><br>
        <select name="servicio_id[]" multiple>
            @foreach ($servicios as $servicio)
                <option value="{{$servicio->id}}" {{array_search($servicio->id, $reservacion->servicios->pluck('id')->toArray()) !== false ? ' selected' : ''}}>{{$servicio->servicio}}</option>
            @endforeach
        </select>
        </div><br>
        <input type="submit" value="Enviar">




    </form>
    </div>
</body>
<footer>
        <div class = "lineaA"> 
                <h2 class="lineaA">
                        Proyecto Final de la Materia Programacion para internet 
                        </h2>
                        <h2 class="lineaA">
                        Ing: Daniel Alejandro Plata Montes | Ing: Anet Guadalupe Muñoz de Santaigo
                        </h2><h2 class="lineaA">
                        Codigo: 217029541_____________| Codigo: 220289171
                        </h2><h2 class="lineaA">
                        Seccion: D13________________ | Seccion: D12
                    </h2>
            </div>
    </footer>
</html>
