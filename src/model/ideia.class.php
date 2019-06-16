<?php

	class Ideia {
		private $idIdeia;
		private $titulo;
		private $descricao;
		private $beneficio;
		private $participante;
		private $anexo;

		
		public function getIdIdeia()
		{
				return $this->idIdeia;
		}

		public function setIdIdeia($idIdeia)
		{
				$this->idIdeia = $idIdeia;

				return $this;
		}

		function getTitulo() {
			return $this->titulo;
		}
		function setTitulo($titulo) {
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
			
			$incrementar = "select id_ideia FROM ideia";
			$resultado = mysqli_query($conn, $incrementar);

			while ($row = mysqli_fetch_array($resultado)) {
				$this->id = $row['id_ideia'] + 1;
			}
			
			$sql = "INSERT INTO ideia VALUES($this->id,'$this->titulo', '$this->descricao', '$this->beneficio', '$this->participante', '$this->anexo', '$this->hora', '$this->data')";
	        
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
					$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
					$uploadfileN = $uploaddirN.basename($_FILES['userfile']['name']);
		
		
					$query = $con->prepare("INSERT INTO ideia (id_ideia, titulo, descricao, beneficio, participante, anexo, data) VALUES (?, ?, ?, ?, ?)");
					$query->bind_param("sssss", $idCad, $data, $ideia, $uploadfileN);
					$query->execute();
		
					if($query->affected_rows > 0 && move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
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
				if(isset($_POST['env']) && $_POST['env'] == "post"){
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
							echo "<div class='alert alert-danger'>Erro ao alterar a publicação!</div>";
						}
					  }else{
						echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
					}
				}
	}

	function deletarÌdeia (){
		$idPost = addslashes($explode['1']);
	
		$query = $con->prepare("DELETE FROM ideia WHERE id_ideia = ?");
		$query->bind_param("s", $idIdeia);
		$query->execute();
	
		if($query->affected_rows > 0){
			redireciona('gerenciar-posts', false, 0, false);
		}else{
			echo "<div class='alert alert-danger'>Erro ao deletar a publicação.</div>";
		}
		}

	
}