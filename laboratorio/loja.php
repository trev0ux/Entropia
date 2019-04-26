<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    <title>Entropia</title>
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
    <?php include 'menu.php'?>
    <div class="card-deck">
        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="img/logo1.1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 1</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>

        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="img/portfolio/game.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 2</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>

        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="img/logo1.1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 3</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>

        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="img/portfolio/game.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 4</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>
    </div>
    <br>
    <div class="card-deck">
        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="img/logo1.1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 5</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>

        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="img/portfolio/game.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 6</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>

        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="img/logo1.1.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 7</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>
        <div class="card text-center" style="width: 18rem;">
            <img class="card-img-top" src="img/portfolio/game.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 8</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>
    </div>
</body>
</html>