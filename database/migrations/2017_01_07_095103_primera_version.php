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
            $table->string('telefono', '15');
            $table->char('codigo', '15');
            $table->string('email');
            $table->timestamps();
        });
        Schema::create('ganado', function (Blueprint $table) {
            $table->increments('id');
            $table->char('codigo', '15')->null();
            $table->string('ubicacion');
            $table->bool('estado');
                        
            $table->string('email');
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
        Schema::dropIfExists('productor');
    }
}
