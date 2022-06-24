<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Footer::insert([

            'imagen' => 'logo1.jpg',
            'url' => 'https://www.google.com',
            'titulo' => 'Direccion',
            'descripcion' => 'Calle consospo, C.P 2065, lomas de mactumatza'


        ],
    [
        'imagen' => 'logo2.jpg',
        'url' => 'https://www.google.com',
        'titulo' => 'Telefono',
        'descripcion' => '9611300165'

    ],
    [
        'imagen' => 'logo3.jpg',
        'url' => 'https://www.google.com',
        'titulo' => 'Email',
        'descripcion' => 'patricialuciocruz98@gmail.com'

    ]
    );
    }
}