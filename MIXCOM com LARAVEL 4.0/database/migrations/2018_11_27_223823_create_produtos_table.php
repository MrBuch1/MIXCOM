<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{

    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_produto');
            $table->string('tipo');
            $table->string('codtipo');
            $table->string('marca');
            $table->decimal('valor', 6, 2);
            $table->text('descricao');
            $table->string('imagem');
            $table->text('caracteristica');
            $table->string('peso')->nullable();
            $table->string('altura')->nullable();
            $table->string('largura')->nullable();
            $table->string('comprimento')->nullable();
            $table->string('diametro')->nullable();
            $table->enum('ativo', ['S', 'N'])->default('S');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id', 'nome')->on('categorias');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
