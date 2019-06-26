<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="../public/css/padrao.css">
	<link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
	<?php
		include_once("../conexao/conexao.php");
	
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
	
	<div class="container">
		<div class="row justify-content-center" id="cor" style="padding: 20px;">
			<div class="col-sm-6">
				<h4 class="text-primary font-weight-bold text-center">Metodologias Disponíveis</h4>
				<table class="table text-center" id="minhaTabela1">
					<thead class="thead-light">
						<tr>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM metodologia";
							$resultado = mysqli_query($conn, $sql);

							while ($registro = mysqli_fetch_array($resultado)) {
								$titulo = utf8_encode($registro['titulo']);
								echo "<tr>";
								echo "<td><a href='#' data-toggle='modal' data-target='#metodo-modal'>" . $titulo . "</a></td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<!-- Modal -->
            <?php
                $sql = "SELECT * FROM metodologia";
                $resultado = mysqli_query($conn, $sql);

                while ($registro = mysqli_fetch_array($resultado)) {
                                                
            ?>
            <div class="modal fade" id="metodo-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $registro['titulo'];?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <h6 class="font-weight-bold">Definição</h6>
                                    <p><?php echo $registro['definicao'];?></p>
                                <h6 class="font-weight-bold">Descrição</h6>
                                    <p><?php echo $registro['descricao'];?></p>
                                <h6 class="font-weight-bold">Objetivo</h6>
                                    <p><?php echo $registro['objetivo'];?></p>
                                <h6 class="font-weight-bold">Saiba Mais</h6>
                                    <p>
                                        [arquivo para download] <br>
                                    </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- /Modal -->

	<script src="../public/js/datatables.min.js"></script>
    <script src="../public/js/listagem.min.js"></script> 
</body>
</html>


