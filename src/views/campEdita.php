<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php 
    # Para evitar a entrada no site sem login tlgd ------------0-
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
  <script type="text/javascript" src="../public/js/campanha.js"></script>
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
      <img src="../public/img/titulo/atualizando.jpg" class="rounded mx-auto d-block" id="foto">
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