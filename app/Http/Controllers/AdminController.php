<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.index");
    }

    public function guardar(Request $request){
        $request->validate([
            "titulo" => 'required',
            "descripcion" => 'required',
            "imagen" => 'required',
            "url" => 'required'
        ]);

        $nombre_imagen = "imagen_" . uniqid(). ".jpg";

        Inicio::create([
            "titulo" => $request->titulo,
            "descripcion" => $request->descripcion,
            "imagen" => $nombre_imagen,
            "url" => $request->url
        ]);
    }
}