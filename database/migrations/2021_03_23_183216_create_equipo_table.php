<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->id();
            $table->string('equipo',50);
            $table->string('marca',20);
            $table->string('modelo',50)->nullable();
            $table->string('ram',20)->nullable();
            $table->string('tipoRam',30)->nullable();
            $table->string('discoDuro',20)->nullable();
            $table->text('descripcionFalla');
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
        Schema::dropIfExists('equipo');
    }
}
