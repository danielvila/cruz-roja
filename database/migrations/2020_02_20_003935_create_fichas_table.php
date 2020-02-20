<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehiculo');
            $table->timestamp('fecha')->default();
            $table->time('hr_llamada');
            $table->integer('km_salida');
            $table->integer('km_llegada');
            $table->time('hr_salida');
            $table->time('hr_llegada');
            $table->time('hr_hospital');
            $table->string('conductor');
            $table->string('socorrista');
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
        Schema::dropIfExists('fichas');
    }
}
