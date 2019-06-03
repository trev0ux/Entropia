<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="css/padrao.css">
	<script type="text/javascript" src="js/campanha.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
	<title>entropia</title>
</head>
<body>
    <?php include'menuSuper.php'?>

     <div class="container" id="cor">
    	<img src="img/campanha-nova.jpg" class="rounded mx-auto d-block" id="foto">
    	<div class="row justify-content-center">
    		<div class="col-sm-6">
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
    					<label for="foto-campanha">Imagem da Campanha <small>(Somente imagens 600x400)</small></label><br>
    					<input type="file" class="form-control-file" id="foto-campanha" name="foto-campanha" required>
    				</p>
    				<a href="campanha.php" class="btn btn-primary" id="botao">Voltar</a>
                	<button type="submit" class="btn btn-primary" id="botao">Salvar</button>
                	<input type="submit" value="Publicar" class="btn btn-primary" id="botao">
    			</form>
    		</div>
    	</div>
    </div>
</body>
</html>