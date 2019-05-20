<?php
include 'conexaobanco/conexaobanco.php';

session_start();  #Criar sessão

$login = $_POST['login'];
$senha = $_POST['senha'];

$conexao = mysqli_connect('localhost', 'root', '', 'entropia');

$query = "SELECT * FROM cadastro WHERE usuario ='$login' and SENHA = '$senha'";

$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta) == 1){

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;

    header('location:home.php');

}else {

    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);

    header('location:index.php?erro');
}
?>