<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    public function reservacion(){
        return $this->belongsTo(Reservacion::class);
    }

    protected $fillable = ['nombre', 'nombre_hash', 'mime'];


}
