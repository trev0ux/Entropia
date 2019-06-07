
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="css/padrao.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
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
		<img src="img/avalia.jpg" class="rounded mx-auto d-block" id="foto">
		<div class="row justify-content-center">
			<div class="col-sm-5" id="altura">
				<select name="camp_id" id="camp_id" class="form-control">
					<option value="0">Selecione a campanha...</option>
					<?php
						$conexao = mysqli_connect('localhost', 'root', '', 'entropia');
					
						$sql = "SELECT * FROM campanha ORDER BY titulo";
						$resultado = mysqli_query($conexao, $sql);
						while($row_camp = mysqli_fetch_assoc($resultado) ) {
							echo '<option value="'.$row_camp['id_campanha'].'">'.$row_camp['titulo'].'</option>';
						}
					?>
				</select>
				<br>
				<span class="carregando">Aguarde, carregando...</span>
				<select id="ideiaCamp" name="ideiaCamp" class="form-control"></select>				

				<div class="mudar">
					<form method="post" action="">
						<p>
							<label for="titulo-ic" class="sr-only">Título</label>
							<input type="text" class="form-control" id="titulo-ic" name="titulo-ic" placeholder="<?php echo $titulo ?>" disabled>
						</p>
						<p>
							<label for="descricao-ic" class="sr-only">Descrição</label>
							<textarea class="form-control" id="descricao-ic" name="descricao-ic" placeholder="<?php echo $descricao ?>" disabled></textarea>
						</p>
						<p>
							<label for="beneficio-ic" class="sr-only">Benefícios</label>
							<input type="text" class="form-control" id="beneficio-ic" name="beneficio-ic" placeholder="<?php echo $beneficio ?>" disabled>
						</p>
						<p>
							<label for="ajustes" class="sr-only">Ajustes</label>
							<textarea class="form-control" id="ajustes" name="ajustes" placeholder="Sugerir melhorias a ideia"></textarea>
						</p>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Enviar Ajustes</button>
							<button type="submit" class="btn btn-success">Enviar ao Comitê</button>
						</div>
					</form>
				</div>
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
					$.getJSON('coletar.php?search=',{id_campanha: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="0">Selecione um ideia para ser avaliada...</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id_ideiaCamp + '">' + j[i].titulo + '</option>';
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