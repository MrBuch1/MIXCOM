<?php
$cep_destino = $_POST['cep_destino'];
$cep_origem = '44075445';


$url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
$url .= "nCdEmpresa=0&";
$url .= "sDsSenha=0&";
$url .= "nCdServico=41106" ;
$url .="sCepOrigem=" .$cep_origem."&";
$url .="sCepDestino=" .$cep_destino."&";
$url .="nVlPeso=2&";
$url .="nCdFormato=1&";
$url .="nVlComprimento=11&";
$url .="nVlAltura=16&";
$url .="nVlLargura=21&";
$url .="sCdMaoPropria=s&";
$url .="nVlValorDeclarado=0&";
$url .="sCdAvisoRecebimento=N&";
$url .="nVlDiametro=11&";
$url .="StrRetorno=xml&";
$url .="nIndicaCalculo=3";

echo $url;

?>