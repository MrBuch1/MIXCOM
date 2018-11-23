<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => "Batata0",
            'descricao' => "Com passas <3",
            'valor' => 55,
            'imagem' => "",
            'ativo' => "S",
        ]);

        DB::table('produtos')->insert([
            'nome' => "Batata1",
            'descricao' => "Com passas <3",
            'valor' => 55,
            'imagem' => "",
            'ativo' => "S",
        ]);
    
        DB::table('produtos')->insert([
            'nome' => "Batata2",
            'descricao' => "Com passas <3",
            'valor' => 55,
            'imagem' => "",
            'ativo' => "S",
        ]);
    }
}
