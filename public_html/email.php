
<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);
 
try {
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'contatoluiscavalcante@gmail.com';
	$mail->Password = 'luis182431@';
	$mail->Port = 587;
 
	$mail->setFrom($_POST['email']);
	$mail->addAddress('contato@luiscavalcante.com');
	
 
	$mail->isHTML(true);
    $mensagem = ($_POST['mensagem']);
    $email = ($_POST['email']);
	$mail->Subject = $_POST['nome'];
    $mail->Body = $mensagem. " ".$email;
        
 
	if($mail->send()) {
		echo "<script>alert('Email enviado com sucesso,obrigado!');</script>";
               
	} else {
		echo "<script>alert('Estamos com dificuldade em enviar o email, tente mais tarde!');</script>";
                
	}
        {
          
       echo "<script> window.location.href = 'index.html';</script>";
        }
} catch (Exception $e) {
	echo "<script>alert('Ocorreu algum problema tente mais tarde');</script>";
	echo "<script> window.location.href = 'index.html';</script>";
}
     ?>

