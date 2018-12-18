<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(CategoriasSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
