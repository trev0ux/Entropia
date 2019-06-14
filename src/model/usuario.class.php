<?php

	class Usuario {
		private $nome;
		private $sobrenome;
		private $nascimento;
		private $email;
		private $usuario;
		private $senha;
		
		function getNome() {
			return $this->nome;
		}
		function setNome($nome) {
			$this->nome = $nome;
		}
		
		function getSobrenome() {
			return $this->sobrenome;
		}
		function setSobrenome($sobrenome) {
			$this->sobrenome = $sobrenome;
		}
		
		function getNascimento() {
			return $this->nascimento;
		}
		function setNascimento($nascimento) {
			$this->nascimento = $nascimento;
		}
		
		function getEmail() {
			return $this->email;
		}
		function setEmail($email) {
			$this->email = $email;
		}
		
		function getUsuario() {
			return $this->usuario;
		}
		function setUsuario($usuario) {
			$this->usuario = $usuario;
		}
		
		function getTipo() {
			return $this->tipo;
		}
		function setAnexo($tipo) {
			$this->tipo = $tipo;
		}
		
		function getSenha() {
			return $this->senha;
		}
		function setSenha($senha) {
			$this->senha = $senha;
		}
		
		function logar() {
			include_once("../conexao/conexao.php");
			
			$sql = "SELECT cadastro.usuario, cadastro.senha, usuario.tipo_usuario FROM cadastro JOIN usuario ON cadastro.id_cadastro=usuario.id_cadastrofk WHERE cadastro.usuario ='$this->usuario' AND cadastro.senha = '$this->senha'";

			$consulta = mysqli_query($conn, $sql);

			if (mysqli_num_rows($consulta) == 1) {  
				while ($percorrer = mysqli_fetch_array($consulta)) {

					$tipo = $percorrer['tipo_usuario'];

					session_start();  #Criar sessão

					$_SESSION['login'] = $this->usuario;
					$_SESSION['senha'] = $this->senha;
					$_SESSION['tipo'] = $tipo;

					header('location:../views/preloader.php');

				}
			 }else {
				unset ($_SESSION['login']);
				unset ($_SESSION['senha']);

				header('location:../views/index.php?erro');

			 }
		}
	}