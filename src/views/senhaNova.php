<!DOCTYPE html>
<html>
<head>
   <link href="../public/css/senha.min.css" rel="stylesheet" type="text/css">
    <script src="../public/js/login.js"></script>
    <title>entropia - Alterar Senha</title>
    <?php include 'master.php'?>
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
