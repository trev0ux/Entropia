<?php 

	require_once '../model/metodologia.class.php';

	$metodo = new Metodologia;
	$metodo->setTitulo($_POST['nome-metodo']);
	$metodo->setDefinicao($_POST['definicao-metodo']);
	$metodo->setDescricao($_POST['descricao-metodo']);
	$metodo->setObjetivo($_POST['objetivo-metodo']);
	
	if (isset($_FILES['anexo-metodo'])) {
<<<<<<< HEAD
		$extensao = strtolower(substr($_FILES['anexo-metodo']['name'] -4));
		$arquivo = md5(time()) . $extensao;
		$diretorio = "upload/";
=======
		$extensao = strtolower(substr($_FILES['anexo-metodo']['name'], -4));
		$arquivo = md5(time()) . $extensao;
		$diretorio = "../upload/";
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
		
		move_uploaded_file($_FILES['anexo-metodo']['tmp_name'], $diretorio.$arquivo);
		
		$metodo->setAnexo($arquivo);
	}

	$metodo->Cadastrar();