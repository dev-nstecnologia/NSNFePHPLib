<?php
	$token = $_POST['token'];
	$conteudo = $_POST['conteudoEnviar'];

	$NFeAPI = new NFeAPI();
	
	$retorno = $NFeAPI->emitirNFe($token, $conteudo);
	print_r($retorno);
?>