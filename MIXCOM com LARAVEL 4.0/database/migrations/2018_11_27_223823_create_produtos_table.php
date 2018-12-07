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
            $table->string('nome');
            $table->string('tipo');
            $table->string('codtipo');
            $table->string('marca');
            $table->decimal('valor', 6, 2);
            $table->string('categoria');
            $table->text('descricao');
            $table->string('imagem');
            $table->text('caracteristica');
            $table->string('peso');
            $table->string('altura');
            $table->string('largura');
            $table->string('comprimento');
            $table->string('diametro');
            $table->enum('ativo', ['S', 'N'])->default('S');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
