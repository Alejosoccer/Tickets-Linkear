<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 15)->nullable();
            $table->string('empresa', 150)->nullable();
            $table->string('origen', 150)->nullable();
            $table->string('destino', 150)->nullable();
            $table->string('bus', 150)->nullable();
            $table->string('asiento', 4)->nullable();
            $table->string('precio', 6)->nullable();
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
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
        Schema::dropIfExists('ticket');
    }
}
