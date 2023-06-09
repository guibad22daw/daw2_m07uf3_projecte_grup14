<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacions', function (Blueprint $table) {
            $table->string('codiHab',7)->unique();
            $table->primary('codiHab');
            $table->integer('capacitat');
            $table->enum('mida', ['Petita', 'Normal', 'Gran']);
            $table->enum('vistes', ['Interior', 'Mar', 'Muntanya']);
            $table->enum('pensio', ['Només allotjament', 'Allotjament i esmorzar inclòs','Mitja pensió','Pensió completa']);
            $table->enum('llits', ['Individuals', 'Matrimoni']);
            $table->string('n_llits');
            $table->boolean('terrassa');
            $table->boolean('calefaccio');
            $table->boolean('aire_acondicionat');
            $table->boolean('nens');
            $table->boolean('animals');
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
        Schema::dropIfExists('habitacions');
    }
}