<?php
	$token = $_POST['token'];
	$nfe = $_POST['conteudoEnviar'];
	$CNPJEmitente = $_POST['CNPJ'];

	$NFeAPI = new NFeAPI();

	$retorno = $NFeAPI->emitirNFeSincrono($token, $CNPJEmitente, $nfe);
	print_r($retorno);

?>