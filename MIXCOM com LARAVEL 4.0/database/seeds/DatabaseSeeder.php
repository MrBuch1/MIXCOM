<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(ProdutoSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
