<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIniciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creamos columnas en migración
        //Cambiamos nombre de tabla de "inicios" => "inicio"
        Schema::create('inicio', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45);
            $table->text('descripcion');
            $table->string('imagen', 45);
            $table->string('url', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inicio');
    }
}