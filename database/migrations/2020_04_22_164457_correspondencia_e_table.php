<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorrespondenciaETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correspondenciaE', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folioR');
            $table->string('fechaRR');
            $table->string('horaRR');
            $table->string('unidadSR');
            $table->string('numeroOR');
            $table->string('fechaOR');
            $table->string('horaOR');
            $table->string('contenidoPR');
            $table->string('justificacionPR');
            $table->boolean('urgentePR');
            $table->boolean('terminosPR');
            $table->timestamps();
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
