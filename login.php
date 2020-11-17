<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap 4 CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
                <form action="login.php" method="post"></form>
                <h3 class="text-center">Login</h3>

                <!--<div class="alert alert-danger">
                    <li>Username required</li>
                </div>-->

                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" name="username" class="form-control form-control-lg">
                </div>
                

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg">
                </div>
              
                <div class="form-group">
                <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                </div>
                <p class="text-center">Not yet a member?<a href="signup.php">Sign Up</a></p>
            </div>
        </div>
    </div>
</body>

</html>