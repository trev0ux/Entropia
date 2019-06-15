<?php


class Metodologia {
	private $id;
    private $titulo;
    private $definicao;
    private $descricao;
    private $objetivo;
    private $anexo;

	function __construct() {
		$this->id++;
	}

    function getTitulo() {
        return $this->titulo;
    }
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function getDefinicao() {
        return $this->definição;
	}
    function setDefinicao($definicao) {
        $this->definicao = $definicao;
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

    function getAnexo() {
        return $this->anexo;
    }
    function setAnexo($anexo) {
        $this->anexo = $anexo;
    }
	
	function Cadastrar() {
		include_once("../conexao/conexao.php");
		
		$sql = "INSERT INTO metodologia VALUES('$this->id','$this->titulo','$this->definicao','$this->descricao','$this->objetivo','$this->anexo',NULL)";
	        
		if (mysqli_query($conn, $sql)) {
			header('location:../views/metodologiaNova.php');
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	    mysqli_close($conn);
	}
} 