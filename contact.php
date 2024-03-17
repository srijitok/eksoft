

<?php 

$email = $_POST['email'] ;
$message = $_POST['message'] ;
$phone=$_POST['phone'];
$name=$_POST['name'];

				require 'PHPMailer/PHPMailerAutoload.php';
                $mail = new PHPMailer;
                $mail->IsSMTP();
                
                $mail->CharSet = "iso-8859-1";
                $mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'Elitesoftek123@gmail.com';                    // SMTP username
                $mail->Password = 'elitesoftek@12345';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;
				
				
				$mail->From = $email;
                $mail->FromName = $name;
				$mail->addAddress('Elitesoftek123@gmail.com');
				 
				$mail->isHTML(true);
                $mail->Subject = "Enquiry";
                $mail->Body = "<br/>Name : ".$name."<br/>Contact Number : ".$phone."<br/>Email Address : ".$email."<br/>Message : ".$message;
				$mail->AltBody = $message;
               if($mail->send()){
				   echo "<script type='text/javascript'>alert('Your mail has been sent successfully!')</script>";
			   }else{
				   echo "<script type='text/javascript'>alert('Unable to send email. Please try again!')</script>";
			   }


?>