<?php

$con = mysqli_connect('localhost', 'root','','probro user data');

if($con){
	echo "Connection Successful";
}
else{
	echo "No connection";

}
mysqli_select_db($con , 'probro user data');



$link = $_POST['link'];




$q = " select * from link where link = '$link'" ;

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num ==1){
	echo "This link is already submitted , try another one";
}
else{

$qy= "insert into link(link) values('$link')";
	mysqli_query($con , $qy);
}
header('location:home.php')


?>
