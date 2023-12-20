
<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$recipients = explode(',',$_POST['recipient']);
  foreach ($recipients as $recipient) {
//Load Composer's autoloader
require 'vendor/autoload.php';

//if (isset($_POST['send'])) {
    //form variable

    $sender_name = $_POST['sender_name'];
    $sender = $_POST['sender'];
    $subject = $_POST['subject'];
    //$attachments = $_FILES['attachments']['name'];

    $footers = "Get in touch with XM Global Trades";
    $copy = "";
    $body = $_POST['remails'];

    /*print_r($recipient);
    die();*/


   //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'xmglobaltrades.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@xmglobaltrades.com';                     //SMTP username
    $mail->Password   = 'Info@2020';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@xmglobaltrades.com', 'XM Global Trades');
    // $mail->setFrom($sender, $sender_name);
    //foreach ($recipients as $recipient) {
        $mail->addAddress($recipient);
        // $mail->addAddress('classic44life@gmail.com');

         //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('support@xmglobaltrades.com', 'XM GlobalTrades');
    //$mail->addCC('cc@example.com');
    // $mail->addBCC('emmanueluzoma969@gmail.com');

    //Attachments
    // looping the attchment with foreach loop
/*
    for ($i=0; $i < count($attachments); $i++) {
        $file_tmp = $_FILES['attachments']['tmp_name'][$i];
        $file_name = $_FILES['attachments']['name'][$i];
        move_uploaded_file($file_tmp, 'attachments/'. $file_name);
         $mail->addAttachment('attachments/'. $file_name);
    }
  */
    $message =$body;
    $img = '<img src="https://www.patriotinvestment.com/wp-content/uploads/2023/02/patriot-logo-large-min.png" width="200px">';

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = '<html><body style="padding: 20px; line-height: 20px; font-size: 14px; font-family: sans-serif;">
    <p align="center">'.$img.'</p>
    '.$message.'<br><br><br> <div style="background-color: #1E8250; color:#eee; padding: 20px; text-align: center; border-top: 3px red solid;">'.$footers.'<br> <a href="mailto:support@xmglobaltrades.com"><img src="https://amelianovine.com/imgg/email.png" width="40px" height="40px" style="border-radius:50%; margin-left:10px;"></a> <a href="https://wa.link/hiq67t"><img src="https://amelianovine.com/imgg/what.jpg" width="40px" height="40px" style="border-radius:50%; margin-left:10px;"></a><br>
    <br></div><p style="text-align: center; font-size: 10px;">'.$copy.'</p>
</body></html>';

    $mail->send();
  header("location:../index.php?msg=Mail sent successfully");

} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      header("location:../index.php?msg=Mail not sent successfully");
}
}

//}
