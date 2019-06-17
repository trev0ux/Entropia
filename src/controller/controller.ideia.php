<?php

	require_once '../model/ideia.class.php';
	
	$ideia = new Ideia;
	$ideia->setTitulo($_POST["titulo"]);
	$ideia->setDescricao($_POST["descricao"]);
	$ideia->setBeneficio($_POST["beneficio"]);
	$ideia->setParticipante($_POST["participante"]);
	
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
