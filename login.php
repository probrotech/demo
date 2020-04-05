<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>

	.contain {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 70px 0;
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
<section>



	<div class="contain w-50" >
		<ul class="ml-auto">
		<div class="row">
			<div class="col-lg-6 ">
				<form action="validation.php" method="post" >
				
				<h2 class="text-center m-5 text-primary bg-white font-weight-bold ml-auto" >Log In Form</h2>

				<div class="form-group">
					<label class="bg-white text-dark font-weight-bold"> Username </label>
					<input type="text" name="username" class="form-control" placeholder="Enter Username" required>

				</div>

				<div class="form-group">
					<label class="bg-white text-dark font-weight-bold"> Password </label>
					<input type="Password" name="password" class="form-control" placeholder="Enter Password" required>

				</div>

				<button type="submit" class="btn btn-primary"> Login </button>
				<a href="signin.php" class="btn btn-success">New User/Register with Us</a>		
				</form>
			</div>	
		</div>	
	</div>	

</section>

<footer>
	<p class="text-center font-weight-bold bg-dark text-white">copyright@ProBro Productions<p>
</footer>
				
</body>
</html>