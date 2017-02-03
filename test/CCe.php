<?php
	$token = $_POST['token'];
	$chNFe = "43161207364617000135550000000099881000094837";
    $tpAmb = 2;
    $dhEvento = "2017-01-06T00:27:00-02:00";
    $nSeqEvento = 1;
    $xCorrecao = "teste para api nsnfe";

	$NFeAPI = new NFeAPI(2);

	$retorno = $NFeAPI->cceNFe($token, $chNFe, $tpAmb, $dhEvento, $nSeqEvento, $xCorrecao);
	print_r($retorno);
?>