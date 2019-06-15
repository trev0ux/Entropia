<?php

	require_once '../model/ouvidoria.class.php';
	
	$ouvidoria = new Ouvidoria;
	$ouvidoria->setAssunto($_POST["assunto"]);
	$ouvidoria->setSetor($_POST["setor"]);
	$ouvidoria->setMensagem($_POST["mensagem"]);

	if (isset($_FILES['anexo'])) {
		$extensao = strtolower(substr($_FILES['anexo']['name'], -4));
		$arquivo = md5(time()) . $extensao;
		$diretorio = "../upload/";
		
		move_uploaded_file($_FILES['anexo']['tmp_name'], $diretorio.$arquivo);
		
		$ouvidoria->setAnexo($arquivo);
	}

	$ouvidoria->Cadastrar();