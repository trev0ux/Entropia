 <?php

 include './conexaobanco/conexaobanco.php';

 $conexao = mysqli_connect('localhost', 'root', '', 'entropia');

 $titulo = $_POST['titulo'];
 $descricao = $_POST['descricao'];
 $beneficio = $_POST['beneficio'];
 $participante = $_POST['participante'];
 $anexo = $_POST['anexo'];

 $query = "INSERT INTO ideia(titulo, descricao, beneficio, participante, anexo) VALUES('$titulo', '$descricao', '$beneficio', '$participante', '$anexo')";


 mysqli_query($conexao, $query);
 
 if ($conexao && $query == TRUE) {
 	echo "Conectado com sucesso";
 	header('location:home.php');
 } else {
 	echo "Erro ao conectar";
 }

 ?>