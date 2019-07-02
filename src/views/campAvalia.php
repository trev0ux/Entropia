
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php 
		include_once("../conexao/conexao.php");

		session_start();
		if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
		{
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			header('location:index.php');
		}

		$logado = $_SESSION['login'];
	?>
	<link rel="stylesheet" type="text/css" href="../public/css/padrao.css">
	<link rel="shortcut icon" type="image/x-icon" href="../public/img/logo/logo1.png">
</head>
<body>
	<?php 
        if ($_SESSION['tipo'] == 1) {
            include 'menuSuper.php';
        }else {
            include 'menu.php';
        }
	?>
 
	<div class="container" id="cor">
		<img src="../public/img/titulo/avalia.jpg" class="rounded mx-auto d-block" id="foto">
		<div class="row justify-content-center">
			<div class="col-sm-5" id="altura">
				<label>Selecionar Campanha</label>
				<select name="camp_id" id="camp_id" class="form-control">
					<option value="0">Selecione a campanha...</option>
					<?php
						$sql = "SELECT * FROM campanha";
						$resultado = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($resultado)) {
							echo '<option value="'.$row['id_campanha'].'">'.$row['tema'].'</option>';
						}
					?>
				</select>
				<br>
				<label>Selecionar ideia da campanha</label>
				<span class="carregando">Aguarde, carregando...</span>
				<select id="ideiaCamp" name="ideiaCamp" class="form-control"></select>				

				<div id="mudar">
				</div>
			</div>
		
		
		<div class="row" id="color">
  			<div class="col-sm-5">
  				<a href="campanha.php" class="btn btn-primary" id="metodo">Voltar</a>
  			</div>
  		</div>
	</div>
	
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1.4.2");
	</script>
		
	<script type="text/javascript">
		console.log("Rodou!");

		$(function(){
			$('#camp_id').change(function(){
				if( $(this).val() ) {
					$('#ideiaCamp').hide();
					$('.carregando').show();
					$.getJSON('../controller/coletar.php?search=',{id_campanha: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="0">Selecione um ideia para ser avaliada...</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="'+j[i].id_ideiaCamp+'">'+j[i].titulo+'</option>';
						}	
						$('#ideiaCamp').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#ideiaCamp').html('<option value="">– Selecione um ideia para ser avaliada –</option>');
				}
			});
		});
		
		
	</script>
</body>
</html>