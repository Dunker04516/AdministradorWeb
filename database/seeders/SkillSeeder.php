<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Skill::insert([
            'titulo' => 'Expertos en construcciones desde hace 10 años',
            'descripcion' => 'Nuestros certficados avalan los años que tenemos de experiencia, somos una empresa con alto prestigio'

        ]);
    }
}
