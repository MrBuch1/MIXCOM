<?php

$host = "localhost";
$user = "root";
$password = "";
$banco = "MIXCOM";
$conexao = mysql_connect($host, $user, $password) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$rsocial=$_POST['rsocial'];
$cnpj=$_POST['cnpj'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = mysql_query("INSERT INTO Pessoa (nome, sobrenome, email, telefone) VALUES ('$nome', '$sobrenome', '$email', '$telefone')");
$sql2 = mysql_query("INSERT INTO PessoaJuridica (rsocial, cnpj) VALUES ('$rsocial', '$cnpj')");


?>