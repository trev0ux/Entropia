<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/padrao.css" rel="stylesheet" type="text/css">
    <link href="css/senha.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="js/login.js"></script>
    <script src="_js/jquery.validate.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    <title>entropia - Alterar Senha</title>
</head>
<body>
    
    <div class="container">
        
        <div class="row">
            <div class="col">
                <br><br><br>
                <br><br>
                <br><br>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div id="cor" class="text-center" style="max-width: 420px;">
                    <div class="logo">Redefinir Senha</div>
                    <div class="login-form-1">
                        <form id="forgot-password-form" class="text-left" action="" method="post">
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="senhanova" class="sr-only">Nova senha</label>
                                        <input type="text" class="form-control" id="senhanova" name="senhanova" placeholder="Nova senha">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmar" class="sr-only">Confirmar senha</label>
                                        <input type="password" class="form-control" id="confirmar" name="confirmar" placeholder="Confirmar nova senha">
                                    </div>
                                </div>
                                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="etc-login-form">
                                <p>Já tem uma conta? <a href="index.php">Clique aqui</a></p> 
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
        
</body>
</html>
