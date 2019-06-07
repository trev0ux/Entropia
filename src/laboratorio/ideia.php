<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="css/padrao.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/logo1.png">
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
	<?php 
        if ($_SESSION['tipo'] == 1) {
            include 'menuSuper.php';
        }else {
            include 'menu.php';
        }
    ?>
    
    <div class="container" id="cor">
      <img src="img/titulo/ideia.jpg" class="rounded mx-auto d-block" id="foto">
      <div class="row justify-content-center">
       		<div class="col-sm-4">
				<table id="tabela" class="table text-center">
					<thead class="thead-light">
								<tr>
									<th scope="col">Ideias salvas por você</th>
								</tr>
								<?php
									$conexao = mysqli_connect('localhost', 'root', '', 'entropia');
									$sql = "SELECT * FROM ideia";
									$resultado = mysqli_query($conexao, $sql);

									while ($registro = mysqli_fetch_array($resultado)) {
										$titulo = $registro['titulo'];
										echo "<tr>";
										echo "<td><a href='#' data-toggle='modal' data-target='#ideia-modal'>" . $titulo . "</a></td>";
										echo "</tr>";
									}
								?>
					<tr>
						<td>...</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-1"></div>
			<div class="col-sm-6">
				<aside>
					<h4 class="text-center">Mande uma nova Ideia</h4>
					<form method="post" action="ideiainsert.php">
						<p>
							Título
							<input type="text" name="titulo" required="required" placeholder="Dê um nome para sua ideia" class="form-control">
						</p>
						<p>
							Descrição
							<textarea name="descricao" required="required" placeholder="Detalhamento da ideia" class="form-control"></textarea>
						</p>
						<p>
							Benefícios
							<textarea name="beneficio" required="required" placeholder="Quais melhorias trará para a empresa?" class="form-control"></textarea>
						</p>
						<p>
							Adicionar Participantes
							<textarea name="participante" class="form-control"></textarea>
						</p>
						<p id="arquivo">
							Adicionar arquivo em anexo<br>
							<input type="file" id="saida-anexo" name="anexo[]" multiple="multiple" class="form-control-file">
						</p>
						<div id="enviar">
							<button id="cancela"class="btn btn-primary mb-2">Cancelar</button>
							<input type="submit" id="salva" value="Salvar" class="btn btn-primary mb-2">
							<input type="submit" id="publica" value="Publicar" class="btn btn-primary mb-2">
						</div>
					</form>
				</aside>
       		</div>
       </div>
	</div>



		<!-- Modal -->
        <div class="modal fade" id="ideia-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <h6>Participantes</h6>
                                <p>...</p>
                        </div>
                        <div class="modal-footer">
                            <a href="ideiaEditar.php" class="btn btn-success">Editar<i class="fa fa-pencil"></i></a>
                            <input type="submit" id="publica" value="Publicar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Modal -->

</body>
</html>