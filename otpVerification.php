<!DOCTYPE html>
<html lang="en">
<head>
  <title>OTP Verification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>

.neon {
  color: #fff;
  text-shadow:
    0 0 5px #fff,
    0 0 10px #fff,
    0 0 20px #fff,
    0 0 40px #0ff,
    0 0 80px #0ff,
    0 0 90px #0ff,
    0 0 100px #0ff,
    0 0 150px #0ff;
}
/* general styling */
:root {
  font-size: calc(1vw + 1vh + 1.5vmin);
}

html, body {
  height: 100%;
  margin: 0;
}

.container {
  margin: 0 auto;
}

body {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  background-color: #010a00;
  background-image: url("https://www.transparenttextures.com/patterns/3px-tile.png");
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-family: -apple-system, 
    BlinkMacSystemFont, 
    "Segoe UI", 
    Roboto, 
    Oxygen-Sans, 
    Ubuntu, 
    Cantarell, 
    "Helvetica Neue", 
    sans-serif;
  font-size: 1rem;
}

h2 {
  font-weight: 400;
  text-align: center;
  text-transform: uppercase;
}
</style>
<body>

<div class="container">
  <center><h2 class="neon">Verify OTP</h2></center>
  <form class="form-horizontal" action="verifyOtpApi.php" method="post">
    <div class="form-group">
      <!-- label class="control-label col-sm-2" for="email">Email:</label -->
	   
      <div class="col-sm-10" style="width: 33.3%;">
		<span style="text-align: left;color:blue;"><b>Enter your OTP :</b></span>
        <input type="text" class="form-control"  placeholder="Enter OTP" name="cOtp" required>
      </div>
  </div>
	  
	  
	
	
	
   
    <div class="form-group" style="float: left;">        
      <div class="col-sm-offset-2 col-sm-10" style="float: left;">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

<br>
<br>

</body>
</html>
