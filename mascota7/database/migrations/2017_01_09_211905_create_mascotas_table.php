<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota', function (Blueprint $table) {
            $table->increments('Id_Mascota');
            $table->string('Nombre');
            $table->integer('Edad');
            $table->integer('Id_Tamano');
            $table->integer('Id_Sexo');
            $table->integer('Id_Dueno');
            $table->integer('Id_Estado');
            $table->text('Descripcion');
            $table->string('Foto');
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
        Schema::dropIfExists('mascota');
    }
}
