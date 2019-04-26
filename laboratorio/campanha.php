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
        <title>ENTROPIA</title>
</head>
<body>
    <?php include'menuSuper.php'?>
	
    <div id="interface">
		<h3>Área de Campanhas</h3>
		<section id="esquerda">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">Campanhas Salvas</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="#" data-toggle="modal" data-target="#camp-modal">Campanha 1</a></td>
					</tr>
					<tr>
						<td><a href="#" data-toggle="modal" data-target="#camp-modal">Campanha 2</a></td>
					</tr>
					<tr>
						<td><a href="#" data-toggle="modal" data-target="#camp-modal">Campanha 3</a></td>
					</tr>
					<tr>
						<td><a href="#" data-toggle="modal" data-target="#camp-modal">Campanha 4</a></td>
					</tr>
					<tr>
						<td><a href="#" data-toggle="modal" data-target="#camp-modal">Campanha 5</a></td>
					</tr>
					<tr>
						<td><a href="#" data-toggle="modal" data-target="#camp-modal">Campanha 6</a></td>
					</tr>
				</tbody>
			</table>
		</section>
		
		<aside id="direita">
			<table class="table">
				<thead class="thead-light">
					<tr>
						<th scope="col">Campanhas Publicadas</th>
						<th scope="col">Finalizar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Campanha 1.1</td>
						<td><button class="btn btn-danger mb-2" data-toggle="modal" data-target="#fim-camp"><i class="fa fa-times"></i></button></td>
					</tr>
					<tr>
						<td>Campanha 2.1</td>
						<td><button class="btn btn-danger" data-toggle="modal" data-target="#fim-camp"><i class="fa fa-times" aria-hidden="true"></i></button></td>
					</tr>
					<tr>
						<td>Campanha 3.1</td>
						<td><button class="btn btn-danger" data-toggle="modal" data-target="#fim-camp"><i class="fa fa-times" aria-hidden="true"></i></button></td>
					</tr>
					<tr>
						<td>Campanha 4.1</td>
						<td><button class="btn btn-danger" data-toggle="modal" data-target="#fim-camp"><i class="fa fa-times" aria-hidden="true"></i></button></td>
					</tr>
				</tbody>
			</table>
		</aside>
		
		<div id="botao">
			<a href="campAvalia.php" class="btn btn-primary">Avaliar ideias enviadas</a>
			<a href="campNova.php" class="btn btn-primary">Nova Campanha</a>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="camp-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Título</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form>
						<div class="modal-body">
							<h6>Descrição</h6>
								<p>...</p>
							<h6>Objetivo</h6>
								<p>...</p>
							<h6>Benefícios</h6>
								<p>...</p>
							<h6>Desafio Proposto</h6>
								<p>...</p>
						</div>
						<div class="modal-footer">
							<a href="" class="btn btn-success">Editar<i class="fa fa-pencil"></i></a>
							<input type="submit" id="publica" value="Publicar" class="btn btn-primary mb-2">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Modal -->
		
		<!-- Modal -->
			<div class="modal fade" id="fim-camp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Deseja mesmo finalizar essa campanha?</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form>
							<div class="modal-body">
								<h6>Ao clicar em confirmar essa campanha não seja mais exibida no feed</h6>
							</div>
							<div class="modal-footer">
								<button class="btn btn-danger">Cancelar</i></button>
								<input type="submit" id="publica" value="Confirmar" class="btn btn-primary mb-2">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /Modal -->
		
    </div>
</body>
</html>
