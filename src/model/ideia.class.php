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
	}
