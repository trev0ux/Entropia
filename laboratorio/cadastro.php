<?php

include 'conexaobanco/conexaobanco.php';


$conexao = mysqli_connect('localhost', 'root', '', 'entropia');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data = $_POST['data'];
$matricula = $_POST['matricula'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "INSERT INTO cadastro(nome, sobrenome, data_nasc, n_matricula, email, usuario, senha) VALUES('$nome', '$sobrenome', '$data', '$matricula', '$email', '$usuario', '$senha')";

mysqli_query($conexao, $query);

if($conexao and $query == TRUE){
    echo "Conectado com sucesso";
}else{
    echo "Erro ao conectar";
}

?>