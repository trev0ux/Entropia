<!DOCTYPE html>
<html>
<head>
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
    <?php 
        if ($_SESSION['tipo'] == 1) {
            include 'menuSuper.php';
        }else {
            include 'menu.php';
        }
    ?>

<center>
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
            <img class="card-img-top" src="img/game.png" alt="Card image cap">
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
            <img class="card-img-top" src="img/game.png" alt="Card image cap">
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
            <img class="card-img-top" src="img/game.png" alt="Card image cap">
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
            <img class="card-img-top" src="img/game.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Produto 8</h5>
                <p class="card-text">100 pontos</p>
                <a href="#" class="btn btn-primary">Trocar</a>
            </div>
        </div>
    </div>
</center>
</body>
</html>