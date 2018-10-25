<?php

use Illuminate\Database\Seeder;

class Produto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(

            'nome' => 'Catraca Balcão',
            'tipo' => 'Catraca',
            'marca' => '',
            'valor' => '',
            'categoria' => 'Controle de acesso',
            'descricao' => '',
            'imagem' => '',
            'caracteristica' => $this->readData('teste.txt'),

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Catraca Balcão',
            'tipo' => 'Catraca',
            'marca' => '',
            'valor' => '',
            'categoria' => 'Controle de acesso',
            'descricao' => '',
            'imagem' => '',
            'caracteristica' => $this->readData('teste.txt'),

        ]);
    }

    public function readData($nomeArquivo){
            $fh = fopen($nomeArquivo,'r');
            $result = "";
        while ($line = fgets($fh)) {
            $result = $result + line;
    }
    fclose($fh);
    return $result;
    }


}
