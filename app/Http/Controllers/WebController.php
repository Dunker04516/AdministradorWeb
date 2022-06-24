<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $inicio = Inicio::inRandomOrder()->first();
        $partirCadena = explode(" ", $inicio->titulo);
        $normal = "";
        $color = "";
        foreach ($partirCadena as $key => $value) {
            if($key < count($partirCadena) - 1){
                $normal .= "<span>" . $value . "</span><br>";
            }else{
                $color = $value;
            }
        }

        return view("web.index",[
            "normal" => $normal,
            "color" => $color
        ]);
    }
}