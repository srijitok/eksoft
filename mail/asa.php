<?php
// Check for empty fields

require("class.phpmailer.php");
   try{
    $mail = new PHPMailer(true);
    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->Host = "smtp.senrysa.com"; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = "das.pulok@senrysa.com";
    $mail->Password = "pulok@123";
    $mail->From = "das.pulok@senrysa.com";
    $mail->IsHTML(true);
    $mail->AddAddress("pulok20@gmail.com", "");
    $mail->Subject = "Website Contact Form: ";
	//$mail->Headers = "From: noreply@yourdomain.com\n";
    $mail->Body = "You have received a new message from your website contact form";
    $mail->WordWrap = 50;
 
		$mail->Send();
		 echo "Message Sent OK\n";
	}
	catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} 




   
?>
