<!DOCTYPE html>
<html lang="pt-br">
<head>

    <link rel="stylesheet" type="text/css" href="css/padrao.css">
	<script type="text/javascript" src="js/campanha.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
</head>
<body>
    <?php include'menuSuper.php'?>
    
    <!--<div class="container" id="cor">
    	<img src="img/titulo-campanha.jpg" class="rounded mx-auto d-block" id="foto">
    	<div class="row justify-content-center">
    		<div class="col-sm-6">
    			
    		</div>
    	</div>
    </div>-->
    
    <div class="container" id="cor">
    	<img src="img/titulo-campanha.jpg" class="rounded mx-auto d-block" id="foto">
    	<div class="row justify-content-center">
    		<div class="col-sm-5">
    			<table class="table text-center" id="minhaTabela">
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
    		</div>
    		<div class="col-sm-6">
    			<table class="table text-center" id="minhaTabela1">
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
    		</div>
    		<div id="enviar">
				<a href="home.php" class="btn btn-primary" id="botao">Voltar</a>
				<a href="campAvalia.php" class="btn btn-primary" id="botao">Avaliar ideias enviadas</a>
				<a href="campNova.php" class="btn btn-primary" id="botao">Nova Campanha</a>
   			</div>
    	</div>
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
							<a href="campEdita.php" class="btn btn-success">Editar<i class="fa fa-pencil"></i></a>
							<input type="submit" id="publica" value="Publicar" class="btn btn-primary">
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
								<input type="submit" id="publica" value="Confirmar" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- /Modal -->

	<script src="js/datatables.min.js"></script>
    <script src="js/listagem.min.js"></script>  
</body>
</html>
