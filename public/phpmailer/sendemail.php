<?php
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'vendor/autoload.php';

$object = new Mailer_Self();
$object->actualSend($email, $from, $subject, $messages);
 
class Mailer_Self  {
    
    public function actualSend($email, $from, $subject, $message) {
        $mail = new PHPMailer(true);
  
        try { 
            
            /*******************************************************/
            $mail->isSMTP();
            $mail->SMTPDebug = 2;
            $mail->Host = 'mail.example.com'; // Replace with your webmail provider's SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'info@example.com'; // Your webmail email address
            $mail->Password = 'pas 101'; //your password
            $mail->Port = 26;
            /***************************************************************/
            
            
            
            //$mail->SMTPKeepAlive = true;
         
            $mail->setFrom($from ?? 'business@example.com', 'CompanyName');  
            $i = 0;
            foreach ($email as $email_row) {
                $mail->addBCC($email_row); 
                  
                $mail->isHTML(true);                                 
                $mail->Subject = $subject ?? 'Test from mail auto';
                $mail->Body    = $message[$i] ?? "<div> Just a test message if working fine </div>";
                $altbody = $message[$i] ?? 'Alt body';
                $mail->AltBody = strip_tags($altbody) ;
                if ( !empty($_FILES['file']['name'][0]) ) {
                    
                	for ( $i = 0; $i < count($_FILES['file']['name']); $i++ ) { 
                        $file_tmp  = $_FILES['file']['tmp_name'][$i];
                        $file_name = $_FILES['file']['name'][$i];
                
                        $mail->AddAttachment($file_tmp, $file_name);
                	}
        	
                }
                $mail->send();
                $i++;
            }
            $mail->SmtpClose();
            
            if (isset($subject))   return 'Success';
            else echo "Success";
        } catch (Exception $e) {
            file_put_contents('ab.txt', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            if (!isset($subject))  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
         
    }
}
