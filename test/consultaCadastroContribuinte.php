<?php
	$token = $_POST['token'];
	$CNPJEmitente = $_POST['CNPJ'];
	$UF = "RS";
	$documentoConsulta = "07364617000135";
	$tpConsulta = "CNPJ";

	$NFeAPI = new NFeAPI();

	$retorno = $NFeAPI->consultaCadastroContribuinte($token, $CNPJEmitente, $UF, $documentoConsulta, $tpConsulta);
	print_r($retorno);
?>