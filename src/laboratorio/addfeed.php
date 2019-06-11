<?php

include 'conexaobanco/conexaobanco.php';


$conexao = mysqli_connect('localhost', 'root', '', 'entropia');

$comentario = $_POST['comentario'];
$comentario_hora = $_POST['comentario_hora'];


date_default_timezone_set('America/Bahia');
$comentario_hora = date("H:i:s");


$query = "INSERT INTO feed(comentario, comentario_hora) VALUES('$comentario', '$comentario_hora')";

mysqli_query($conexao, $query);

if($conexao and $query == TRUE){
    echo "Conectado com sucesso";
    header('location:home.php');
}else{
    echo "Erro ao conectar";
}

?>