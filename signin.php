<!DOCTYPE html> 
<html>
<head>
	<title>signin</title>
</head>
<style>
.container {
  margin: auto;
  width: 70%;
  border: 0px solid #73AD21;
  padding: 70px 100;
}
body  {
  background-image: url("background1.jpeg");
  background-color: #73AD21;
}



</style>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body>



	<div class="container w-50">
		<ul class="ml-auto">
		<div class="row">
			<div class="col-lg-6 ">
				<form action="registration.php" method="post">
				<h2 class="text-center m-5 text-primary bg-white font-weight-bold ml-auto">Sign Up Form</h2>

				<div class="form-group">
					<label class="bg-white text-dark font-weight-bold"> First Name </label>
					<input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
				</div>

				<div class="form-group">
					<label class="bg-white text-dark font-weight-bold"> Middle Name </label>
					<input type="text" name="mname" class="form-control" placeholder="Enter Middle Name" >

				</div>

				<div class="form-group">
					<label class="bg-white text-dark font-weight-bold"> Last Name </label>
					<input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>

				</div>

				<div class="form-group">
					<label class="bg-white text-dark font-weight-bold"> Email Address </label>
					<input type="email" name="email" class="form-control" placeholder="Enter Email Address" required>

				</div>


				<div class="form-group">
					<label class="bg-white text-dark font-weight-bold"> Username </label>
					<input type="text" name="username" class="form-control" placeholder="Enter Username" required>

				</div>

				<div class="form-group">
					<label class="bg-white text-dark font-weight-bold"> Password </label>
					<input type="Password" name="password" class="form-control" placeholder="Enter Password" required>

				</div>

				<button onclick="myFunction()" class="btn btn-primary">Submit</button>
				<script>
				function myFunction() {
  				alert("Congrats, Your 'Sign Up' details are submitted \n Now you can login.");
				}
				</script>


				</form>
			</div>	
		</div>	
	</div>	


				
</body>
</html>