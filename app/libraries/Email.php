
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

class Email {

    public function sendMail()
    {

        $emailTo = $_POST["email"];
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
           // $mail->SMTPDebug = 2;
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'getflixbecode@gmail.com';                     // SMTP username
            $mail->Password   = 'getflixproject';                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('getliixbecode@gmail.com', 'No Lollygagging');
            $mail->addAddress("$emailTo");     // Add a recipient
            $mail->addReplyTo('no-reply@gmail.com', 'No reply');
            
        
            // Content
            $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/users/resetpass";
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Reset your password';
            $mail->Body    = "<div><h1>You requested a password reset</h1><p>Click<a href='$url'> this link </a> to do so</p></div>";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            redirect("users/login");
            // flash("success_message");
            // echo 'reset password link has been sent to your email';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }   exit();
        
}
}