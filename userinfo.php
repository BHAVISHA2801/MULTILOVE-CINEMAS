<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "connection successful";
}else{
	echo "no connection";
}

mysqli_select_db($con,'multilove');

$User = $_POST['user'];
$email =$_POST['email'];
$address =$_POST['address'];
$city =$_POST['city'];
$comments =$_POST['comments'];

$qyery = "insert into userinfodata (user,email,address,city,comments)
values ('$user','$email','$address','$city','$comments')";

echo "$qyery";

mysqli_query($con,$qyery);

header('location:index.php');

?>