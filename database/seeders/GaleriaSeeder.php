<?php

namespace Database\Seeders;

use App\Models\Galeria;
use Illuminate\Database\Seeder;

class GaleriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galeria::insert([
            [
                "titulo" => 'Titulo de la imagen',
                "imagen" => "imagen_galeria.jpg",
                "url" => "https://www.google.com",
                "categoria" => 1
            ],
            [
                "titulo" => 'Titulo de la imagen 2',
                "imagen" => "imagen_galeria2.jpg",
                "url" => "https://www.youtube.com",
                "categoria" => 2
            ],
            [
                "titulo" => 'Titulo de la imagen 3',
                "imagen" => "imagen_galeria3.jpg",
                "url" => "https://www.facebook.com",
                "categoria" => 3
            ]
        ]);
    }
}