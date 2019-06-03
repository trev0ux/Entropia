<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="css/padrao.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
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
	<?php include'menu.php' ?>
	
	<div class="container">
		<div class="row justify-content-center" id="cor" style="padding: 20px;">
			<div class="col-sm-6">
				<table class="table text-center" id="minhaTabela1">
					<thead class="thead-light">
						<tr>
							<th scope="col">Metotodologias Disponíveis</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$conexao = mysqli_connect('localhost', 'root', '', 'entropia');
							$sql = "SELECT * FROM metodologia";
							$resultado = mysqli_query($conexao, $sql);

							while ($registro = mysqli_fetch_array($resultado)) {
								$titulo = $registro['titulo'];
								echo "<tr>";
								echo "<td><a href='#' data-toggle='modal' data-target='#metodo-modal'>" . $titulo . "</a></td>";
								echo "</tr>";
							}
						?>
						<tr>
							<td>teste</td>
						</tr>
						<tr>
							<td>teste</td>
						</tr>
						<tr>
							<td>teste</td>
						</tr>
						<tr>
							<td>teste</td>
						</tr>
						<tr>
							<td>teste</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="metodo-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">[Nome da Metodologia]</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form>
					<div class="modal-body">
						<h6>Definição</h6>
						<p>...</p>
						<h6>Descrição</h6>
						<p>...</p>
						<h6>Objetivo</h6>
						<p>...</p>
						<h6>Saiba Mais</h6>
						<p>[arquivo anexado para download]</p>
					</div>
				</form
			</div>
		</div>
	</div>
	<!-- /Modal -->

	<script src="js/datatables.min.js"></script>
    <script src="js/listagem.min.js"></script> 
</body>
</html>


