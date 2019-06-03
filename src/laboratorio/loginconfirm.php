<?php
include 'conexaobanco/conexaobanco.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$conexao = mysqli_connect('localhost', 'root', '', 'entropia');

$query = "SELECT * FROM cadastro WHERE usuario ='$login' and SENHA = '$senha'";

$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta) == 1){  
	while ($percorrer = mysqli_fetch_array($consulta)){

		$tipo = $percorrer['tipo'];

 		session_start();  #Criar sessão

 		$_SESSION['login'] = $login;
 		$_SESSION['senha'] = $senha;
 		$_SESSION['tipo'] = $tipo;

 		header('location:home.php');
 		
 	}
 }else{

 	unset ($_SESSION['login']);
 	unset ($_SESSION['senha']);

 	header('location:index.php?erro');

 }
 