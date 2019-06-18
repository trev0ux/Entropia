<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" type="text/css" href="../public/css/cadastro.min.css">
       <script type="text/javascript" src="../public/bootstrap/jquery-3.3.1.min.js"></script>
       <script type="text/javascript" src="../public/js/jquery.mask.min.js"></script>
        <script type="text/javascript"> 
			jQuery(function($){
				$("#data").mask("99/99/9999");
				});
		</script> 
        <title>Cadastro</title>
        <?php include 'master.php' ?>
    </head>
    <body>
        <!--FORMULÁRIO DE CADASTRO-->
        <div class="container" id="cor">
            <img src="../public/img/titulo/cadastra.png" class="rounded mx-auto d-block" id="foto">
            <div class="row justify-content-center">
                <div class="col-sm-5">
                    <form method="post" action="../controller/controller.usuario.php">
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
                            <input type="text"  class="form-control" id="data" name="data" placeholder="Data de Nascimento*" required>
                        </p>
                        <p>
                            <label for="reg_cargo" class="sr-only">Setor</label>
                            <select class="form-control" id="reg_cargo" name="cargo">
                                <option value="0">Selecione seu setor na empresa...</option>
                                <?php
									include_once("../conexao/conexao.php");
		
									$sql = "SELECT * FROM setor";
									$resultado = mysqli_query($conn, $sql);

									while ($row = mysqli_fetch_assoc($resultado)) {
										$id = $row['id_setor'];
										$titulo = utf8_encode($row['nome']);
										echo '<option value="'.$id.'">'.$titulo.'</option>';
									}
								?>
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
                    <img src="../public/img/titulo/avatar.png" class="rounded mx-auto d-block" alt="Escolha seu avatar">
                    <center>
                        <div id=avt>
                            <input type="radio" name="avatar" id="a1" value="1">
                            <label class="avatar" for="a1"><img src="../public/img/avatares/esteves1.png" class="avt" alt="avatar Esteves"></label>

                            <input type="radio" name="avatar" id="a2" value="2">
                            <label class="avatar" for="a2"><img src="../public/img/avatares/muriel1.png" class="avt" alt="avatar Muriel"></label><br>
                          
                            <input type="radio" name="avatar" id="a3" value="3">
                            <label class="avatar" for="a3"><img src="../public/img/avatares/melo1.png" class="avt" alt="avatar Melo"></label>
                         
                            <input type="radio" name="avatar" id="a4" value="4">
                            <label class="avatar" for="a4"><img src="../public/img/avatares/ariel1.png" class="avt" alt="avatar Ariel"></label><br>
                          
                            <input type="radio" name="avatar" id="a5" value="5">
                            <label class="avatar" for="a5"><img src="../public/img/avatares/cesar1.png" class="avt" alt="avatar César"></label>
                        
                            <input type="radio" name="avatar" id="a6" value="6">
                            <label class="avatar" for="a6"><img src="../public/img/avatares/James1.png" class="avt" alt="avatar James"></label>
                        </div>
                    </center>
                </div>
            </div>
            <div class="row align-items-end justify-content-end">
                <div class="col-sm-4">
                    <p>Já possui cadastro?<a href="index.php">Clique aqui</a></p>
                </div>
                <div class="col-sm-2" id="enviar">
                        <input type="submit" id="cadastrar" value="Cadastrar" class="btn btn-primary">
                    </form> 
                </div>
            </div>
        </div>
    </body>