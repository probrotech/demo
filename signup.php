<?php


$connection = mysqli_connect('localhost', 'root','','probro user data');

if($connection){
	echo "Connection Successful";
}
else{
	echo "No connection";

}


	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];



	$query = " insert into signup (fname, mname, lname, email, pwd) 
	values ('$fname','$mname','$lname','$email','$pwd')";

	echo "$query";

	if(mysqli_query($connection,$query))
	{
		echo "Successful";
	}
	else
	{
		echo mysqli_error($connection);
	}

header('location:index.php');




?>