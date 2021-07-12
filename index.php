
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
  
/* Style all input fields */
body{
  background-image: url("bbcx.jpg");
/*  width: 100%;
*/  background-repeat: no-repeat;

background-size: cover;


}
input {
  /*width: 19%;*/
  padding: 12px;
  width: 100%;
/*  border: 2px solid #ccc;
  border-radius: 1px;
  box-sizing: border-box;
  margin-top: 16px;
  margin-bottom: 16px;*/
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  width: 50%;
  
}


form
{
  padding: 20px;
}

/* Style the container for inputs */

.vertical{
  border-left: 6px solid black;
  height: 800px;
  position: absolute;
  left: 540px;
 margin-top: -506px; 
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  
  color: #000;
  position: relative;
  padding: 20px;
  /*margin-top: 10px;*/
  border-left: 6px;
}

#message p {
  padding: 10px 35px;
  font-size: 15px;
float: left;
/*margin-top: 180px;*/

}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -15px;
  content: "✖";
}

label
{
  float: left;
}
</style>
</head>
<body>
  <center>
  
<div style="float:left;width: 50%;">
  <div class="">
  <form action="logv.php" method="POST">
    <h1 style="color: white">Login </h1>
    <label for="Username" style="font-size: 18px;"><b>Username</b></label>
    <input type="text" id="Username" name="Username" required>

   <br><br> <label for="Password"><b>Password</b></label>
    &nbsp;&nbsp;<input type="password" id="Password" name="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
<br><label><b style="color: white">(Must contain at least one number and one uppercase and lowercase letter,<br> at least 8 or more characters)</b></label>
     <input type="checkbox" onclick="myFun()"><b style="color: white">Show Password</b>
    <br><br>
    <input type="submit" value="Login" style="margin-left:40px;">

  </form> 
  
</div>

</div>
                  <!-- Register form -->
<div style="float:left;width: 50%">
  <div>
  <form action="store.php" method="POST">
    <h1 style="color: white">Register Form</h1>
    <label for="Username" style="font-size: 18px;"><b>Username</b></label>
    <input type="text" id="Usernname" name="username" required>


   <br><br> <label for="Password" style="margin-left: 9px"><b>Password</b></label>
    &nbsp;&nbsp;<input type="password" id="Passsword" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required ><br><label><b style="color: white">(Must contain at least one number and one uppercase and lowercase letter,<br> at least 8 or more characters)</b></label>
    <input type="checkbox"  onclick="myFunction()"><b style="color: white">Show Password</b>

    <br><br>
    <label for="num"><b>Contact No</b></label>
    <input type="number" name="num" id="nu">
    <br><br><label for="mai" style="margin-left: 10px"><b>Email Id</b></label>
    &nbsp;&nbsp;<input type="email" name="mai" id="ma">
    <br><br> <input type="submit" value="Submit" name="reg" style="margin-left:40px;">
    

  </form> 
  
</div>
<div id="message">
  <h3 style="text-align: left;">Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p><br><br>
  <p id="number" class="invalid" >A <b>number</b></p><br><br>
  <p id="length" class="invalid" style="">Minimum <b>8 characters</b></p>
</div>

  </div>
</center>

</body>
				
<script>
function myFunction() {
  var x = document.getElementById("Passsword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFun() {
  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


var myInput = document.getElementById("Password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "none";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


</html>
