
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//if (isset($_POST['send'])) {
    //form variable 
/*
    $sender_name = $_POST['sender_name'];
    $sender = $_POST['sender'];
    $subject = $_POST['subject'];
    $attachments = $_FILES['attachments']['name'];
    $recipients = explode(',',$_POST['recipient']);
    $body = $_POST['body'];
*/
    /*print_r($recipient);
    die();*/


   //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'reocoinvest.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@reocoinvest.com';                     //SMTP username
    $mail->Password   = 'Info@2020';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@reocoinvest.com', 'REOCOINVEST');
    //foreach ($recipients as $recipient) {
        // $mail->addAddress('info@trade-ameri.com');
         $mail->addAddress($mail_rec);
         // $mail->addAddress('emmanueluzoma969@gmail.com');
    //}
         //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@reocoinvest.com', 'REOCOINVEST');
    //$mail->addCC('cc@example.com');
    // $mail->addBCC('emmanueluzoma969@gmail.com');
    $mail->addBCC('info@reocoinvest.com');

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

    // $message ="<p>Your withdrawal of $withdraw_amt has been successfully submitted. please check progress on the withdrawal history in your dashboard.</p>
    //         </div>";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject =$mail_sub;
    $mail->Body    = "<html>
        <body>
        <div style='background:rgba(0,0,0,0.1); height:100%;padding:2px;'>
        <div style='margin:10px;border-radius:10px;background:white;padding:40px 5px 40px 5px;height:100%;text-align:justify;'>

        <div style='margin-top:10px;border-bottom:0.5px solid black'>
            <p style='text-align:center;'><img src='https://www.reocoinvest.com/pics/logo.jpeg' width='200px'></p>
        </div>

        <div style='margin-top:50px'>
            <h2>Dear $main_user,</h2>
            <p style='font-size:19px;line-height:30px;color:rgba(0,0,0,0.6);'>".$mail_msg."</p>
        </div>

        <div style='margin-top:10px;font-size:19px;line-height:30px;color:rgba(0,0,0,0.6);'>
        <p>Warm regards..</p>
        <p>TRADE-AMERI TEAM cares..</p>
        </div>

        </div>
     </div>
        </body>
        </html>";

     $mail->send();
//    echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

//}