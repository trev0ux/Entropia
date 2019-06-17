<?php

	class Ideia {
		private $idIdeia;
		private $titulo;
		private $descricao;
		private $beneficio;
		private $participante;
		private $anexo;

		
		public function getIdIdeia(){
				return $this->idIdeia;
		}

		public function setIdIdeia($idIdeia){
				$this->idIdeia = $idIdeia;
				return $this;
		}

		function getTitulo(){
			return $this->titulo;
		}
		function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		
		function getDescricao() {
			return $this->descricao;
		}
		function setDescricao($descricao) {
			$this->descricao = $descricao;
		}
		
		function getBeneficio() {
			return $this->beneficio;
		}
		function setBeneficio($beneficio) {
			$this->beneficio = $beneficio;
		}
		
		function getParticipante() {
			return $this->participante;
		}
		function setParticipante($participante) {
			$this->participante = $participante;
		}
		
		function getAnexo() {
			return $this->anexo;
		}
		function setAnexo($anexo) {
			$this->anexo = $anexo;
		}

		
		function Cadastrar() {
			include_once("../conexao/conexao.php");
			
			$sql = "INSERT INTO ideia (titulo, descricao, beneficio, participante, anexo, hora, data) VALUES('$this->titulo', '$this->descricao', '$this->beneficio', '$this->participante', '$this->anexo', '$this->hora', '$this->data')";
	        
			if (mysqli_query($conn, $sql)) {
				header('location:../views/ideia.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	        mysqli_close($conn);
		}

		function publicarIdeia (){
			if(isset($_POST['env']) && $_POST['env'] == "post"){
				if($_POST['titulo'] && $_POST['descricao'] && $_POST['beneficio'] && $_POST['participante']){
					$idUser = $_SESSION['id_user'];
					$titulo = $_POST['titulo'];
					$descricao = $_POST['descricao'];
					$beneficio = $_POST['beneficio'];
					$participante = $_POST['participante'];
					$anexo = $_POST['anexo'];
					
					$anexo = $uploaddir;		
					$uploaddir = '../images/uploads/';
					$uploaddirN = 'images/uploads/';
					$uploadfile = $uploaddir.basename($_FILES['imagem']['name']);
					$uploadfileN = $uploaddirN.basename($_FILES['imagem']['name']);
		
		
					$query = $con->prepare("INSERT INTO ideia (id_ideia, titulo, descricao, beneficio, participante, anexo, data) VALUES ($this->id_ideia, $this->titulo, $this->descricao, $this->beneficio, $this->participante, $this->anexo)");
					$query->bind_param("sssss", $idCad, $data, $titulo, $descricao, $beneficio, $uploadfileN);
					$query->execute();
		
					if($query->affected_rows > 0 && move_uploaded_file($_FILES['imagem']['name'], $uploadfile)){
						echo "<div class='alert alert-success'>Ideia enviada com sucesso!</div>";
					}else{
						echo "<div class='alert alert-danger'>Erro ao enviar a ideia!</div>";
					}
		
		
				}else{
					echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
				}
			}
			}

			function editarIdeia (){
				if(isset($_POST['env']) && $_POST['env'] == "ideia"){
						if($_POST['titulo'] && $_POST['descricao'] && $_POST['beneficio'] && $_POST['participante']){
							$idUser = $_SESSION['id_user'];
							$titulo = $_POST['titulo'];
							$descricao = $_POST['descricao'];
							$beneficio = $_POST['beneficio'];
							$participante = $_POST['participante'];
							$anexo = $_POST['anexo'];
			
						$sql = $con->prepare("UPDATE ideia SET ideia = ? WHERE id_ideia = ?");
						$sql->bind_param("sss", $ideia, $idÌdeia);
						$sql->execute();
			
						if($sql->affected_rows > 0){
							echo "<div class='alert alert-success'>Ideia alterada com sucesso!</div>";
						}else{
							echo "<div class='alert alert-danger'>Erro ao alterar a ideia!</div>";
						}
					  }else{
						echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
					}
				}
	}

	function deletarÌdeia (){
		$idIdeia = addslashes($explode['1']);
	
		$query = $con->prepare("DELETE FROM ideia WHERE id_ideia = ?");
		$query->bind_param("s", $idIdeia);
		$query->execute();
	
		}

		function curtir($con, $idPost, $totalCurtidas){
			$curtidasAtualizadas = ($totalCurtidas) +1;
	
			$query = $con->prepare("UPDATE ideia SET qtde_reacoes = ? WHERE id_ideia = ?");
			$query->bind_param("ss", $curtidasAtualizadas, $idUser);
			$query->execute();
			if($query->affected_rows > 0){
				echo "<script>window.history.back(-1);</script>";
			}else{
				echo "<script>window.history.back(-1);</script>";
			}
		}

		 function Comentar (){
        $comentario=$_POST['comentario'];
        $sql = "INSERT INTO comentario VALUES(id_comentario, comentario, data)($this->id_comentario,'$this->comentario)";

    }
		}
