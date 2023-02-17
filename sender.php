<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require("phpmailer\src\PHPMailer.php");
require("phpmailer\src\SMTP.php");
require("phpmailer\src\Exception.php");


//here to change information about SMTP SERVER
//last update here

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();    
    
    //Gmail
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;          
    
    
    //SENDER MAIL WHICH WILL BE STATIC
    $mail->Username   = 'amjadkhaliliah1998@gmail.com'; 
    
    //Password for integration 2-App Password
    $mail->Password   = 'password';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('amjadkhaliliah1998@gmail.com', 'Name');  
    
    
    //HERE IS THE RECIVER ADDRESS WHICH WILL BE STATIC 
    $mail->addAddress('amjad.w.kh@icloud.com');
    
       
    $mail->isHTML(true);                                  
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST['name']+$_POST["message"]+$_POST['email'];
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
    echo 
    "
    <script>
    
    alert('حدث خطأ في أرسال الرسالة ... الرجاء المحاولة لاحقا');

    document.location.href = 'index.php';
    
    </script>
    
    ";
}




?>