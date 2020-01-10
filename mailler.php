<?php
  require "PHPMailer/class.phpmailer.php";
  require "PHPMailer/class.smtp.php";

  $mail = new phpmailer();

  $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
      )
  );


  $mail->PluginDir = "PHPMailer/";
  $mail->Mailer = "smtp";
//  $mail->Host = "mail.entrevistradetrabajochile.cl"; <--MALO
  $mail->Host = "webmail.tecnotec.cl";
  $mail->SMTPAuth = true;
  $mail->Username = "porellana@tecnotec.cl"; 
  $mail->Password = "Tecno.2019!";
  $mail->From = "porellana@tecnotec.cl";
  $mail->FromName = "porellana Web Entrevista de Trabajo Chile";
  $mail->Timeout=5;

  $mail->AddAddress("porellana@tecnotec.cl");
//  $mail->AddCC($_POST['email']);
  $mail->Subject = "Web TransLibra";
  $mail->Body = "

<b>Nombre: </b>" . $_POST['txtnombre'] ."<p>
<b>Telefono: </b>" . $_POST['txtnumero'] ."<p>
<b>Correo: </b>" . $_POST['txtcorreo'] ."<p>
<b>Mensaje: </b>" . $_POST['txtmensaje'] ."<p>";

  $mail->AltBody = "Mensaje de prueba mandado con phpmailer en formato solo texto";
  $exito = $mail->Send();

  $intentos=1; 
  while ((!$exito) && ($intentos < 2)) {
	sleep(5);
     	echo $mail->ErrorInfo;
     	$exito = $mail->Send();
     	$intentos=$intentos+1;	
	
   }
 
		
   if(!$exito)
   {
	echo "Problemas enviando correo electrónico a ".$valor;
	echo "<br/>".$mail->ErrorInfo;	
   }
   else
   {
	echo "Mensaje enviado correctamente";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
   } 
?>


