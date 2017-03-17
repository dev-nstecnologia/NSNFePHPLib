<?php
	$token = $_POST['token'];
	$conteudo = $_POST['conteudoEnviar'];

	$NFeAPI = new NFeAPI();

	$retorno = $NFeAPI->previaNFe($token, $conteudo);
	print_r($retorno);
?>