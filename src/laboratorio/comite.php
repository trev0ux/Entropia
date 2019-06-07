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
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo/logo1.png">
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
        	<img src="img/titulo/comite.jpg" class="rounded mx-auto d-block" id="foto">
        	<div class="row justify-content-center">
        		<div class="col-sm-6">
        			<table class="table text-center" id="minhaTabela">
						<thead class="thead-light">
							<tr>
								<th scope="col">Avaliação</th>
								<th scope="col">Responsável</th>
								<th scope="col">Implementar</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Supervisor A</td>
								<td>Dilton Costa</td>
								<td><a href="" class="btn btn-info" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-check-circle"></i></a></td>
							</tr>
							<tr>
								<td>Supervisor A</td>
								<td>Dilton Costa</td>
								<td><a href="" class="btn btn-info" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-check-circle"></i></a></td>
							</tr>
							<tr>
								<td>Supervisor A</td>
								<td>Dilton Costa</td>
								<td><a href="" class="btn btn-info" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-check-circle"></i></a></td>
							</tr>
							<tr>
								<td>Supervisor A</td>
								<td>Dilton Costa</td>
								<td><a href="" class="btn btn-info" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-check-circle"></i></a></td>
							</tr>
							<tr>
								<td>Supervisor A</td>
								<td>Dilton Costa</td>
								<td><a href="" class="btn btn-info" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-check-circle"></i></a></td>
							</tr>
							<tr>
								<td>Supervisor A</td>
								<td>Dilton Costa</td>
								<td><a href="" class="btn btn-info" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-check-circle"></i></a></td>
							</tr>
						</tbody>
					</table>
       				<a class="btn btn-primary mb-2" href="home.php" id="volta">Voltar</a>
        		</div>
        	</div>
        </div>
		
		<!-- Modal -->
		<div class="modal fade" id="vali-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Implementar ideia</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Deseja mesmo implementar essa ideia como um projeto na sua empresa?
					</div>
						<div class="modal-footer">
							<input type="submit" id="finalizar" value="Implementar" class="btn btn-primary mb-2">
						</div>
					</div>
				</div>
			</div>
			<!-- Fim Modal -->
		
		<script src="js/datatables.min.js"></script>
        <script src="js/listagem.min.js"></script>
    </body>
</html>

