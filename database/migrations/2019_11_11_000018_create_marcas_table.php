<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps()->nullable();
            $table->integer('codigo')->nullable();
            $table->string('descricao',30)->nullable();
            $table->float('tx_comissao',8,2)->nullable();
            $table->float('tx_desconto',8,2)->nullable();
            $table->string('tipo')->nullable();
            $table->string('unidade',2)->nullable();
            $table->float('margem',15,2)->nullable();
            $table->integer('cod_depto')->nullable();
            $table->char('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
