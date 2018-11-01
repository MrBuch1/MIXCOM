<?php
$cep_destino = $_POST['cep_destino'];
$cep_origem = '44075445';



$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
$url .= "nCdEmpresa=";
$url .= "&sDsSenha=";
$url .= "&nCdServico=41106" ;
$url .="&sCepOrigem=" .$cep_origem;
$url .="&sCepDestino=" .$cep_destino;
$url .="&nVlPeso=" .$peso;
$url .="&nCdFormato=1";
$url .="&nVlComprimento=" .$comprimento;
$url .="&nVlAltura=" .$altura;
$url .="&nVlLargura=" .$largura;
$url .="&sCdMaoPropria=n";
$url .="&nVlValorDeclarado=" .$valor;
$url .="&sCdAvisoRecebimento=n";
$url .="&nCdServico=";
$url .="&nVlDiametro=0";
$url .="&StrRetorno=xml";
$url .="&nIndicaCalculo=3";

echo $url;

?>