<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('cip');
            $table->string('telefono');
            $table->string('residencia');
            $table->string('acompaniante');          
            $table->string('acom_cip');            
            $table->string('ample');
            $table->string('padecimiento');
            $table->unsignedBigInteger('posicion_paciente');
            $table->foreign('posicion_paciente')->references('id')->on('posicions');
            $table->unsignedBigInteger('ficha_id');
            $table->foreign('ficha_id')->references('id')->on('fichas');            
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
        Schema::dropIfExists('pacientes');
    }
}
