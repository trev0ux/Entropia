<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="shortcut icon" href="img/logo1.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link href="css/datatables.min.css" rel="stylesheet">
    </head>
    <body>      
        <?php include'menuSuper.php' ?>
        
        <div class="container" id="cor">
            <img src="img/titulo-validacao.jpg" class="rounded mx-auto d-block" id="foto">
        	<div class="row justify-content-center">
        		<div class="col-md-8">
        			<table id="minhaTabela" class="table text-center">
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
                       		<tr>
								<td>417</td>
								<td>Em andamento</td>
								<td>Thiago Benjamin</td>
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
        		</div>
        	</div>
        	<div class="row">
				<div class="col-sm-6">
					<a class="btn btn-primary mb-2" href="home.php">Voltar</a>
				</div>
			</div>
        </div>

        <script src="js/datatables.min.js"></script>
        <script>
		$(document).ready(function(){
			$('#minhaTabela').DataTable({
				"language": {
					  "lengthMenu": "Mostrando _MENU_ registros por página",
					  "zeroRecords": "Nada encontrado",
					  "info": "Mostrando página _PAGE_ de _PAGES_",
					  "infoEmpty": "Nenhum registro disponível",
					  "infoFiltered": "(filtrado de _MAX_ registros no total)"
				  }
			  });
		});
	  </script>    
    </body>
</html>

