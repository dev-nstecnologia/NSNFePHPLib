<?php
	$token = $_POST['token'];
	$nfe = $_POST['conteudoEnviar'];
	$CNPJEmitente = $_POST['CNPJ'];

	$NFeAPI = new NFeAPI(2);

	$retorno = $NFeAPI->emitirNFeSincrono($token, $CNPJEmitente, $nfe);
	print_r($retorno);

?>