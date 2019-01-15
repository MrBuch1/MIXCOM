<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{

    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); // unsigned: somente inteiros positivos
            //$table->integer('valor');
            $table->enum('status', ['RE', 'PA', 'CA', 'PE']); // Reservado, Pago, Cancelado
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
