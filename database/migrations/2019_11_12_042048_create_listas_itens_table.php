<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas_itens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_lista')->nullable();
            $table->integer('id_prod')->nullable();
            $table->boolean('produto_reservado')->nullable();
            $table->integer('usuario_reserva')->nullable();
            $table->date('data_reserva')->nullable();
            $table->string('cor',30)->nullable();
            $table->boolean('levou_produto')->nullable();
            $table->boolean('compradoSite')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listas_itens');
    }
}
