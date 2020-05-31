<?php
    require_once 'inc/usuarios.php';
    $u = new Usuario;

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
		<title>Login</title>
        <style>
            * {
                margin: 0px;
                padding: 0px;
            }
            body {
                background-image: url("img/fundo-login.jpg");
                background-position: 50% 70%;
                color: white;
                font-family: arial;
            }
            input {
                display: block;
                height: 55px;
                width: 360px;
                margin: 10px;
                border-radius: 30px;
                border: 1.2px solid white;
                font-size: 16pt;
                padding: 0px 20px;
                background-color: rgba(255,255,255,0.01);
                color: white;
                outline: none;

            }
            div#login-form {
                /*background-color: red;*/
                width: 420px;
                margin: 30px auto 0px auto;
            }
            div#login-form h1 {
                text-align: center;
                padding: 20px;
            }
            a {
                color: white;
                text-decoration: none;
                text-align: center;
                display: block;
            }
            a:hover {
                text-decoration: underline;
            }
            input[type=submit] {
                width: 400px;
                background-color: #218c74;
                border: none;
                cursor: pointer;
            }
            ::-webkit-input-placeholder {
                color: #fff;
            }
            :-moz-placeholder {
                color: #fff;
            }
            ::-moz-placeholder {
                color: #fff;
            }
            :-ms-input-placeholder {
                color: #fff;
            }
            div#msg-sucesso {
                width: 380px;
                margin: 10px auto;
                padding: 10px;
                background-color: rgba(50,205,50,.3);
                border: 1px solid rgb(34,139,34);
            }
            div.msg-erro {
                width: 380px;
                margin: 10px auto;
                padding: 10px;
                background-color: rgba(250,128,114,.3);
                border: 1px solid rgb(165,42,42);
            }
        </style>
	</head>
	<body>
        <div id="login-form">
            <h1>Cadastrar</h1>
            <form method="POST">
                <input type="text" autocomplete="off" placeholder="Nome Completo" name="nome" maxlength="30">
                <input type="text" autocomplete="off" placeholder="Nome do Clube" name="clube" maxlength="30">
                <input type="text" autocomplete="off" placeholder="Associação / Missão" name="associacao" maxlength="30">
                <input type="email" autocomplete="off" placeholder="Email" name="email" maxlength="40">
                <input type="password" placeholder="Senha" name="senha" maxlength="15">
                <input type="password" placeholder="Confirmar Senha" name="confsenha" maxlength="15">
                <input type="submit" value="CADASTRAR">
            </form>
        </div>
        

        <?php            
            // Verificar se clicou no botão Cadastrar
            if (isset($_POST['nome'])) {
                $nome = addcslashes($_POST['nome'],null);
                $clube = addcslashes($_POST['clube'],null);
                $associacao = addcslashes($_POST['associacao'],null);
                $email = addcslashes($_POST['email'],null);
                $senha = addcslashes($_POST['senha'],null);
                $confirmarSenha = addcslashes($_POST['confsenha'],null);

                // Verificar se todos os campos estão preenchidos
                if (!empty($nome) && !empty($clube) && !empty($associacao) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
                    $u -> conectar("xdbv_login", "localhost", "root", "");
                    //"sergio-xdbv", "x-dbv.com.br", "sergio-xdbv", "Sergio2303"
                    if ($u -> msgErro == "") { // se esta tudo ok
                        if ($senha == $confirmarSenha) {
                            if ($u -> cadastrar($nome,$clube,$associacao,$email,$senha)) {
                                ?>
                                <div id="msg-sucesso">
                                    Cadastrado com Sucesso! 
                                    <a href="login.php"><strong>Clique aqui para Entrar!</strong></a>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="msg-erro">
                                    Email já cadastrado!
                                </div>
                                <?php
                            }
                        } else {
                            ?>
                            <div class="msg-erro">
                                Senhas não Confere!
                            </div>
                            <?php
                        } 
                    } else {
                        ?>
                        <div class="msg-erro"> 
                            <?php echo "Erro: ".$u -> msgErro;?>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="msg-erro">
                        Preencha todos os campos!
                    </div>
                    <?php
                }
            }

        ?>

		<!-- <script src="js/efeitos.js"></script> -->
	</body>
</html>