<<<<<<< HEAD
<?php

	class Post {
		private $idPost;
		private $data;
=======
<?php 

	class Post {
		private $id;
		private $data;
		private $hora;
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
		private $postagem;
		private $imagem;
		private $curtidas;
		private $comentario;
<<<<<<< HEAD

		public function getIdPost() {
			return $this->idPost;
		}
		public function setIdPost($idPost) {
			$this->idPost = $idPost;
		}
=======
		private $usuario;
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099

		public function getData() {
			return $this->data;
		}
		public function setData($data) {
			$this->data = $data;
		}
<<<<<<< HEAD
=======
		
		function getHora() {
			return $this->hora;
		}
		function setHora($hora) {
			$this->hora = $hora;
		}
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099

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
<<<<<<< HEAD

		public function getCurtidas() {
			return $this->curtidas;
		}
		public function setCurtidas($curtidas) {
			$this->curtidas = $curtidas;
		}

		public function getComentario() {
			return $this->comentario;
		}

		public function setComentario($comentario) {
			$this->comentario = $comentario;
		}

	function Publicar (){
	if(isset($_POST['env']) && $_POST['env'] == "post"){
		if($_POST['post']){
			$idUser = $_SESSION['login'];
			$post = $_POST['post'];

			$uploaddir = '../images/uploads/';
			$uploaddirN = 'images/uploads/';
			$uploadfile = $uploaddir.basename($_FILES['imagem']['name']);
			$uploadfileN = $uploaddirN.basename($_FILES['imagem']['name']);


			$query = $con->prepare("INSERT INTO posts (id, data, postagem, imagem) VALUES ($this->id, $this-data, $this->postagem, $this->imagem)");
			$query->bind_param("sssss", $idUser, $data, $postagem, $uploadfileN);
			$query->execute();

			if($query->affected_rows > 0 && move_uploaded_file($_FILES['imagem']['name'], $uploadfile)){
				echo "<div class='alert alert-success'>Publicação enviada com sucesso!</div>";
			}else{
				echo "<div class='alert alert-danger'>Erro ao enviar a publicação!</div>";
			}
<<<<<<< HEAD:src/model/posts.class.php


		    }else{
=======
		}else{
>>>>>>> d1c1415d0f47e78d3000960103f6fb20f1e30122:src/model/post.class.php
			echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
		}
	}
	}

	function curtir($con, $idPost, $totalCurtidas){
		$curtidasAtualizadas = ($totalCurtidas) +1;

		$query = $con->prepare("UPDATE post SET curtidas = ? WHERE id = ?");
		$query->bind_param("ss", $curtidasAtualizadas, $idUser);
		$query->execute();
		if($query->affected_rows > 0){
			echo "<script>window.history.back(-1);</script>";
		}else{
			echo "<script>window.history.back(-1);</script>";
		}
	}
}

	function deletarPost (){
	$idPost = addslashes($explode['1']);

	$query = $con->prepare("DELETE FROM posts WHERE id = ?");
	$query->bind_param("s", $idPost);
	$query->execute();
	
	}

	function editarPost (){
	if(isset($_POST['env']) && $_POST['env'] == "post"){
		if($_POST['post']){
			$post = $_POST['post'];

			$sql = $con->prepare("UPDATE posts SET postagem = ? WHERE id = ?");
			$sql->bind_param("sss", $postagem, $idPost);
			$sql->execute();

			if($sql->affected_rows > 0){
				echo "<div class='alert alert-success'>Publicação alterada com sucesso!</div>";
			}else{
				echo "<div class='alert alert-danger'>Erro ao alterar a publicação!</div>";
			}
		  }else{
			echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
		}
    }
=======
		
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

		function curtir($con, $idPost, $totalCurtidas){
			$curtidasAtualizadas = ($totalCurtidas) + 1;

			$query = $con->prepare("UPDATE post SET curtidas = ? WHERE id = ?");
			$query->bind_param("ss", $curtidasAtualizadas, $idUser);
			$query->execute();
			if($query->affected_rows > 0){
				echo "<script>window.history.back(-1);</script>";
			}else{
				echo "<script>window.history.back(-1);</script>";
			}
		}
		
		function deletarPost (){
			$idPost = addslashes($explode['1']);
			
			$query = $con->prepare("DELETE FROM posts WHERE id = ?");
			$query->bind_param("s", $idPost);
			$query->execute();
		}

		function editarPost (){
			if(isset($_POST['env']) && $_POST['env'] == "post"){
				if($_POST['post']){
					$post = $_POST['post'];

					$sql = $con->prepare("UPDATE posts SET postagem = ? WHERE id = ?");
					$sql->bind_param("sss", $postagem, $idPost);
					$sql->execute();

					if($sql->affected_rows > 0){
				echo "<div class='alert alert-success'>Publicação alterada com sucesso!</div>";
					}else{
						echo "<div class='alert alert-danger'>Erro ao alterar a publicação!</div>";
					}
				}else{
					echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
				}
			}
		}
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
    
		function Comentar() {
			include_once("../conexao/conexao.php");
			
			$sql = "INSERT INTO comentario VALUES('$this->id_comentario','$this->comentario', '$this->data',null,$this->usuario,null)";
			
			if(mysqli_query($conn, $sql)){
				header('Refresh:0');
				header('location:../views/home.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
    	}
<<<<<<< HEAD


	}
=======
	}
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
