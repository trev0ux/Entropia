<?php

	class Ouvidoria {
		private $id;
		private $assunto;
		private $setor;
		private $mensagem;
		private $anexo;

		function __construct() {
			$this->id++;
		}
		
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
			
			$sql = "INSERT INTO ouvidoria VALUES('$this->id','$this->assunto', '$this->mensagem', '$this->mensagem', '$this->mensagem', '$this->anexo')";
	        
			if (mysqli_query($conn, $sql)) {
				header('location:../views/ouvidoria.php');
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	        mysqli_close($conn);
		}
	}
=======
class Ouvidoria {

    private $assunto;
    private $setor;
    private $mensagem;

 
    public function getAssunto()
    {
        return $this->assunto;
    }


    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

  
    public function getSetor()
    {
        return $this->setor;
    }

  
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

 
    public function getMensagem()
    {
        return $this->mensagem;
    }


    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

        return $this;
    }
}
>>>>>>> 4897726b165f2d52bec59de242944d901428805e