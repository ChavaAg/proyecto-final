<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }


    protected $fillable = ['descripcion', 'grupo', 'lugar', 'nombre', 'user_id'];
};
