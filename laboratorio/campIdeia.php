<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/estilo-icamp.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/campanha.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>ENTROPIA</title>
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
    <?php include 'menu.php'?>
		<div class="principal">
			<h1>Mande uma ideia Genial</h1>
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
					<label for="anexo-ic">Anexo</label>
					<input type="file" class="form-control-file" id="anexo-ic" name="anexo-ic">
				</p>
				
				<div class="modal-footer">
					<button class="btn btn-danger">Cancelar</button>
					<input type="submit" class=" btn btn-primary" value="Salvar">
					<button type="submit" class="btn btn-success">Enviar para Validação</button>	
				</div>
			</form>
		</div>
</body>
</html>