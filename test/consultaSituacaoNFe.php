<?php
	$token = $_POST['token'];
	$chNFe = "43161107364617000135550000000099461000094833";
    $tpAmb = "2";

	$NFeAPI = new NFeAPI();

	$retorno = $NFeAPI->consultaSituacaoNFe($token, $chNFe, $tpAmb);
	print_r($retorno);
?>