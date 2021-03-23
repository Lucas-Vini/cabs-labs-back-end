<?php

	require ("./libraries/PHPmailer/Exception.php");
	require ('./libraries/PHPmailer/PHPMailer.php');
	require ('./libraries/PHPmailer/SMTP.php');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;


	$mail = new PHPMailer(true);



	try {
	    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'your_email@gmail.com';                     //SMTP username
	    $mail->Password   = 'your_password';                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom('your_email@gmail.com', 'Your Name');
	    $mail->addAddress('your_friend@usp.br');     //Add a recipient

	    //Attachments
	    $mail->addAttachment('./images/imagemsecreta.jpeg', 'ronaldinho.jpeg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'Contato via CabsLabs';
	    $mail->Body    = $_POST["msg"] . " Responder para: " . $_POST["from"];

	    $mail->send();
	    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
?>




