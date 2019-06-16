<?php


class Posts {
    private $idPost;
    private $data;
    private $postagem;
    private $imagem;
    private $curtidas;
    private $comentario;
 
    public function getIdPost()
    {
        return $this->idPost;
    }


    public function setIdPost($idPost)
    {
        $this->idPost = $idPost;

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

    public function getComentario()
    {
        return $this->comentario;
    }

    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }
	
	function Publicar (){
	if(isset($_POST['env']) && $_POST['env'] == "post"){
		if($_POST['post']){
			$idUser = $_SESSION['id_user'];
			$post = $_POST['post'];

			$uploaddir = '../images/uploads/';
			$uploaddirN = 'images/uploads/';
			$uploadfile = $uploaddir.basename($_FILES['imagem']['name']);
			$uploadfileN = $uploaddirN.basename($_FILES['imagem']['name']);


			$query = $con->prepare("INSERT INTO posts (id, data, postagem, imagem) VALUES ($this->id, $this-data, $this->postagem, $this->imagem)");
			$query->bind_param("sssss", $idUser, $data, $postagem, $uploadfileN);
			$query->execute();

			if($query->affected_rows > 0 && move_uploaded_file($_FILES['imagem']['name'], $uploadfile)){
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
		$query->bind_param("ss", $curtidasAtualizadas, $idUser);
		$query->execute();
		if($query->affected_rows > 0){
			echo "<script>window.history.back(-1);</script>";
		}else{
			echo "<script>window.history.back(-1);</script>";
		}
	}
}

	function deletarPost (){
	$idPost = addslashes($explode['1']);

	$query = $con->prepare("DELETE FROM posts WHERE id = ?");
	$query->bind_param("s", $idPost);
	$query->execute();
	
	}

	function editarPost (){
	if(isset($_POST['env']) && $_POST['env'] == "post"){
		if($_POST['post']){
			$post = $_POST['post'];

			$sql = $con->prepare("UPDATE posts SET postagem = ? WHERE id = ?");
			$sql->bind_param("sss", $postagem, $idPost);
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
    
    function Comentar (){
        $comentario=$_POST['comentario'];
        $sql = "INSERT INTO comentario VALUES(id_comentario, comentario, data)($this->id_comentario,'$this->comentario)";

    }


	}