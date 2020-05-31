<?php
	
	//Recupera os dados enviados pelo formulario
	$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
	

	//Variaveis Locais
	$Nome = $GetPost['nome'];
	$Email = $GetPost['email'];
	$Msg = $GetPost['msg'];


	//Incluir classes PHPMailer
	include_once 'class.smtp.php';
	include_once 'class.phpmailer.php';


	//Enviando email utilizando a classe PHPMailer
	$Mailer = new PHPMailer;
	$Mailer->CharSet = "utf8";
	$Mailer->SMTPDebug = 3;
	$Mailer->isSMTP();                                      
	$Mailer->Host = 'mail.x-dbv.com.br';  
	$Mailer->SMTPAuth = true;                              
	$Mailer->Username = 'contato@x-dbv.com.br';                 
	$Mailer->Password = 'Sergio2303'; 
	$Mailer->SMTPSecure = tls;                          
	$Mailer->Port = 587;
	$Mailer->FromName = '($Nome)';
	$Mailer->From = 'contato@x-dbv.com.br';
	$Mailer->addAddress('contato@x-dbv.com.br');
	$Mailer->isHTML(true);
	$Mailer->Subject = "Novo e-mail do site do cantato: ($Nome)".date("H:i")." - ".date("d/m/Y");
	$Mailer->body = "E-mail enviado por ($Nome)";


	//Verificação