<?php 

$email = $_POST["email"];

$siteowneremail = 'example@example.com';
$siteowner = 'Your Name';

require_once("inc/PHPMailer/class.phpmailer.php");

$mail = new PHPMailer();

$email_body = "";
$email_body = $email_body . "<h1 class='heading'><strong>Email:</strong></h1><br />" . $email;

$mail->From = $email;
$mail->FromName = 'Website Contact Submission';
$mail->AddAddress($siteowneremail, $siteowner);
$mail->Subject = "Website Contact Submission";
$mail->MsgHTML($email_body);

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
} else {
   echo 'Message sent';
   // save into text file
	$fp = fopen("email-addresses.txt", "a"); 
	$inputspace = $email . "\n";
	fwrite($fp, $inputspace); 
	fclose($fp); 
}

?>