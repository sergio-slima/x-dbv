<?php //echo $_SERVER['PHP_SELF'];
	if (isset($_POST['enviar-formulario'])):
		$formatos = array("png", "jpeg", "jpg");
		$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

		if(in_array($extensao, $formatos)):
			$pasta = "anexos/";
			$temporario = $_FILES['arquivo']['tmp_name'];
			$novoNome = uniqid().".$extensao";

			if(move_uploaded_file($temporario, $pasta.$novoNome)) {
				$mensagem = '<div class="container" style="font-size: 2em; color: Tomato; text-align: center;">Upload feito com sucesso!</div><br>';
			}else{
				$mensagem = '<div class="container" style="font-size: 2em; color: Tomato; text-align: center;">Erro, não foi possivel realizar o upload.</div><br>';
			}
		else:
			$mensagem = '<div class="container" style="font-size: 2em; color: Tomato; text-align: center;">Formato inválido. (Permitidos: jpg, jpeg, png)</div><br>';
		endif;
		$anexo = $pasta.$novoNome;

		echo $mensagem;
	endif;

/////////////////////////////////////////////////////////////////////////////
	// Recupera os dados enviados pelo formulario
	$GetPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	//Variáveis Locais 
	$nome = $GetPost['inputNome'];
	$email = $GetPost['inputEmail'];
	$descricao = $GetPost['inputMsg'];
	
	$conteudo_completo = "<p>Novo contato enviado em : ".date('d/m/Y').
						"<p>Nome: ".$nome.
						"</p><p>Email: ".$email.
						"</p><p><strong>Mensagem: </strong>".$descricao."</p>";


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Load Composer's autoloader
require 'vendor/autoload.php';

$captcha_data = $_POST['g-recaptcha-response'];

$resposta = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdNjqMUAAAAAM0x8aVd20yaM-Vyr5J6prY6wiDv&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']));

if(!$resposta->success){
	die('Erro ao enviar mensagem, tente novamente.');
}

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.x-dbv.com.br';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'site@x-dbv.com.br';                     // SMTP username
    $mail->Password   = 'Sergio2303';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('site@x-dbv.com.br', 'Site');
    $mail->addAddress('contato@x-dbv.com.br', 'Contato');     // Add a recipient
    $mail->addAddress('sergio_silvalima@hotmail.com');               // Name is optional
    $mail->addReplyTo($email);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Content
    $mail->isHTML(false);  //false                          // Set email format to HTML
    $mail->Subject = 'Contato Site';
    $mail->Body    = $conteudo_completo;
    $mail->AltBody = $conteudo_completo;  // 'Corpo HTML'
    $mail->AddAttachment($anexo);


    $mail->send();

    $mail->ClearAllRecipients();
    $mail->ClearAttachments();

    echo '<div class="container" style="font-size: 2em; color: Tomato; text-align: center;">Mensagem Enviada!</div><br><div class="container" style="text-align: center;"><a href="index.php" target="_self"><span style="font-size: 2em; color: Blue;">Voltar</span></a></div>';

    // echo '<a href="index.php#formulario-info" target="_self">Voltar</a>';
    
} catch (Exception $e) {
    echo '<div class="container" style="font-size: 2em; color: Tomato; text-align: center;">A mensagem não pôde ser enviada. Mailer Error: </div>' {$mail->ErrorInfo};
    echo'<br>';
    echo '<div class="container" style="text-align: center;"><a href="index.php" target="_self"><span style="font-size: 2em; color: Blue;">Voltar</span></a></div>';
}

?>