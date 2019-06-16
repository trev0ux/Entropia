<?php

	class Ouvidoria {
		
		private $id;
		private $assunto;
		private $setor;
		private $mensagem;
		private $anexo;
		
		function getAssunto() {
			return $this->assunto;
		}
		function setAssunto($assunto) {
			$this->assunto = $assunto;
		}
		
		function getSetor() {
			return $this->setor;
		}
		function setSetor($setor) {
			$this->setor = $setor;
		}
		
		function getMensagem() {
			return $this->mensagem;
		}
		function setMensagem($mensagem) {
			$this->mensagem = $mensagem;
		}	
		
		function getAnexo() {
			return $this->anexo;
		}
		function setAnexo($anexo) {
			$this->anexo = $anexo;
		}
		
		function Cadastrar() {
			include_once("../conexao/conexao.php");
			
			$incrementar = "select id_ouvidoria FROM ouvidoria";
			$resultado = mysqli_query($conn, $incrementar);

			while ($row = mysqli_fetch_array($resultado)) {
				$this->id = $row['id_ouvidoria'] + 1;
			}
			
			$sql = "INSERT INTO ouvidoria VALUES('$this->id','$this->assunto', '$this->mensagem', '$this->mensagem', '$this->mensagem', '$this->anexo')";
	        
			if (mysqli_query($conn, $sql)) {
				header('location:../views/ouvidoria.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	        mysqli_close($conn);
		}
	}
