<?php 

	class Post {
		private $id;
		private $data;
		private $hora;
		private $postagem;
		private $imagem;
		private $curtidas;
		private $comentario;
		private $usuario;

		public function getData() {
			return $this->data;
		}
		public function setData($data) {
			$this->data = $data;
		}
		
		function getHora() {
			return $this->hora;
		}
		function setHora($hora) {
			$this->hora = $hora;
		}

		public function getPostagem() {
			return $this->postagem;
		}
		public function setPostagem($postagem) {
			$this->postagem = $postagem;
		}

		public function getImagem() {
			return $this->imagem;
		}
		public function setImagem($imagem) {
			$this->imagem = $imagem;
		}
		
		public function getUsuario() {
			return $this->usuario;
		}
		public function setUsuario($usuario) {
			$this->usuario = $usuario;
		}

		function Publicar (){
			include_once("../conexao/conexao.php");
			
			$incrementar = "select id_post FROM post";
			$resultado = mysqli_query($conn, $incrementar);
			
			while ($row = mysqli_fetch_array($resultado)) {
				$this->id = $row['id_post'] + 1;
			}
				
			$sql = "INSERT INTO post VALUES('$this->id','$this->data','$this->hora', '$this->postagem', '$this->imagem', 0, '$this->usuario')";
	        
			if (mysqli_query($conn, $sql)) {
				header('location:../views/home.php');				
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}

		function Curtir(){
			include_once("../conexao/conexao.php");
			
			$incrementar = "select curtidas FROM post";
			$resultado = mysqli_query($conn, $incrementar);
			
			while ($row = mysqli_fetch_array($resultado)) {
				$this->id = $row['curtidas'] + 1;
			}
				
			$curtir = "UPDATE post SET curtidas = '$this->curtidas' WHERE id_post = '$this->id'";
	        
			if (mysqli_query($conn, $curtir)) {
				echo "";				
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
		
		function Deletar() {
			include_once("../conexao/conexao.php");
			$deletar = "DELETE FROM post WHERE id_post = '$this->id'";
			if (mysqli_query($conn, $deletar)) {
				echo "";				
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);
		}

		function Editar() {
			include_once("../conexao/conexao.php");
			
			$editar = "UPDATE post SET postagem = '$this->postagem' WHERE id_post = '$this->id'";
			if(mysqli_query($conn,$editar)) {
				header('location:../views/home.php');
				echo "<div class='alert alert-success'>Publicação alterada com sucesso!</div>";
			}else{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			mysqli_close($conn);
		}
    
		function Comentar() {
			include_once("../conexao/conexao.php");
			
			$sql = "INSERT INTO comentario VALUES('$this->id_comentario','$this->comentario', '$this->data',null,$this->usuario,null)";
			
			if(mysqli_query($conn, $sql)){
				header('location:../views/home.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
    	}
	}
