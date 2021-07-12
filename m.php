<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
 
<script src="https://kit.fontawesome.com/a076d05399.js"></script>


	<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 11px 19px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #0000ff;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.9);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: 	#ff0000;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.navbar a.active{
	background-color: #0000FF;
  color: white;
}
#img{
        border:1px solid #333;
        height: 130px;
        width: 100px;
        margin-top: 2%;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        box-shadow: 1px 1px 3px #888;
    }
  
  .bs-example{
      margin: 20px;
    }

    .form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] ,.form-container input[type=email]{
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}   

  
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 7px;
  
}
	</style>
</head>
<body>

<div class="navbar">
  <a  class="active" href="m.php">Home&#127968;</a>
  <a href="an.php">Animate  &#128525;</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sy.php">Gallery&#9829;</a>
      <a href="mail.php">Mail&#9993;</a>
      <a href="ch.php">Chat &#128140;</a>
      <a href="p.php">Games &#128013;</a>
      <a href="ani.php">animation</a>
       <a href="anic.php">animation moving &#128536;</a>

    </div>
  </div>
  <a href="index.php">Logout&#128528;</a>
  <a href="postImages.php">POST IMAGES</a>
  <div style="float:right;color: white;font-size:14px;" >
    <?php
include("db.php");


$sql = "SELECT * FROM fm where id= '".$_SESSION["userId"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $userName = $row["username"];
    ?>
  	welcome <br><span style="font-size: 19px;font-style: italic;"><a style="cursor: pointer;" onclick='profile()'>
      <?php echo "$userName"; ?></a></span><br>
   <?php  }
} else {
  echo "0 results";
}
?>
  </div>

</div>
<div id="home">
<?php include 'home.php';?>
</div>
<div id="profile" > 
  
 <div class="bs-example"  >

<?php 


 $id=$_SESSION["userId"];

$res = $conn->query("select * from fm where id='$id'"); 
?>
<div style="float:left;margin-left: 3%;">
  <?php 
$result = $conn->query("select * from fm where id='$id' and image!=''"); 
?>

<?php if($result->num_rows > 0){ ?> 
    <span style='margin-right:5%;'>
        <?php while($row = $result->fetch_assoc()){ 
    
   
    ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"  height="30" width="40" alt="Profile Image" id="img"/> 
        <?php } ?> 
    </span>
<?php }else{ ?> 
<span style='margin-left:5%;'>
    <img src="default.jpg" height="30" width="40" alt="default" id="img">
  </span>
<?php } ?> 
  <form action="" method="post" enctype="multipart/form-data" id="imageupdate"  style="margin-left:7%;margin-top:10%;float:left;">
    <input type="file" name="image" /><br>
    <input type="submit" name="imageupdate" value="ImageUpdate" >
</form> </div> 
  </div></span>

<?php if($res->num_rows > 0){ ?> 
    <span style='margin-left:5%;'>
        <?php while($row = $res->fetch_assoc()){ 
    
    $n=$row['username'];
    $e=$row['mai'];
    $p=$row['password'];
    $ph=$row['num'];
    ?> 
    <table class="table table-striped" >
        
        <tbody>
            <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $n?></b></span></td>                
            </tr>
            <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $e?></b></span></td>                
            </tr>
             <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $p?></b></span></td>                
            </tr>
       <tr>               
                <td style="color:black;font-size:17px;" ><b>&nbsp;&nbsp;&nbsp;&nbsp;Phone Number:</b><span style='color:rgb(92, 92, 61);font-family: "Times New Roman", Times, serif;font-size:20px;'>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php  if($ph==''){ echo '<span style="color:black;font-size:25px;">-</span>'; }else echo $ph;?></b></span></td>                
            </tr>
            <tr>               
                <td style="color:black;font-size:17px;"><b>&nbsp;Edit Information:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="editinfo()" style="color:blue;" class="pointer">Edit</a></td>
            </tr>
      
        </tbody>
    </table>

  <div class="form-popup" id="myForm">
 <form  class="form-container" action="st.php" method="post">
    <h1>Update</h1>

    <label for="name"><b>Name</b></label>
    <input type="text"  name="name" value="<?php echo $n ?>" id="name" required>

    <label for="email"><b>Email</b></label>
    <input type="email"  name="email" value="<?php echo $e ?>" id="email" required>
 
  <label for="psw"><b>Password</b></label>
    <input type="text"  name="password" value="<?php echo $p ?>" id="pass" required>
  
  <label for="number"><b>Phone Number</b></label>
    <input type="text"  name="phone" value="<?php echo $ph ?>" id="phone" required>
  
    <input type="hidden" name="user" value="<?php echo $id ?>">
    <button type="submit" class="btn" name="update" >Update</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
   <?php } ?> 
  <?php }else{ ?> 
  <?php } ?>
  


</div>
 </body>
</html>
<?php
if(isset($_POST['imageupdate']))
{
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','sce1') or die('Unable To connect');
  
    $sql = "update fm set image= ? where id='$id'" ;

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        echo "<script>alert('Image Successfullly UPloaded');window.location.href='m.php'</script>";
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}
}
?>

<script>
  var ho=document.getElementById("home");
  ho.style.display="block";
   var pro=document.getElementById("profile");
  pro.style.display="none";
  function profile()
  {
   
        var ho=document.getElementById("home");
  ho.style.display="none";
   var pro=document.getElementById("profile");
  pro.style.display="block";
 
     
  }
  function editinfo()
{
  
  document.getElementById("myForm").style.display = "block";

}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
  </script>
