<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location: http://localhost/html project/registration__3/login.php');
}


?>


<html>

<head>
<title> Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<a class ="fr" class="fr2" href="http://localhost/html project/registration__3/logout.php"> LOGOUT</a>


<h1>Welcome <?php echo $_SESSION['username']; ?>  </h1>
</div>

</body>
</html>