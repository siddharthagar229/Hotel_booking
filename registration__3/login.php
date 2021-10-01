<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login And Registration</title>
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\html project\registration__3\style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <div class="cnotainer">
    
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-left">
    <h2>Login Here</h2>
    <form action="http://localhost/html project/registration__3/validation.php" method="post">
    <div class="form-group">
    <label >Usrname</label>
    <input type="text" name="user" class="form-control" required>
    </div>
    <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-orimary">Login</button>
    </form>
    </div>
    <div class="col-md-6 login-right">
    <h2>Register Here</h2>
    <form action="http://localhost/html project/registration__3/Registration.php" method="post">
    <div class="form-group">
    <label >Usrname</label>
    <input type="text" name="user" class="form-control" required>
    </div>
    <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-orimary">Register</button>
    </form>
    </div>
    </div>
    
    </div>
    </div>

</body>
</html>