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
            $table->timestamps();
            $table->integer('cod_prod');
            $table->string('cod_barra',13);
            $table->string('nome_prod',30);
            $table->integer('cod_marca');
            $table->string('unidade',2);
            $table->float('preco_cust',15,4);
            $table->float('margem',8,2);
            $table->float('preco_vend',9,4);
            $table->float('preco_praz',15,3);
            $table->float('quant_min',8,2);
            $table->integer('etiqueta');
            $table->float('peso',9,3);
            $table->float('frete',15,4);
            $table->string('imagem',50);
            $table->integer('cod_tamanho');
            $table->integer('cod_subgrupo');
            $table->float('quantidade',9,4);
            $table->date('data_atualizacao');
            $table->string('status',1);
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
