<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<style>
body {
  font-family: Arial;
  /*background-image: url("bb2.jpg");*/
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
 .zoomA {
        width: 600px;
        height: auto;
        /* ease | ease-in | ease-out | linear */
        transition: transform ease-in-out 0.3s;
      }
      .zoomA:hover {
        transform: scale(1.2);
      }
</style>
</head>

<body>
  <center><h2>Gallery</h2></center>
<center>
	<!--<h1>Gallery</h1>
	<h2>Select Your Friends In List</h2>
	<form class="example" style="margin:auto;max-width:300px">
	<input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>--->
  <!-- <table border="1">
  <tr>
  	<th>S.NO</th>
  	<th>Name</th>
  	<th>Place</th>
  </tr>
<tr>
	<td></td>
</tr>
</table> -->
<hr />
<div>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sce1";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from galary where UserName='".$_SESSION["UserName"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    <div class="gallery">
  <a target="_blank">

    <img  width="600" height="400" class="zoomA" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
  </a>
  <div class="desc">
<!--     <?php echo base64_encode($row['description']); ?>">
 -->  </div>
</div>
    
    <br>
    <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
	
	
</center>
</body>
</html>