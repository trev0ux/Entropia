<?php

	require_once '../model/campanha.class.php';
	
	$campanha = new Campanha;
	$campanha->setTema($_POST["tema"]);
	$campanha->setDescricao($_POST["descricao"]);
	$campanha->setObjetivo($_POST["objetivo"]);
	$campanha->setRegras($_POST["regra"]);
    $campanha->setPremios($_POST["premio"]);

	if (isset($_FILES['foto-campanha'])) {
		$extensao = strtolower(substr($_FILES['foto-campanha']['name'], -4));
		$arquivo = md5(time()) . $extensao;
		$diretorio = "../public/img/campanhas/";
		
		move_uploaded_file($_FILES['foto-campanha']['tmp_name'], $diretorio.$arquivo);
		
    	$campanha->setImagem($arquivo);
	}

	$campanha->lançarCampanha();
