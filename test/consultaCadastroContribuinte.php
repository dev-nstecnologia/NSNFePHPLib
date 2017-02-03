<?php
	$token = $_POST['token'];
	$CNPJEmitente = $_POST['CNPJ'];
	$UF = "RS";
	$documentoConsulta = "07364617000135";
	$tpConsulta = "CNPJ";

	$NFeAPI = new NFeAPI(2);

	$retorno = $NFeAPI->consultaCadastroContribuinte($token, $CNPJEmitente, $UF, $documentoConsulta, $tpConsulta);
	print_r($retorno);
?>