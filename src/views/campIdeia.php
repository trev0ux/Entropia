<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="../public/css/padrao.css">
  	<script type="text/javascript" src="../public/js/campanha.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
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
    <?php 
        if ($_SESSION['tipo'] == 1) {
            include 'menuSuper.php';
        }else {
            include 'menu.php';
        }
    ?>

    <div class="container" id="cor">
    	<img src="../public/img/titulo/campanha-ideia.jpg" class="rounded mx-auto d-block" id="foto">
    	<div class="row justify-content-center">
    		<div class="col-sm-6">
    			<form action="ideiacampanhasalvar.php" method="post">
					<p>
						<label for="campanha" class="sr-only">Campanha</label>
						<select class="form-control" id="campanha" name="campanha" placeholder="Campanha que está participando" disabled>
							<option>Campanha x</option>
						</select>
					</p>
					<p>
						<label for="tema-c" class="sr-only">Tema</label>
						<input type="text" class="form-control" id="tema-c" name="tema-c" placeholder="Tema da campanha" disabled>
					</p>
					<p>
						<label for="titulo-ic" class="sr-only">Título</label>
						<input type="text" class="form-control" id="titulo-ic" name="titulo-ic" placeholder="Titulo da solução proposta" required>
					</p>
					<p>
						<label for="descricao-ic" class="sr-only">Descrição</label>
						<textarea class="form-control" id="descricao-ic" name="descricao-ic" placeholder="Descrição da solução proposta" required></textarea>
					</p>
					<p>
						<label for="beneficio-ic" class="sr-only">Benefícios</label>
						<input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" placeholder="Benefícios da solução proposta" required>
					</p>
					<p>
						<label for="anexo-ic" class="sr-only">Anexo</label>
						<input type="file" class="form-control-file" id="anexo-ic" name="anexo-ic[]" multiple="multiple">
					</p>
					<button class="btn btn-danger" id="botao">Cancelar</button>
					<input type="submit" class=" btn btn-primary" id="botao" value="Salvar">
					<button type="submit" class="btn btn-info" id="botao">Enviar para Validação</button>	
				</form>
    		</div>
    	</div>
    </div>
</body>
</html>
