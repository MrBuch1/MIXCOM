<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id' => 1,
            'nome' => "Controle de Acesso",
        ]);

        DB::table('categorias')->insert([
            'id' => 2,
            'nome' => "Relógio de Ponto",
        ]);

        DB::table('categorias')->insert([
            'id' => 3,
            'nome' => "Softwares",
        ]);

        DB::table('categorias')->insert([
            'id' => 4,
            'nome' => "Acessorios",
        ]);
    }
}
