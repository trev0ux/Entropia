<?php include 'conexaobanco/conexaobanco.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>


	<?php 
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

	<link rel="stylesheet" type="text/css" href="css/estilo-home.css">
	<!--<link rel="stylesheet" type="text/css" href="css/estilo-home.min.css">-->
	<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
	<script type="text/javascript">
		$('.carousel').carousel({interval: 1000});

		function mostrar(id){
			if(document.getElementById(id).style.display == 'none'){
				document.getElementById(id).style.display = 'block';
			}else{
				document.getElementById(id).style.display = 'none';
			}         
		}
	</script>
	<title>entropia</title>

</head>
<body>
	<?php include 'menu.php'?>

	<div class="container-fluid gedf-wrapper">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<img src="img/melo-avatar.png">
						<div class="h5">
							@
							<?php 
							echo $_SESSION['login'];
							?>
						</div>
							<div class="h7 text-muted">
							Nome Completo: Lucas Amorim Lopes

							</div>
							<div class="h7">Estudante de Desenvolvimento de Sistemas e Gestor do Projeto de Laboratório de Inovação.</div>
							<hr>
							<img src="img/moeda.png"><div class="h7 text-muted">100 pontos</div>
						</div>
					</div>
					<br>

					<!-- Ranking -->
					<div class="card gedf-card" id="rankin-colab">
						<div class="card-body" id="rank">
							<h5 class="card-title">Ranking dos Colaboradores</h5>
							<h6 class="card-subtitle mb-2 text-muted">Interaja e suba de posição</h6>

							<table class="d-flex justify-content-between align-items-center" id="tabela1">
								<tr>
									<td class="e">1º</td>
									<td class="d">@Amorim</td>
								</tr>
								<tr>
									<td class="e">2º</td>
									<td class="d">@Vitório</td>
								</tr>
								<tr>
									<td class="e">3º</td>
									<td class="d">@Benjamin</td>
								</tr>
								<tr>
									<td class="e">4º</td>
									<td class="d">@Dilton</td>
								</tr>
								<tr>
									<td class="e">5º</td>
									<td class="d">@Felipe</td>
								</tr>
								<tr>
									<td class="e">6º</td>
									<td class="d">@André</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<!-- Ranking -->

				<div class="col-md-6 gedf-main">
					<!-- Carousel -->
					<div class="card gedf-card">
						<div class="card-body">
							<div id="carouselCampanha" class="carousel slide" data-ride="carousel">
							
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="img/slide1.png" class="img-fluid d-block w-100">
										<div class="carousel-caption d-none d-md-block">
											<h3>Titulo</h3>
											<p>Descrição</p>
											<a class="btn btn-info label label-primary" href="campIdeia.php">Mande sua Ideia</a>
										</div>
									</div>

									<div class="carousel-item">
										<img src="img/slide2.jpg" class="img-fluid d-block w-100">
										<div class="carousel-caption d-none d-md-block">
											<h3>Titulo</h3>
											<p>Descrição</p>
											<a class="btn btn-info" href="campIdeia.php">Mande sua Ideia</a>
										</div>
									</div>
									
									<div class="carousel-item">
										<img src="img/slide3.png" class="img-fluid d-block w-100">
										<div class="carousel-caption d-none d-md-block">
											<h3>Titulo</h3>
											<p>Descrição</p>
											<a class="btn btn-info" href="campIdeia.php">Mande sua Ideia</a>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselCampanha" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Anterior</span>
								</a>
								<a class="carousel-control-next" href="#carouselCampanha" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Próximo</span>
								</a>
							</div> 
						</div>
					</div>
					<!-- /Carousel -->

					<!-- Post -->
					<div class="card gedf-card">
						<div class="card-header">
							<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="posts-tab" data-toggle="tab" role="tab" aria-controls="posts" aria-selected="true">Faça uma Publicação</a>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
									<div class="form-group">
										<label class="sr-only" for="message"></label>
										<textarea class="form-control" id="message" rows="3" placeholder="Interaja com seus colegas de trabalho..."></textarea>
									</div>
								</div>
								<div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
									<div class="form-group"></div>
								</div>
							</div>
							<div class="btn-toolbar justify-content-between">
								<div class="btn-group">
									<button type="submit" class="btn btn-primary">Publicar</button>
								</div>
								<div class="btn-group"></div>
							</div>
						</div>
					</div>
					<!-- /Post -->

					<!-- Post -->


						<?php
						
						$conexao = mysqli_connect('localhost', 'root', '', 'entropia');
						$sql =  "SELECT * FROM ideia ORDER BY id_ideia DESC";
						$resultado = mysqli_query($conexao, $sql);
							

						

						

						while ($registro = mysqli_fetch_array($resultado)) {

							?>


					<div class="card gedf-card">
						<div class="card-header">
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-2">
										<img class="rounded-circle" width="45" src="img/ariel1.png" alt="">
									</div>
									<div class="ml-2">
										<div class="h5 m-0">@<?php echo $_SESSION['login'];?></div>
										<div class="h7 text-muted"><?php echo $_SESSION['login'];?></div>
									</div>
								</div>
								<div>
									<div class="dropdown">
										<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-h"></i>
										</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card-body">
							<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>Postado ás <?php echo $hora = $registro['hora'];?> de <?php echo $data = $registro['data']; ?></div>
							<h5 class="card-title"><?php echo $titulo = $registro['titulo']; ?></h5>
							<p class="card-text">
								<?php echo $descricao = $registro['descricao']; ?>
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="card-link"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Curtir</a>
							<a class="card-link" onclick="mostrar('a')"><i class="fa fa-comment"></i>Comentar</a>
						</div>
						
						<div class="hidden" id="a">
							<form class="search" method="post" action="">
								<input type="text" class="form-control" placeholder="Escreva seu comentário...">
								<input id="comentar" type="submit" value="Comentar" class="btn btn-primary btn-sm">
							</form>
						</div>
						
					</div>
					<?php }?>
					<!-- /Post -->

					<!-- Post -->
					<div class="card gedf-card">
						<div class="card-header">
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-2">
										<img class="rounded-circle" width="45" src="img/melo1.png" alt="">
									</div>
									<div class="ml-2">
										<div class="h5 m-0">@Vitório</div>
										<div class="h7 text-muted">Andreza Vitório</div>
									</div>
								</div>
								<div>
									<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-ellipsis-h"></i>
									</button>
								</div>
							</div>
						</div>


						<div class="card-body">
							<div class="text-muted h7 mb-2"><i class="fa fa-clock-o"></i>10 de fevereiro</div>
							<h5 class="card-title">Titulo aqui</h5>
							<p class="card-text">
								[Descrição]
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="card-link"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Curtir</a>
							<a class="card-link" onclick="mostrar('b')"><i class="fa fa-comment"></i>Comentar</a>
						</div>
						<div class="hidden" id="b">
							<form class="search" method="post" action="">
								<input type="text" class="form-control" placeholder="Escreva seu comentário...">
								<input id="comentar" type="submit" value="Comentar" class="btn btn-primary btn-sm">
							</form>			
						</div>  
					</div>
					<!-- /Post -->

					<!-- Post -->
					<div class="card gedf-card">
						<div class="card-header">
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-2">
										<img class="rounded-circle" width="45" src="img/esteves1.png" alt="">
									</div>
									<div class="ml-2">
										<div class="h5 m-0">@Benjamin</div>
										<div class="h7 text-muted">Thiago Benjamin</div>
									</div>
								</div>
								<div>
									<div class="dropdown">
										<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-ellipsis-h"></i>
										</button>
									</div>
								</div>
							</div>
						</div>

						<div class="card-body">
							<div class="text-muted h7 mb-2"><i class="fa fa-clock-o"></i>12 de janeiro</div>
							<h5 class="card-title">Titulo aqui</h5>
							<p class="card-text">
								[Descrição]
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="card-link"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Curtir</a>
							<a class="card-link" onclick="mostrar('c')"><i class="fa fa-comment"></i>Comentar</a>
						</div>
						<div class="hidden" id="c">
							<form class="search" method="post" action="">
								<input type="text" class="form-control" placeholder="Escreva seu comentário...">
								<input id="comentar" type="submit" value="Comentar" class="btn btn-primary btn-sm">
							</form>
						</div>
					</div>
					<!-- /Post -->
				</div>	

				<!-- Ranking -->	
				<div class="card gedf-card" id="rankin-ideia">
					<div class="card-body" id="rankin">
						<h5 class="card-title">Ranking de Ideias</h5>
						<h6 class="card-subtitle mb-2 text-muted">Seja criativo e suba de posição</h6>
						<table class="d-flex justify-content-between align-items-center" id="tabela">
							<tr>
								<td class="esquerdo">1º</td>
								<td class="direito">Ideia E</td>
							</tr>
							<tr>
								<td class="esquerdo">2º</td>
								<td class="direito">Ideia Q</td>
							</tr>
							<tr>
								<td class="esquerdo">3º</td>
								<td class="direito">Ideia O</td>
							</tr>
							<tr>
								<td class="esquerdo">4º</td>
								<td class="direito">Ideia P</td>
							</tr>
							<tr>
								<td class="esquerdo">5º</td>
								<td class="direito">Ideia A</td>
							</tr>
							<tr>
								<td class="esquerdo">6º</td>
								<td class="direito" >Ideia Y</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- /Ranking -->	

			</div>
		</div>
	</body>
	</html>