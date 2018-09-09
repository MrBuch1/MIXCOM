create database MIXCOM 
default character set utf8 
default collate utf8_general_ci;
use MIXCOM;

create table Usuario(

	idUsuario int not null auto_increment,
	loginUsuario varchar (15),
    senhaUsuario varchar (35),
    primary key (idUsuario)

) default charset = utf8;


create table Pessoa(

	idPessoa int not null auto_increment,
    nome varchar (50),
    sobrenome varchar (50),
    email varchar (50),
    telefone int (11),
    primary key (idPessoa),
    foreign key (idUsuario) references idUsuario
	
) default charset = utf8;

create table Endereco(
	
    rua varchar (80),
    bairro varchar (50),
    cep varchar (9),
    cidade varchar (50),
    estado varchar (50)

) default charset = utf8;

create table if not exists PessoaFisica(
	
    idUsuario int,
    idPessoaFisica int not null auto_increment,
    cpf int (11),
    dataNascimento date,
    primary key (idPessoaFisica),
    foreign key (idUsuario) references idUsuario,
    foreign key (idPessoa) references idPessoa

) default charset = utf8;

create table PessoaJuridica(

	idUsuario int,
    idPessoaJuridica int not null auto_increment,
    rsocial varchar (100),
	cnpj int (15),
    primary key (idPessoaJuridica),
    foreign key (idUsuario) references idUsuario,
    foreign key (idPessoa) references idPessoa
    
) default charset = utf8;

create table Compra(

	idComprar int not null auto_increment,
    idProduto int,
    dataCompra datetime,
    valorCompra decimal (6,2),
    primary key (idComprar),
    foreign key (idProduto) references idProtudo

) default charset = utf8;

create table Compra_Usuario (

	idCompra int,
    idUsuario int,
    foreign key (idComprar) references idComprar,
    foreign key (idUsuario) references idUsuario

) default charset = utf8;



create table Produtos(

	idProduto int not null auto_increment,
    quantidadeProdutos int,
    tipoProduto varchar (25),
    valorProduto decimal (6,2),
	marcaProduto varchar (35),
    nomeProduto varchar (100),
    primary key(idProduto),
    foreign key(codigoCategoria) references codigoCategoria
    
) default charset = utf8;

create table Categoria(

	codigoCategoria int not null auto_increment,
    nomeCategoria varchar (50),
	primary key(codigoCategoria)
    
) default charset = utf8;

create table Venda(
	
    codigoVenda int not null auto_increment,
    primary key(codigoVenda),
    foreign key (idUsuario) references Usuario,
    foreign key (idProduto) references Produto

) default charset = utf8;

