<?php

	require_once '../model/campanha.class.php';
	
	$campanha = new Campanha;
	$campanha->setTema($_POST["tema"]);
	$campanha->setDescricao($_POST["descricao"]);
	$campanha->setObjetivo($_POST["objetivo"]);
	$campanha->setRegras($_POST["regra"]);
    $campanha->setPremios($_POST["premio"]);
    $campanha->setFoto_camp($_POST["foto-campanha"]);

	$campanha->lançarCampanha();
