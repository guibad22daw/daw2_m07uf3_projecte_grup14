<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni',9);
            $table->foreign('dni')->references('dni')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('codiHab',7);
            $table->foreign('codiHab')->references('codiHab')->on('habitacions')->onDelete('cascade')->onUpdate('cascade');
            $table->date('data_entrada');
            $table->date('data_sortida');
            $table->string('pensio');
            $table->integer('preu_dia');
            $table->string('asseguranca');
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
        Schema::dropIfExists('reserves');
    }
}
