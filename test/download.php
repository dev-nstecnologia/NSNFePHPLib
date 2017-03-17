<?php
	$token = $_POST['token'];
	$chNFe = "43161207364617000135550000000099881000094837";
    $tpDown = "X";

	$NFeAPI = new NFeAPI();

	$retorno = $NFeAPI->downloadNFe($token, $chNFe, $tpDown);
	print_r($retorno);
?>