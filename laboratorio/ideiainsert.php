 <?php

 include './conexaobanco/conexaobanco.php';

 $conexao = mysqli_connect('localhost', 'root', '', 'entropia');

 $titulo = $_POST['titulo'];
 $descricao = $_POST['descricao'];
 $beneficio = $_POST['beneficio'];
 $participante = $_POST['participante'];
 $anexo = $_POST['anexo'];
 $hora = $_POST['hora'];
 $data = $_POST['data'];

date_default_timezone_set('America/Bahia');
$hora = date("H:i:s");
$data = date("Y-m-d");

 $query = "INSERT INTO ideia(titulo, descricao, beneficio, participante, anexo, hora, data) VALUES('$titulo', '$descricao', '$beneficio', '$participante', '$anexo', '$hora', '$data')";


 mysqli_query($conexao, $query);
 
 if ($conexao && $query == TRUE) {
 	echo "Conectado com sucesso";
 	header('location:home.php');
 } else {
 	echo "Erro ao conectar";
 }

 ?>