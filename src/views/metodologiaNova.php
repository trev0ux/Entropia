<!DOCTYPE html>
<html lang="pt-br">
    <head>
       	<?php
			include_once("../conexao/conexao.php");
			# Para evitar a entrada no site sem login tlgd ------------0-
			session_start();
			if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
			{
				unset($_SESSION['login']);
				unset($_SESSION['senha']);
				header('location:index.php');
			}

			$logado = $_SESSION['login'];
		?>
        <link rel="stylesheet" type="text/css" href="../public/css/padrao.css">
        <link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
    </head>
    <body>      
        <?php 
            if ($_SESSION['tipo'] == 1) {
                include 'menuSuper.php';
            }else {
                include 'menu.php';
            }
        ?>
		
        <div class="container" id="cor">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-primary font-weight-bold text-center" style="margin-top:10px;">Nova Metodologia</h1>
                        <form action="../controller/controller.metodologia.php" method="POST" enctype="multipart/form-data">
                            <p>
                                Título
                                <input type="text" class="form-control" name="nome-metodo" required="required" placeholder="Nome da metodologia">
                            </p>
                            <p>
                                Definição
                                <textarea class="form-control" name="definicao-metodo" required="required" placeholder="Explique a metodologia"></textarea>
                            </p>
                            <p>
                                Descrição
                                <textarea class="form-control" name="descricao-metodo" placeholder="Detalhes da metodologia"></textarea>
                            </p>
                            <p>
                                Objetivo
                                <textarea class="form-control" name="objetivo-metodo" placeholder="Para que serve"></textarea>
                            </p>
                            <p>
                                Anexar Exemplo
                                <input type="file" name="anexo-metodo" class="form-control-file">
                            </p>
                    </section>
                    	<a href="metodologiaSuper.php" class="btn btn-primary">Voltar</a>
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </body>   
</html>