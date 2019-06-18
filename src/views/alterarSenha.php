<!DOCTYPE html>
<html>
<head>
	<?php include 'master.php'?>
	<link href="../public/css/senha.min.css" rel="stylesheet" type="text/css">
    <script src="../public/js/login.js"></script>
    <title>Alterar Senha</title>
</head>
<body>
    <!--FORMULÁRIO RECUPERAÇÃO DA SENHA-->
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
                    <div class="logo">ESQUECEU A SENHA?</div>
                    <!-- Main Form -->
                    <div class="login-form-1">
                        <form id="forgot-password-form" class="text-left">
                            <div class="etc-login-form">
                                <p style="text-align: justify;">Você receberá instruções sobre como redefinir sua senha no seu email.</p>
                            </div>
                            <div class="login-form-main-message"></div>
                            <div class="main-login-form">
                                <div class="login-group">
                                    <div class="form-group">
                                        <label for="fp_email" class="sr-only">Email</label>
                                        <input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="E-mail">
                                    </div>
                                </div>
                                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                            </div>
                            <div class="etc-login-form">
                                <p>Já tem uma conta? <a href="index.php">Clique aqui</a></p> 
                            </div>
                        </form>
                    </div>
                    <!-- end:Main Form -->
                </div>
            </div>
        </div>
    </div>

        
</body>
</html>
