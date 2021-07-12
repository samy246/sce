<?php
session_start();




echo '<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
th{
	text-align: left;
}
</style>';
//if( isset($_FILES['resume']['name']) )

	
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmailer/src/Exception.php';
require 'PHPmailer/src/PHPMailer.php';
require 'PHPmailer/src/SMTP.php';

// $target_dir = "resumes/";
// $target_file = $target_dir . basename($_FILES["resume"]["name"]);
// if(move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file))
{
	
$mail = new PHPMailer;                              // Passing `true` enables exceptions

$otp = rand(1000,9999);
$_SESSION["otp"] = $otp;
session_write_close();


    //Server settings
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sdurai246@gmail.com';                 // SMTP username
    $mail->Password = 'friendsforever22..';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('noreplay@sam.com', 'OTP ');
    $mail->addAddress($_POST['email']);     // Add a recipient
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'OTP for Mail Verification' ;

	$mailContent = '
			
			

<table style=" border: 1px solid black; border-collapse: collapse;">

	<tr>
		<th colspan="2"style="background: rgb(245,245,250);font-size:18px;">OTP<th>
	</tr>
	
	<tr>
		<th style="border: 1px solid black;text-align: left;">OTP </th>
		<td style="border: 1px solid black;">'.$otp.'</td>
	</tr>
	
	
	
	
	
	
</table>
			
			
			
			
	';

    $mail->Body    = $mailContent ;
    //$mail->send();

if(!$mail->send()){
	// To write the acknowlegement here to unsuccessive mails
    echo '
		<script>
			alert("Sorry..! Message Has NOt Been Sent");
			window.location.href="index.html";
		</script>
	
	';
	
    echo 'Error: '. $mail->ErrorInfo;
}else{
	// To write the acknowlegement here to successive mails
	echo '
		<script>
			alert("Thank You For Your Submission..!");
			window.location.href="otpVerification.php";
		</script>
	';
}	

}
/*

echo $target_file."<br>";
*/





?>