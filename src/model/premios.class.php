<?php

class Premios {
	private $id;
    private $nome;
    private $pontos;
    private $premioFoto;
	
	function __construct() {
		$this->id++;
	}
	
    public function getNome() {
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }

    function getPontos() {
        return $this->pontos;
    }
    function setPontos($pontos) {
        $this->pontos = $pontos;
    }

 
    function getPremioFoto() {
        return $this->premioFoto;
    }
    function setPremioFoto($premioFoto) {
        $this->premioFoto = $premioFoto;
    }
	
	function Cadastrar() {
		include_once("../conexao/conexao.php");
			
			$sql = "INSERT INTO premios VALUES($this->id,'$this->nome', $this->pontos, '$this->premioFoto', null)";
	        
			if (mysqli_query($conn, $sql)) {
				header('location:../views/premios.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	        mysqli_close($conn);
	}
}
