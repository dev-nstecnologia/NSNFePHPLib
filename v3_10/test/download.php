<?php
	$token = $_POST['token'];
	$chNFe = "43170707364617000135550010000108271000108108";
    $tpAmb = "2";
    $tpDown = "XP";

	$NFeAPI = new NFeAPI();

	$_SESSION['retornoAPI'] = $NFeAPI->downloadNFe($token, $chNFe, $tpAmb, $tpDown);

?>