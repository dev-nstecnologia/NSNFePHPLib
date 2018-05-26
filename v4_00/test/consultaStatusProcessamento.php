<?php
	$token = $_POST['token'];
	$CNPJEmitente = $_POST['CNPJ'];

	$NFeAPI = new NFeAPI();

	$_SESSION['retornoAPI'] = $NFeAPI->consultarStatusProcessamento($token, $CNPJEmitente, 1506);
?>