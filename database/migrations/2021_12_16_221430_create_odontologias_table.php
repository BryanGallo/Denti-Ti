<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdontologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odontologias', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('apellido');
            $table->String('cedula');
            $table->String('correo');
            $table->String('direc');
            $table->String('celular');
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
        Schema::dropIfExists('odontologias');
    }
}
