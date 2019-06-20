<?php

	class Ideia {
<<<<<<< HEAD
		private $idIdeia;
=======
		private $id;
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
		private $titulo;
		private $descricao;
		private $beneficio;
		private $participante;
		private $anexo;
<<<<<<< HEAD

		
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
=======
		private $data;
		private $hora;
		private $usuario;

		
		function getId (){
			return $this->id;
		}
		function setId($id) {
				$this->id = $id;
		}

		function getTitulo() {
			return $this->titulo;
		}
		function setTitulo($titulo) {
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
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
<<<<<<< HEAD

		
		function Cadastrar() {
			include_once("../conexao/conexao.php");
			
			$sql = "INSERT INTO ideia (titulo, descricao, beneficio, participante, anexo, hora, data) VALUES('$this->titulo', '$this->descricao', '$this->beneficio', '$this->participante', '$this->anexo', '$this->hora', '$this->data')";
=======
		
		function getData() {
			return $this->data;
		}
		function setData($data) {
			$this->data = $data;
		}
		
		function getHora() {
			return $this->hora;
		}
		function setHora($hora) {
			$this->hora = $hora;
		}
		
		function getUsuario() {
			return $this->usuario;
		}
		function setUsuario($usuario) {
			$this->usuario = $usuario;
		}
		
		function Salvar() {
			include_once("../conexao/conexao.php");
			
			$incrementar = "select id_ideia FROM ideia";
			$resultado = mysqli_query($conn, $incrementar);

			while ($row = mysqli_fetch_array($resultado)) {
				$this->id = $row['id_ideia'] + 1;
			}
			
			$sql = "INSERT INTO ideia VALUES($this->id,'$this->titulo', '$this->descricao', '$this->beneficio', '$this->participante', '$this->anexo', '$this->hora', '$this->data',0)";
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
	        
			if (mysqli_query($conn, $sql)) {
				header('location:../views/ideia.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	        mysqli_close($conn);
		}

<<<<<<< HEAD
		function publicarIdeia (){
			if(isset($_POST['env']) && $_POST['env'] == "post"){
=======
		function Publicar() {
			include_once("../conexao/conexao.php");
			
			$incrementar = "select id_ideia FROM ideia";
			$resultado = mysqli_query($conn, $incrementar);

			
				while ($row = mysqli_fetch_array($resultado)) {
					$this->id = $row['id_ideia'] + 1;
				}
				
				$sql = "INSERT INTO ideia VALUES($this->id,0,'$this->titulo', '$this->descricao', '$this->beneficio', '$this->participante', '$this->anexo', '$this->hora', '$this->data',1,'$this_usuario')";
	        
				if (mysqli_query($conn, $sql)) {
					header('location:../views/ideia.php');
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				mysqli_close($conn);
				
		}

		function editarIdeia (){
			if(isset($_POST['env']) && $_POST['env'] == "ideia"){
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
				if($_POST['titulo'] && $_POST['descricao'] && $_POST['beneficio'] && $_POST['participante']){
					$idUser = $_SESSION['id_user'];
					$titulo = $_POST['titulo'];
					$descricao = $_POST['descricao'];
					$beneficio = $_POST['beneficio'];
					$participante = $_POST['participante'];
					$anexo = $_POST['anexo'];
<<<<<<< HEAD
					
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
		
		
=======
			
					$sql = $con->prepare("UPDATE ideia SET ideia = ? WHERE id_ideia = ?");
					$sql->bind_param("sss", $ideia, $idÌdeia);
					$sql->execute();
			
					if($sql->affected_rows > 0){
						echo "<div class='alert alert-success'>Ideia alterada com sucesso!</div>";
					}else{
						echo "<div class='alert alert-danger'>Erro ao alterar a ideia!</div>";
					}
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099
				}else{
					echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
				}
			}
<<<<<<< HEAD
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
=======
		}
>>>>>>> 3f093ed6a2c8413cb783f327dba164d5bc82a099

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
