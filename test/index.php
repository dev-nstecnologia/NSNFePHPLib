<?php include 'controller.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>NFe API</title>
</head>
<body>
    <form method="POST">
        <label for="token">Token:</label>
        <input type="text" name="token" placeholder="Insira o token" value="<?php $_POST['token'] = isset($_POST['token']) ? $_POST['token']:""; ?>">
        <label for="token">CNPJ Emitente:</label>
        <input type="text" name="CNPJ" placeholder="Insira o CNPJ" value="<?php $_POST['CNPJ'] = isset($_POST['CNPJ']) ? $_POST['CNPJ']:""; ?>"><br><br>

        <label for="conteudoEnviar">JSON:</label><br>
        <textarea name="conteudoEnviar" placeholder="Insira o JSON para Emissão" id="conteudoEnviar" style="width: 100%; height: 200px; box-sizing:border-box;" value="<?php $_POST['conteudoEnviar'] = isset($_POST['conteudoEnviar']) ? $_POST['conteudoEnviar']:""; ?>"></textarea> <br><br>

        <label>Operação da API:</label><br>
        <input type="radio" name="funcaoAPI" value="emissao" checked>1 - Emissão
        <input type="radio" name="funcaoAPI" value="emissaoSincrona">2 - Emissão Síncrona
        <input type="radio" name="funcaoAPI" value="consultaStatusProcessamento">3 - Consulta Status de Processamento
        <input type="radio" name="funcaoAPI" value="cancelamento">4 - Cancelamento
        <input type="radio" name="funcaoAPI" value="CCe">5 - Carta de Correção
        <input type="radio" name="funcaoAPI" value="inutilizacao">6 - Inutilização<br>
        <input type="radio" name="funcaoAPI" value="download">7 - Download
        <input type="radio" name="funcaoAPI" value="downloadEvento"> 8 - Download Evento
        <input type="radio" name="funcaoAPI" value="previa">9 - Prévia
        <input type="radio" name="funcaoAPI" value="consultaSituacaoNFe">10 - Consulta Situação da NF-e
        <input type="radio" name="funcaoAPI" value="consultaCadastroContribuinte">11 - Consulta Cadastro do Contribuinte<br><br>
        
        <input type="submit" name="btnEnviaNFe" value="Enviar"> <br>
        -Token: Obrigatório em todas as operações.<br>
        -CNPJ Emitente: Obrigatório nas operações 3, 6 e 11.<br>
        -JSON: Obrigatório nas operações 1, 2 e 9.

    </form>

</body>
</html>