<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/estilo-metodologia.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>Entropia</title>
    </head>
    <body>      
        <?php include'menuSuper.php'?>
		
		<div class="interface">
			
        	<div id="principal">
				<table class="table text-center">
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
						<td>...</td>
					</tr>
				</tbody>
			</table>
			        			
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
                                    <p>
                                        <?php
                                            $conexao = mysqli_connect('localhost', 'root', '', 'entropia');
                                            $sql = "SELECT * FROM metodologia";
                                            $resultado = mysqli_query($conexao, $sql);

                                            while ($registro = mysqli_fetch_array($resultado)) {
                                                $definicao = $registro['definicao'];
                                                echo"<tr>";
                                                echo "<td>".$definicao."</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </p>
                                <h6>Descrição</h6>
                                    <p>...</p>
                                <h6>Objetivo</h6>
                                    <p>...</p>
                                <h6>Saiba Mais</h6>
                                    <p>
                                        [arquivo anexado para download] <br>
                                        <?php
                                            $conexao = mysqli_connect('localhost', 'root', '', 'entropia');
                                            $sql = "SELECT * FROM metodologia";
                                            $resultado = mysqli_query($conexao, $sql);

                                            while ($registro = mysqli_fetch_array($resultado)) {
                                                $anexo = $registro['anexo'];
                                                echo"<tr>";
                                                echo "<td>".$anexo."</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Modal -->
			
				<a href="metodologiaNova.php" class="btn btn-info" id="metodo">Enviar Metodologia</a>
			</div>
		</div>
    </body>   
</html>