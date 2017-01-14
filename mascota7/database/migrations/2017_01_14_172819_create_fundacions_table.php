<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFundacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundacion', function(Blueprint $table) {
            $table->increments('Id_Fundacion');
            $table->string('Nombre');
            $table->text('Descripcion');
            $table->integer('Id_Usuario');
            $table->string('Direccion');
            $table->string('Logo');
            $table->string('Telefono');
            $table->integer('Id_Estado');
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
        Schema::drop('fundacion');
    }
}
