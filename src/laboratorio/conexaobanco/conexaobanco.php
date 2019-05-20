<?
# Conexão com o Banco de Dados MySQL *************

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "entropia";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if ($conexao == TRUE) {
    echo "Banco Conectado com sucesso";
} else {
    echo "Erro ao conectar";
}
