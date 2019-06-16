<?php

	class Campanha {
		private $id;
		private $tema;
		private $descricao;
		private $objetivo;
		private $regras;
		private $premios;
		private $imagem;

		function getTema() {
			return $this->tema;
		}
		function setTema($tema) {
			$this->tema = $tema;
		}

		function getDescricao() {
			return $this->descricao;
		}
		function setDescricao($descricao) {
			$this->descricao = $descricao;
		}

		function getObjetivo() {
			return $this->objetivo;
		}
		function setObjetivo($objetivo) {
			$this->objetivo = $objetivo;
		}

		function getRegras() {
			return $this->$regras;
		}
		function setRegras($regras) {
			$this->regras = $regras;
		}

		function getPremios() {
			return $this->premios;
		}
		function setPremios($premios) {
			$this->premios = $premios;
		}

		function getImagem() {
		return $this->imagem;
		}
		function setImagem($imagem) {
			$this->imagem = $imagem;
		}
		
		function lançarCampanha (){
			include_once("../conexao/conexao.php");
			
			$incrementar = "select id_campanha FROM campanha";
			$resultado = mysqli_query($conn, $incrementar);

                while ($row = mysqli_fetch_array($resultado)) {
                	$this->id = $row['id_campanha'] + 1;
                }
			
			$sql = "INSERT INTO campanha VALUES('$this->id','$this->tema', '$this->descricao', '$this->objetivo', '$this->regras', '$this->premios', '$this->imagem',7)";

			if (mysqli_query($conn, $sql)) {
				header('location:../views/campNova.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			mysqli_close($conn);
		}
	}
