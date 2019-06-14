<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
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
	<script type="text/javascript" src="../public/js/campanha.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
	<title>entropia</title>
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
    	<img src="../public/img/titulo/campanha-nova.jpg" class="rounded mx-auto d-block" id="foto">
    	<div class="row justify-content-center">
    		<div class="col-sm-6">
    			<form method="post" action="" enctype="multipart/form-data">
    				<p>
    					<label for="tema" class="sr-only">Tema</label>
    					<input type="text" class="form-control" id="tema" name="tema" placeholder="Tema da Campanha" required>
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