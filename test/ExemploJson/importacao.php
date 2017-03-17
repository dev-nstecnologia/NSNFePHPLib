<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'src/TNFeProc.php';

use br\ns\newssystems\nfe\struct\TNFeProc;
use br\ns\newssystems\nfe\struct\TNFe;
use br\ns\newssystems\nfe\struct\InfNFe;
use br\ns\newssystems\nfe\struct\Ide;
use br\ns\newssystems\nfe\struct\Emit;
use br\ns\newssystems\nfe\struct\TEnderEmi;
use br\ns\newssystems\nfe\struct\Dest;
use br\ns\newssystems\nfe\struct\TEndereco;
use br\ns\newssystems\nfe\struct\Det;
use br\ns\newssystems\nfe\struct\Prod;
use br\ns\newssystems\nfe\struct\DI;
use br\ns\newssystems\nfe\struct\Adi;
use br\ns\newssystems\nfe\struct\Imposto;
use br\ns\newssystems\nfe\struct\ICMS;
use br\ns\newssystems\nfe\struct\ICMSSN102;
use br\ns\newssystems\nfe\struct\IPI;
use br\ns\newssystems\nfe\struct\IPINT;
use br\ns\newssystems\nfe\struct\PIS;
use br\ns\newssystems\nfe\struct\PISNT;
use br\ns\newssystems\nfe\struct\COFINS;
use br\ns\newssystems\nfe\struct\COFINSNT;
use br\ns\newssystems\nfe\struct\Total;
use br\ns\newssystems\nfe\struct\ICMSTot;
use br\ns\newssystems\nfe\struct\Transp;

$NFeProc = new TNFeProc;
$NFeProc->NFe = new TNFe;

$ide = new Ide;
$ide->cUF = 43;
$ide->cNF = "00009483";
$ide->natOp = "EXPORTACAO";
$ide->indPag = 1;
$ide->mod = 55;
$ide->serie = 0;
$ide->nNF = 10379;
$ide->dhEmi = "2017-02-13T00:14:00-02:00";
$ide->tpNF = 1;
$ide->idDest = "3";
$ide->cMunFG = "4303509";
$ide->tpImp = "1";
$ide->tpEmis = "1";
$ide->cDV = "4";
$ide->tpAmb = "2";
$ide->finNFe = "1";
$ide->indFinal = "1";
$ide->indPres = "1";
$ide->procEmi = "0";
$ide->verProc = "3.10";

$emit = new Emit;
$emit->CNPJ = "07364617000135";
$emit->xNome = "NF-E EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL";
$enderEmit = new TEnderEmi;
$enderEmit->xLgr = "AV ANTONIO DURO";
$enderEmit->nro = "9";
$enderEmit->xBairro = "CENTRO";
$enderEmit->cMun = "4303509";
$enderEmit->xMun = "CAMAQUA";
$enderEmit->UF = "RS";
$enderEmit->CEP = "96180000";
$enderEmit->cPais = "1058";
$enderEmit->xPais = "BRASIL";
$emit->enderEmit = $enderEmit;
$emit->IE = "0170108708";
$emit->CRT = "1";

$dest = new Dest;
$dest->idEstrangeiro = "0000000000000";
$dest->xNome = "NF-E EMITIDA EM AMBIENTE DE HOMOLOGACAO - SEM VALOR FISCAL";
$enderDest = new TEndereco;
$enderDest->xLgr = "AV ANTONIO DURO";
$enderDest->nro = "9";
$enderDest->xBairro = "CENTRO";
$enderDest->cMun = "9999999";
$enderDest->xMun = "EXTERIOR";
$enderDest->UF = "EX";
$enderDest->cPais = "2496";
$enderDest->xPais = "ESTADOS UNIDOS";
$dest->enderDest = $enderDest;
$dest->indIEDest = "9";
$dest->email = "suporte@newssystems.eti.br";


$det = new Det;
$det->nItem = 1;

$prod = new Prod;
$prod->cProd = 3058;
$prod->xProd = "LANTERNA A PILHA";
$prod->NCM = "21069090";
$prod->CEST = "1002500";
$prod->CFOP = 7102;
$prod->uCom = "UN";
$prod->qCom = 1;
$prod->vUnCom = 1700.00;
$prod->vProd = "1700.00";
$prod->uTrib = "UN";
$prod->qTrib = 1;
$prod->vUnTrib = 1700;
$prod->indTot = 1;
$prod->nItemPed = 1;

$DI = new DI;
$DI->nDI = "1234567890";
$DI->dDI = "2017-02-13";
$DI->xLocDesemb = "SANTOS";
$DI->UFDesemb = "SP";
$DI->dDesemb = "2017-02-13";
$DI->cExportador = "12345";
$DI->tpViaTransp = "4";
$DI->vAFRMM = "0.00";
$DI->tpIntermedio = 1;


$adi = new Adi;
$adi->nAdicao = 1;
$adi->nSeqAdic = 1;
$adi->cFabricante = "12345";
$adi->vDescDI = "0.00";
$adi->nDraw = 0;

$DI->adi = $adi;
$prod->DI = $DI;
$det->prod = $prod;

$imposto = new Imposto;

$ICMS = new ICMS;
$ICMSSN102 = new ICMSSN102;
$ICMSSN102->orig = 2;
$ICMSSN102->CSOSN = 300;
$ICMS->ICMSSN102 = $ICMSSN102;

$PIS = new PIS;
$pisnt = new PISNT;
$pisnt->CST = "08";
$PIS->PISNT = $pisnt;

$COFINS = new COFINS;
$cofinsnt = new COFINSNT;
$cofinsnt->CST = "08";
$COFINS->COFINSNT = $cofinsnt;

$imposto->ICMS = $ICMS;
$imposto->PIS = $PIS;
$imposto->COFINS = $COFINS;

$det->imposto = $imposto;

$Total = new Total;
$ICMSTot = new ICMSTot;
$ICMSTot->vBC = "0.00";
$ICMSTot->vICMS = "0.00";
$ICMSTot->vICMSDeson = "0.00";
$ICMSTot->vFCPUFDest = "0.00";
$ICMSTot->vICMSUFDest = "0.00";
$ICMSTot->vICMSUFRemet = "0.00";
$ICMSTot->vBCST = "0.00";
$ICMSTot->vST = "0.00";
$ICMSTot->vProd = "1700.00";
$ICMSTot->vFrete = "0.00";
$ICMSTot->vSeg = "0.00";
$ICMSTot->vDesc = "0.00";
$ICMSTot->vII = "0.00";
$ICMSTot->vIPI = "0.00";
$ICMSTot->vPIS = "0.00";
$ICMSTot->vCOFINS = "0.00";
$ICMSTot->vOutro = "0.00";
$ICMSTot->vNF = "1700.00";
$Total->ICMSTot = $ICMSTot;

$transp = new Transp;
$transp->modFrete = 9;


$infNFe = new InfNFe;
$infNFe->ide = $ide;
$infNFe->emit = $emit;
$infNFe->dest = $dest;
$infNFe->det = $det;
$infNFe->total = $Total;
$infNFe->versao = "3.10";
$infNFe->transp = $transp;
$NFeProc->NFe->infNFe = $infNFe;

echo json_encode((array)$NFeProc);

?>