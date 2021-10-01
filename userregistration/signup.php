<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelix</title>
    <link rel=" shortcut icon" type="image/png" href="http://localhost/html%20project/image/destination.png">
    <style>
  <?php include "signup.css" ?>
  body{
         background-image: url("http://localhost/html%20project/userregistration/room.jpg");

    }
</style>
    <!-- <link rel="stylesheet" href="C:/xampp/htdocs/html project/userregistration/signup.css?Vm<//?php echo time(); ?>"> -->
</head>
<body>
    <div class="signup">
        <form action="" method="POST">
            <h2 style="color: #fff;">Sign Up</h2>
            <input type="text" name="fname" placeholder="First name" required><br><br>
            <input type="text" name="lname" placeholder="Last name" required><br><br>
            <input type="password" name="pass" placeholder="Password" required><br><br>
            <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
            <input type="text" name="email" placeholder="Email address" required><br><br>
            <input type="text" name="mob" placeholder="Mobile Number" required><br><br>
            
            <button type="submit" style="width: 210px;
    height: 40px;
    color: black;
    border-radius: 10px;
    font-weight: bold;
    background: deepskyblue;
    border: none; " name="signup">Register</button>

           <div id="msg"></div>
           you already have account?<a href="http://localhost/html project/userregistration/index.php">&nbsp; Log In</a><br><br>
           <a href="http://localhost/html%20project/index.html"> Back to home</a>
           <hr>
           OR
           <hr>
           <div>
           <a  style="" href="https://accounts.google.com/signup/v2/webcreateaccount?hl=en&flowName=GlifWebSignIn&flowEntry=SignUp" target="_blank">Gmail</a>
</div>
        </form>
    </div>
    
</body>

<?php

include 'connection.php';
if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];

    $emailquery = "select * from customer where email = '$email' ";
    $query = mysqli_query($con,$emailquery);
    $emailcount = mysqli_num_rows($query);
    if($emailcount >0)
    {
        ?>
       <script>
         alert("Email already exists or Invalid entry");
    </script>
    <?php
    }
    else{
        if($pass===$cpass && $fname && $lname && $pass && $cpass && $email && $mob)
        {
            $insertquery = " insert into customer(first_name, last_name, password,confirm_password, email,mobile_no) values ('$fname','$lname','$pass','$cpass','$email','$mob')";

            $res = mysqli_query($con,$insertquery);
   if($res)
   {
       ?>
       <script>
         alert("Data inserted successfully");
         location.replace("index.php");
    </script>
    <?php
   }else
   {
    ?>
    <script>
      alert("Data not inserted!!");
 </script>
 <?php
   }
        }
        else
        {
            ?>
       <script>
         alert("Password are not Same");
    </script>
    <?php
        }
    }
}

?>
</html>