<!DOCTYPE html>
<html>
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
	<style>
		.imagem {
			width: 610px;
			height: 400px;
		}
	</style>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../public/css/home.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
	<title>entropia</title>
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
							$sql = "SELECT * FROM cadastro JOIN usuario JOIN avatar ON cadastro.id_cadastro=usuario.id_cadastrofk AND avatar.id_avatar=usuario.id_avatarfk WHERE cadastro.usuario='$logado'";

							$resultado = mysqli_query($conn, $sql);
							while ($row = mysqli_fetch_array($resultado)){
						?>
						<img src="../public/img/avatares/<?php echo $row['nome_avatar'] ?>" class="rounded mx-auto d-block">
						<div class="h5"><?php echo "@".$logado;?></div>
						<div class="h7 text-muted">
							Nome Completo: <?php echo utf8_encode($row['nome']); echo " "; echo utf8_encode($row['sobrenome']); ?>
						</div>
						<div class="h7">Estudante de Desenvolvimento de Sistemas.</div>
						<?php 	
							}
						?>
						<hr>
						<img src="../public/img/moeda.png"><div class="h7 text-muted">100 pontos</div>
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
									<?php
										$controle_ativo = 2;						
										$result_carousel = "SELECT * FROM campanha ORDER BY id_campanha ASC";
										$resultado_carousel = mysqli_query($conn, $result_carousel);
										while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){ 
											if($controle_ativo == 2){ ?>
												<div class="carousel-item active">
													<div class="imagem">
														<img src="../public/img/campanhas/<?php echo $row_carousel['fotoCamp'];?>" class="img-fluid d-block w-100">
													</div>
													
													<div class="carousel-caption d-none d-md-block">
														<h3><?php echo utf8_encode($row_carousel['tema']); ?></h3>
														<p><?php echo utf8_encode($row_carousel['descricao']); ?></p>
														<a class="btn btn-info label label-primary" href="campIdeia.php">Mande sua Ideia</a>
													</div>
												</div>
												<?php
												$controle_ativo = 1;
											}else{ ?>
												<div class="carousel-item">
													<div class="imagem">
														<img src="../public/img/campanhas/<?php echo $row_carousel['fotoCamp'];?>" class="img-fluid d-block w-100">
													</div>
													<div class="carousel-caption d-none d-md-block">
														<h3><?php echo utf8_encode($row_carousel['tema']); ?></h3>
														<p><?php echo utf8_encode($row_carousel['descricao']); ?></p>
														<a class="btn btn-info label label-primary" href="campIdeia.php">Mande sua Ideia</a>
													</div>
												</div> 
											<?php
											}
										}
									?>		
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
					
					
					<!--- \\\\\\\Post-->
                <div class="card gedf-card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Deixe uma mensagem</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Envie fotos</a>
                            </li>
                        </ul>
                    </div>
                    <form action="../controller/controller.posts.php" method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
									<div class="form-group">
										<label class="sr-only" for="postagem">Postagem</label>
										<textarea class="form-control" name="postagem" id="postagem" placeholder="Interaja com seus colegas de trabalho..."></textarea>
									</div>

								</div>
								<div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
									<div class="form-group">
										<label for="arquivo" class="text-primary font-weight-bold">Selecionar uma imagem</label>
										<input type="file" class="form-control-file" name="arquivo" id="arquivo">
									</div>
								</div>
							</div>
							<div class="btn-toolbar justify-content-between">
								<div class="btn-group">
									<input type="submit" value="Publicar" class="btn btn-primary">
								</div>
							</div>
                        </form>
                    </div>
                </div>
                <!-- /Post -->

                <!--- /Organização de publicações -->
					
					
					<div class="card gedf-card">
						<div class="card-header">
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-2">
										<img class="rounded-circle" width="45" src="../public/img/avatares/ariel1.png" alt="">
									</div>
									<div class="ml-2">
										<div class="h5 m-0">@<?php echo $_SESSION['login'];?></div>
										<div class="h7 text-muted"><?php echo $_SESSION['login'];?></div>
									</div>
								</div>
								<div>
									<div class="dropdown">
										<a class="text-dark btn-lg" id="editar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="editar">
                                        <div class="h6 dropdown-header">Configurações</div>
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Excluir</a>
                                    </div>
											
										
									</div>
								</div>
							</div>
						</div>

						<?php
							$sql = "SELECT * FROM cadastro JOIN usuario ON cadastro.id_cadastro=usuario.id_cadastrofk  WHERE cadastro.usuario='$logado'";

							$resultado = mysqli_query($conn, $sql);
							while ($row = mysqli_fetch_array($resultado)){
								$id = $row['id_usuario'];
						?>
					
					<script type="text/javascript">
						function mostrar(id){
							if(document.getElementById(id).style.display == 'none'){
								document.getElementById(id).style.display = "block";
							}else{
								document.getElementById(id).style.display = 'none';
							}         
						}
					</script>
						<div class="card-body">
							<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>Postado ás </div>
							<h5 class="card-title">titulo</h5>
							<p class="card-text">
								descricao
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="card-link text-primary"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Curtir</a>
							<a class="card-link text-primary" onclick="mostrar('<?php echo $id; ?>')"><i class="fa fa-comment"></i>Comentar</a>
						</div>
						<div class="hidden text-center" id="<?php echo $id; ?>">
							<form method="post" action="../controller/controller.posts.php">
								<input type="hidden" value="<?php echo $id; ?>">
								<input type="text"  style="max-width:350px; margin:15px;" class="form-control~pull-left" placeholder="Escreva seu comentário...">
								<input type="submit" value="Comentar" class="btn btn-primary btn-sm">
							</form>
						</div>
						<?php } ?>
			
					</div>	

					<!-- Post -->
					<div class="card gedf-card">
						<div class="card-header">
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-2">
										<img class="rounded-circle" width="45" src="../public/img/logo/logo1.png" alt="">
									</div>
									<div class="ml-2">
										<div class="h5 m-0">ENTROPIA</div>
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
							<h5 class="card-title">BEM-VINDO!!!</h5>
							<p class="card-text">
								SEJA BEM-VINDO AO SEU LABORATÓRIO DE INOVAÇÃO PREFERIDO!
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="card-link"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Curtir</a>
						</div>
					</div>
					<!-- /Post -->
				</div>	

				<!-- Ranking -->
				<div class="col-md-3">
					<div class="card" id="rankin-ideia">
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
				</div>
				</div>
						
				<!-- /Ranking -->	

				
			</div>
		</div>	
	</body>
</html>