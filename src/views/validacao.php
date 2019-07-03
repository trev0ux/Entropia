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
	<link rel="shortcut icon" href="../public/img/logo/logo1.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../public/css/padrao.css">
	
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
		<img src="../public/img/titulo/validacao.jpg" class="rounded mx-auto d-block" id="foto">
		<div class="row justify-content-center">
			<div class="col-sm-6">
				<table id="minhaTabela" class="table text-center table-responsive">
					<thead class="thead-light">
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Avaliação</th>
							<th scope="col">Responsável técnico</th>
							<th scope="col">Status</th>
							<th scope="col">Validar</th>
						</tr>

					</thead>
					<tbody>
						<tr>
							<td>358</td>
							<td>Concluída</td>
							<td>Clarice</td>
							<td>Enviado ao comitê</td>
							<td><a href="" class="btn btn-success disabled" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
						</tr>
						<tr>
							<td>362</td>
							<td>Em andamento</td>
							<td>Andreza Vitório</td>
							<td>Em análise</td>
							<td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
						</tr>
						<tr>
							<td>417</td>
							<td>Em andamento</td>
							<td>Lucas Amorim</td>
							<td>Em análise</td>
							<td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
						</tr>
						<tr>
							<td>535</td>
							<td>Em andamento</td>
							<td>Ruan Barbosa</td>
							<td>Em análise</td>
							<td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
						</tr>
					</tbody>
				</table>
				
				
				<!-- Modal -->
				<div class="modal fade" id="vali-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Título</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h6>Descrição</h6>
								<p>...</p>
								<h6>Benefícios</h6>
								<p>...</p>
								<h6>Participantes</h6>
								<p>...</p>
								<h6>Anexo</h6>
								<p>...</p>
								<form action="" method="post">
									<p>
										Solicitar Ajustes
										<input type="text" name="assunto" id="assunto" placeholder="Informe o assunto da modificação"> 
										<textarea name="ajustar" placeholder="Comentário..."  class="form-control"></textarea>
									</p>
									<p>
										Metodologias
										<select class="form-control">
											<option>Sugira uma metodologia para estudo</option>
										</select>
									</p>
								</form>
							</div>
							<div class="modal-footer">
								<input type="submit" id="ajuste" value="Solicitar Ajustes" class="btn btn-success mb-2">
								<button id="envia" type="submit" class="btn btn-primary mb-2">Enviar ao Comitê</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Fim Modal -->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<a class="btn btn-primary mb-2" href="home.php">Voltar</a>
			</div>
		</div>
	</div>

	<script src="../public/js/datatables.min.js"></script>
	<script src="../public/js/listagem.min.js"></script>   
</body>
</html>

