<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" type="text/css" href="css/padrao.css">
  <script type="text/javascript" src="js/campanha.js"></script>
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
      <img src="img/atualizando.jpg" class="rounded mx-auto d-block" id="foto">
      <div class="row justify-content-center">
        <div class="col-sm-6">
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
      </div>
    </div>
</body>
</html>