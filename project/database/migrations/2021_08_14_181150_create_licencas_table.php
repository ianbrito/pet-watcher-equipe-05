<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('credenciada_id');
            $table->date('emissao');
            $table->date('validade');
            $table->boolean('active');
            $table->timestamps();
            $table->foreign('credenciada_id')->references('id')->on('credenciadas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencas');
    }
}
