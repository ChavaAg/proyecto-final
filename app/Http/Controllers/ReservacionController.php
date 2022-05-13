<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use App\Models\Reservacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservaciones = Reservacion::with('habitacion')->with('user')->get();
        return view('reservacion/indexReservacion', compact('reservaciones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $habitaciones = Habitacion::all();
        return view('reservacion/formCreateReservacion', compact('habitaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $habitacion = Habitacion::find($request->habitacion_id);
        $request->merge(['user_id'=>Auth::id(), 'costo'=>$habitacion->costo * $request->dias]);
        $reservacion = Reservacion::create($request->all());

        return redirect('/reservacion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function show(Reservacion $reservacion)
    {
        return view('reservacion/showReservacion', compact('reservacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservacion $reservacion)
    {
        $habitaciones = Habitacion::all();
        return view('reservacion/formUpdateReservacion', compact('reservacion','habitaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservacion $reservacion)
    {
        $request->validate([
            'dias'=>'required|min:1|max:50',
            'inicia'=>'required',
            'habitacion_id'=>'required',
        ]);

        Reservacion::where('id',$reservacion->id)->update($request->except(['_token', '_method']));

         //return redirect('/reservacion/'. $reservacion->id);
         return redirect('/reservacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservacion  $reservacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservacion $reservacion)
    {
        $reservacion->delete();
        return redirect('/reservacion');
    }
}