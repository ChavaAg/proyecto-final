<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UchihaResorts</title>
    <link rel="stylesheet" href="{{ asset('css/inicios.css')}}">
</head>
<body >
    <div class = "linea"> 
        <h1>
            WELCOME UCHIHA RESORTS
        </h1>
    </div>

    @if (Route::has('login'))
                <div class="menu" >
                    <a href="reservacion/create" 
                    style=" display: inline-block;
                        color: white;
                        font-family: 'Times New Roman', Times, serif;
                        border: 1px solid #fdfdfd;
                        ">NEW RESERVATION</a>
                    
                    @auth
                        <a href="{{ url('reservacion') }}" 
                        style=" display: inline-block;
                        color: white;
                        font-family: 'Times New Roman', Times, serif;
                        border: 1px solid #fdfdfd;
                        ">HOME</a>
                   
                        <form method="POST" action="{{ route('logout') }}">
                         @csrf

                          <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                           <p class="close"><img src="https://i.pinimg.com/originals/1c/5b/bf/1c5bbf2c22f9fb0076f55e9a97f1de9f.jpg" width="50px"> </p> 
                        </a>
                        </div>
                    </form>
    @else
                        <a href="{{ route('login') }}" 
                        style=" display: inline-block;
                        color: white;
                        font-family: 'Times New Roman', Times, serif;
                        border: 1px solid #fdfdfd;
                        ">LOG IN</a>
                     
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" 
                            style=" display: inline-block;
                            color: white;
                            font-family: 'Times New Roman', Times, serif;
                            border: 1px solid #fdfdfd;
                        ">REGISTER</a>
                        @endif
                    @endauth
                </div>
                <div class="margen"></div>
    @endif

    <div class="table">
        <p>Reservaciones</p>
        <div class="b"></div>
    <table>
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
                    @can('view', $reservacion)
                    <a href="reservacion/{{$reservacion->id}}"style=" 
                        font-size: 95%;
                        text-decoration:none;
                        border: 1px solid #fdfdfd;
                        color: black;
                    ">Detalles </a>
                    <a href="reservacion/{{$reservacion->id}}/edit" style=" 
                        font-size: 95%;
                        text-decoration:none;
                        border: 1px solid #fdfdfd;
                        color: black;
                    ">Edit</a>

                    <form action="/reservacion/{{$reservacion->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" 
                        style="text-decoration:none;
                        border: 1px solid #fdfdfd;
                        color: black;">
                    </form>
                    <form action="archivo" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="reservacion_id" value="{{$reservacion->id}}">
                        <input type="file" name="archivos[]" multiple accept="image/*" style=" 
                        text-decoration:none;
                        border: 1px solid #fdfdfd;
                        color: black;" >
                        <input type="submit" value="Enviar" 
                        style=" 
                        text-decoration:none;
                        border: 1px solid #fdfdfd;
                        color: black;"
                        >
                    </form>
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    <div class = "lineaA"> 
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
            <h2 class="lineaA">
            Proyecto Final de la Materia Programacion para internet 
            </h2>
            <h2 class="lineaA">
            Ing: Daniel Alejandro Plata Montes | Ing: Anet Guadalupe Muñoz de Santaigo
            </h2><h2 class="lineaA">
            Codigo: 217029541_____________| Codigo: 220289171
            </h2><h2 class="lineaA">
            Seccion: D13________________                          | Seccion: D12
        </h2>
    </div>
    
</body>
</html>
