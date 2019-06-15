<?php

	class Campanha {
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
			return $this->regras;
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

	}

