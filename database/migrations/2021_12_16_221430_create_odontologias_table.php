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
        //tabla categorias
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('id');
            $table->string('categoria');
            $table->timestamps();
        });

        Schema::create('odontologias', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('apellido');
            $table->String('cedula');
            $table->String('correo');
            $table->String('direc');
            $table->String('celular');
            $table->String('info');
            $table->String('imagen');
            $table->foreignId('user_id')->references('id')-> on('users')->commet('El usuario crea al paciente') ;
            $table->foreignId('categoria_id')->references('id')-> on('categorias')->commet('Categoria del paciente') ;
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
        Schema::dropIfExists('categorias');
    }
}
