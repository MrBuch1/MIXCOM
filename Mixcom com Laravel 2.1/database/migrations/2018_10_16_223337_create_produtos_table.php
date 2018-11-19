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
            $table->increments('id');
            $table->string('nome');
            $table->string('tipo');
            $table->string('codtipo');
            $table->string('marca');
            $table->string('valor');
            $table->string('categoria');
            $table->text('descricao');
            $table->string('imagem');
            $table->text('caracteristica');
            $table->string('peso');
            $table->string('altura');
            $table->string('largura');
            $table->string('comprimento');
            $table->string('diametro');
            $table->rememberToken();
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
        Schema::dropIfExists('produtos');
    }
}
