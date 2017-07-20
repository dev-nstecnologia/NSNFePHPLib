<?php
	$token = $_POST['token'];
	$nfe = $_POST['conteudoEnviar'];
	$CNPJEmitente = $_POST['CNPJ'];

	$NFeAPI = new NFeAPI();

	$_SESSION['retornoAPI'] = $NFeAPI->emitirNFeSincrono($token, $CNPJEmitente, $nfe);

?>