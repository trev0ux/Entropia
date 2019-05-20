<?php

include 'conexaobanco/conexaobanco.php';


$conexao = mysqli_connect('localhost', 'root', '', 'entropia');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nasc = $_POST['data_nasc'];
$n_matricula = $_POST['n_matricula'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

date_default_timezone_set('America/Bahia');
$data_nasc = date("Y-m-d");

$query = "INSERT INTO cadastro(nome, sobrenome, data_nasc, n_matricula, email, usuario, senha) VALUES('$nome', '$sobrenome', '$data_nasc', '$n_matricula', '$email', '$usuario', '$senha')";

mysqli_query($conexao, $query);

if($conexao and $query == TRUE){
    echo "Conectado com sucesso";
    header('location:home.php');
}else{
    echo "Erro ao conectar";
}

?>