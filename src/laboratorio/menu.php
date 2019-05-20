<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/estilo-menu.min.css">
</head>
<body class="hm-gradient">
    <main>
		<nav class="navbar navbar-expand navbar-dark bg-dark">
			<a class="navbar-brand" href="home.php"><img src="img/logo4.png"  width="100" height="50" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="ideia.php"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>Ideias</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ouvidoria.php"><i class="fa fa-commenting-o" aria-hidden="true"></i>Fale conosco</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="metodologia.php"><i class="fa fa-book" aria-hidden="true"></i>Metodologias</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
							<?php 
								echo $_SESSION['login'];
							?></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item" href="perfil.php">Meu Perfil</a>
                                <a class="dropdown-item" href="loja.php">Lojinha Virtual</a>
                                <a class="dropdown-item"                     
                                href="logout.php">       
                                Desconectar de @
                                 <?php 
                                echo $_SESSION['login'];
                                ?></a>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
		<hr class="my-4">     
	</main>
</body>
</html>