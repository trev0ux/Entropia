<?php


class Posts {
    private $idPost;
    private $titulo;
    private $data;
    private $postagem;
    private $visitas;
    private $imagem;
    private $curtidas;


 
 
    public function getIdPost()
    {
        return $this->idPost;
    }


    public function setIdPost($idPost)
    {
        $this->idPost = $idPost;

        return $this;
    }

 
    public function getTitulo()
    {
        return $this->titulo;
    }

  
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }


    public function getData()
    {
        return $this->data;
    }

  
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

 
    public function getPostagem()
    {
        return $this->postagem;
    }

 
    public function setPostagem($postagem)
    {
        $this->postagem = $postagem;

        return $this;
    }

  
    public function getVisitas()
    {
        return $this->visitas;
    }

 
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

  
    public function getImagem()
    {
        return $this->imagem;
    }

 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

 
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;

        return $this;
    }
	
	function Publicar (){
	if(isset($_POST['env']) && $_POST['env'] == "post"){
		if($_POST['post']){
			$idCad = $_SESSION['usuarioID'];
			$post = $_POST['post'];

			$uploaddir = '../images/uploads/';
			$uploaddirN = 'images/uploads/';
			$uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
			$uploadfileN = $uploaddirN.basename($_FILES['userfile']['name']);


			$query = $con->prepare("INSERT INTO posts (id_postador, data, postagem, imagem) VALUES (?, ?, ?, ?, ?)");
			$query->bind_param("sssss", $idCad, $data, $post, $uploadfileN);
			$query->execute();

			if($query->affected_rows > 0 && move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
				echo "<div class='alert alert-success'>Publicação enviada com sucesso!</div>";
			}else{
				echo "<div class='alert alert-danger'>Erro ao enviar a publicação!</div>";
			}


		}else{
			echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
		}
	}
	}

	function curtir($con, $idPost, $totalCurtidas){
		$curtidasAtualizadas = ($totalCurtidas) +1;

		$query = $con->prepare("UPDATE posts SET curtidas = ? WHERE id = ?");
		$query->bind_param("ss", $curtidasAtualizadas, $idCad);
		$query->execute();
		if($query->affected_rows > 0){
			echo "<script>window.history.back(-1);</script>";
		}else{
			echo "<script>window.history.back(-1);</script>";
		}
	}
}

	function deletarPublicacao (){
	$idPost = addslashes($explode['1']);

	$query = $con->prepare("DELETE FROM posts WHERE id = ?");
	$query->bind_param("s", $idPost);
	$query->execute();

	if($query->affected_rows > 0){
		redireciona('gerenciar-posts', false, 0, false);
	}else{
		echo "<div class='alert alert-danger'>Erro ao deletar a publicação.</div>";
	}
	}

	function editarPost (){
	if(isset($_POST['env']) && $_POST['env'] == "post"){
		if($_POST['post']){
			$post = $_POST['post'];

			$sql = $con->prepare("UPDATE posts SET postagem = ? WHERE id = ?");
			$sql->bind_param("sss", $post, $idPost);
			$sql->execute();

			if($sql->affected_rows > 0){
				echo "<div class='alert alert-success'>Publicação alterada com sucesso!</div>";
			}else{
				echo "<div class='alert alert-danger'>Erro ao alterar a publicação!</div>";
			}
		  }else{
			echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
		}
	}

	}