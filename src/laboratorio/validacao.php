<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/logo1.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/estilo-validacao.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>Entropia</title>
    </head>
    <body>      
        <?php include'menuSuper.php'?>
    
		
        <div id="interface">
            <div class="titulo"><img src="img/titulo-validacao.jpg"></div>
            <aside id="secun">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Avaliação</th>
                            <th scope="col">Responsável técnico</th>
                            <th scope="col">Status</th>
                            <th scope="col">Atualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>358</td>
                            <td>Concluída</td>
                            <td>Dilton Costa</td>
                            <td>Enviado ao comitê</td>
                            <td><a href="" class="btn btn-success disabled" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
                        <tr>
                            <td>362</td>
                            <td>Em andamento</td>
                            <td>André Luís</td>
                            <td>Em análise</td>
                            <td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
                        <td>417</td>
                            <td>Em andamento</td>
                            <td>Thiago Benjamin</td>
                            <td>Em análise</td>
                            <td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
				<td>417</td>
                            <td>Em andamento</td>
                            <td>Thiago Benjamin</td>
                            <td>Em análise</td>
                            <td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
			<td>417</td>
                            <td>Em andamento</td>
                            <td>Thiago Benjamin</td>
                            <td>Em análise</td>
                            <td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
		<td>417</td>
                            <td>Em andamento</td>
                            <td>Thiago Benjamin</td>
                            <td>Em análise</td>
                            <td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
	<td>417</td>
                            <td>Em andamento</td>
                            <td>Thiago Benjamin</td>
                            <td>Em análise</td>
                            <td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
<td>417</td>
                            <td>Em andamento</td>
                            <td>Thiago Benjamin</td>
                            <td>Em análise</td>
                            <td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
<td>417</td>
                            <td>Em andamento</td>
                            <td>Thiago Benjamin</td>
                            <td>Em análise</td>
                            <td><a href="" class="btn btn-success" data-toggle='modal' data-target='#vali-modal'><i class="fa fa-pencil"></i></a></td>
                        </tr>
<td>417</td>
                            <td>Em andamento</td>
                            <td>Thiago Benjamin</td>
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
								<textarea name="ajustar" placeholder="Comentário..."  class="form-control"></textarea>
							</p>
							<p>
								Metodologias
								<select class="form-control">
									<option>Sugerir metodologia para estudo?</option>
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

			</aside>
            <a class="btn btn-primary mb-2" href="home.php" id="volta">Voltar</a>
        </div>
    </body>
</html>

