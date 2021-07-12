<?php

	if(isset($_POST['sendMessage']))
		{
			

	// Authorisation details.
	$username = "sdurai246@gmail.com";
	$hash = "51363e2d1eabf735f46f86b86b1f0898d6605460f0828b6550543e7a262a9db7";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $_POST["phoneNumber"]; // A single number or a comma-seperated list of numbers
	$message = $_POST["smsMessage"];
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	if($result){
		?>
		<script>alert('mesg not send');</script>
		<?php
	}
	else{
	echo "$result";
?>
<script>alert('msg sent');</script>
<?php
}
} 


 ?>

<html>
<head>
	<title>chat</title>
	<meta charset="utf-8" />
	
</head>
<body>
<div id="container">
    <h1>Sending SMS with PHP</h1>
    <form action="" method="post">
     <ul>
      <li>
       <label for="phoneNumber">Phone Number</label>
       <input type="text" name="phoneNumber" id="phoneNumber" placeholder="3855550168" /></li>
      
      <li>
       <label for="smsMessage">Message</label>
       <textarea name="smsMessage" id="smsMessage" cols="45" rows="15"></textarea>
      </li>
     <li><input type="submit" name="sendMessage" id="sendMessage" value="Send Message" /></li>
    </ul>
   </form>
  </div>
</body>
</html>