<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function habitacion(){
        return $this->belongsTo(Habitacion::class);
    }

    public function servicios(){
        return $this->belongsToMany(Servicio::class);
    }
    protected $fillable = ['user_id', 'habitacion_id', 'costo', 'dias', 'inicia'];

}
