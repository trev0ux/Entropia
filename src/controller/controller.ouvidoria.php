<?php

	require_once '../model/ouvidoria.class.php';
	
	$ouvidoria = new Ouvidoria;
	$ouvidoria->setAssunto($_POST["assunto"]);
	$ouvidoria->setSetor($_POST["setor"]);
	$ouvidoria->setMensagem($_POST["mensagem"]);
	$ouvidoria->setAnexo($_POST["anexo"]);

	$ouvidoria->Cadastrar();