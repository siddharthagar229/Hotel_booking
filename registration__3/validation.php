<?php
session_start();

// Take variable to connnect my database
$con=mysqli_connect('localhost','root','');


// this line select databsa
mysqli_select_db($con,'userregistration');


$name=$_POST['user'];
$pass=$_POST['password'];

$s =" select * from usertable where name ='$name' && password = '$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['username']=$name;
    header('location: http://localhost/html project/registration__3/home.php');
   
}else{
    header('location: http://localhost/html project/registration__3/login.php');
   
}



?>