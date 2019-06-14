<?php

	require_once '../model/ideia.class.php';
	
	$ideia = new Ideia;
	$ideia->setTitulo($_POST["titulo"]);
	$ideia->setDescricao($_POST["descricao"]);
	$ideia->setBeneficio($_POST["beneficio"]);
	$ideia->setParticipante($_POST["participante"]);
	$ideia->setAnexo($_POST["anexo"]);
	$hora = $_POST['hora'];
 	$data = $_POST['data'];
	
	date_default_timezone_set('America/Bahia');
	$hora = date("H:i:s");
	$data = date("Y-m-d");

	$ideia->Cadastrar();
