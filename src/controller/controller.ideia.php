<?php

	require_once '../model/ideia.class.php';
	
	$ideia = new Ideia;
	$ideia->setTitulo($_POST["titulo"]);
	$ideia->setDescricao($_POST["descricao"]);
	$ideia->setBeneficio($_POST["beneficio"]);
	$ideia->setParticipante($_POST["participante"]);
<<<<<<< HEAD
	
	$diretorio = "../upload/ideias";
	if (!isset($diretorio)) {
		
		$extensao = strtolower(substr($_FILES['anexo[]']['name'], -4));
		$arquivo = md5(time()) . $extensao;
		$diretorio = "../upload/ideias/";
		
		move_uploaded_file($_FILES['anexo[]']['tmp_name'], $diretorio.$arquivo);
		
		$ideia->setAnexo($arquivo);
	}else {
		$arquivo = isset($_FILES['anexo']) ? $_FILES['anexo'] : FALSE;

		for ($i = 0; $i < count($arquivo['name']); $i) {
			$destino = $diretorio."/".$arquivo['name'][$i];
			
			move_uploaded_file($arquivo['tmp_name'][$i], $destino);
		}
	}

	$hora = $_POST['hora'];
 	$data = $_POST['data'];
	
	date_default_timezone_set('America/Bahia');
	$hora = date("H:i:s");
	$data = date("Y-m-d");

	$ideia->Cadastrar();
	$ideia->publicarIdeia();
	$ideia->editarIdeia();
	$ideia->deletarIdeia();
	$ideia->curtir();
	$ideia->Comentar();
=======

	date_default_timezone_set('America/Bahia');
	$ideia->setData(date("d-m-Y"));
	$ideia->setHora(date("H:i:s"));
	
	$diretorio = "../upload/ideias/";

	if(!is_dir($diretorio)){ 
		echo "Pasta $diretorio nao existe";
	}else{
		$arquivo = isset($_FILES['anexo']) ? $_FILES['arquivo'] : FALSE;
		for ($controle = 0; $controle < count($arquivo['name']); $controle++){

			$destino = $diretorio."/".$arquivo['name'][$controle];
			if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
				$ideia->setAnexo($arquivo['name']); 
			}else{
				echo "Erro ao realizar upload";
			}

		}
	}

	$ideia->setUsuario($_POST['usuario']);

	//$ideia->Salvar();

	$ideia->Publicar();
	//$ideia->editarIdeia();
	//$ideia->deletarIdeia();
	//$ideia->curtir();
	//$ideia->Comentar();

>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
