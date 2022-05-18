<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function store(Request $request){
        foreach($request->archivos as $archivo){
            if($archivo->isValid()){
                $nombre_hash = $archivo->store('imagenes');

                $registroArchivo = new Archivo();
                $registroArchivo->reservacion_id = $request->reservacion_id;
                $registroArchivo->nombre = $archivo->getClientOriginalName();
                $registroArchivo->nombre_hash = $nombre_hash;
                $registroArchivo->mime = $archivo->getClientMimeType();
                $registroArchivo->save();
            }
        }

        return redirect('/reservacion');
    }
}
