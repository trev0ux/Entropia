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
    <div class="interface">
    	<div class="princ">
    		<form method="post" action="">
    			<p>
                	<label for="titulo" class="sr-only">Título</label>
					<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo da Campanha" required>
               	</p>
               	<p>
                	<label for="descricao" class="sr-only">Descrição</label>
					<textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição da Campanha" required></textarea>
               	</p>
               	<button class="btn btn-primary" type="submit">Salvar</button>
               	<input type="submit" value="Publicar" class="btn btn-info">
    		</form>
    	</div>
    </div>
</body>
</html>