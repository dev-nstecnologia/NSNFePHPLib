<?php
	$token = $_POST['token'];
	$chNFe = "43161207364617000135550000000099881000094837";
    $tpDown = "X";
    $tpEvento = "CCE";
    $nSeqEvento = 1;

	$NFeAPI = new NFeAPI();

	$retorno = $NFeAPI->downloadEventoNFe($token, $chNFe, $tpDown, $tpEvento, $nSeqEvento);
	print_r($retorno);
?>