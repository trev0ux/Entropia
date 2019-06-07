<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" id="bootstrap-css">
        <script type="text/javascript" src="_js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="_js/bootstrap.min.js"></script>
        <script src="_js/jquery.validate.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="css/padrao.css">
        <link rel="stylesheet" type="text/css" href="css/cadastro.min.css">
        <script type="text/javascript" src="js/cadastro.js"></script>
        <link rel="shortcut icon" type="image/x-icon" href="img/logo/logo1.png">
        <title>Cadastro</title>
    </head>
    <body>
        <!--FORMULÁRIO DE CADASTRO-->
        <div class="container" id="cor">
            <img src="img/titulo/cadastra.png" class="rounded mx-auto d-block" id="foto">
            <div class="row justify-content-center">
                <div class="col-sm-5">
                    <form method="post" action="cadastro.php">
                        <p>
                            <label for="reg_nome" class="sr-only">Nome</label>
                            <input type="text" class="form-control" id="reg_nome" name="nome" placeholder="Nome*" required>
                        </p>
                        <p>
                            <label for="reg_sobrenome" class="sr-only">Sobrenome</label>
                            <input type="text" class="form-control" id="reg_sobrenome" name="sobrenome" placeholder="Sobrenome*" required>
                        </p>
                        <p>
                            <label for="reg_data" class="sr-only">Data de Nascimento</label>
                            <input type="text"  class="data form-control" id="reg_data" name="data" placeholder="Data de Nascimento*" required>
                        </p>
                        <p>
                            <label for="reg_cargo" class="sr-only">Cargo</label>
                            <select class="form-control" id="reg_cargo" name="cargo">
                                <option value="0">Selecione seu cargo na empresa...</option>
                            </select>
                        </p>
                        <p>
                            <label for="reg_email" class="sr-only">Email*</label>
                            <input type="text" class="form-control" id="reg_email" name="email" placeholder="E-mail*" required>
                        </p>
                        <p>
                            <label for="reg_usuario" class="sr-only">Nome de Usuário</label>
                            <input type="text" class="form-control" id="reg_usuario" name="usuario" placeholder="Nome de usuário*" required>
                        </p>
                        <p>
                            <label for="reg_senha" class="sr-only">Senha</label>
                            <input type="password" class="form-control" id="reg_senha" name="senha" placeholder="Senha*" required>
                        </p>
                        <p>
                            <label for="reg_confirma_senha" class="sr-only">Confirmar senha</label>
                            <input type="password" class="form-control" id="reg_confirma_senha" name="reg_confirma_senha" placeholder="Confirmar senha*" required>
                        </p>         
                        <small class="form-text text-muted">(*)Campos Obrigatórios</small>
                </div>
                <div class="col-sm-6">
                    <img src="img/titulo/avatar.png" class="rounded mx-auto d-block" alt="Escolha seu avatar">
                    <center>
                        <div id=avt>
                            <input type="radio" name="avatar" id="a1">
                            <label class="avatar" for="a1"><img src="img/avatares/esteves1.png" class="avt" alt="avatar Esteves"></label>

                            <input type="radio" name="avatar" id="a2">
                            <label class="avatar" for="a2"><img src="img/avatares/muriel1.png" class="avt" alt="avatar Muriel"></label><br>
                          
                            <input type="radio" name="avatar" id="a3">
                            <label class="avatar" for="a3"><img src="img/avatares/melo1.png" class="avt" alt="avatar Melo"></label>
                         
                            <input type="radio" name="avatar" id="a4">
                            <label class="avatar" for="a4"><img src="img/avatares/ariel1.png" class="avt" alt="avatar Ariel"></label><br>
                          
                            <input type="radio" name="avatar" id="a5">
                            <label class="avatar" for="a5"><img src="img/avatares/cesar1.png" class="avt" alt="avatar César"></label>
                        
                            <input type="radio" name="avatar" id="a6">
                            <label class="avatar" for="a6"><img src="img/avatares/James1.png" class="avt" alt="avatar James"></label>
                        </div>
                    </center>
                </div>
            </div>
            <div class="row align-items-end justify-content-end">
                <div class="col-sm-4">
                    <p>Já possui cadastro?<a href="index.php">Clique aqui</a></p>
                </div>
                <div class="col-sm-2" id="enviar">
                        <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar" class="btn btn-primary">
                    </form> 
                </div>
            </div>
        </div>
    </body>