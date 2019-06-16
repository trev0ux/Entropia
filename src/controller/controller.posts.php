<?php 

	require_once '../model/posts.class.php';

	$posts = new Posts;
	$posts->setIdPost($_POST['id-post']);
	$posts->setTitulo($_POST['titulo']);
	$posts->setPostagem($_POST['posts']);
    $posts->setImagem($_POST['imagem']);
    $posts->setCurtidas($_POST['curtir']);
    $posts->setComentario($_POST['comentario']);



    $posts->Publicar ();
    $posts->curtir ();
    $posts->editar ();
    $posts->deletarPost ();
    $posts->editarPost ();
    $posts->Comentar ();

 ?>   