<?php
	$token = $_POST['token'];
	$CNPJEmitente = $_POST['CNPJ'];
	$UF = "RS";
	$documentoConsulta = "07364617000135";
	$tpConsulta = "CNPJ";

	$NFeAPI = new NFeAPI();

	$_SESSION['retornoAPI'] = $NFeAPI->consultaCadastroContribuinte($token, $CNPJEmitente, $UF, $documentoConsulta, $tpConsulta);
?>