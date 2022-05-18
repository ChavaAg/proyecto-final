<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservacion extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function habitacion(){
        return $this->belongsTo(Habitacion::class);
    }

    public function servicios(){
        return $this->belongsToMany(Servicio::class);
    }

    public function archivos(){
        return $this->hasMany(Archivo::class);
    }

    protected $fillable = ['user_id', 'habitacion_id', 'costo', 'dias', 'inicia'];

}
