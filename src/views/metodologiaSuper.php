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
		
		<div class="container" >
		<div class="row justify-content-center" id="cor" style="padding: 20px;">
			<div class="col-sm-6">
				<h4 class="text-primary font-weight-bold text-center">Metotodologias Disponíveis</h4>
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
						?>
						<tr>
							<td><a href="#" data-toggle="modal" data-target="#metodo<?php echo $registro['id_metodologia'] ?>"><?php echo $titulo; ?></a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row" id="color">
			<div class="col-sm-6">
				<a href="metodologiaNova.php" class="btn btn-info" id="metodo">Enviar Metodologia</a>
			</div>
		</div>
	</div>
			        			
			<!-- Modal -->
            <?php
                $sql = "SELECT * FROM metodologia";
                $resultado = mysqli_query($conn, $sql);

                while ($registro = mysqli_fetch_array($resultado)) {
                                                
            ?>
            <div class="modal fade" id="metodo<?php echo $registro['id_metodologia'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
			
			</div>
		</div>

        <script src="../public/js/datatables.min.js"></script>
        <script src="../public/js/listagem.min.js"></script>  
    </body>   
</html>