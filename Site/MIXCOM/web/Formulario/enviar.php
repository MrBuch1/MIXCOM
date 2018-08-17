<?
$hoje_tmp = getdate();
$hoje = ($hoje_tmp[hours].":".$hoje_tmp[minutes].":".$hoje_tmp[seconds]);

$nome = $_POST["nome"]; //trata a variável nome
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"]; //trata a variável cidade
$estado = $_POST["estado"]; //trata a variável estado
$email = $_POST["e-mail"]; //trata a variável e-mail
$assunto_mensagem = $_POST["assunto_mensagem"]; //trata a variável assunto
$mensagem = $_POST["mensagem"]; //trata a variável mensagem

global $email; //transforma em variavel global a variável e-mail

$enviou = mail("livia@mixcom.net.br", // aqui voce coloca o seu e-mail
"$assunto_mensagem",
"Nome: $nome
Telefone: $telefone
Cidade: $cidade
Estado: $estado
E-mail: $email
Assunto: $assunto_mensagem
Mensagem: $mensagem",
"From: $email <$nome>");

if ($enviou){
echo "<b>$nome</b>, sua mensagem foi efetuada com sucesso.<br>Em breve lhe responderemos.";
}

else {
echo "<b>$nome</b>, não foi possível enviar sua mensagem.<br>Tente novamente.";
}
?>