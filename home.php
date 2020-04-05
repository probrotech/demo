<?php

session_start();

if(!isset($_SESSION['username'])){

header('location:login.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<section>	
	
	<div class="container">
		
	
			<h2 class="text-center text-success py-3">Welcome <?php echo $_SESSION['username'] ; ?></h2>
			<article class="pt-3 text-center">
			<a href="logout.php" class="btn btn-primary "> Logout </a>
			</article>
			
		<div class="w-100 py-5">
			<form action="upload.php" method="post">
			<div class="form-group ">
  			<input type="link" id="link" name="link" placeholder="Enter Embedded Link Of Video  (Don't paste direct url)" class="form-control" required autocomplete="off">
  			<article class="pt-3 text-center">
  			<button onclick="myFunction()" class="btn btn-primary">Submit Link</button>
  			<a href="p&p.php" class="btn btn-success">Read T&C to get proper organic traffic</a>
  			</article>
  			</div>
			

  			<script>
			function myFunction() {
  			alert("Congrats, Your Link Is Submitted \n Your link is sent for approval, kindly wait for some time.");
			}
			</script>
			</form>


		</div>

	</div>	

</section>					

<section class="bg-success py-1 mb-5">
	<article class="py-2 text-center">
			<h3 class="text-center font-weight-bold text-white">HOW TO ADD A EMBED LINK</h3>
			
	</article>

</section>


<section>
<div class="container">	
	
	<div class="container-fluid">
		<h1 class="text-center text-capitalize pt-1">STEPS TO FOLLOW</h1>
		<hr class="w-25 mx-auto pt-5">
	</div>

	<div class="row text-center">
		<div class="mb-5">
			<h1 class="text-center text-capitalize pt-1 bg-primary">STEP-1</h1>
			<h4>Open any video from youtube & hit right click of mouse. After it, click on "Copy embed code".</h4>
			<img src="step1.png" class="img-fluid">
		</div>

	<div class="row text-center">
		<div class="mb-3">
				<h1 class="text-center text-capitalize bg-primary">STEP-2</h1>
				<h4>After copying embed code, paste it any where. In my case i use Notepad.</h4>
				<h4>Select the src="------" part of the link & copy it. As done in the image below.</h4>
			<img src="step2.png" class="img-fluid mb-3" >
		</div>	

	<div class="row text-center">
		<div class="mb-3">
			<h1 class="text-center text-capitalize pt-1 bg-primary">STEP-3 </h1>
			<h4>Paste the selected part and hit the "submit link" button.</h4>
			<h4>Thats all , you have successfully submitted your embed link</h4>

			<img src="step3.png" class="img-fluid">
		</div>	



		

		
	</div>
</div>	
</section>


<footer>
	<p class="text-center font-weight-bold bg-dark text-white">copyright@ProBro Productions<p>
</footer>

</body>
</html>
