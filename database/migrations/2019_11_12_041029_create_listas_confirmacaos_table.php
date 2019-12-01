<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasConfirmacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas_confirmacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_usuario');
            $table->integer('id_lista');
            $table->boolean('confirmado')->nullable();
            $table->string('nome',30)->nullable();
            $table->date('data_confirmacao')->nullable();
            $table->integer('qtd_adultos')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone',20)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listas_confirmacaos');
    }
}
