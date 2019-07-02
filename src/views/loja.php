<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
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
    
    <div class="row">
    	<div class="col-sm-3">
    		<div class="card-deck" style="width: 18rem;">
				<div class="card text-center">
					<img class="card-img-top" src="../public/img/logo/logo1.1.png">
					<div class="card-body">
						<h5 class="card-title">PRÊMIO</h5>
						<p class="card-text">100PTS</p>
						<input type="submit" value="Trocar" class="btn btn-primary">
					</div>
				</div>
			</div>
    	</div>
    	
    	<div class="col-sm-3">
    		<div class="card-deck" style="width: 18rem;">
				<div class="card text-center">
					<img class="card-img-top" src="../public/img/game.png">
					<div class="card-body">
						<h5 class="card-title">PRÊMIO</h5>
						<p class="card-text">100PTS</p>
						<input type="submit" value="Trocar" class="btn btn-primary">
					</div>
				</div>
			</div>
    	</div>
    	
    	<div class="col-sm-3">
    		<div class="card-deck" style="width: 18rem;">
				<div class="card text-center">
					<img class="card-img-top" src="../public/img/logo/logo1.1.png">
					<div class="card-body">
						<h5 class="card-title">PRÊMIO</h5>
						<p class="card-text">100PTS</p>
						<input type="submit" value="Trocar" class="btn btn-primary">
					</div>
				</div>
			</div>
    	</div>
    	
    	<div class="col-sm-3">
    		<div class="card-deck" style="width: 18rem;">
				<div class="card text-center">
					<img class="card-img-top" src="../public/img/game.png">
					<div class="card-body">
						<h5 class="card-title">PRÊMIO</h5>
						<p class="card-text">100PTS</p>
						<input type="submit" value="Trocar" class="btn btn-primary">
					</div>
				</div>
			</div>
    	</div>
    </div>
<br>
    <div class="row">
    	<div class="col-sm-3">
    		<div class="card-deck" style="width: 18rem;">
				<div class="card text-center">
					<img class="card-img-top" src="../public/img/game.png">
					<div class="card-body">
						<h5 class="card-title">PRÊMIO</h5>
						<p class="card-text">100PTS</p>
						<input type="submit" value="Trocar" class="btn btn-primary">
					</div>
				</div>
			</div>
    	</div>
    	
    	<div class="col-sm-3">
    		<div class="card-deck" style="width: 18rem;">
				<div class="card text-center">
					<img class="card-img-top" src="../public/img/logo/logo1.1.png">
					<div class="card-body">
						<h5 class="card-title">PRÊMIO</h5>
						<p class="card-text">100PTS</p>
						<input type="submit" value="Trocar" class="btn btn-primary">
					</div>
				</div>
			</div>
    	</div>
    	
    	<div class="col-sm-3">
    		<div class="card-deck" style="width: 18rem;">
				<div class="card text-center">
					<img class="card-img-top" src="../public/img/game.png">
					<div class="card-body">
						<h5 class="card-title">PRÊMIO</h5>
						<p class="card-text">100PTS</p>
						<input type="submit" value="Trocar" class="btn btn-primary">
					</div>
				</div>
			</div>
    	</div>
    	
    	<div class="col-sm-3">
    		<div class="card-deck" style="width: 18rem;">
				<div class="card text-center">
					<img class="card-img-top" src="../public/img/logo/logo1.1.png">
					<div class="card-body">
						<h5 class="card-title">PRÊMIO</h5>
						<p class="card-text">100PTS</p>
						<input type="submit" value="Trocar" class="btn btn-primary">
					</div>
				</div>
			</div>
    	</div>
    </div>

</body>
</html>