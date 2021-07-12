<!DOCTYPE html>
<html lang="en">
<head>
  <title>WEBPAGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
@import url("https://fonts.googleapis.com/css?family=Sacramento&display=swap");

h2 {
  font-size: calc(30px + 18vh);
  line-height: calc(20px + 20vh);
/*   text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
    0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092;
  color: #fccaff; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  font-family: "Sacramento", cursive;
  text-align: center;
  animation: blink 12s infinite;
  -webkit-animation: blink 12s infinite;
}

body {
  padding: 2vw;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #222;
 
}

@-webkit-keyframes blink {
  20%,
  24%,
  55% {
    color: #111;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
/*     color: #fccaff;
    text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
      0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  }
}

@keyframes blink {
5%,
  10%,
  20%,
  55% {
    color: #111;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
/*     color: #fccaff;
    text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
      0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  }
}



</style>
<body style="background-color:powderblue;">

<div class="container">
  <center><h2 style>Register Page</h2></center>
  <form class="form-horizontal" action="send.php" method="post">
    <div class="form-group">
      <!-- label class="control-label col-sm-2" for="email">Email:</label -->
	   
      <div class="col-sm-10" style="width: 33.3%;">
		<span style="text-align: left"><b>First Name :</b></span>
        <input type="text" class="form-control"  placeholder="Enter First Name" name="firstName" required>
      </div>
	  
	  <div class="col-sm-10" style="width: 33.3%;">
	   <span style="text-align: left"><b>Middle Name :</b></span>
        <input type="text" class="form-control"  placeholder="Enter Middle Name" name="middleName">
      </div>
	  
	  <div class="col-sm-10" style="width: 33.3%;">
	   <span style="text-align: left"><b>Last Name :</b></span>
        <input type="text" class="form-control" placeholder="Enter Last NAme" name="lastName">
      </div>
	  
    </div>
	
	<div class="form-group">
      
		
		 <div class="col-sm-10" style="width: 50%;">
		 <span style="text-align: left"><b>Select Your DOB :</b></span>
	  
        <input type="date" class="form-control" placeholder="Enter Your DOB" name="dob" required>
		</div>
		
		<div class="col-sm-10" style="width: 50%;">
				<span style="text-align: left"><b>Gender :</b></span>
				<select class="form-control" name="gender" required>
				  <option value="">Select</option>
				  <option value="Male">Male</option>
				  <option value="Female">Female</option>
				  <option value="Others">Others</option>
				</select>
      </div>
	  
    </div>
	

	
	<div class="form-group">
      <!--p><label class="control-label col-sm-2" for="email" style="text-align: left;">Date Of Birth :</label></p><br -->
     
	  
    </div>
	
	
	
		<div class="form-group">
      <!-- p><label class="control-label col-sm-2" for="email" style="text-align: left;">Date Of Birth :</label></p><br -->
      <div class="col-sm-10"  style="width: 50%;">
				<span style="text-align: left"><b>City :</b></span>
				<select class="form-control" name="city" required>
				  <option value="">Choose City</option>
				  <option value="saab">Trichy</option>
				  <option value="opel">Karur</option>
				  <option value="audi">Kerala</option>
				</select>
      </div>
	  
	   <div class="col-sm-10" style="width: 50%;">
				 <span style="text-align: left"><b>State :</b></span>
				<select class="form-control" name="state" required>
				  <option value="">Choose State</option>
				  <option value="saab">Tamilnadu</option>
				  <option value="opel">Andhra</option>
				  <option value="audi">Kerala</option>
				</select>
      </div>
	  
	  
    </div>
	
	
			<div class="form-group">
      <!-- p><label class="control-label col-sm-2" for="email" style="text-align: left;">Date Of Birth :</label></p><br -->
      <div class="col-sm-10"  style="width: 50%;">
				 <span style="text-align: left"><b>Marital Status :</b></span>
				<select class="form-control" name="maritalStatus" required>
				  <option value="">Marital Status</option>
				  <option value="saab">Single</option>
				  <option value="opel">Commited</option>
				  <option value="audi">Maried</option>
				  <option value="audi">Divosed</option>
				</select>
      </div>
	  
	   <div class="col-sm-10" style="width: 50%;">
				 <span style="text-align: left"><b>LinkedIn Profile :</b></span>
				<input type="link" class="form-control" placeholder="LinkedIn Profile" name="linkedInProfile">
      </div>
	  
	  
    </div>
	
	
	
	<div class="form-group">
      <!-- p><label class="control-label col-sm-2" for="email" style="text-align: left;">Date Of Birth :</label></p><br -->
      <div class="col-sm-10"  style="width: 50%;">
					 <span style="text-align: left"><b>Position Applied :</b></span>
					<select class="form-control" name="positionApplied" required>
				  <option value="">Position Applied</option>
				  <option value="saab">Front End Developer</option>
				  <option value="opel">Back End Developer</option>
				  <option value="audi">FullStack Developer</option>
				  
				</select>
      </div>
	  
	   <div class="col-sm-10" style="width: 50%;">
				 <span style="text-align: left"><b>How did you hear us :</b></span>
				<select class="form-control" name="hearFrom" required>
				  <option value="">How did you hear us</option>
				  <option value="saab"></option>
				  <option value="opel">From Newpaper</option>
				  <option value="audi">From Adds</option>
				  <option value="audi">From Socailnetwork</option>
				</select>
      </div>
	  
	  
    </div>
	
	
	
	<div class="form-group">
      <!-- p><label class="control-label col-sm-2" for="email" style="text-align: left;">Date Of Birth :</label></p><br -->
      <div class="col-sm-10"  style="width: 50%;">
					 <span style="text-align: left"><b>Phone Number :</b></span>
					<input type="text" class="form-control" placeholder="Phone Number" name="phoneNumber" required>
      </div>
	  
	   <div class="col-sm-10" style="width: 50%;">
	   <span style="text-align: left"><b>Email :</b></span>
				<input type="text" class="form-control" placeholder="Email Address" name="email" required>
      </div>
	  
	  
    </div>
	
	
	
	<div class="form-group">
      <!-- p><label class="control-label col-sm-2" for="email" style="text-align: left;">Date Of Birth :</label></p><br -->
		 <!-- <span style="text-align: left"><b>Choose Your Resume To Upload :</b></span> -->
		<!-- <input type="file" class="form-control" placeholder="Upload your resume" name="resume" required> -->
	  
	  
    </div>
	
	
	
	
   
    <div class="form-group" style="float: right;">        
      <div class="col-sm-offset-2 col-sm-10" style="float: right;">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>

<br>
<br>

</body>
</html>
