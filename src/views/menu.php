<!DOCTYPE html>
<html>
 <head>
   	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="../public/bootstrap/bootstrap.min.css" id="bootstrap-css">
	<script type="text/javascript" src="../public/bootstrap/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../public/bootstrap/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../public/css/menu.min.css">
    <link href="../public/css/datatables.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
    <title>entropia</title>
</head> 
<body class="hm-gradient">
	<main>
		<!--Navbar -->
		<nav class="mb-4 navbar navbar-expand-lg navbar-dark unique-color-dark">
			<a class="navbar-brand" href="home.php"><img src="../public/img/logo/logo4.png"  width="100" height="50"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="ideia.php"><i class="fa fa-lightbulb-o"></i>Área de inovação</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ouvidoria.php"><i class="fa fa-commenting-o"></i>Fale conosco</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="metodologia.php"><i class="fa fa-book"></i>Metodologias</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i>
							<?php 
								echo $_SESSION['login'];
							?>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
							<a class="dropdown-item" href="perfil.php">Meu Perfil</a>
							<a class="dropdown-item" href="loja.php">Lojinha Virtual</a>
							<a class="dropdown-item" href="../controller/logout.php">       
                                Desconectar de @
                                <?php 
                               		echo $_SESSION['login'];
                                ?>
                            </a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<!--/.Navbar -->
		<hr class="my-4">
	</main>
  	<!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
</body>
</html>