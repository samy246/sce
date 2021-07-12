<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "sce1";


$uname = $_POST['username'];

$Psd = $_POST['password'];
$nr = $_POST['num'];
$ma = $_POST['mai'];
// echo $_POST["Username"];

// echo "<br>".$_POST["Password"];

// 

if(isset($_POST["reg"])){



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO fm (username, password,num,mai)
VALUES ('$uname', '$Psd','$nr','$ma')";

if (mysqli_query($conn, $sql)) {
	//echo"connect success";
	session_start();
	$_SESSION["userId"] = $conn->insert_id;
  echo"<script>alert('inserted successfully');window.location.href='m.php'</script>";
} 
else {
  
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}



mysqli_close($conn);

?>