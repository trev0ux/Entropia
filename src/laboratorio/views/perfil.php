<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
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

		<div class="container" id="cor">
	    	<div class="row justify-content-center">
	    		<div class="col-sm-4" id="perfil">
	    			<img src="img/ariel-avatar.png" class="rounded mx-auto d-block">
		    		<h4>Lucas Amorim Lopes</h4>
		    		<h5>User: @Amorim</h5>
		    		<p>Estudante de Desenvolvimento de Sistemas e Gestor do Projeto de Laboratório de Inovação <br>18 anos<br>Amante de livros políticos e filosóficos</p>
		    		<form>
		    			<input type="text" name="descricao" id="descricao" placeholder="Adicionar descrição de perfil">
		    		</form>
	    		</div>
	    		<div class="col-sm-6 text-center" id="margem">
	    			<h3 id="texto" class="text-primary font-weight-bold">NOTIFICAÇÕES</h3>
	    			<div id="rolagem">
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
	    				</table>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="row justify-content-center">
	    		<div class="col-sm-8">
	    			<table class="table table-bordered text-center" id="tabela">
						<thead>
							<tr>
								<th scope="col" colspan="2" id="texto" class="text-warning font-weight-bold">MEDALHAS</th>
							</tr>
						</thead>
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