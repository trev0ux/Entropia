<?php

	class Ideia {
		private $titulo;
		private $descricao;
		private $beneficio;
		private $participante;
		private $anexo;

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
			
			$sql = "INSERT INTO ideia (titulo, descricao, beneficio, participante, anexo, hora, data) VALUES('$this->titulo', '$this->descricao', '$this->beneficio', '$this->participante', '$this->anexo', '$this->hora', '$this->data')";
	        
			if (mysqli_query($conn, $sql)) {
				header('location:../views/ideia.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	        mysqli_close($conn);
		}
	}
