<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
    <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="_js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Entropia</title>
    <link href="css/estilo-senha.css" rel="stylesheet" type="text/css">
    <script src="js/login.js"></script>
</head>
<body>
    <!--FORMULÁRIO RECUPERAÇÃO DA SENHA-->
    <div class="text-center" id="interface">
        <div class="logo">ESQUECEU A SENHA?</div>
        <!-- Main Form -->
        <div class="login-form-1">
            <form id="forgot-password-form" class="text-left">
                <div class="etc-login-form">
                    <p>Você receberá instruções sobre como redefinir sua senha no seu email.</p>
                </div>
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="fp_email" class="sr-only">Email</label>
                            <input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email">
                        </div>
                    </div>
                    <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="etc-login-form">
                    <p>Já tem uma conta? <a href="#">Clique aqui</a></p> 
                </div>
            </form>
        </div>
        <!-- end:Main Form -->
    </div>
</body>
</html>
