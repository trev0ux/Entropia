 <?php

        include './conexaobanco/conexaobanco.php';
        $conexao = mysqli_connect('localhost', 'root', '', 'entropia');

        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $beneficio = $_POST['beneficio'];
        $anexo = $_POST['anexo'];

        $query = "INSERT INTO ideiaCamp(titulo, descricao, beneficio, anexo) VALUES('$titulo', '$descricao', '$beneficio', '$anexo')";


        mysqli_query($conexao, $query);
                
        if ($conexao && $query == TRUE) {
          echo "Conectado com sucesso";
          header('location:home.php');
        } else {
          echo "Erro ao conectar";
        }
?>