<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
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
        <?php include'menu.php'?> 

        <div class="container" id="cor">
            <img src="img/atualizando.jpg" class="rounded mx-auto d-block" id="foto">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <form method="post" action="projetos.php">
                        <p>
                            Título
                            <input type="text" name="titulo-ideia" class="form-control">
                        </p>
                        <p>
                            Descrição
                            <textarea name="descricao-ideia" class="form-control"></textarea>
                        </p>
                        <p>
                            Objetivo
                            <textarea name="objetivo-ideia" class="form-control"></textarea>
                        </p>
                        <p>
                            Benefícios
                            <textarea name="beneficio-ideia" class="form-control"></textarea>
                        </p>
                        <p>
                            Adicionar Participantes
                            <textarea name="colaboradores" class="form-control"></textarea>
                        </p>
                        <p id="arquivo">
                            Adicionar arquivo em anexo<br>
                            <input type="file" id="saida-anexo" name="anexo-ideia" class="form-control-file">
                        </p>
                        <div id="enviar">
                            <button id="cancela"class="btn btn-primary mb-2">Cancelar</button>
                            <input type="submit" id="salva" value="Salvar" class="btn btn-primary mb-2">
                            <input type="submit" id="publica" value="Publicar" class="btn btn-primary mb-2">
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </body>  
</html>