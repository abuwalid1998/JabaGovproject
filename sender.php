<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require("phpmailer\src\PHPMailer.php");
require("phpmailer\src\SMTP.php");
require("phpmailer\src\Exception.php");



$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'amjadkhaliliah1998@gmail.com';                 
    $mail->Password   = 'password';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('amjadkhaliliah1998@gmail.com', 'Name');           
    $mail->addAddress('amjad.w.kh@icloud.com');
    
       
    $mail->isHTML(true);                                  
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["message"];
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo 
    "
    <script>
    
    alert('نود أعلام حضرتكم بوصول الشكوى الينا وسيتم التواصل معكم قريبا');

    document.location.href = 'index.php';
    
    </script>
    
    ";
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>