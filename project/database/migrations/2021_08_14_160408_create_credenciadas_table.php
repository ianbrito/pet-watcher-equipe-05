<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredenciadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credenciadas', function (Blueprint $table) {
            $table->string('cnpj',30)->primary();
            $table->unsignedBigInteger('user_id');
            $table->string('inscricao_estadual');
            $table->string('razao_social');
            $table->string('endereco');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('credenciadas');
    }
}
