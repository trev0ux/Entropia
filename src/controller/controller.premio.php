<?php
	
	require_once '../model/premios.class.php';

	$premio = new Premios;
	$premio->setNome($_POST["nome"]);
	$premio->setPontos($_POST["pontos"]);

	if (isset($_FILES['premio-foto'])) {
		$extensao = strtolower(substr($_FILES['premio-foto']['name'], -4));
		$arquivo = md5(time()) . $extensao;
		$diretorio = "../upload/";
		
		move_uploaded_file($_FILES['premio-foto']['tmp_name'], $diretorio.$arquivo);
		
		$premio->setPremioFoto($arquivo);
	}

	$premio->Cadastrar();