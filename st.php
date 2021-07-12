<?php
include 'db.php';
if (isset($_POST['update']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$user=$_POST['user'];
	$qry = "update fm set username='$name',password='$pass',num='$phone',mai='$email'  where id='$user'";
	if ($conn->query($qry) === TRUE) {
		echo "<script>alert('Updated successfully');window.location.href='m.php';</script>";
		
} else {
    echo "Error: " . $qry . "<br>" . $conn->error;
}

	
}
	

?>