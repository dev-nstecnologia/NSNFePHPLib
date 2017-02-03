<?php
	$token = $_POST['token'];
	$CNPJEmitente = $_POST['CNPJ'];

	$NFeAPI = new NFeAPI(2);

	$retorno = $NFeAPI->consultarStatusProcessamento($token, $CNPJEmitente, 1514);
	print_r($retorno);
?>