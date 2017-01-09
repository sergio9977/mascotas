<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundacion', function (Blueprint $table) {
            $table->increments('Id_Fundacion');
            $table->string('Nombre');
            $table->integer('Id_Usuario');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->text('Descripcion');
            $table->string('Logo');
            $table->string('Id_Estado');
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
        Schema::dropIfExists('fundacion');
    }
}
