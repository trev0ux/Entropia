<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/estilo-comite.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>entropia</title>
    </head>
    <body>      
        <?php include'menuSuper.php'?>
		
        <div id="interface">
			<div class="titulo"><img src="img/titulo-comite.jpg"></div>
			<div id="tab">
				<table class="table">
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
						</tbody>
					</table>
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
			<a class="btn btn-primary mb-2" href="home.php" id="volta">Voltar</a>
		</div>
    </body>
</html>

