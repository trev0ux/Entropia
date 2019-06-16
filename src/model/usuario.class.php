<?php

	class Usuario {
		
		private $id;
		private $nome;
		private $sobrenome;
		private $nascimento;
		private $setor;
		private $email;
		private $usuario;
		private $senha;
		private $avatar;
		private $tipo;
		
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
		
		function getSetor() {
			return $this->setor;
		}
		function setSetor($setor) {
			$this->setor = $setor;
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
		
		function getSenha() {
			return $this->senha;
		}
		function setSenha($senha) {
			$this->senha = $senha;
		}
		
		function getAvatar() {
			return $this->avatar;
		}
		function setAvatar($avatar) {
			$this->avatar = $avatar;
		}
		
		function Cadastrar() {
			include_once("../conexao/conexao.php");
			
			$incrementar = "select id_cadastro FROM cadastro";
			$resultado = mysqli_query($conn, $incrementar);

			while ($row = mysqli_fetch_array($resultado)) {
				$this->id = $row['id_cadastro'] + 1;
			}
			
			$sql = "INSERT INTO cadastro VALUES('$this->id','$this->nome','$this->sobrenome','$this->nascimento','$this->email','$this->usuario','$this->senha','$this->setor')";
			
			if(mysqli_query($conn, $sql)) {
				echo "";
			}else {
				 die (mysqli_error($conn));
			}

			$query = "INSERT INTO usuario VALUES($this->id,0,'$this->avatar',$this->id)";
			if(mysqli_query($conn, $query)) {
				header('location:../views/preloader.php');
			}else {
				 die (mysqli_error($conn));
			}

			mysqli_close($conn);
		}
		
		function Logar() {
			include_once("../conexao/conexao.php");
			
			$sql = "SELECT * FROM cadastro JOIN usuario ON cadastro.id_cadastro = usuario.id_cadastrofk WHERE cadastro.usuario ='$this->usuario' AND cadastro.senha = '$this->senha'";

			$consulta = mysqli_query($conn, $sql);

			if (mysqli_num_rows($consulta) == 1) {  
				while ($percorrer = mysqli_fetch_array($consulta)) {

					$tipo = $percorrer['nivel'];

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