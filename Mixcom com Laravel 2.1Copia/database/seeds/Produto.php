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
            'marca' => 'Tecnibra',
            'valor' => 'R$123,00',
            'categoria' => 'Controle de acesso',
            'descricao' => 'A Catraca Balcão foi desenvolvida para dinamizar o alto fluxo de acesso, enquanto identifica uma pessoa a outra já está passando pelos braços giratórios evitando a formação de filas. Sua construção em aço carbono e modular permite flexibilizar desde a mecânica e eletrônica que melhor ajustar a sua necessidade ou ao seu sistema de controle de acesso, até a melhoria do seu equipamento com atualizações de forma fácil e com o menor tempo de intervenção. A tampa basculante abre sem avanços físicos, permitindo uso da Catraca Balcão encostada na parede. E os pedestais possuem furação interna para fixação no piso cobertos por uma porta com fechadura. Estes recursos, além de benefícios e liberdade para ajustes, minimiza a possibilidade de trocar a catraca para atualização da eletrônica ou da forma de identificação dos utilizadores (Código de Barras, Proximidade e Biometria).',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('catraca01.txt')),

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Catraca de Inox RBC 5905',
            'tipo' => 'Catraca',
            'marca' => 'Tecnibra',
            'valor' => 'R$123,00',
            'categoria' => 'Controle de acesso',
            'descricao' => 'A Catraca de Inox RBC 5905 é a melhor opção para o controle de acesso de sua empresa. A Catraca RBC 5905 possui eficiente leitura de impressão de digitais. É um produto vantajoso que proporciona segurança e agilidade no fluxo de funcionários e visitantes. Esta Catraca RBC 5905 pode ser confeccionado também em gabinete.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('catraca02.txt')),

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
