<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/estilo-premio.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>entropia</title>
    </head>
    <body>      
        <?php include'menuSuper.php'
		if (isset ($_SESSION['tipo_usuario']) == 2) ;
		{
		?>
		
			<div class="principal">	
				<div class="titulo"><img src="img/titulo-premio.jpg"></div>
				<form method="post" action="">
					<p>
						<label for="nome" class="sr-only">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
					</p>
					<p>
						<label for="pontos" class="sr-only">Pontos</label>
						<input type="text" class="form-control" id="pontos" name="pontos" placeholder="Pontos para troca do prêmio" required>
					</p>
					<p>
						<label for="premio-foto">Imagem do Prêmio</label><br>
						<input type="file" id="premio-foto" name="premio-foto" required>
					</p>
				<a class="btn btn-primary" href="home.php">Voltar</a>
				<input type="submit" class="btn btn-info" value="Cadastrar">
			</form>
		</div>
	</body>
</html>

<?php
{

	else
}

echo 'Acesso negado'
session_destroy();

?>