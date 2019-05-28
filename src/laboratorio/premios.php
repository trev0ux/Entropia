<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/premios.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>entropia</title>
    </head>
    <body>      
        <?php include'menuSuper.php' ?>
		
		<center>
			<div class="principal">	
				<img src="img/titulo-premio.jpg" class="rounded mx-auto d-block" id="foto">
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
						<input type="file" id="premio-foto" name="premio-foto" class="form-control-file" required>
					</p>
				<a class="btn btn-primary" href="home.php">Voltar</a>
				<input type="submit" class="btn btn-info" value="Cadastrar">
				</form>
			</div>
		</center>
	</body>
</html>

