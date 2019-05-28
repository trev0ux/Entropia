<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="css/padrao.css">
	<link rel="stylesheet" type="text/css" href="css/campanha.css">
	<script type="text/javascript" src="js/campanha.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
	<title>entropia</title>
</head>
<body>
	<?php include'menuSuper.php'?>
	
	<center>
		<div class="principal">
			<div class="container">
				<img src="img/avalia.jpg" class="rounded mx-auto d-block" id="foto">
				<div class="row justify-content-center">
					<div class="col-sm-5">
						<select name="camp" id="camp_id" onchange="mudaIdeia()" class="form-control">
							<option value="0">Selecione a campanha...</option>
							<option value="c1">Campanha x</option>
							<option value="c2">Campanha y</option>
							<option value="c3">Campanha z</option>
						</select>
						<br>
						<select id="form-campanha" onchange="mudarForm()" class="form-control">
							<option value="0">Selecione um ideia para ser avaliada...</option>
							<option value="1" id="r1">Ideia 1</option>
							<option value="2" id="r2">Ideia 2</option>
							<option value="3" id="r3">Ideia 3</option>
							<option value="4" id="r4">Ideia 4</option>
							<option value="5" id="r5">Ideia 5</option>
						</select>
						<div id="mudar"></div>
					</div>
				</div>	
			</div>
		</div>
   		<div class="princ">
   			<div class="container">
   				<div class="row">
   					<div class="col-sm-5">
   						<a href="campanha.php" class="btn btn-primary" id="voltar">Voltar</a>
   					</div>
   				</div>
   			</div>
		</div>
    </center>
</body>
</html>