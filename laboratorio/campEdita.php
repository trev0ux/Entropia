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
        <title>Entropia</title>
</head>
<body>
    <?php include'menuSuper.php'?>

      <div id="princ_">
        <div class="ttt"><img src="img/atualizando.jpg"></div>
        <form method="post" action="">
          <p>
                  <label for="titulo">Título</label>
          <input type="text" class="form-control" id="titulo" name="titulo">
                </p>
                <p>
                  <label for="descricao">Descrição</label>
          <textarea type="text" class="form-control" id="descricao" name="descricao"></textarea>
                </p>
                <p>
                  <label for="objetivo">Objetivo</label>
          <textarea class="form-control" id="objetivo" name="objetivo"></textarea>
                </p>
                <p>
                  <label for="regra">Regras</label>
          <textarea class="form-control" id="regra" name="regra"></textarea>
                </p>
                <p>
                  <label for="premio">Prêmios</label>
          <input type="text" class="form-control" id="premio" name="premio">
                </p>
                <p>
                  <label for="foto-campanha">Imagem da Campanha</label>
          <input type="file" class="form-control-file" id="foto-campanha" name="foto-campanha">
                </p>
                <a href="campanha.php" class="btn btn-primary">Voltar</a>
                <button class="btn btn-primary" type="submit">Salvar</button>
                <input type="submit" value="Publicar" class="btn btn-primary">
        </form>
      </div>

</body>
</html>