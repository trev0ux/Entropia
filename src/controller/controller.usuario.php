<?php

	require_once '../model/usuario.class.php';

	$usuario = new Usuario;

	$usuario->setNome($_POST["nome"]);
	$usuario->setSobrenome($_POST["sobrenome"]);
	$usuario->setNascimento($_POST["data"]);
	$usuario->setSetor($_POST["cargo"]);
	$usuario->setEmail($_POST["email"]);
	$usuario->setUsuario($_POST["usuario"]);
	$usuario->setSenha($_POST["senha"]);
	$usuario->setAvatar($_POST["avatar"]);
		
	$usuario->Cadastrar();
	$usuario->Logar();

	