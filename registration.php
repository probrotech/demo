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



$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$name = $_POST['username'];
$pass = $_POST['password'];




$q = " select * from login where username = '$name'  && password = '$pass'" ;

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num ==1){
	echo "Already A User";
}
else{

$qy= "insert into login(username , password , fname , mname , lname , email) values('$name' ,'$pass' ,'$fname' ,'$mname','$lname' , '$email')";
	mysqli_query($con , $qy);
}


?>