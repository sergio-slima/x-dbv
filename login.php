<?php
    require_once 'inc/usuarios.php';
    $u = new Usuario;
    session_start();
    if(isset($_SESSION['id_usuario'])) {
        header("location: index.php");
        exit;
    }
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
                background-position: 50% 50%;
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
                margin: 150px auto 0px auto;
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
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="login-form">
                        <h1>Entrar</h1>
                        <form method="POST">
                            <input type="text" autocomplete="off" placeholder="Digite seu E-mail" name="email" maxlength="40">
                            <input type="password" placeholder="Digite sua senha" name="senha" maxlength="15">
                            <input type="submit" value="ACESSAR">
                            <a href="login-cadastrar.php">Ainda não tem cadastro? <strong>Cadastre-se!</strong></a>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
        

        <?php
            // FORMULARIO DE LOGIN
            if (isset($_POST['email'])) {
                $email = addcslashes($_POST['email'],null);
                $senha = addcslashes($_POST['senha'],null);

                if (!empty($email) && !empty($senha)) {
                    $u -> conectar("xdbv_login", "localhost", "root", "");
                    if ($u -> msgErro == "") {
                        if($u -> logar($email,$senha)) {
                            header("location: index.php");
                        } else {
                            ?>
                            <div class="msg-erro">
                                Email e/ou Senha Incorretos!
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
                        Preencha Email e Senha!
                    </div>
                    <?php
                }
            }

        ?>

		<script src="js/efeitos.js"></script>
	</body>
</html>