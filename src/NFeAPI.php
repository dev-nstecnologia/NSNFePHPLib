<?php
class NFeAPI{
	private $urlEnvioNFe;
	private $urlStatusProcessamento;
	private $urlDownloadNFe;
	private $urlDownloadEventoNFe;
	private $urlCancelamentoNFe;
	private $urlConsultaSituacaoNFe;
	private $urlCCeNFe;
	private $urlInutilizaNFe;
	private $urlConsultaCadastroContribuinte;
	private $urlPreviaNFe;
	

	public function __construct($tpAmb){
		//Passa os urls das operações
		if($tpAmb == 1){
			$this->urlEnvioNFe = "https://nfe.ns.eti.br/nfe/issue";
			$this->urlStatusProcessamento = "https://nfe.ns.eti.br/nfe/issue/status";
			$this->urlDownloadNFe = "https://nfe.ns.eti.br/nfe/get";
			$this->urlDownloadEventoNFe = "https://nfe.ns.eti.br/nfe/get/event";
			$this->urlCancelamentoNFe = "https://nfe.ns.eti.br/nfe/cancel";
			$this->urlConsultaSituacaoNFe = "https://nfe.ns.eti.br/nfe/stats";
			$this->urlCCeNFe = "https://nfe.ns.eti.br/nfe/cce";
			$this->urlInutilizaNFe = "https://nfe.ns.eti.br/nfe/inut";
			$this->urlConsultaCadastroContribuinte = "https://nfe.ns.eti.br/util/conscad";
			$this->urlPreviaNFe = "https://nfe.ns.eti.br/util/preview/nfe";
		}
		else{
			$this->urlEnvioNFe = "http://nfehml.ns.eti.br/nfe/issue";
			$this->urlStatusProcessamento = "http://nfehml.ns.eti.br/nfe/issue/status";
			$this->urlDownloadNFe = "http://nfehml.ns.eti.br/nfe/get";
			$this->urlDownloadEventoNFe = "http://nfehml.ns.eti.br/nfe/get/event";
			$this->urlCancelamentoNFe = "http://nfehml.ns.eti.br/nfe/cancel";
			$this->urlConsultaSituacaoNFe = "http://nfehml.ns.eti.br/nfe/stats";
			$this->urlCCeNFe = "http://nfehml.ns.eti.br/nfe/cce";
			$this->urlInutilizaNFe = "http://nfehml.ns.eti.br/nfe/inut";
			$this->urlConsultaCadastroContribuinte = "http://nfehml.ns.eti.br/util/conscad";
			$this->urlPreviaNFe = "http://nfehml.ns.eti.br/util/preview/nfe";

		}
	}

	public function emitirNFeSincrono($token, $CNPJEmit, $nfe, $tpDown = 'x'){

		$result = $this->emitirNFe($token, $nfe);

		$retornoConsulta = $result;

		if(!($this->isStatusOK(200))) return $retornoConsulta;

		$nsNRec = $retornoConsulta['nsNRec'];
		$counter = 0;
		do {
			if ($counter == 0){
				sleep(.25);
			} else {
				sleep(3);
			}

			$counter++;

			$result = $this->consultarStatusProcessamento($token, $CNPJEmit, $nsNRec);
			$retornoConsulta = $result;

			if($this->isStatusOK($retornoConsulta['status'])) break;

			if(isset($retornoConsulta['cStat'])) {
				if (!$this->isCStatLoteEmProcessamento($retornoConsulta['cStat'])) return $retornoConsulta;

			} else {
				return $retornoConsulta;
			}

		} while ($counter < 3);

		if($this->isCStatNFeAutorizada($retornoConsulta['cStat'])){
			$retornoXml = $this->downloadNFe($token, $retornoConsulta['chNFe'], $tpDown);
			
			if (stripos($tpDown, 'x') !== false) $retornoConsulta['xml'] = $retornoXml['xml'];
			if (stripos($tpDown, 'p') !== false) $retornoConsulta['pdf'] = $retornoXml['pdf'];
		}

		return $retornoConsulta;
	}

	public function emitirNFe($token, $conteudo){
		$conteudo = trim($conteudo);
		if($conteudo[0] == "{" and $conteudo[strlen($conteudo)-1] == "}"){
			$json = '{"X-AUTH-TOKEN": "'. $token . '", ' . substr($conteudo, 1, strlen($conteudo)-1);
		}

		else $json = '{"X-AUTH-TOKEN": "'. $token . '", ' . $conteudo . ' }';

		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlEnvioNFe);
		return $result;
	}

	public function consultarStatusProcessamento($token, $CNPJ, $nsNRec){
		//Monta json
		$json = '{"X-AUTH-TOKEN": "' . $token . '",
				"CNPJ": "' . $CNPJ . '",
				"nsNRec": "' . $nsNRec . '"
		}';

		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlStatusProcessamento);
		return $result;
	}

	public function downloadNFe($token, $chNFe, $tpDown){
		//Monta json
		$json = '{"X-AUTH-TOKEN": "' . $token . '",
				"chNFe": "' . $chNFe . '",
				"tpDown": "' . $tpDown . '"
		}';
		
		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlDownloadNFe);
		return $result;
	}
	
	public function cancelaNFe($token, $chNFe, $tpAmb, $dhEvento, $nProt, $xJust){
		//Monta json
		$json = '{"X-AUTH-TOKEN": "' . $token . '", 
				"chNFe": "' . $chNFe . '", 
				"tpAmb": "' . $tpAmb . '", 
				"dhEvento": "' . $dhEvento . '", 
				"nProt": "' . $nProt . '", 
				"xJust": "' . $xJust . '"

		}';

		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlCancelamentoNFe);
		return $result;
	}

	public function cceNFe($token, $chNFe, $tpAmb, $dhEvento, $nSeqEvento, $xCorrecao){
		//Monta json
		$json = '{"X-AUTH-TOKEN": "' . $token . '", 
				"chNFe": "' . $chNFe . '", 
				"tpAmb": "' . $tpAmb . '",
				"dhEvento": "' . $dhEvento . '",
				"nSeqEvento": "' . $nSeqEvento . '",
				"xCorrecao": "' . $xCorrecao . '"
		}';

		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlCCeNFe);
		return $result;
	}

	public function inutilizaNFe($token, $cUF, $tpAmb, $ano, $CNPJ, $serie, $nCTIni, $nCTFin, $xJust){
		//Monta json
		$json = '{"X-AUTH-TOKEN": "' . $token . '", 
				"cUF": "' . $cUF . '", 
				"tpAmb": "' . $tpAmb . '",
				"ano": "' . $ano . '",
				"CNPJ": "' . $CNPJ . '",
				"serie": "' . $serie . '",
				"nNFIni": "' . $nCTIni . '",
				"nNFFin": "' . $nCTFin . '",
				"xJust": "' . $xJust . '"
		}';

		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlInutilizaNFe);
		return $result;
	}

	public function previaNFe($token, $conteudo){
		$json = '{"X-AUTH-TOKEN": "'. $token . '", ' . $conteudo . ' }';

		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlPreviaNFe);
		return $result;
	}

	public function downloadEventoNFe($token, $chNFe, $tpDown, $tpEvento, $nSeqEvento){
		//Monta json
		$json = '{"X-AUTH-TOKEN": "' . $token . '",
				"chNFe": "' . $chNFe . '",
				"tpDown": "' . $tpDown . '",
				"tpEvento": "' . $tpEvento . '",
				"nSeqEvento": "' . $nSeqEvento . '"
		}';
		
		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlDownloadEventoNFe);
		return $result;
	}

	public function consultaSituacaoNFe($token, $chNFe, $tpAmb){
		//Monta json
		$json = '{"X-AUTH-TOKEN": "' . $token . '", 
				"chNFe": "' . $chNFe . '", 
				"tpAmb": "' . $tpAmb . '"
		}';

		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlConsultaSituacaoNFe);
		return $result;
	}

	public function consultaCadastroContribuinte($token, $CNPJEmitente, $UF, $documentoConsulta, $tpConsulta){
		//Monta json
		if($tpConsulta == "IE"){
			$json = '{"X-AUTH-TOKEN": "' . $token . '", 
				"CNPJCont": "' . $CNPJEmitente . '", 
				"UF": "' . $UF . '",
				"IE": "' . $documentoConsulta . '"
			}';
		}
		else{
			if($tpConsulta == "CNPJ"){
				$json = '{"X-AUTH-TOKEN": "' . $token . '", 
					"CNPJCont": "' . $CNPJEmitente . '", 
					"UF": "' . $UF . '",
					"CNPJ": "' . $documentoConsulta . '"
				}';
			}
			else{
				$json = '{"X-AUTH-TOKEN": "' . $token . '", 
					"CNPJCont": "' . $CNPJEmitente . '", 
					"UF": "' . $UF . '",
					"CPF": "' . $documentoConsulta . '"
				}';
			}
		}

		//Envia json para url
		$result = $this->enviaJsonParaAPI($json, $this->urlConsultaCadastroContribuinte);
		return $result;
	}

	public function salvarDocumento($conteudo, $caminhoEnomeArquivo, $isBase64 = false){
		if(isset($conteudo) and isset($caminhoEnomeArquivo))
			if($isBase64 == true)
				$this->salvarDocumentoBase64($conteudo, $caminhoEnomeArquivo);
			else
				$this->salvarDocumentoTodos($conteudo, $caminhoEnomeArquivo);
		
	}

	private function salvarDocumentoTodos($conteudo, $caminhoEnomeArquivo){
		$fp = fopen($caminhoEnomeArquivo, 'w+');
		fwrite($fp, $conteudo);
		fclose($fp);
	}

	private function salvarDocumentoBase64($conteudo, $caminhoEnomeArquivo){
		$fp = fopen($caminhoEnomeArquivo, 'w+');
		fwrite($fp, base64_decode($conteudo));
		fclose($fp);
	}

	private function wsResultToArray($result){
		return (array)json_decode(($result));
	}

	private function isStatusOK($status){
		return $status == 200;
	}

	private function isCStatNFeAutorizada($cStat){
		return $cStat == 100;
	}

	private function isCStatLoteEmProcessamento($cStat){
		return $cStat == 105;
	}

	private function enviaJsonParaAPI($conteudoAEnviar, $url){
		//Inicializa cURL para uma URL.
		$ch = curl_init($url);
		//Marca que vai enviar por POST(1=SIM).
		curl_setopt($ch, CURLOPT_POST, 1);
		//Passa um json para o campo de envio POST.
		curl_setopt($ch, CURLOPT_POSTFIELDS, $conteudoAEnviar);
		//Marca como tipo de arquivo enviado json
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		//Marca que vai receber string
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//Inicia a conexão
		$result = curl_exec($ch);
		//Fecha a conexão
		curl_close($ch);

		return $this->wsResultToArray($result);
	}
}
?>