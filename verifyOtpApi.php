<?php

session_start();
$otp = $_SESSION["otp"];
$cOtp = $_POST["cOtp"];

if($otp == $cOtp)
{
	echo '

	<script>
			
			window.location.href="welcome.php";
		</script>

	';
}
else
{
	echo '

	<script>
			alert("Please Enter Valid OTP..!");
			window.location.href="otpVerification.php";
		</script>

	';
}

?>