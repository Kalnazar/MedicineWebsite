<?php 
	require_once('phpmailer/PHPMailerAutoload.php');
	$mail = new PHPMailer;
	$mail->CharSet = 'utf-8';

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mail.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 'sayat.kalnazar@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
	$mail->Password = 'web-technologies'; // Ваш пароль от почты с которой будут отправляться письма
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

	$mail->setFrom('sayat.kalnazar@mail.ru'); // от кого будет уходить письмо?
	$mail->addAddress('kalnazar.sayat222@gmail.com');     // Кому будет уходить письмо 
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Заявка с медицинского сайта';
	$mail->Body    = '' .$name . ' оставил заявку, его телефон '.$phone.'<br>Почта этого пользователя: '.$email.'<br>Письмо '.$name.': '.$message;

	if(!$mail->send()) {
	    echo 'Error';
	} else {
	    echo 'You have successfully registered!';
	}
?>