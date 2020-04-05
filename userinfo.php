<?php


$con = mysqli_connect('localhost', 'root','','probro user data');

if($con){
	echo "Connection Successful";
}
else{
	echo "No connection";

}

if(isset($_POST['user']))
{
	$user = $_POST['user'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$comment = $_POST['comment'];



	$query = " insert into userinfodata (user, email, mobile, comment) 
	values ('$user','$email','$mobile','$comment')";

	echo "$query";

	if(mysqli_query($con,$query))
	{
		echo "Successful";
	}
	else
	{
		echo mysqli_error($con);
	}
}
header('location:index.php');




?>