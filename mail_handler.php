<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 include("headeruser.php");
if(isset($_POST['submit'])) {
   $email_to = "farhatsharif.iub@gmail.com";
   $email_subject = "Adapted IT Solutions 
    This Message is from your new project";
    $visitormail=$_POST['email'];
    $visitormsg=$_POST['subject'];
    $visitorph=$_POST['ph'];
    $visitorname=$_POST['name'];
    $visitoradd=$_POST['add'];
   
    require 'vendor/PHPMailer/PHPMailer/src/Exception.php';
    require 'vendor/PHPMailer/PHPMailer/src/PHPMailer.php';
    require 'vendor/PHPMailer/PHPMailer/src/SMTP.php';
    require 'vendor/autoload.php';
    require 'vendor/cacert.pem';
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
       $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp@gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tazeen.hashmat2014@gmail.com';                     //SMTP username
        $mail->Password   = '123456';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to
    
        //Recipients
        $mail->setFrom($visitormail, 'tazeen');
        $mail->addAddress($email_to, 'farhat');     //Add a recipient
        $mail->addReplyTo($visitormail, 'Information');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $visitormsg;
        $mail->AltBody = $visitormsg;
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }

    include("footer.php");
    ?>
