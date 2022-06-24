<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Banner::insert([
            'titulo' => 'Una compañia con las mejores tecnologias',
            'url' => 'https://www.google.com',
            

        ]);
    }
}
