
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
	<script src="../public/js/campanha.js"></script>
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
				<select name="camp_id" id="camp_id" class="form-control" onchange="mudaIdeia()">
					<option value="0">Selecione a campanha...</option>
					<option value="c1">Novas tecnologias</option>
					<option value="c2">Consumo Consciente</option>
					<option value="c3">Contra o desmatamento</option>
					<option value="c4">Ambiente Organizacional</option>
					<?php
						/*$sql = "SELECT * FROM campanha";
						$resultado = mysqli_query($conn, $sql);

						while ($row = mysqli_fetch_array($resultado)) {
							echo '<option value="'.$row['id_campanha'].'">'.$row['tema'].'</option>';
						}*/
					?>
				</select>
				<br>
				<label>Selecionar ideia da campanha</label>
				<span class="carregando">Aguarde, carregando...</span>
				<select id="ideiaCamp" name="ideiaCamp" class="form-control">
					<option value="0">Selecione um ideia para ser avaliada...</option>
					<option value="1" id="r1">cidades sensiveis</option>
					<option value="2" id="r2">realidade aumentada</option>
					<option value="3" id="r3">pareceira com empresas de energia</option>
					<option value="4" id="r4">controle de água</option>
					<option value="5" id="r5">reutilizar papel</option>
					<option value="6" id="r6">palestras de conscientização</option>
				</select>
				
				<div class="mudar">
					<form method="post" action=""><p><label for="titulo-ic" class="sr-only">Título</label><input type="text" class="form-control" id="titulo-ic" name="titulo-ic" value="controle de água" disabled></p><p><label for="descricao-ic" class="sr-only">Descrição</label><textarea class="form-control" id="descricao-ic" name="descricao-ic" disabled>diminuir o gasto de água na empresa</textarea></p><p><label for="beneficio-ic" class="sr-only">Benefícios</label><input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" value="economia na conta de água" disabled></p><p><label for="ajustes" class="sr-only">Ajustes</label><textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea></p><div class="modal-footer"><button type="submit" class="btn btn-primary">Enviar Ajustes</button><button type="submit" class="btn btn-success">Enviar ao Comitê</button></div></form>
				</div>
		</div>
	</div>
	<div class="row" id="color">
  			<div class="col-sm-5">
  				<a href="campanha.php" class="btn btn-primary" id="metodo">Voltar</a>
  			</div>
  		</div>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1.4.2");
	</script>
		
	<!--<script type="text/javascript">
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
	</script>-->
</body>
</html>