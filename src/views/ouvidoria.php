<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="../public/css/padrao.css">
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
    <div id="cor" class="container">
    	<img src="../public/img/titulo/sugestao.jpg" class="rounded mx-auto d-block">
    	<div class="row justify-content-center">
    		<div class="col-sm-6">
    			<form method="post" action="../controller/controller.ouvidoria.php">
					<p>
						Assunto
						<select name="assunto" class="form-control" id="assunto">
							<option value="0">Sobre o que deseja falar hoje?</option>
							<option value="Sugestão">Sugestão</option>
							<option value="reclamação">Reclamação</option>
							<option value="crítica">Crítica</option>
							<option value="elogio">Elogio</option>
							<option value="solicitação">Solicitação</option>
							<option value="denúncia">Denúncia</option>
						</select>
					</p>
					<p>
						Setor
						<select name="setor" class="form-control" id="setor-sug">
							<option value="0">Selecione para qual setor será a mensagem</option>
							<?php
								$sql = "SELECT * FROM setor";
								$resultado = mysqli_query($conn, $sql);

								while ($row = mysqli_fetch_assoc($resultado)) {
									$id = $row['id_setor'];
									$titulo = utf8_encode($row['setor']);
									echo '<option value="'.$id.'">'.$titulo.'</option>';
								}
							?>
						</select>
					</p>
					<p>
						Mensagem
						<textarea name="mensagem" required="required"  placeholder="Comentário..." class="form-control"></textarea>
					</p>
					<p id="arquivo">
						Adicionar arquivo em anexo
						<input type="file" id="saida-anexo" name="anexo" class="form-control-file">
					</p>
					<div id="enviar">
						<a name="cancelar" href="home.php" class="btn btn-primary">Cancelar</a>
						<input type="submit" id="salva" value="enviar" class="btn btn-primary">
					</div>
    			</form>
    		</div>
    	</div>
    </div>
</body>
</html>