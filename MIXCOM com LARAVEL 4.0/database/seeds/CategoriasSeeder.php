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
            'nome' => "Controle de Acesso",
        ]);

        DB::table('categorias')->insert([
            'nome' => "Relógio de Ponto",
        ]);

        DB::table('categorias')->insert([
            'nome' => "Softwares",
        ]);

        DB::table('categorias')->insert([
            'nome' => "Acessorios",
        ]);
    }
}
