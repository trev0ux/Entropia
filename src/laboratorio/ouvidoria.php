<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="css/padrao.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    <?php
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
    <?php include 'menu.php' ?>
    
    <div id="cor" class="container">
    	<img src="img/titulo-sugestao.jpg" class="rounded mx-auto d-block">
    	<div class="row justify-content-center">
    		<div class="col-sm-6">
    			<form method="post" action="ouvidoria.php">
					<p>
						Assunto
						<select name="assunto-sug" class="form-control" id="assunto">
							<option>Sobre o que deseja falar hoje?</option>
							<option>Sugestão</option>
							<option>Reclamação</option>
							<option>Crítica</option>
							<option>Elogio</option>
							<option>Solicitação</option>
							<option>Denúncia</option>
						</select>
					</p>
					<p>
						Setor
						<select name="setor-sug" class="form-control" id="setor-sug">
							<option>Selecione para qual setor será a mensagem</option>
							<option>Administrativo</option>
							<option>Financeiro</option>
							<option>Recursos Humanos</option>
							<option>Comercial</option>
							<option>Operacional</option>
						</select>
					</p>
					<p>
						Mensagem
						<textarea name="mensagem" required="required"  placeholder="Comentário..." class="form-control"></textarea>
					</p>
					<p id="arquivo">
						Adicionar arquivo em anexo
						<input type="file" id="saida-anexo" name="anexo-projeto" class="form-control-file">
					</p>
					<div id="enviar">
						<a name="cancelar" href="home.php" class="btn btn-primary">Cancelar</a>
						<input type="submit" id="salva" value="enviar" class="btn btn-primary">
					</div>
    			</form>
    		</div>
    	</div>
    </div>
         
    <?php
		if ($_POST) {
			include './classes/Conexao.class.php';
			include './classes/DAO/sugestaoDAO.class.php';
			include './classes/entidades/sugestao.class.php';

			$sugestaoDAO = new sugestaoDAO();
			$sugestao = new sugestao();

			$assunto = $_POST['assunto-sug'];
			$mensagem = $_POST['mensagem'];
			$setor = $_POST['setor-sug'];

			$sugestao->setAssunto($assunto);
			$sugestao->setMensagem($mensagem);
			$sugestao->setSetor($setor);

			$resultado = $sugestaoDAO->inserir($sugestao);

			if ($resultado == TRUE) {
				echo 'A sugestão ' . $assunto . ' foi inserido com sucesso';
				return;
			} else {
				echo 'A sugestão ' . $assunto . ' não foi inserido';
				return;
			}
		}
	?>
	
</body>
</html>