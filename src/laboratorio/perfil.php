<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <style>
			#tabela td{font-size: 15px;}
		</style>
        <title>entropia</title>
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

		<?php include 'menu.php'?>
		
		<div class="container-fluid gedf-wrapper">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<img src="img/melo-avatar.png" class="rounded mx-auto d-block">
						<div class="h5">
							@
							<?php 
								echo $_SESSION['login'];
							?>
						</div>
							<h4>Andreza Vitório</h4>
							<p>[Dados referentes ao colaborador]</p>
							<form>
								<input type="text" name="descricao" id="descricao" placeholder="Adicionar descrição de perfil">
							</form>
							<br>
							<img src="img/moeda.png"><div class="h7 text-muted">100 pontos</div>
						</div>
					</div>
					<br>

					<!-- Ranking -->
					<div class="card gedf-card">
						<div class="card-body">
							<h5 class="card-title text-warning font-weight-bold text-center" id="texto">MEDALHAS</h5>

							<table class="d-flex justify-content-between align-items-center text-center" id="tabela">
								<tbody>
									<tr>
										<td><a href="#" data-toggle="modal" data-target="#acesso"><img src="img/primeiro-acesso.png"><small>medalha de Primeiro Acesso</small></a></td>
										<td><a href="#" data-toggle="modal" data-target="#criativo"><img src="img/criatividade.png"><small>medalha de Criatividade</small></a></td>
									</tr>
									<tr>
										<td><a href="#" data-toggle="modal" data-target="#assertivo"><img src="img/assertividade.png"><small>medalha de Assertividade</small></a></td>
										<td><a href="#" data-toggle="modal" data-target="#equipe"><img src="img/trabalho-equipe.png"><small>medalha de Trabalho em Equipe</small></a></td>
									</tr>
									<tr>
										<td><a href="#" data-toggle="modal" data-target="#inovador"><img src="img/inovacao.png"><small>medalha de Inovação</small></a></td>
										<td><a href="#" data-toggle="modal" data-target="#empreendedor"><img src="img/empreendedorismo.png"><small>medalha de Empreendedorismo</small></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			<!-- Notificações -->	
			<div class="col-md-6 gedf-main">
				<div class="card gedf-card">
					<div class="card-header">
							<div class="text-center" style="margin-top:10px;">
								<h5 class="card-title text-primary font-weight-bold" id="texto">NOTIFICAÇÕES</h5>
							</div>
						</div>
					<div class="card-body">
						
	    				<table class="table table-borderless">
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
								<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
								<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">alterar ideia A</a></td>
	    					</tr>
	    					<tr>
	    						<td><a href="#" data-toggle="modal" data-target="#update">adicionar metodologia a ideia B</a></td>
	    					</tr>	
	    				</table>
					</div>	
				</div>
			</div>
			
			<br>
			
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-warning font-weight-bold text-center" id="texto">IDEIAS ENVIADAS</h5>
						<table class="d-flex justify-content-between align-items-center text-center" id="tabela">
							<tbody>
								<tr>
									<td>IDEIA A</td>
								</tr>
								<tr>
									<td>IDEIA B</td>
								</tr>
								<tr>
									<td>IDEIA C</td>
								</tr>
								<tr>
									<td> IDEIA D</td>
								</tr>
								<tr>
									<td>IDEIA F</td>
								</tr>
								<tr>
									<td>IDEIA G</td>
								</tr>	
							</tbody>
						</table>
					</div>
				</div>
			</div>


		
		<!-- Modal Acesso -->
		<div class="modal fade" id="acesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-warning" id="exampleModalLabel">Medalha de Primeiro Acesso</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<center>
							<img src="img/primeiro-acesso.png">
							<p>Seja Bem-Vindo! Você ganhou essa medalha no seu primeiro acesso ao nosso sistema. Parabéns!</p>
							<small>TOTAL: 1</small>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal Acesso -->
		
		<!-- Modal Criativo -->
		<div class="modal fade" id="criativo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-warning" id="exampleModalLabel">Medalha de Criatividade</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<center>
							<img src="img/criatividade.png">
							<p>Parabéns! Essa medalha é por suas ideias inovadoras.</p>
							<small>TOTAL: 1</small>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal Criativo -->
		
		<!-- Modal Assertivo -->
		<div class="modal fade" id="assertivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-warning" id="exampleModalLabel">Medalha de Assertividade</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<center>
							<img src="img/assertividade.png">
							<p>....</p>
							<small>TOTAL: 1</small>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal Assertivo -->
		
		<!-- Modal Equipe -->
	 	<div class="modal fade" id="equipe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-warning" id="exampleModalLabel">Medalha de Trabalho em Equipe</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<center>
							<img src="img/trabalho-equipe.png">
							<p>....</p>
							<small>TOTAL: 1</small>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal Equipe -->
		
		<!-- Modal Inovador -->
	 	<div class="modal fade" id="inovador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-warning" id="exampleModalLabel">Medalha de Inovação</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<center>
							<img src="img/inovacao.png">
							<p>...</p>
							<small>TOTAL: 1</small>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal Inovador -->
		
		<!-- Modal Empreendedor -->
	 	<div class="modal fade" id="empreendedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-warning" id="exampleModalLabel">Medalha de Empreendedorismo</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<center>
							<img src="img/empreendedorismo.png">
							<p>...</p>
							<small>TOTAL: 1</small>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->
	</div>	
		<!-- Modal alterar ideia -->
		<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-center" id="exampleModalLabel">Deseja fazer alguma alteração/atualização na sua ideia?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<center>
							<p>Ao confirmar você será redirecionado a uma tela de alteração ou atualização de ideia</p>
							<a href="" class="btn btn-info">Confirmar</a>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->
	</body>
</html>