create database MIXCOM 
default character set utf8 
default collate utf8_general_ci;
use MIXCOM;

create table Usuario(

	idUsuario int not null auto_increment,
    nomeUsuario varchar (50),
    loginUsuario varchar (15),
    senhaUsuario varchar (35),
    emailUsuario varchar (50),
    telefoneUsuario int (11),
    enderecoUsuario varchar (60),
    primary key (idUsuario)
	
) default charset = utf8;

create table if not exists PessoaFisica(
	
    idUsuario int,
    idPessoaFisica int not null auto_increment,
    cpf int (11),
    dataNascimento date,
    primary key (idPessoaFisica),
    foreign key (idUsuario) references idUsuario 

) default charset = utf8;

create table PessoaJuridica(

	idUsuario int,
    idPessoaJuridica int not null auto_increment,
	cnpj int (15),
    primary key (idPessoaJuridica),
    foreign key (idUsuario) references idUsuario
    
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

	idComprar int,
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
    primary key(idProduto)
    
) default charset = utf8;

create table Categoria(

	codigoCategoria int not null auto_increment,
    nomeCategoria varchar (50),
	primary key(codigoCategoria)
    
) default charset = utf8;

