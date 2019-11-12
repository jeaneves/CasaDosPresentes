<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_usuario');
            $table->integer('Tipo');
            $table->string('nome',50);
            $table->text('texto')->nullable();
            $table->date('datacadastro')->nullable();
            $table->date('dataevento');
            $table->string('uf',2)->nullable();
            $table->string('cep',10)->nullable();
            $table->string('pais',30)->nullable();
            $table->string('numero',10)->nullable();
            $table->string('rua',50)->nullable();
            $table->string('bairro',30)->nullable();
            $table->string('cidade',50)->nullable();
            $table->string('foto')->nullable();
            $table->string('telefone')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listas');
    }
}
