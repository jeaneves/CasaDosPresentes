<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps()->nullable();
            $table->integer('cod_prod')->nullable();
            $table->string('cod_barra',13)->nullable();
            $table->string('nome_prod',30)->nullable();
            $table->integer('cod_marca')->nullable();
            $table->string('unidade',2)->nullable();
            $table->float('preco_cust',15,4)->nullable();
            $table->float('margem',8,2)->nullable();
            $table->float('preco_vend',9,4)->nullable();
            $table->float('preco_praz',15,3)->nullable();
            $table->float('quant_min',8,2)->nullable();
            $table->integer('etiqueta')->nullable();
            $table->float('peso',9,3)->nullable();
            $table->float('frete',15,4)->nullable();
            $table->string('imagem',50)->nullable();
            $table->integer('cod_tamanho')->nullable();
            $table->integer('cod_subgrupo')->nullable();
            $table->float('quantidade',9,4)->nullable();
            $table->date('data_atualizacao')->nullable();
            $table->string('status',1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
