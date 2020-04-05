<?php


session_start();
header('location: login.php');

$con = mysqli_connect('localhost', 'root');
if($con){
	echo "connection successfull";
}
else{
	echo "No Connection";
}

mysqli_select_db($con , 'probro user data');


$name = $_POST['username'];
$pass = $_POST['password'];

$q = " select * from login where username = '$name'  && password = '$pass'" ;

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num ==1){
	
	$_SESSION['username'] =$name;
	header('location:home.php');
}
else{
	
	header('location: login.php');
}


?>