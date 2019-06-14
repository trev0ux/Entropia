<?php

	require_once '../model/usuario.class.php';
	
	$usuario = new Usuario;
	$usuario->setUsuario($_POST["login"]);
	$usuario->setSenha($_POST["senha"]);

	$usuario->Logar();