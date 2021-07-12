<?php
// echo "username : ".$_POST["Username"];
// echo "<br>Password : ".$_POST["Password"];

include("db.php");
// Check connection

$sql = "SELECT * FROM fm where username='".$_POST["Username"]."' and password='".$_POST["Password"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   session_start();
   $_SESSION["userId"] = $row["id"];
   $_SESSION["userName"] = $row["username"];
   header("Location: m.php");
  }
} else {
	?>
	<script>
		alert("wrong username and password");
	</script>
	<?php
  header("Location: index.php");
}
$conn->close();
?>
?>