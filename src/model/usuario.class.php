<?php

	include_once("../conexao/conexao.php");

	class Usuario {
		private $idCad;
		private $nome;
		private $sobrenome;
		private $nascimento;
		private $email;
		private $usuario;
		private $senha;
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
		
		function Cadastrar() {
			$cad = "INSERT INTO cadastro VALUES ('$this->idCad','$this->nome','$this->sobrenome','$this->nascimento','$this->email','$this->usuario','$this->senha')";
			
			$user = "INSERT INTO usuario VALUES ('$this->idUser','$this->tipo', null, '$this->idCad')";
			
			if (mysqli_query($conn, $cad, $user) == FALSE) {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	        mysqli_close($conn);
		}
		
		function logar() {
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

		function editarPerfil (){
	    if(isset($_POST['alt']) && $_POST['alt'] == "cad"){
		if($_POST['nome'] && $_POST['usuario'] && $_POST['senha']){
			$nome = addslashes($_POST['nome']);
			$usuario = addslashes($_POST['usuario']);
			$senha = addslashes($_POST['senha']);

			$sql = $con->prepare("UPDATE usuarios SET nome = ?, usuario = ?, senha = ? WHERE id = ?");
			$sql->bind_param("ssss", $nome, $usuario, $senha, $idUser);
			$sql->execute();

			if($sql->affected_rows > 0){
				redireciona('perfil', 'success', 2, 'Dados alterado com sucesso!');
			}else if($sql->affected_rows == 0){
				echo "<div class='alert alert-warning'>Você não atualizou nada!</div>";
			}else if($sql->affected_rows < 0){
				echo "<div class='alert alert-danger'>Erro ao atualizar os dados!</div>";
			}


		}else{
			echo "<div class='alert alert-danger'>Preencha todos os campos!</div>";
		}
	}
		}

	function exibirPosts{
			$query = $con->prepare("SELECT * FROM posts ORDER BY id DESC");
			$query->execute();
			$get = $query->get_result();
			$total = $get->num_rows;
			if($total > 0){
				while($dados = $get->fetch_array()){
	}
	}	
	 }
	}