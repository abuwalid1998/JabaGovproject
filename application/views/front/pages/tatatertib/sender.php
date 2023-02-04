<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gfg.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'amjadkhaliliah1998@gmail.com';                 
    $mail->Password   = 'fhfphbenwzxiapzg';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('amjadkhaliliah1998@gmail.com', 'Name');           
    $mail->addAddress('amjad.w.kh@icloud.com');
    
       
    $mail->isHTML(true);                                  
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["message"];
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "Mail has been sent successfully!";
    redirect(base_url());
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>