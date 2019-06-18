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
	}
