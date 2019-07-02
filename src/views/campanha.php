<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php 
		include_once("../conexao/conexao.php");
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
    	<img src="../public/img/titulo/campanha.jpg" class="rounded mx-auto d-block" id="foto">
    	<div class="row justify-content-center">
    		<div class="col-sm-6">
    			<table class="table text-center" id="minhaTabela1">
					<thead class="thead-light">
						<tr>
							<th scope="col">Campanhas Publicadas</th>
							<th scope="col">Editar</th>
							<th scope="col">Finalizar</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM campanha";
							$resultado = mysqli_query($conn, $sql);

							while ($row = mysqli_fetch_array($resultado)) {
								echo "<tr>";
								echo "<td>".utf8_encode($row['tema'])."</td>";
								echo "<td><button class='btn btn-success mb-2' data-toggle='modal' data-target='#camp-modal'><i class='fa fa-pencil'></i></button></td>";
								echo "<td><button class='btn btn-danger mb-2' data-toggle='modal' data-target='#fim-camp'><i class='fa fa-times'></i></button></td>";
								echo "</tr>";
							}
						?>
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

	<script src="../public/js/datatables.min.js"></script>
    <script src="../public/js/listagem.min.js"></script>  
</body>
</html>
