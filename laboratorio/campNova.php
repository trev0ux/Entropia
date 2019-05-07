<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/estilo-campanha.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/campanha.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>entropia</title>
</head>
<body>
    <?php include'menuSuper.php'?>

    	<div id="princ_">
    		<div class="tt"><img src="img/campanha-nova.jpg"></div>
    		<form method="post" action="">
    			<p>
                	<label for="titulo" class="sr-only">Título</label>
					<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Campanha" required>
               	</p>
               	<p>
                	<label for="descricao" class="sr-only">Descrição</label>
					<textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição da Campanha" required></textarea>
               	</p>
               	<p>
                	<label for="objetivo" class="sr-only">Objetivo</label>
					<textarea class="form-control" id="objetivo" name="objetivo" placeholder="Objetivo da Campanha" required></textarea>
               	</p>
               	<p>
                	<label for="regra" class="sr-only">Regras</label>
					<textarea class="form-control" id="regra" name="regra" placeholder="Regras da Campanha" required></textarea>
               	</p>
               	<p>
                	<label for="premio" class="sr-only">Prêmios</label>
					<input type="text" class="form-control" id="premio" name="premio" placeholder="Definir premiação para campanha" required>
               	</p>
               	<p>
                	<label for="foto-campanha">Imagem da Campanha</label>
					<input type="file" class="form-control-file" id="foto-campanha" name="foto-campanha" required>
               	</p>
               	<a href="campanha.php" class="btn btn-primary">Voltar</a>
               	<button class="btn btn-primary" type="submit">Salvar</button>
               	<input type="submit" value="Publicar" class="btn btn-primary">
    		</form>
    	</div>

</body>
</html>