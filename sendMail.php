3574cecd881debb876f58a9d1fa7e1de-us6
8ae4b8d2f1

<?php
require 'PHPMailerAutoload.php';

// $email = $_POST['email'];
// $name = $_POST['name'];
// $amt = $_POST['amount'];


// // con ($email);
// echo("<script>console.log('PHP: " . $email . "');</script>");
$mail = new PHPMailer;

$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.elasticemail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'rushishirole9@gmail.com';                 // SMTP username
$mail->Password = 'FCF677885EC6BCFB98D767F5639F30CE5E37';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 2525;                                    // TCP port to connect to

$mail->setFrom('rushishirole9@gmail.com', 'ASV Corp.');
$mail->addAddress( 'alexvettithanam@gmail.com' , 'alex');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('rushishirole9@gmail.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Payment Sucessful';
$mail->Body    =  "Dear user your payment of is Sucessful <br>'";
$mail->AltBody = 'This you for your kind donation';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}