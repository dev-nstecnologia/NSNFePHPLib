<?php
	$token = $_POST['token'];
	$conteudo = $_POST['conteudoEnviar'];

	$NFeAPI = new NFeAPI(2);
	
	$retorno = $NFeAPI->emitirNFe($token, $conteudo);
	print_r($retorno);
?>