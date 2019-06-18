<?php

	require_once '../model/usuario.class.php';

	$login = new Usuario;
	$login->setUsuario($_POST["login"]);
	$login->setSenha($_POST["senha"]);
		
	$login->Logar();