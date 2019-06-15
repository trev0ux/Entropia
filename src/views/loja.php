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
	
		$sql = "SELECT * FROM premios";
		$resultado = mysqli_query($conn, $sql);

		while ($row = mysqli_fetch_array($resultado)) {
			$nome = utf8_encode($row['Nome']);
			$pontos = $row['qtde_pontos_premios'];
			$premio = $row['fotoPremio'];
    ?>

    <div class="card-deck" style="width: 18rem;">
        <div class="card text-center">
            <img class="card-img-top" src="../upload/<?php echo $premio?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $nome?></h5>
                <p class="card-text"><?php echo $pontos?></p>
                <input type="submit" value="Trocar" class="btn btn-primary">
            </div>
		</div>
    </div>
<?php }?>
</body>
</html>