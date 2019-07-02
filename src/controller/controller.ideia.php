<?php

	require_once '../model/ideia.class.php';
	
	$ideia = new Ideia;

	date_default_timezone_set('America/Bahia');
	$ideia->setData(date("H:i:s"));
	$ideia->setHora(date("Y-m-d"));

	$ideia->setTitulo($_POST["titulo"]);
	$ideia->setDescricao($_POST["descricao"]);
	$ideia->setBeneficio($_POST["beneficio"]);
	$ideia->setParticipante($_POST["participante"]);
	$ideia->setUsuario($_POST['usuario']);
	
	$diretorio = "../upload/ideias/";

	if(!is_dir($diretorio)){ 
		echo "Pasta $diretorio nao existe";
	}else{
		$arquivo = isset($_FILES['anexo']) ? $_FILES['anexo'] : FALSE;
		for ($controle = 0; $controle < count($arquivo['name']); $controle++){

			$destino = $diretorio."/".$arquivo['name'][$controle];
			if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
				$ideia->setAnexo($arquivo['name']); 
			}else{
				echo "Erro ao realizar upload";
			}

		}
	}

	$funcao = $_REQUEST["action"];

	if (function_exists($funcao)) {
		call_user_func($funcao);
	}

	$ideia->Publicar();

	//$ideia->editarIdeia();
	//$ideia->deletarIdeia();
	//$ideia->curtir();
	//$ideia->Comentar();

