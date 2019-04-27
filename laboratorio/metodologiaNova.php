<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/estilo-metodologiaSuper.css">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
        <title>entropia</title>
    </head>
    <body>      
        <?php include'menuSuper.php'?>
		
        <div class="interface">
            <section id="princ">
                <h1>Nova Metodologia</h1>
                <form name="metodologia" action="metodologias.php" method="POST">
                    <p>
                        Título
                        <input type="text" class="form-control" name="nome-metodo" required="required" placeholder="Nome da metodologia">
                    </p>
					<p>
                        Definição
                        <textarea class="form-control" name="definicao-metodo" required="required" placeholder="Explique a metodologia"></textarea>
                    </p>
                    <p>
                        Descrição
                        <textarea class="form-control" name="descricao-metodo" placeholder="Detalhes da metodologia"></textarea>
                    </p>
					<p>
                        Objetivo
                        <textarea class="form-control" name="objetivo-metodo" placeholder="Para que serve"></textarea>
                    </p>
                    <p>
                        Anexar Exemplo
                        <input type="file" name="anexo-metodo" class="form-control-file">
					</p>
			</section>
			<aside id="secun">
				<h1>Tópicos de utilização da Metodologia</h1>
				<input type="text" class="form-control" name="topico1"><br>
				<input type="text" class="form-control" name="topico2"><br>
				<input type="text" class="form-control" name="topico3"><br>
				<input type="text" class="form-control" name="topico4"><br>
				<input type="text" class="form-control" name="topico5"><br>
				<input type="text" class="form-control" name="topico6"><br>
				<input type="text" class="form-control" name="topico7"><br>
				<input type="text" class="form-control" name="topico8">
			</aside>
			</form>
			<div id="enviar">
				<a href="metodologiaSuper.php" class="btn btn-primary mb-2">Voltar</a>
				<input type="submit" value="Salvar" class="btn btn-primary mb-2">
			</div>
        </div>
    </body>   
</html>