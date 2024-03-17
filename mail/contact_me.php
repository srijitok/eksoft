<?php
// Check for empty fields


$a = $_POST["name"] ;
$x = $_POST["phone"];
$c = $_POST["email"];
$d = $_POST["message"];
  


/*require("PHPMailerAutoload.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->Host = "smtp.gmail.com"; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = "srijitok@gmail.com";
    $mail->Password = "masamija@1";
    $mail->From = "srijitok@gmail.com";
    $mail->IsHTML(true);
	
    $mail->AddAddress("srijitok@gmail.com", "");
    $mail->Subject = "Website Contact Form:";
	//$mail->Headers = "From: noreply@yourdomain.com\n";
    $mail->Body = '<b>You have a reservation!</b></br>'
	.'First Name : '. $a .'<br>'	
	.'Phone Number : ' . $x .'<br>'
	 .'Email : '. $c .'<br>'
	 .'Message : '. $d;
	
    $mail->WordWrap = 50;

    if($mail->Send()){
        header("location : www.google.co.in");
    }else {
        header("location : www.youtube.com");
    }*/


   /* if (!$mail->Send()) {
       return false;   
	   //echo 'error';
    } else {

       return true;      
    }*/

header("location : www.google.co.in");

?>


