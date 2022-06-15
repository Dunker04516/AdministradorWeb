<?php

namespace Database\Seeders;

use App\Models\Inicio;
use Illuminate\Database\Seeder;

class InicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //Insertar datos con seeder
    public function run()
    {
        //Con relación a las columnas de la base de datos
        Inicio::insert([
            'titulo' => '¡Bienvenido a nuestro sitio web!',
            'descripcion' => 'Somos los mejores en la industria de construcción',
            'imagen' => 'imagen.jpg',
            'url' => 'https://www.google.com'
        ]);
    }
}