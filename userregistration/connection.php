<?php

$username = "root";
$password= "";
$server= "localhost";
$db = "test";
 // connect to the data base
$con = mysqli_connect($server,$username,$password,$db);
if($con)
{
  /* ?>
   <script>
     alert('connection succesfull');
   </script>


   <?php*/
}else{
    //echo "connection can't successfull";
    die("No connection".mysqli_connect_error());
}



?>