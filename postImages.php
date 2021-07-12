<?php
session_start();
if(isset($_POST['imageupdate']))
{
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $description = $_POST["description"];
    $con = mysqli_connect('localhost','root','','sce1') or die('Unable To connect');
  
    $sql = "insert into galary (image,userName,description) values (?,'".$_SESSION["userName"]."','".$description."')" ;

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
<form action="" method="post" enctype="multipart/form-data" id="imageupdate"  style="margin-left:7%;margin-top:10%;float:left;">
    <input type="file" name="image" /><br>
    <input type="submit" name="imageupdate" value="ImageUpdate" ><br>
    <input type="text" name="description">
   
</form>