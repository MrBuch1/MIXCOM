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

create table PessoaFisica(
	
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

create table Comprar(

	idComprar int not null auto_increment,
    dataCompra datetime,
    valorCompra decimal (6,4)
    ),
    
    

) default charset = utf8;