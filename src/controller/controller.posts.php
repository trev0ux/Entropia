<?php 

	require_once '../model/post.class.php';

	$post = new Post;

	date_default_timezone_set('America/Bahia');
	$post->setData(date("Y-m-d"));
	$post->setHora(date("H:i:s"));
	
	$post->setPostagem($_POST['postagem']);

	if ($_FILES['imagem'] == "") {
		$post->setImagem(null);
	}else {
		$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
		$arquivo = md5(time()) . $extensao;
		$diretorio = "../upload/";
		
		move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$arquivo);
		
    	$post->setImagem($arquivo);
	}

	$post->setUsuario($_POST['usuario']);

	$post->Publicar();