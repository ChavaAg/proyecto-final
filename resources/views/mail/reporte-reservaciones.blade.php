@component('mail::message')
# Reporte de reservaciones hechas
## Buen dia {{$reservacion->user->name}}

Este es un aviso de que usted reservo la siguiente habitacion

@component('mail::table')
| Tipo de habitacion | Fecha | Costo |
| ------------------ | ----- | ----- |
| {{$reservacion->habitacion->tipo}} | {{$reservacion->inicia}} | {{$reservacion->costo}} |
@endcomponent

Gracias por su preferencia,<br>
{{ config('app.name') }}
@endcomponent
