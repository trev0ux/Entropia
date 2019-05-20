<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo-ideia.css">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    <title>Entropia</title>
    <?php
        session_start();
        if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:index.php');
        }

        $logado = $_SESSION['login'];

    ?>
</head>
<body>
    <?php
        include 'menu.php';
    ?>
    
    <div id="interface">
        <div class="titulo"><img src="img/titulo-ideia.jpg"></div>
        <section id="princ">
            <table id="tabela" class="table text-center">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Ideias Enviadas por você</th>
                    </tr>
                    <?php
                        $conexao = mysqli_connect('localhost', 'root', '', 'entropia');
                        $sql = "SELECT * FROM ideia";
                        $resultado = mysqli_query($conexao, $sql);

                        while ($registro = mysqli_fetch_array($resultado)) {
                            $titulo = $registro['titulo'];
                            echo "<tr>";
                            echo "<td><a href='#' data-toggle='modal' data-target='#ideia-modal'>" . $titulo . "</a></td>";
                            echo "</tr>";
                        }
                    ?>
            <tr>
                <td>...</td>
            </tr>
        </table>
    </section>
    <aside id="secun">
        <h1>Mande uma nova Ideia</h1>
        <form method="post" action="ideiainsert.php">
            <p>
                Título
                <input type="text" name="titulo" required="required" placeholder="Dê um nome para sua ideia" class="form-control">
            </p>
            <p>
                Descrição
                <textarea name="descricao" required="required" placeholder="Detalhamento da ideia" class="form-control"></textarea>
            </p>
            <p>
                Benefícios
                <textarea name="beneficio" required="required" placeholder="Quais melhorias trará para a empresa?" class="form-control"></textarea>
            </p>
            <p>
                Adicionar Participantes
                <textarea name="participante" class="form-control"></textarea>
            </p>
            <p id="arquivo">
                Adicionar arquivo em anexo<br>
                <input type="file" id="saida-anexo" name="anexo" class="form-control-file">
            </p>
            <div id="enviar">
                <button id="cancela"class="btn btn-primary mb-2">Cancelar</button>
                <input type="submit" id="salva" value="Salvar" class="btn btn-primary mb-2">
                <input type="submit" id="publica" value="Publicar" class="btn btn-primary mb-2">
            </div>
        </form>
    </aside>
</div>



<!-- Modal -->
        <div class="modal fade" id="ideia-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Título</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <h6>Descrição</h6>
                                <p>...</p>
                            <h6>Objetivo</h6>
                                <p>...</p>
                            <h6>Benefícios</h6>
                                <p>...</p>
                            <h6>Participantes</h6>
                                <p>...</p>
                        </div>
                        <div class="modal-footer">
                            <a href="ideiaEditar.php" class="btn btn-success">Editar<i class="fa fa-pencil"></i></a>
                            <input type="submit" id="publica" value="Publicar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Modal -->

</body>
</html>