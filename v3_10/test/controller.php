<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include "../src/NFeAPI.php";
	if(!isset($_SESSION)) session_start();
	
	if(isset($_POST['funcaoAPI']))
		switch($_POST['funcaoAPI']){
		    case 'emissao':
		    	include 'emissao.php';
		    	break;
			
			case 'emissaoSincrona':
		    	include 'emissaoSincrona.php';
		    	break;
		    
		    case 'consultaStatusProcessamento':
		    	include 'consultaStatusProcessamento.php';
		    	break;

		    case 'cancelamento':
		    	include 'cancelamento.php';
		    	break;
			
			case 'CCe':
		    	include 'CCe.php';
		    	break;
		    
		    case 'inutilizacao':
		    	include 'inutilizacao.php';
		    	break;

		    case 'download':
		    	include 'download.php';
		    	break;
			
		    case 'downloadEvento':
		    	include 'downloadEvento.php';
		    	break;

			case 'previa':
		    	include 'previa.php';
		    	break;
		    
		    case 'consultaSituacaoNFe':
		    	include 'consultaSituacaoNFe.php';
		    	break;

		    case 'consultaCadastroContribuinte':
		    	include 'consultaCadastroContribuinte.php';
		    	break;
		}

?>