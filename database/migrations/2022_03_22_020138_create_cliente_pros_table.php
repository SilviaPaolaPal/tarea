<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_pros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('cantidadProductoComprado');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_producto');
            $table->foreign('id_cliente')->references('id')->on('clientes') ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->foreign('id_producto')->references('id')->on('productos')->onDelete("cascade")
            ->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_pros');
    }
}

