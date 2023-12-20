
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
    $mail->setFrom('info@reocoinvest.com', 'REOCOINVEST ADMINISTRATION');
    //foreach ($recipients as $recipient) {
        // $mail->addAddress('info@reocoinvest.com');
         $mail->addAddress('emmanueluzoma969@gmail.com');
    //}
         //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('support@reocoinvest.com', 'REOCOINVEST ADMINISTRATION');
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
    $message ="<h3>Reocoinvest Admin,</h3> <p>Reocoinvest Administration, A new registration has been recorded on your system.</p>
        <p>Recently Registered Details are: <br><br>Username: <b>$user</b>,<br>Email: <b>$regmail</b>.<br><br>Please login to your Panel to view the recently registered account. Thank you.. </p>";

    $name="$user";

    //Content
       $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject ='COMPLETED SYSTEM UPGRADE NOTIFICATION';
    $mail->Body    = "<html>
        <body>
        <div style='background:rgba(0,0,0,0.1); height:100%;padding:2px;'>
        <div style='margin:10px;border-radius:10px;background:white;padding:40px 5px 40px 5px;height:100%;'>

        <div style='margin-top:10px;border-bottom:0.5px solid black'>
            <p style='text-align:center;'><img src='https://www.waveitcourier.com/pics/logo.jpg' width='200px'></p>
        </div>

        <div style='margin-top:50px; text-align:center;'>
        <h1>Dear Vishwajeet,</h1>
            <p style='font-size:17px;line-height:30px;color:rgba(0,0,0,0.6);'>The system has been under upgrade so as to serve our clients more. You are getting this mail to be notified that our website is up and running as  the system upgrade is completed successfuly.</p>

            <p style='font-size:17px;line-height:30px;color:rgba(0,0,0,0.6);'>Please you are needed to visit the website via https://reocoinvest.com to proceed with your registration once again as all fund from your previous account would be sent to your newly created account with the spill over bonus of 5,000 USD.</p>

        </div>

        <div style='margin-top:50px; text-align:center;'>

            <p style='font-size:16px;line-height:30px;color:rgba(0,0,0,0.6);'> you can send us email via support@reocoinvest.com or chat with our live support officer via our website for more information if needed. you can also chat with our telegram support officer via https://t.me/REOCOINVEST_ADMIN whenever the need for clarification arises.</p>

            <p>copyright 2022</p>
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