 <?php
 
 include 'conexaobanco/conexaobanco.php';
 

 $titulo = $_POST['titulo'];
 $definicao = $_POST['definicao'];
 $descricao = $_POST['descricao'];
 $objetivo = $_POST['objetivo'];
 $anexo = $_POST['anexo'];


 $query = "INSERT INTO metodologia(titulo, definicao, descricao, objetivo, anexo) VALUES('$titulo', '$definicao', '$descricao', '$objetivo', '$anexo')";

 mysqli_query($conexao, $query);
 
 if ($query == TRUE) {
    echo "Conectado com sucesso";
} else {
    echo "Erro ao conectar";
}


?>