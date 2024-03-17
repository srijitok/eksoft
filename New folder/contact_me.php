<?php
// Check for empty fields

if(isset($_POST['submit'])){
$a = $_POST["name"] ;
$x = $_POST["phone"];
$c = $_POST["email"];
$d = $_POST["message"];
  


require("class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->Host = "smtp.senrysa.com"; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = "mazumder.srijit@senrysa.com";
    $mail->Password = "masamija@1";
    $mail->From = "mazumder.srijit@senrysa.com";
    $mail->IsHTML(true);
	
    $mail->AddAddress("mazumder.srijit@senrysa.com", "");
    $mail->Subject = "Website Contact Form:";
	//$mail->Headers = "From: noreply@yourdomain.com\n";
    $mail->Body = '<b>You have a reservation!</b></br>'
	.'First Name : '. $a .'<br>'	
	.'Phone Number : ' . $x .'<br>'
	 .'Email : '. $c .'<br>'
	 .'Message : '. $d;
	
    $mail->WordWrap = 50;
    if (!$mail->Send()) {
       return false;      
    } else {
       return true;      
    }
}
?>


