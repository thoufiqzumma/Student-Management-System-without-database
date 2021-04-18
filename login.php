<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="loginStyle.css">   
</head>
    <body>
    <div class="login-box">
        <h1>Login</h1>
            <form action="validation.php" method="post">
            <p>Username</p>
            <input type="text" name="UserName" placeholder="UserName" required>
            <p>Password</p>
            <input type="password" name="Password" placeholder="Password" required>
            <input type="submit" name="submit" value="Login">
            <br>
            <p><a href="signup.html">Sign up</a> |<!-- <a href="#">Admin</a> -->| <a href="index.html">Home</a></p>
            </form> 
        </div>   
    </body>
</html>