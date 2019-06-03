<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<style>
			.principal{
				max-width: 590px;
				max-height: 400px;
				background-color: #ffffff;
				box-shadow: 0px 0px 10px rgba(0,0,0,0.7);
				padding: 20px;
			}
			p{
				text-align: justify;
			}
		</style>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    </head>
    <body>      
        <?php 
            if ($_SESSION['tipo'] == 1) {
                include 'menuSuper.php';
            }else {
                include 'menu.php';
            }
        ?>
		
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

