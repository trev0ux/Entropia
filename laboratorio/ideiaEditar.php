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
        <title>entropia</title>
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
        <div id="principal">
               <div class="tt"><img src="img/atualizando.jpg"></div>
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
    </body>  
</html>