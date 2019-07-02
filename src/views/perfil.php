<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="../public/css/padrao.css">
        <link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
        <style>
			#tabela td{font-size: 15px;}
		</style>
        <title>entropia</title>
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
		
		<div class="container-fluid gedf-wrapper">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<?php
							$sql = "SELECT * FROM cadastro JOIN usuario JOIN avatar JOIN setor ON cadastro.id_cadastro=usuario.id_cadastrofk AND avatar.id_avatar=usuario.id_avatarfk AND setor.id_setor=cadastro.id_setorfk WHERE cadastro.usuario='$logado'";
								
							$resultado = mysqli_query($conn, $sql);
							while ($row = mysqli_fetch_array($resultado)){
						?>
						<img src="../public/img/avatares/<?php echo $row['nome_avatar'] ?>" class="rounded mx-auto d-block">
						<h4>
							<?php echo utf8_encode($row['nome']); echo " "; echo utf8_encode($row['sobrenome']); ?>
						</h4>
						<h5><?php echo "@".$logado; ?></h5>
						<p class="text-muted text-justify">
							<?php
								echo "Data de Nascimento: ".date("d/m/Y", strtotime($row['data_nasc']))."<br>";
								echo "E-mail: ".utf8_encode($row['email'])."<br>";
								echo "Setor de trabalho: <br>".utf8_encode($row['setor'])."<br>";
							?>
						</p>
						<form>
							<input type="text" name="descricao" id="descricao" placeholder="Adicionar descrição de perfil">
							<center><input type="submit" value="Publicar" class="btn btn-primary btn-sm"></center>
						</form>
						<?php } ?>
							<br>
							<img src="../public/img/moeda.png"><div class="h7 text-muted">100 pontos</div>
						</div>
					</div>
					<br>
				</div>
	
			<!-- Notificações -->	
			<div class="col-md-6 gedf-main">
				<div class="card-header" style="background-color:#cecece;">
					<div class="text-center" style="margin-top:10px;">
						<h5 class="card-title text-primary font-weight-bold" id="texto">NOTIFICAÇÕES</h5>
					</div>
				</div> 
				<br>
				<div class="card gedf-card">
					<div class="card-body text-center">
						<h5 class="card-title">Fazer alteração na descrição da ideia</h5>
					</div>
				</div> 
				<br>
				<div class="card gedf-card">
					<div class="card-body text-center">
						<h5 class="card-title">Utilizar diagrama para análise de ideia</h5>
					</div>
				</div>
				<br>
				<div class="card gedf-card">
					<div class="card-body text-center">
						<h5 class="card-title">Fazer uma pesquisa sobre modelos de négocio</h5>
					</div>
				</div>
				<br>
				<div class="card gedf-card">
					<div class="card-body text-center">
						<h5 class="card-title">Análise mais crítica sobre o tema</h5>
					</div>
				</div>
				<br>
				<div class="card gedf-card">
					<div class="card-body text-center">
						<h5 class="card-title">Desvio do conceito abordado na ideia</h5>
					</div>
				</div>
			</div>
			<br>
			
			<div class="col-md-3">
				<div class="card gedf-card">
					<div class="card-body">
						<h5 class="card-title text-secondary font-weight-bold text-center" id="texto">IDEIAS ENVIADAS</h5>
						<table class="d-flex justify-content-between align-items-center" id="tabela">
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
                
                <br>
                
                <div class="card gedf-card">
                        <div class="card-body">
                            <h5 class="card-title text-warning font-weight-bold text-center" id="texto">MEDALHAS</h5>

							<table class="d-flex justify-content-between align-items-center text-center" id="tabela">
								<tbody>
									<tr>
										<td><a href="#" data-toggle="modal" data-target="#acesso"><img src="../public/img/medalhas/primeiro-acesso.png"><small>medalha de Primeiro Acesso</small></a></td>
										<td><a href="#" data-toggle="modal" data-target="#criativo"><img src="../public/img/medalhas/criatividade.png"><small>medalha de Criatividade</small></a></td>
									</tr>
									<tr>
										<td><a href="#" data-toggle="modal" data-target="#assertivo"><img src="../public/img/medalhas/assertividade.png"><small>medalha de Assertividade</small></a></td>
										<td><a href="#" data-toggle="modal" data-target="#equipe"><img src="../public/img/medalhas/trabalho-equipe.png"><small>medalha de Trabalho em Equipe</small></a></td>
									</tr>
									<tr>
										<td><a href="#" data-toggle="modal" data-target="#inovador"><img src="../public/img/medalhas/inovacao.png"><small>medalha de Inovação</small></a></td>
										<td><a href="#" data-toggle="modal" data-target="#empreendedor"><img src="../public/img/medalhas/empreendedorismo.png"><small>medalha de Empreendedorismo</small></a></td>
									</tr>
								</tbody>
							</table>
                        </div>
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
							<img src="../public/img/medalhas/primeiro-acesso.png">
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
							<img src="../public/img/medalhas/criatividade.png">
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
							<img src="../public/img/medalhas/assertividade.png">
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
							<img src="../public/img/medalhas/trabalho-equipe.png">
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
							<img src="../public/img/medalhas/inovacao.png">
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
							<img src="../public/img/medalhas/empreendedorismo.png">
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
							<p>Ao confirmar você será redirecionado a uma tela atualização de ideia</p>
							<a href="" class="btn btn-info">Confirmar</a>
						</center>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->
	</body>
</html>