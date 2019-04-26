<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/estilo-campanha.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/campanha.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>ENTROPIA</title>
</head>
<body>
	<?php include'menuSuper.php'?>
	
	<div id="princ">
		<div id="tabela">
			<h4>Avalie as ideias enviadas</h4>

			<select name="camp" id="camp_id" onchange="mudaIdeia()" class="form-control">
				<option value="0">Selecione a campanha...</option>
				<option value="c1">Campanha x</option>
				<option value="c2">Campanha y</option>
				<option value="c3">Campanha z</option>
			</select>

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
			<a href="campanha.php" class="btn btn-primary" id="voltar">Voltar</a>
		</div>
</body>
</html>