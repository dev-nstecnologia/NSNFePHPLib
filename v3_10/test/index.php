<?php include 'controller.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>NFe API</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div class="container">
    <div class="cmdContainer">
		<h2>Exemplo NFe API</h2><br>

		<form method="POST">
		<label for="token">Token:</label>
		<input type="text" name="token" placeholder="Insira o token" style="width:30%;" value="<?php $_POST['token'] = isset($_POST['token']) ? $_POST['token']:""; ?>"><br>
		<label for="token">CNPJ Emitente:</label>
		<input type="text" name="CNPJ" placeholder="Insira o CNPJ" value="<?php $_POST['CNPJ'] = isset($_POST['CNPJ']) ? $_POST['CNPJ']:""; ?>"><br><br>


		<label for="conteudoEnviar">JSON:</label><br>
		<textarea name="conteudoEnviar" placeholder="Insira o JSON para Emissão" id="conteudoEnviar" value="<?php $_POST['conteudoEnviar'] = isset($_POST['conteudoEnviar']) ? $_POST['conteudoEnviar']:""; ?>"></textarea> <br><br>



		<label>Operação da API:</label><br>
		<select name="funcaoAPI">
			<option value="emissao">1 - Emissão</option>
			<option value="emissaoSincrona">2 - Emissão Síncrona</option>
			<option value="consultaStatusProcessamento">3 - Consulta Status de Processamento</option>
			<option value="cancelamento">4 - Cancelamento</option>
			<option value="CCe">5 - Carta de Correção</option>
			<option value="inutilizacao">6 - Inutilização</option>
			<option value="download">7 - Download</option>
			<option value="downloadEvento">8 - Download Evento</option>
			<option value="previa">9 - Prévia</option>
			<option value="consultaSituacaoNFe">10 - Consulta Situação da NF-e</option>
			<option value="consultaCadastroContribuinte">11 - Consulta Cadastro do Contribuinte</option>
		</select> <br><br>
		
		
		<input type="submit" name="btnEnviaNFe" value="Enviar"> <br><br>

		</form>

		<label>-Token: Obrigatório em todas as operações.</label><br>
		<label>-CNPJ Emitente: Obrigatório nas operações 2, 3, 6 e 11.</label><br>
		<label>-JSON: Obrigatório nas operações 1, 2 e 9.</label><br><br><br>
	</div>
	
	<div class="resultContainer">
		<label for="retornoAPI">Retorno API:</label><br>
		<textarea name="retornoAPI" id="retornoAPI"><?php
		   	if(isset($_SESSION['retornoAPI'])){
		   		$aux = print_r($_SESSION['retornoAPI'], true);
		   		$aux = substr($aux, strpos($aux, "("), strripos($aux, ")"));
		   		print_r($aux);
		   	}?></textarea> <br><br>
	</div>
</body>
</html>