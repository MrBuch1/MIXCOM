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
        DB::table('produtos')->insert([
            'nome' => 'Catraca Balcão',
            'tipo' => 'Catraca',
            'marca' => 'x',
            'valor' => 'x',
            'categoria' => 'Controle de acesso',
            'descricao' => 'x',
            'imagem' => 'x',
            'caracteristica' => utf8_encode($this->readData('teste.txt')),

        ]);
    }

    public function readData($nomeArquivo){
    		$filename=storage_path($nomeArquivo);
            $fh = fopen($filename,'r');
            $result = "";

        while ($line = fgets($fh)) {
            $result = $result . $line."</br>";
        }

    fclose($fh);
    return $result;
    }
}
