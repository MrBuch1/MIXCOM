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

        //CATRACA

        DB::table('produtos')->insert([

            'nome' => 'Catraca Balcão',
            'tipo' => 'catraca',
            'codtipo' => '01',
            'marca' => 'Tecnibra',
            'valor' => '123,00',
            'categoria' => 'controle de acesso',
            'descricao' => 'A Catraca Balcão foi desenvolvida para dinamizar o alto fluxo de acesso, enquanto identifica uma pessoa a outra já está passando pelos braços giratórios evitando a formação de filas. Sua construção em aço carbono e modular permite flexibilizar desde a mecânica e eletrônica que melhor ajustar a sua necessidade ou ao seu sistema de controle de acesso, até a melhoria do seu equipamento com atualizações de forma fácil e com o menor tempo de intervenção. A tampa basculante abre sem avanços físicos, permitindo uso da Catraca Balcão encostada na parede. E os pedestais possuem furação interna para fixação no piso cobertos por uma porta com fechadura. Estes recursos, além de benefícios e liberdade para ajustes, minimiza a possibilidade de trocar a catraca para atualização da eletrônica ou da forma de identificação dos utilizadores (Código de Barras, Proximidade e Biometria).',
            'imagem' => 'picapau.jpg',
            'caracteristica' => utf8_encode($this->readData('../storage/catraca01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Catraca de Inox RBC 5905',
            'tipo' => 'catraca',
            'codtipo' => '01',
            'marca' => 'Tecnibra',
            'valor' => '123,00',
            'categoria' => 'controle de acesso',
            'descricao' => 'A Catraca de Inox RBC 5905 é a melhor opção para o controle de acesso de sua empresa. A Catraca RBC 5905 possui eficiente leitura de impressão de digitais. É um produto vantajoso que proporciona segurança e agilidade no fluxo de funcionários e visitantes. Esta Catraca RBC 5905 pode ser confeccionado também em gabinete.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('catraca02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Catraca Hi-Tech',
            'tipo' => 'catraca',
            'codtipo' => '01',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'controle de acesso',
            'descricao' => 'A Catraca Hi-Tech possui destaque em seu design futurista e moderno, sendo ideal para aliar o equipamento a um ambiente decorado personalizado para o controle de acesso dos usuários a áreas restritas. Produzida em aço carbono de alta resistência, todas as peças são cortadas a laser, quimicamente tratadas com pintura eletrostática, conferindo durabilidade com acabamento fino e decorativo, possibilitando personalização do equipamento com a logomarca da sua empresa e escolha das cores Verde, Laranja, Azul ou Preta com detalhes Inox.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('catraca03.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Catraca SW1',
            'tipo' => 'catraca',
            'codtipo' => '01',
            'marca' => 'Tecnibra',
            'valor' => '000,00',
            'categoria' => 'controle de acesso',
            'descricao' => 'A Catraca SW1 é um equipamento de Controle de Acesso que tem em seu conceito a união da robustez e durabilidade tradicionais das catracas Tecnibra, com beleza e modernidade dando um toque de futurismo em seu ambiente. Desenvolvida com um corpo prisma retangular e bordas arredondadas, possui características únicas de um esqueleto de aço carbono, proporcionando a robustez, um acabamento em suas faces em acrílico Black Piano, suas laterais em aço escovado, setas cortadas a laser, iluminadas por led (vermelho e verde) indicam o sentido do fluxo e uma base de aço inox espelhada passa a impressão que a catraca está flutuando. Toda essa modernidade e futurismo do seu design, desenvolvido pelo premiado escritório Abrupta no Rio de Janeiro, pelo arquiteto Gustavo Teixeira, é complementado com o EXCLUSIVO SISTEMA TECNIBRA de engrenagens e correia sincronizadora que permite a utilização do amortecimento hidráulico que é feito por um cilindro pressurizado a gás. Tudo sem qualquer atrito, proporcionando menos desgaste e maior durabilidade e o giro mais suave do mercado, evitando os indesejáveis movimentos bruscos.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('catraca04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Catraca MDC 2900',
            'tipo' => 'catraca',
            'codtipo' => '01',
            'marca' => '',
            'valor' => '321,00',
            'categoria' => 'controle de acesso',
            'descricao' => 'Com alto padrão de acabamento permite eficiência no controle de acesso de funcionários e/ou visitantes. Sistema ideal para instalação em saguões de entrada de edifícios, contribuindo diretamente com a segurança patrimonial.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('catraca05.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        //CONTROLADOR DE ACESSO POR BIOMETRIA FACIAL

        DB::table('produtos')->insert([

            'nome' => 'Controle de Acesso por Biometria Facial - MD 5711F',
            'tipo' => 'controlador de acesso por biometria facial',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'controle de acesso',
            'descricao' => 'Com design moderno, compacto e elegante, o Controle de Acesso por Biometria Facial MD 5711F proporciona segurança, praticidade e um gerenciamento confiável de acesso aos seus usuários, pois seu rosto será seu cartão ou senha de acesso em portas, catracas, fechaduras e torniquetes. Uma das principais características do MD 5711F, é que, mesmo com a similaridade e testes de vitalidade, evita-se qualquer tipo de fraude, pois a autenticação do acesso somente é autorizada através da análise do rosto ao vivo. Equipado com câmeras IR (“Infra Red”), para reconhecer a face do usuário, mesmo estando em locais escuros ou com baixa luminosidade, o MD 5711F possui tecnologia RFID, sendo a identificação realizada de forma automática e o reconhecimento facial autentica a face deste usuário em até 2 segundos. Com o sistema de gerenciamento será possível armazenar dados e imagens dos usuários remotamente.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('controleacessobio01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        //CONTROLADOR DE ACESSO

        DB::table('produtos')->insert([

            'nome' => 'Controlador de Acesso Multifuncional iDAccess',
            'tipo' => 'controlador de acesso',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'controle de acesso',
            'descricao' => 'Através de um design compacto e moderno, o Controlador de Acesso iDAccess é capaz controlar com eficiência e rapidez a entrada e saída de pessoas. Cada um de seus recursos foi concebido com as mais modernas tecnologias para tornar a sua operação mais fácil e intuitiva.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('controleacesso01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Controlador de Acesso – MD 5705',
            'tipo' => 'controlador de acesso',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'controle de acesso',
            'descricao' => 'O Controlador de Acesso – MD 5705 é um equipamento prático e moderno para o controle de acesso através de comparação e identificação do padrão de impressões digitais. Pode ser utilizado em empresas de pequeno a grande porte. Controla a abertura de portas, catracas ou torniquetes, controlando o acesso através de um processo completamente a prova de fraudes.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('controleacesso02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        //REGISTRADOR ELETRONICO DE PONTO

        DB::table('produtos')->insert([

            'nome' => 'Relógio de Ponto Eletrônico EVO',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'O principal objetivo da portaria no. 595 de 05/12/13, é estabelecer os requisitos essenciais que devem ser atendidos pelo Registrador Eletrônico de Ponto, com foco no desempenho, visando ao registro fiel das marcações de ponto efetuadas, preservando a inviolabilidade do Registrador Eletrônico de Ponto e ampliando a segurança da informação deste objeto, em complementaridade à Portaria MTE nº 1.510/2009.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('relogio01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Relógio de Ponto Eletrônico HEXA',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'Hexa, o Relógio de Ponto com Design arrojado da Henry. Pensado para melhor atender as empresas de pequeno a grande porte, o Hexa é um equipamento que dispõe de 5 modelos diferentes, todos cumprindo as especificações da portaria 1510 do MTE (Ministério do Trabalho e Emprego) e também a do Inmetro. Seu web server embarcado permite fazer algumas configurações direto no aparelho, dispensando a necessidade de um computador para executar esta ação. Também oferece mais economia, pois comporta bobina de até 400 metros de comprimento, diminuindo a quantidade de trocas, além de que permite o cadastramento de até 15 mil colaboradores e registra na memória até 9.000.000 registros, o que torna o Hexa um equipamento completo.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('relogio02.txt')),
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

            'nome' => 'Relógio de Ponto Eletrônico REP iDClass',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'Revolucionando mais uma vez o mercado de Registradores Eletrônicos de Ponto, a Control iD traz ao mercado o REP iDClass. Em conformidade com a Portaria 1.510 e certificado pelo Inmetro, o produto utiliza as mais modernastecnologias. Seu display touchscreen possibilita uma interação amigável e intuitiva com o usuário e seu design inovador, tamanho reduzido e robustez reafirmam a liderança da Control iD no segmento. Certificado pelo Inmetro e homologado pelo Ministério do Trabalho e Emprego Identificação biométria, cartão deproximidade, barras e senha; Mecanismo impressor de alta velocidade e robustez com guilhotina Capacidade para bobina de até 400m (10.000+ tickets por bobina) Comunicação TCP/IP, web server embarcado e duas portas USB (Wi-Fi e GPRS opcionais).',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('relogio03.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Relógio de Ponto Eletrônico Inner REP Plus',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'O Inner Rep Plus é um relógio de ponto fácil de operar, com autonomia para emitir 7000 comprovantes, vários leitores em um mesmo modelo e impressão de alta velocidade. Tudo isso para tornar o registro de ponto mais rápido, eficiente e a prova de fraudes. Desenvolvido de acordo com as normas do Ministério do Trabalho e do INMETRO,esse novo conceito em relógio de ponto oferece a segurança jurídica que a sua empresa precisa. Comprovantes com assinatura digital evitam fraudes; Imprime mais de 7000 comprovantes com uma única bobina; Leitor biométrico, código de barras e proximidade em um mesmo produto; Operação fácil e intuitiva através da tela colorida sensível ao toque.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('relogio04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Relógio de Ponto Eletrônico IDNOX',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'O IDNOX é um Registrador Eletrônico de Ponto (REP) que representa o primeiro passo de uma nova visão do Controle de Ponto empresarial como hoje é conhecido. Desenvolvido e produzido no Brasil, em conformidade com a Portaria N° 1.510 do Ministério do Trabalho e Emprego, é um produto moderno, compacto e completo.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('relogio05.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        DB::table('produtos')->insert([

            'nome' => 'Prisma SUPER FÁCIL',
            'tipo' => 'registrador eletronico de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'O Prisma SUPER FÁCIL é o novo relógio de ponto da Henry desenvolvido para atender as necessidades de pequenas e médias empresas. São quatro modelos, todos homologados pelo Ministério do Trabalho e Emprego, segundo normas da Portaria 1510/2009. Possui a tecnologia 8X e conta com muitos de seus recursos, dentre eles, o Web Server embarcado que dispensa a instalação de softwares de configuração. Com a opção de comunicação Serial, TCP/IP e USB via pen drive, a coleta de dados é rápida e fácil. Este equipamento permite cadastramento de até 15 mil colaboradores e sua memória armazena até oito milhões de registros, o que prolonga a vida útil. Sua bobina de 300 metros imprime até 8.500 comprovantes (tickets) e faz do Prisma SUPER FÁCIL econômico até em sua utilização.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('relogio06.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',

        ]);

        //CARTOGRAFICO

        DB::table('produtos')->insert([

            'nome' => 'Relógio de Ponto Cartográfico MD 402',
            'tipo' => 'cartografico',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'O Relógio de Ponto Cartográfico MD 402 é compacto, moderno, prático e eficiente. É fácil de instalar e operar. É a solução ideal para micro e pequenas empresas e também indicado para controle dos empregados domésticos, conforme PEC n° 66/2012. Possui exclusivo sistema de impressão térmica com durabilidade para até 700.000 impressões. Entre as vantagens do Relógio de Ponto Cartográfico MD 402, destacamos seu baixo custo de manutenção. Seu sistema térmico não possui agulhas, ao contrário das impressoras matriciais e não há contato físico com o papel. Desta forma há maior durabilidade do mecanismo, sem a necessidade de troca do cartucho de tinta. O cartão de ponto térmico, fornecido pela MADIS tem a durabilidade requerida pela CLT e foi aprovada pelo IPT (Instituto de Pesquisa e Tecnologia) de acordo com os testes de durabilidade de impressão previstos no ATO COTEPE ICMS 04 de 11 de março de 2010. Esta regulamentação está sendo aplicada ao uso do cupom fiscal e adotada, recentemente, pelo MTE para os papéis térmicos usados nos novos Registradores Eletrônicos de Ponto (REP).',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico01.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        DB::table('produtos')->insert([

            'nome' => 'Relógio de Ponto Cartográfico KP10',
            'tipo' => 'cartografico',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'Coletor de ponto com tecnologia cartográficafica de alta performance e resistência.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico02.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        DB::table('produtos')->insert([

            'nome' => 'Relógio de Ponto Cartográfico C921',
            'tipo' => 'cartografico',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => '',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico03.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
        ]);

        DB::table('produtos')->insert([

            'nome' => 'Relógio de Ponto Cartográfico TBP 5.0',
            'tipo' => 'cartografico',
            'codtipo' => '',
            'marca' => 'tecnibra',
            'valor' => '000,00',
            'categoria' => 'relogio de ponto',
            'descricao' => 'O Relógio de Ponto Cartográfico TBP 5.0 é a evolução do TBP 4.0 proporcionando maior modernidade para sua empresa gerenciar e controle do registro diário de ponto dos colaboradores. Sua programação permite imprimir setas indicativas de atraso, acionamento de sirenes/cigarras, início e fim de tarefas, identificação da face do cartão de ponto, ajuste automático de final de mês e do horário de verão. Possui ainda no break inteligente, componentes, motores e sensores, tudo de primeira linha.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        //CONTROLE DE PONTO

        DB::table('produtos')->insert([

            'nome' => 'iPonto',
            'tipo' => 'controle de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'software',
            'descricao' => 'O IPONTO é um software para Gerenciamento e Coleta de Ponto. Intuitivo, prático, flexível e de simples operação, o programa dispõe de diversos módulos de cadastro onde se pode controlar: empresas, funcionários, cargos, setores, departamentos e centros de custo, que possibilitarão filtrar os dados quando necessário, além de variados tipos de relatórios.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);


        DB::table('produtos')->insert([

            'nome' => 'Ponto Secullum 4',
            'tipo' => 'controle de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'software',
            'descricao' => 'Apresenta interface amigável, agilidade e flexibilidade no controle de horas trabalhistas (horas normais, faltas, extras, DSR, adicional noturno, etc.). Agora disponível também na modalidade de mensalidade, contemplando Backup Remoto, Atualizações automáticas e direito a evolução do produto. Além de algumas funcionalidades já presentes na versão anterior, como Banco de Horas, Escala de Revezamento Cíclica, Exportação para qualquer folha de pagamento, o novo sistema conta com novidades antes presentes apenas em módulos adicionais, tais como tratamento de quatro horários flexíveis, módulo de consulta de dados via Web, entre outros. Principais Características - Ponto Secullum 4 Adequado à portaria 1.510 do Ministério do Trabalho e Emprego; Todas as funcionalidades já presentes na versão anterior(*); Controle de dias de folga com cálculo especial de percentual de extra; Opção para cálculo diferenciado de extra para um dia e funcionário específico; Restrições por usuários para determinadas empresas, departamentos e abonos; Gravação do registro de ponto original e equipamento que originou o registro; Opção para conexão com banco de dados MS SQL Server, Oracle, entre outros. Otimizado para conexões remotas; Criação e impressão de etiquetas para crachás de identificação com layout personalizável; Integração automática com sistema Secullum Acesso.Net; Importação de dados da versão anterior para fácil migração.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        DB::table('produtos')->insert([

            'nome' => 'Recursos Humanos RHID',
            'tipo' => 'controle de ponto',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'software',
            'descricao' => 'Nosso revolucionário SREP baseado no mais novo conceito "SaaS" permite aos gestores um controle total com fácil usabilidade para administrar a frequência de seus colaboradores. O inovador conceito de "Software as a service, SaaS" permite que o usuario acesse todo o sistema sem que seja necessário a instalação local do programa. Desta forma o sistema de TI das empresas trafega menos informações pela sua rede interna. Outro ponto fundamental é a liberdade de acesso remoto de qualquer ponto, basta ter acesso a internet e o gestor poderá acessa-lo de qualquer lugar via computador, celular ou tablet. Além disso, as atualizações do sistema são feitas em "real time", ou seja, em tempo real, não sendo necessário que o departamento de RH preocupe-se em instalar atualizações a cada nova versão. Isso é feito automaticamente.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

        //CONTROLE DE ACESSO

         DB::table('produtos')->insert([

            'nome' => 'Secullum Acesso',
            'tipo' => 'controle de acesso',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'software',
            'descricao' => 'O sistema Secullum Acesso.Net tem por finalidade controlar e gerenciar diversas situações relacionadas a segurança, podendo ser aplicado em: - Indústrias e comércios; - Empresas públicas ou privadas; - Condomínios; - Escolas e universidades; - Refeitórios. Através de uma interface simples, compatível com os sistemas operacionais Windows Vista, ou interface WEB, podemos efetuar funcionalidades diversas, que compreendem cadastramentos, configurações de equipamentos e consulta a relatórios. Disponível também na modalidade de mensalidade, contemplando Backup Remoto, Atualizações automáticas e direito a evolução do produto.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

         DB::table('produtos')->insert([

            'nome' => 'Secullum Clube',
            'tipo' => 'controle de acesso',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'software',
            'descricao' => 'O sistema Secullum Clube.Net foi projetado para atender todos os tipos de clubes ou associações. Através de uma interface amigável ele centraliza tarefas de controle de acesso, segurança e controle financeiro de maneira objetiva, tornando-se uma ferramenta ideal para o controle total do seu clube.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

         DB::table('produtos')->insert([

            'nome' => 'Secullum Escola',
            'tipo' => 'controle de acesso',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'software',
            'descricao' => 'Secullum Escola.Net O Secullum Escola.Net tem por finalidade controlar e gerenciar o acesso de alunos, professores e outras pessoas, bem como auxiliar na gestão administrativa, podendo ser aplicado em:
            - Escolas; Faculdades; Cursos Profissionalizantes; Cursos Pré-vestibulares; Cursos de Idiomas; Supletivos; Através de uma interface simples, compatível com os sistemas operacionais Windows, podemos efetuar funcionalidades diversas, que compreendem cadastramentos, configurações de equipamentos e consulta a relatórios. Este software está disponível apenas na modalidade de mensalidade, contemplando Backup Remoto, Atualizações automáticas e direito a evolução do produto.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

         DB::table('produtos')->insert([

            'nome' => 'Secullum Estacionamento',
            'tipo' => 'controle de acesso',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'software',
            'descricao' => 'Os sistemas de estacionamento desenvolvidos pela Secullum estão disponíveis em duas versões: Mini Estacionamento.Net, comercializado na modalidade de venda e Estacionamento.Net comercializado na modalidade de mensalidade.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
            'peso' => '',
            'altura' => '',
            'largura' => '',
            'comprimento' => '',
            'diametro' => '',
            ]);

         DB::table('produtos')->insert([

            'nome' => 'Secullum Academia',
            'tipo' => 'controle de acesso',
            'codtipo' => '',
            'marca' => '',
            'valor' => '000,00',
            'categoria' => 'software',
            'descricao' => 'Controle o acesso de alunos e instrutores bloqueando inadimplentes. O sistema controla a gestão da sua academia, bem como as avaliações físicas e treinamentos. Disponível modalidade de mensalidade, contemplando Backup Remoto, Atualizações automáticas e direito a evolução do produto.',
            'imagem' => '',
            'caracteristica' => utf8_encode($this->readData('cartografico04.txt')),
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