<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonio::insert([
            'titulo' => 'lo que nuestros clientes dicen',
            'descripcion' => 'Estos son una lista de nuestros clientes actualmente',
            'imagen' => 'fotocliente1.jpg',
            'url' => 'https://www.google.com',
            'info_testimonio' => 'Es una empresa con mucha eficacia, altamente recomendada',
            'nombre_testimonio' => 'Juan carlos',

        ],
        [
            'titulo' => '',
            'descripcion' => '',
            'imagen' => 'fotocliente2.jpg',
            'url' => 'https://www.google.com',
            'info_testimonio' => 'Excelente servicio y buena atención',
            'nombre_testimonio' => 'Santiago Gonzalez',
        ]
        );
}}
