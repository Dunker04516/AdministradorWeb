<?php

namespace Database\Seeders;

use App\Models\Servicio;
use Illuminate\Database\Seeder;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Con relación a las columnas de la base de datos
        Servicio::insert([
            'titulo' => 'Nuestros servicios',
            'imagen' => 'imagen.jpg',
            'url' => 'https://www.google.com',
            'titulo_servicios' => 'Renovaciones',
            'descripcion' => 'Somos los mejores construyendo con alta responsabilidad',

        ],
    [
            'titulo' => '',
            'imagen' => 'imagen.jpg',
            'url' => 'https://www.google.com',
            'titulo_servicios' => 'Arquitectura',
            'descripcion' => 'Somos los mejores construyendo con alta responsabilidad y eficacia',
    ]

    );
    }
}