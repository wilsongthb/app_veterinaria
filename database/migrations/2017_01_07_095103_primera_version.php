<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrimeraVersion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('telefono', '15')->nullable()->default('');
            $table->string('email');
            $table->char('dni', '15')->nullable();
            $table->String('ubicacion')->nullable()->default('');
            $table->timestamps();

            //relacion con el usuario
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
        });
        Schema::create('ganado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', '15')->nullable()->default('00000');
            $table->string('ubicacion')->nullable();
            $table->char('sexo', '1');
            $table->char('estado', '1')->nullable();
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->string('madre_nombre')->nullable();
            $table->string('padre_nombre')->nullable();
            $table->string('color', '30');
            $table->string('raza', '50');
            $table->string('imagen')->default('/images/default.jpg');

            //relacion entre ganado y productor
            $table->integer('productor_id')->unsigned();
            $table->foreign('productor_id')->references('id')->on('productor');

            $table->timestamps();
        });
        Schema::create('historial_ganado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', '60');
            $table->string('descripcion');

            //relacion con ganado
            $table->integer('ganado_id')->unsigned();
            $table->foreign('ganado_id')->references('id')->on('ganado');

            $table->timestamps();
        });
        Schema::create('tecnico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo', '120');
            $table->string('nombre');
            $table->string('telefono', '15');
            $table->timestamps();

            //relacion con el usuario
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_ganado');
        Schema::dropIfExists('ganado');
        Schema::dropIfExists('productor');
        Schema::dropIfExists('tecnico');
    }
}
