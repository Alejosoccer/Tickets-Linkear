<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCooperativaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooperativa', function (Blueprint $table) {
            $table->id();
            $table->string('empresa', 150)->nullable();
            $table->string('origen', 150)->nullable();
            $table->string('destino', 150)->nullable();
            $table->string('tipo', 150)->nullable();
            $table->string('bus', 10)->nullable();
            $table->string('asiento', 150)->nullable();
            $table->string('turno', 150)->nullable();
            $table->string('precio', 10)->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
            $table->string('estado', 1)->default('Y');
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
        Schema::dropIfExists('cooperativa');
    }
}
