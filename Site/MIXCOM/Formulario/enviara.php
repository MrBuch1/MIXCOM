<?
$hoje_tmp = getdate();
$hoje = ($hoje_tmp[hours].":".$hoje_tmp[minutes].":".$hoje_tmp[seconds]);

$nome = $_POST["nome"]; //trata a variável nome
 # Efetua o upload do arquivo
  if (is_uploaded_file($_FILES['anexo']['tmp_name'])) {
	  $caminho= "/home/seu_usuario/tmp/".$_FILES['anexo']['name'];
	  
	  # grava o $arquivo no $caminho especificado
	  if(copy($_FILES["anexo"]["tmp_name"],$caminho)) {
	  
	  	  echo "O arquivo foi transferido!<br>";
		  $up=1;
	}
	  }else{
		  echo "<h1>O arquivo não foi transferido!</h1>";
		  echo "<h2><font color='red'>Caminho ou nome de arquivo Inválido</font></h2>";
		  }

##  # Anexa um arquivo ao email.
  $mime->addAttachment($caminho);
	
	
$cidade = $_POST["cidade"]; //trata a variável cidade
$estado = $_POST["estado"]; //trata a variável estado
$email = $_POST["e-mail"]; //trata a variável e-mail
$assunto_mensagem = $_POST["assunto_mensagem"]; //trata a variável assunto
$mensagem = $_POST["mensagem"]; //trata a variável mensagem

global $email; //transforma em variavel global a variável e-mail

$enviou = mail("contato@analarisemijoias.com.br", // aqui voce coloca o seu e-mail
"$assunto_mensagem",
"Nome: $nome
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