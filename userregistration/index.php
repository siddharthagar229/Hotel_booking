<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelix</title>
    <link rel=" shortcut icon" type="image/png" href="http://localhost/html%20project/image/destination.png">
    <link rel="stylesheet" href="./style.css">
  <style>
    body{
         background-image: url("http://localhost/html%20project/userregistration/room.jpg");

    }
    </style>

</head>
<body>
<?php

include 'connection.php';

if(isset($_POST['submit']))
{
    $email = $_POST['username'];
    $pass= $_POST['pass'];

    $email_search = " select * from customer where email = '$email'";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);
    
    if($email_count){
        $email_pass= mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];

        if($pass === $db_pass)
        {
            ?>
            <script>
                location.replace("cong.php");
                </script>
            <?php
        }else{
            ?>
            <script>
              alert("Password Incorrect");
         </script>
         <?php
        }
    }else{
        ?>
        <script>
          alert("Invalid email");
     </script>
     <?php
    }
}
?>







    <div class="signin">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <h2 style="color: white;">Log In</h2>
            <input type="text" name="username" placeholder=" Email">
            <input type="password" name="pass" id="" placeholder="Password">
            <div class="log">
            <button type="submit" style="margin-top: 24px;
    width: 192px;
    height: 40px;
    border: none;
    border-radius: 10px;
    background: #2cbeee;" value="Log In" name="submit" >Login</button><br>
            </div>
            <br>
            <div class="container">
                <a href="#" style="margin-right: 0px; font-size: 13px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Reset password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" style="margin-right: 0px; font-size: 13px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Forgot password</a>
                    </div><br><br><br><br><br>
                    <a href="../index.html">Back to home</a><br><br>
                                Don't have account?<a href="signup.php">&nbsp;Sign Up</a>
        </form>
    </div>
    
</body>
</html>