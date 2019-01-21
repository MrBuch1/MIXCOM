<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProdutoSeeder extends Seeder
{

    public function run()
    {

        //categoria_id: CONTROLE DE ACESSO

        //CATRACA - COD 01

        DB::table('produtos')->insert([

            'nome_produto' => 'Catraca Balcão',
            'tipo' => 'catraca',
            'codtipo' => '1',
            'marca' => 'tecnibra',
            'valor' => '4500.00',
            'categoria_id' => 1,
            'descricao' => 'A Catraca Balcão foi desenvolvida para dinamizar o alto fluxo de acesso, enquanto identifica uma pessoa a outra já está passando pelos braços giratórios evitando a formação de filas. Sua construção em aço carbono e modular permite flexibilizar desde a mecânica e eletrônica que melhor ajustar a sua necessidade ou ao seu sistema de controle de acesso, até a melhoria do seu equipamento com atualizações de forma fácil e com o menor tempo de intervenção. A tampa basculante abre sem avanços físicos, permitindo uso da Catraca Balcão encostada na parede. E os pedestais possuem furação interna para fixação no piso cobertos por uma porta com fechadura. Estes recursos, além de benefícios e liberdade para ajustes, minimiza a possibilidade de trocar a catraca para atualização da eletrônica ou da forma de identificação dos utilizadores (Código de Barras, Proximidade e Biometria).',
            'imagem' => "imagens/Produtos/catraca_tca_balcao_v2.png",
            'caracteristica' => utf8_encode($this->readData('../storage/info/catraca01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            'ativo' => "S",
        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Catraca de Inox RBC 5905',
            'tipo' => 'catraca',
            'codtipo' => '1',
            'marca' => 'tecnibra',
            'valor' => '4500.00',
            'categoria_id' => 1,
            'descricao' => 'A Catraca de Inox RBC 5905 é a melhor opção para o controle de acesso de sua empresa. A Catraca RBC 5905 possui eficiente leitura de impressão de digitais. É um produto vantajoso que proporciona segurança e agilidade no fluxo de funcionários e visitantes. Esta Catraca RBC 5905 pode ser confeccionado também em gabinete.',
            'imagem' => "imagens/Produtos/catraca.png",
            'caracteristica' => utf8_encode($this->readData('info/catraca02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Catraca Hi-Tech',
            'tipo' => 'catraca',
            'codtipo' => '1',
            'marca' => '',
            'valor' => '4500.00',
            'categoria_id' => 1,
            'descricao' => 'A Catraca Hi-Tech possui destaque em seu design futurista e moderno, sendo ideal para aliar o equipamento a um ambiente decorado personalizado para o controle de acesso dos usuários a áreas restritas. Produzida em aço carbono de alta resistência, todas as peças são cortadas a laser, quimicamente tratadas com pintura eletrostática, conferindo durabilidade com acabamento fino e decorativo, possibilitando personalização do equipamento com a logomarca da sua empresa e escolha das cores Verde, Laranja, Azul ou Preta com detalhes Inox.',
            'imagem' => "imagens/Produtos/banCatracasHiTech.png",
            'caracteristica' => utf8_encode($this->readData('info/catraca03.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Catraca SW1',
            'tipo' => 'catraca',
            'codtipo' => '1',
            'marca' => 'Tecnibra',
            'valor' => '4500.00',
            'categoria_id' => 1,
            'descricao' => 'A Catraca SW1 é um equipamento de Controle de Acesso que tem em seu conceito a união da robustez e durabilidade tradicionais das catracas Tecnibra, com beleza e modernidade dando um toque de futurismo em seu ambiente. Desenvolvida com um corpo prisma retangular e bordas arredondadas, possui características únicas de um esqueleto de aço carbono, proporcionando a robustez, um acabamento em suas faces em acrílico Black Piano, suas laterais em aço escovado, setas cortadas a laser, iluminadas por led (vermelho e verde) indicam o sentido do fluxo e uma base de aço inox espelhada passa a impressão que a catraca está flutuando. É complementado com o EXCLUSIVO SISTEMA TECNIBRA de engrenagens e correia sincronizadora que permite a utilização do amortecimento hidráulico que é feito por um cilindro pressurizado a gás. Tudo sem qualquer atrito, proporcionando menos desgaste e maior durabilidade e o giro mais suave do mercado, evitando os indesejáveis movimentos bruscos.',
            'imagem' => "imagens/Produtos/catraca_sw1.png",
            'caracteristica' => utf8_encode($this->readData('info/catraca04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Catraca MDC 2900',
            'tipo' => 'catraca',
            'codtipo' => '1',
            'marca' => '',
            'valor' => '4500.00',
            'categoria_id' => 1,
            'descricao' => 'Com alto padrão de acabamento permite eficiência no controle de acesso de funcionários e/ou visitantes. Sistema ideal para instalação em saguões de entrada de edifícios, contribuindo diretamente com a segurança patrimonial.',
            'imagem' => "imagens/Produtos/catraca_b.png",
            'caracteristica' => utf8_encode($this->readData('info/catraca05.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        //CONTROLADOR DE ACESSO POR BIOMETRIA FACIAL - COD 02

        DB::table('produtos')->insert([

            'nome_produto' => 'Controle de Acesso por Biometria Facial - MD 5711F',
            'tipo' => 'controlador de acesso por biometria facial',
            'codtipo' => '2',
            'marca' => '',
            'valor' => '3500.00',
            'categoria_id' => 1,
            'descricao' => 'Com design moderno, compacto e elegante, o Controle de Acesso por Biometria Facial MD 5711F proporciona segurança, praticidade e um gerenciamento confiável de acesso aos seus usuários, pois seu rosto será seu cartão ou senha de acesso em portas, catracas, fechaduras e torniquetes. Uma das principais características do MD 5711F, é que, mesmo com a similaridade e testes de vitalidade, evita-se qualquer tipo de fraude, pois a autenticação do acesso somente é autorizada através da análise do rosto ao vivo. Equipado com câmeras IR (“Infra Red”), para reconhecer a face do usuário, mesmo estando em locais escuros ou com baixa luminosidade, o MD 5711F possui tecnologia RFID, sendo a identificação realizada de forma automática e o reconhecimento facial autentica a face deste usuário em até 2 segundos. Com o sistema de gerenciamento será possível armazenar dados e imagens dos usuários remotamente.',
            'imagem' => "imagens/Produtos/faci.png",
            'caracteristica' => utf8_encode($this->readData('info/controleacessobio01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        //CONTROLADOR DE ACESSO - COD 03

        DB::table('produtos')->insert([

            'nome_produto' => 'Controlador de Acesso Multifuncional iDAccess',
            'tipo' => 'controlador de acesso',
            'codtipo' => '3',
            'marca' => '',
            'valor' => '3500.00',
            'categoria_id' => 1,
            'descricao' => 'Através de um design compacto e moderno, o Controlador de Acesso iDAccess é capaz controlar com eficiência e rapidez a entrada e saída de pessoas. Cada um de seus recursos foi concebido com as mais modernas tecnologias para tornar a sua operação mais fácil e intuitiva.',
            'imagem' => "imagens/Produtos/02.png",
            'caracteristica' => utf8_encode($this->readData('info/controleacesso01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Controlador de Acesso – MD 5705',
            'tipo' => 'controlador de acesso',
            'codtipo' => '3',
            'marca' => '',
            'valor' => '4500.00',
            'categoria_id' => 1,
            'descricao' => 'O Controlador de Acesso – MD 5705 é um equipamento prático e moderno para o controle de acesso através de comparação e identificação do padrão de impressões digitais. Pode ser utilizado em empresas de pequeno a grande porte. Controla a abertura de portas, catracas ou torniquetes, controlando o acesso através de um processo completamente a prova de fraudes.',
            'imagem' => "imagens//Produtos/01.png",
            'caracteristica' => utf8_encode($this->readData('info/controleacesso02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        //SOLUÇÕES DE ESTACIONAMENTO - COD 04

        DB::table('produtos')->insert([

            'nome_produto' => 'Sistema de Estacionamento',
            'tipo' => 'solucoes de estacionamento',
            'codtipo' => '4',
            'marca' => '',
            'valor' => '4500.00',
            'categoria_id' => 1,
            'descricao' => 'O Sistema de Gerenciamento de Estacionamentos MADIS, foi desenvolvido com as mais novas tecnologias, design moderno e arrojado, garantindo segurança, confiança e agilidade no controle de acesso de veículos ao seu estacionamento. O novo sistema de Estacionamento MADIS, permite o controle exato dos usuários que acessam o local: seja para motocicletas ou para carros, a nova tecnologia desenvolvida permite que o sistema imprima o ticket de acordo com o respectivo reconhecimento feito, uma vez que no Ticket impresso constará a informação do veículo que adentrou ao estacionamento. Esta diferenciação também poderá ser realizada através do Software. Tal tecnologia e inovação permitem a cobrança diferenciada entre veículos e motocicletas diminuindo o risco de cobranças indevidas ou fraldes na arrecadação do Sistema de Parking. As cobranças da utilização do estacionamento poderão ser feita através das integrações dos totens com os sistemas de cobrança automáticos como, por exemplo: SEM PARAR, AUTOEXPRESSO e CONECTCAR.',
            'imagem' => "imagens/Produtos/esta.jpg",
            'caracteristica' => utf8_encode($this->readData('info/estacionamento01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Cancelas Avulsas',
            'tipo' => 'solucoes de estacionamento',
            'codtipo' => '4',
            'marca' => '',
            'valor' => '4500.00',
            'categoria_id' => 1,
            'descricao' => 'Destinadas ao controle de acesso de veículos, as cancelas da MADIS são desenvolvidas para controlar de forma ágil e eficaz, o fluxo, a entrada e a saída de veículos, em locais como: aeroportos, rodoviárias, supermercados, shoppings, universidades, hotéis, entre outros estabelecimentos comerciais e públicos. Nossas cancelas permitem a programação de diferentes modos de acionamento. Podem ser acionadas através de botoeiras, controle remoto ou integradas a outros sistemas para o controle de acesso de veículos. As Cancelas Avulsas da MADIS são fabricada em aço carbono pintada, possuem braços retos ou articulados, motor de 1 HP, com tempo de abertura e fechamento ajustáveis.',
            'imagem' => "imagens/Produtos/estaa.jpg",
            'caracteristica' => utf8_encode($this->readData('info/estacionamento02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);


        //RELOGIOS DE PONTO
        //REGISTRADOR ELETRONICO DE  - COD 05

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Eletrônico EVO',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '5',
            'marca' => '',
            'valor' => '2500.00',
            'categoria_id' => 2,
            'descricao' => 'O principal objetivo da portaria no. 595 de 05/12/13, é estabelecer os requisitos essenciais que devem ser atendidos pelo Registrador Eletrônico de Ponto, com foco no desempenho, visando ao registro fiel das marcações de ponto efetuadas, preservando a inviolabilidade do Registrador Eletrônico de Ponto e ampliando a segurança da informação deste objeto, em complementaridade à Portaria MTE nº 1.510/2009.',
            'imagem' => "imagens/Produtos/evo.jpg",
            'caracteristica' => utf8_encode($this->readData('info/relogio01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Eletrônico HEXA',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '5',
            'marca' => '',
            'valor' => '2500.00',
            'categoria_id' => 2,
            'descricao' => 'Hexa, o Relógio de Ponto com Design arrojado da Henry. Pensado para melhor atender as empresas de pequeno a grande porte, o Hexa é um equipamento que dispõe de 5 modelos diferentes, todos cumprindo as especificações da portaria 1510 do MTE (Ministério do Trabalho e Emprego) e também a do Inmetro. Seu web server embarcado permite fazer algumas configurações direto no aparelho, dispensando a necessidade de um computador para executar esta ação. Também oferece mais economia, pois comporta bobina de até 400 metros de comprimento, diminuindo a quantidade de trocas, além de que permite o cadastramento de até 15 mil colaboradores e registra na memória até 9.000.000 registros, o que torna o Hexa um equipamento completo.',
            'imagem' => "imagens/Produtos/hexa-b.jpg",
            'caracteristica' => utf8_encode($this->readData('info/relogio02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Eletrônico REP iDClass',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '5',
            'marca' => '',
            'valor' => '2500.00',
            'categoria_id' => 2,
            'descricao' => 'Revolucionando mais uma vez o mercado de Registradores Eletrônicos de Ponto, a Control iD traz ao mercado o REP iDClass. Em conformidade com a Portaria 1.510 e certificado pelo Inmetro, o produto utiliza as mais modernastecnologias. Seu display touchscreen possibilita uma interação amigável e intuitiva com o usuário e seu design inovador, tamanho reduzido e robustez reafirmam a liderança da Control iD no segmento. Certificado pelo Inmetro e homologado pelo Ministério do Trabalho e Emprego Identificação biométria, cartão deproximidade, barras e senha; Mecanismo impressor de alta velocidade e robustez com guilhotina Capacidade para bobina de até 400m (10.000+ tickets por bobina) Comunicação TCP/IP, web server embarcado e duas portas USB (Wi-Fi e GPRS opcionais).',
            'imagem' => "imagens/Produtos/f1.jpg",
            'caracteristica' => utf8_encode($this->readData('info/relogio03.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Eletrônico Inner REP Plus',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '5',
            'marca' => '',
            'valor' => '2500.00',
            'categoria_id' => 2,
            'descricao' => 'O Inner Rep Plus é um relógio de ponto fácil de operar, com autonomia para emitir 7000 comprovantes, vários leitores em um mesmo modelo e impressão de alta velocidade. Tudo isso para tornar o registro de ponto mais rápido, eficiente e a prova de fraudes. Desenvolvido de acordo com as normas do Ministério do Trabalho e do INMETRO,esse novo conceito em relógio de ponto oferece a segurança jurídica que a sua empresa precisa. Comprovantes com assinatura digital evitam fraudes; Imprime mais de 7000 comprovantes com uma única bobina; Leitor biométrico, código de barras e proximidade em um mesmo produto; Operação fácil e intuitiva através da tela colorida sensível ao toque.',
            'imagem' => "imagens/Produtos/inner.png",
            'caracteristica' => utf8_encode($this->readData('info/relogio04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Eletrônico IDNOX',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '5',
            'marca' => '',
            'valor' => '2500.00',
            'categoria_id' => 2,
            'descricao' => 'O IDNOX é um Registrador Eletrônico de Ponto (REP) que representa o primeiro passo de uma nova visão do Controle de Ponto empresarial como hoje é conhecido. Desenvolvido e produzido no Brasil, em conformidade com a Portaria N° 1.510 do Ministério do Trabalho e Emprego, é um produto moderno, compacto e completo.',
            'imagem' => "imagens/Produtos/idnox_g.png",
            'caracteristica' => utf8_encode($this->readData('info/relogio05.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Prisma SUPER FÁCIL',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '5',
            'marca' => '',
            'valor' => '2500.00',
            'categoria_id' => 2,
            'descricao' => 'O Prisma SUPER FÁCIL é o novo relógio de ponto da Henry desenvolvido para atender as necessidades de pequenas e médias empresas. São quatro modelos, todos homologados pelo Ministério do Trabalho e Emprego, segundo normas da Portaria 1510/2009. Possui a tecnologia 8X e conta com muitos de seus recursos, dentre eles, o Web Server embarcado que dispensa a instalação de softwares de configuração. Com a opção de comunicação Serial, TCP/IP e USB via pen drive, a coleta de dados é rápida e fácil. Este equipamento permite cadastramento de até 15 mil colaboradores e sua memória armazena até oito milhões de registros, o que prolonga a vida útil. Sua bobina de 300 metros imprime até 8.500 comprovantes (tickets) e faz do Prisma SUPER FÁCIL econômico até em sua utilização.',
            'imagem' => "imagens/Produtos/prisma.png",
            'caracteristica' => utf8_encode($this->readData('info/relogio06.txt')),
            'peso' => '',
            'altura' => '27',
            'largura' => '30',
            'comprimento' => '25',
            'diametro' => '',

        ]);

        //CARTOGRAFICO - COD 06

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Cartográfico MD 402',
            'tipo' => 'cartografico',
            'codtipo' => '6',
            'marca' => '',
            'valor' => '1500.00',
            'categoria_id' => 2,
            'descricao' => 'O Relógio de Ponto Cartográfico MD 402 é compacto, moderno, prático e eficiente. É fácil de instalar e operar. É a solução ideal para micro e pequenas empresas e também indicado para controle dos empregados domésticos, conforme PEC n° 66/2012. Possui exclusivo sistema de impressão térmica com durabilidade para até 700.000 impressões. Entre as vantagens do Relógio de Ponto Cartográfico MD 402, destacamos seu baixo custo de manutenção. Seu sistema térmico não possui agulhas, ao contrário das impressoras matriciais e não há contato físico com o papel. Desta forma há maior durabilidade do mecanismo, sem a necessidade de troca do cartucho de tinta. O cartão de ponto térmico, fornecido pela MADIS tem a durabilidade requerida pela CLT e foi aprovada pelo IPT (Instituto de Pesquisa e Tecnologia) de acordo com os testes de durabilidade de impressão previstos no ATO COTEPE ICMS 04 de 11 de março de 2010. Esta regulamentação está sendo aplicada ao uso do cupom fiscal e adotada, recentemente, pelo MTE para os papéis térmicos usados nos novos Registradores Eletrônicos de Ponto (REP).',
            'imagem' => "imagens/Produtos/cartografico01.jpg",
            'caracteristica' => utf8_encode($this->readData('info/cartografico01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Cartográfico KP10',
            'tipo' => 'cartografico',
            'codtipo' => '6',
            'marca' => '',
            'valor' => '1500.00',
            'categoria_id' => 2,
            'descricao' => 'Coletor de ponto com tecnologia cartográficafica de alta performance e resistência.',
            'imagem' => "imagens/Produtos/KP10.jpg",
            'caracteristica' => utf8_encode($this->readData('info/cartografico02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Cartográfico C921',
            'tipo' => 'cartografico',
            'codtipo' => '6',
            'marca' => '',
            'valor' => '1500.00',
            'categoria_id' => 2,
            'descricao' => '',
            'imagem' => "imagens/Produtos/cartografico02.jpg",
            'caracteristica' => utf8_encode($this->readData('info/cartografico03.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
        ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Relógio de Ponto Cartográfico TBP 5.0',
            'tipo' => 'cartografico',
            'codtipo' => '6',
            'marca' => 'tecnibra',
            'valor' => '1500.00',
            'categoria_id' => 2,
            'descricao' => 'O Relógio de Ponto Cartográfico TBP 5.0 é a evolução do TBP 4.0 proporcionando maior modernidade para sua empresa gerenciar e controle do registro diário de ponto dos colaboradores. Sua programação permite imprimir setas indicativas de atraso, acionamento de sirenes/cigarras, início e fim de tarefas, identificação da face do cartão de ponto, ajuste automático de final de mês e do horário de verão. Possui ainda no break inteligente, componentes, motores e sensores, tudo de primeira linha.',
            'imagem' => "imagens/Produtos/tbp5.png",
            'caracteristica' => utf8_encode($this->readData('info/cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        //SOFTWARE
        //SOFTWARE DE CONTROLE DE PONTO - COD 07

        DB::table('produtos')->insert([

            'nome_produto' => 'iPonto',
            'tipo' => 'controle de ponto',
            'codtipo' => '7',
            'marca' => '',
            'valor' => '600.00',
            'categoria_id' => 3,
            'descricao' => 'O IPONTO é um software para Gerenciamento e Coleta de Ponto. Intuitivo, prático, flexível e de simples operação, o programa dispõe de diversos módulos de cadastro onde se pode controlar: empresas, funcionários, cargos, setores, departamentos e centros de custo, que possibilitarão filtrar os dados quando necessário, além de variados tipos de relatórios.',
            'imagem' => "imagens/Produtos/iponto_desq.jpg",
            'caracteristica' => utf8_encode($this->readData('info/software01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Ponto Secullum 4',
            'tipo' => 'controle de ponto',
            'codtipo' => '7',
            'marca' => '',
            'valor' => '600.00',
            'categoria_id' => 3,
            'descricao' => 'Apresenta interface amigável, agilidade e flexibilidade no controle de horas trabalhistas (horas normais, faltas, extras, DSR, adicional noturno, etc.). Agora disponível também na modalidade de mensalidade, contemplando Backup Remoto, Atualizações automáticas e direito a evolução do produto. Além de algumas funcionalidades já presentes na versão anterior, como Banco de Horas, Escala de Revezamento Cíclica, Exportação para qualquer folha de pagamento, o novo sistema conta com novidades antes presentes apenas em módulos adicionais, tais como tratamento de quatro horários flexíveis, módulo de consulta de dados via Web, entre outros. Principais Características - Ponto Secullum 4 Adequado à portaria 1.510 do Ministério do Trabalho e Emprego; Todas as funcionalidades já presentes na versão anterior(*); Controle de dias de folga com cálculo especial de percentual de extra; Opção para cálculo diferenciado de extra para um dia e funcionário específico; Restrições por usuários para determinadas empresas, departamentos e abonos; Gravação do registro de ponto original e equipamento que originou o registro; Opção para conexão com banco de dados MS SQL Server, Oracle, entre outros. Otimizado para conexões remotas; Criação e impressão de etiquetas para crachás de identificação com layout personalizável; Integração automática com sistema Secullum Acesso.Net; Importação de dados da versão anterior para fácil migração.',
            'imagem' => "imagens/Produtos/ponto_4.png",
            'caracteristica' => utf8_encode($this->readData('info/software02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        DB::table('produtos')->insert([

            'nome_produto' => 'Recursos Humanos RHID',
            'tipo' => 'controle de ponto',
            'codtipo' => '7',
            'marca' => '',
            'valor' => '600.00',
            'categoria_id' => 3,
            'descricao' => 'Nosso revolucionário SREP baseado no mais novo conceito "SaaS" permite aos gestores um controle total com fácil usabilidade para administrar a frequência de seus colaboradores. O inovador conceito de "Software as a service, SaaS" permite que o usuario acesse todo o sistema sem que seja necessário a instalação local do programa. Desta forma o sistema de TI das empresas trafega menos informações pela sua rede interna. Outro ponto fundamental é a liberdade de acesso remoto de qualquer ponto, basta ter acesso a internet e o gestor poderá acessa-lo de qualquer lugar via computador, celular ou tablet. Além disso, as atualizações do sistema são feitas em "real time", ou seja, em tempo real, não sendo necessário que o departamento de RH preocupe-se em instalar atualizações a cada nova versão. Isso é feito automaticamente.',
            'imagem' => "imagens/Produtos/rhid.jpg",
            'caracteristica' => utf8_encode($this->readData('info/software03.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        //SOFTWARE DE CONTROLE DE ACESSO - COD 08

         DB::table('produtos')->insert([

            'nome_produto' => 'Secullum Acesso',
            'tipo' => 'controle de acesso',
            'codtipo' => '8',
            'marca' => '',
            'valor' => '600.00',
            'categoria_id' => 3,
            'descricao' => 'O sistema Secullum Acesso.Net tem por finalidade controlar e gerenciar diversas situações relacionadas a segurança, podendo ser aplicado em: - Indústrias e comércios; - Empresas públicas ou privadas; - Condomínios; - Escolas e universidades; - Refeitórios. Através de uma interface simples, compatível com os sistemas operacionais Windows Vista, ou interface WEB, podemos efetuar funcionalidades diversas, que compreendem cadastramentos, configurações de equipamentos e consulta a relatórios. Disponível também na modalidade de mensalidade, contemplando Backup Remoto, Atualizações automáticas e direito a evolução do produto.',
            'imagem' => "imagens/Produtos/acesso_net.png",
            'caracteristica' => utf8_encode($this->readData('info/software04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

         DB::table('produtos')->insert([

            'nome_produto' => 'Secullum Clube',
            'tipo' => 'controle de acesso',
            'codtipo' => '8',
            'marca' => '',
            'valor' => '600.00',
            'categoria_id' => 3,
            'descricao' => 'O sistema Secullum Clube.Net foi projetado para atender todos os tipos de clubes ou associações. Através de uma interface amigável ele centraliza tarefas de controle de acesso, segurança e controle financeiro de maneira objetiva, tornando-se uma ferramenta ideal para o controle total do seu clube.',
            'imagem' => "imagens/Produtos/clube_net.png",
            'caracteristica' => utf8_encode($this->readData('info/software05.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

         DB::table('produtos')->insert([

            'nome_produto' => 'Secullum Escola',
            'tipo' => 'controle de acesso',
            'codtipo' => '8',
            'marca' => '',
            'valor' => '600.00',
            'categoria_id' => 3,
            'descricao' => 'Secullum Escola.Net O Secullum Escola.Net tem por finalidade controlar e gerenciar o acesso de alunos, professores e outras pessoas, bem como auxiliar na gestão administrativa, podendo ser aplicado em:
            - Escolas; Faculdades; Cursos Profissionalizantes; Cursos Pré-vestibulares; Cursos de Idiomas; Supletivos; Através de uma interface simples, compatível com os sistemas operacionais Windows, podemos efetuar funcionalidades diversas, que compreendem cadastramentos, configurações de equipamentos e consulta a relatórios. Este software está disponível apenas na modalidade de mensalidade, contemplando Backup Remoto, Atualizações automáticas e direito a evolução do produto.',
            'imagem' => "imagens/Produtos/escola_net.png",
            'caracteristica' => utf8_encode($this->readData('info/software06.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

         DB::table('produtos')->insert([

            'nome_produto' => 'Secullum Estacionamento',
            'tipo' => 'controle de acesso',
            'codtipo' => '8',
            'marca' => '',
            'valor' => '600.00',
            'categoria_id' => 3,
            'descricao' => 'Os sistemas de estacionamento desenvolvidos pela Secullum estão disponíveis em duas versões: Mini Estacionamento.Net, comercializado na modalidade de venda e Estacionamento.Net comercializado na modalidade de mensalidade.',
            'imagem' => "imagens/Produtos/estacionamento_net.png",
            'caracteristica' => utf8_encode($this->readData('info/software07.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

         DB::table('produtos')->insert([

            'nome_produto' => 'Secullum Academia',
            'tipo' => 'controle de acesso',
            'codtipo' => '8',
            'marca' => '',
            'valor' => '600.00',
            'categoria_id' => 3,
            'descricao' => 'Controle o acesso de alunos e instrutores bloqueando inadimplentes. O sistema controla a gestão da sua academia, bem como as avaliações físicas e treinamentos. Disponível modalidade de mensalidade, contemplando Backup Remoto, Atualizações automáticas e direito a evolução do produto.',
            'imagem' => "imagens/Produtos/academia_net.png",
            'caracteristica' => utf8_encode($this->readData('info/software08.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);
            DB::table('produtos')->insert([

                'nome_produto' => 'Software MD Estacionamento',
                'tipo' => 'controle de acesso',
                'codtipo' => '8',
                'marca' => '',
                'valor' => '600.00',
                'categoria_id' => 3,
                'descricao' => 'O Software para gerenciamento do Sistema de Estacionamento se divide em três módulos, retaguarda, caixa e comunicação. Com banco de dados SQL que oferece total segurança das informações, permite a configuração de níveis de usuários (Supervisor, Fiscal Operador e Operador), e pode ser instalado em um único computador ou separadamente.',
                'imagem' => "imagens/Produtos/estaaa.jpg",
                'caracteristica' => utf8_encode($this->readData('info/software08.txt')),
                'peso' => '',
                'altura' => '',
                'largura' => '',
                'comprimento' => '',
                'diametro' => '',
                ]);


         //
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
