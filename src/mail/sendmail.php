<?php

include "PHPMailer-master/src/PHPMailer.php";
include "PHPMailer-master/src/Exception.php";
include "PHPMailer-master/src/POP3.php";
include "PHPMailer-master/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


    $tieude = "Đặt vé tại website Đại lý vé máy bay toàn quốc thành công!";
    $noidung = "
        <p>Cảm ơn quý khách đã đặt vé của chúng tôi ! </p>
      ";
        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        //print_r($mail);   
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'tuyenpham191103@gmail.com';                 // SMTP username
            $mail->Password = 'gpjzhsiriipjwraz';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
        
            //Recipients
            $mail->setFrom('tuyenpham191103@gmail.com', 'Mailer');
            $mail->addAddress('tuyenpham.19112003@gmail.com', 'Pham Tuyen');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
        
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $tieude;
            $mail->Body    = $noidung;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            //echo 'Thông báo đã được gửi tới email';
        } catch (Exception $e) {
            //echo 'Thông báo không được gửi tới email. Mailer Error: ', $mail->ErrorInfo;
        }


?>