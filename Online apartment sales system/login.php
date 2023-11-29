<?php

$connection=mysqli_connect('localhost','root','','signupdetails');

if(mysqli_connect_errno())
{
    die('Database connection failed'.mysqli_connect_errno());
}
else
{
    //echo "Connection successful.";
}
echo '<br>';
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="login.css">
        
    </head>

    <body>
        <img class="pic" src="login-apartment.jpg">
        <div class="mydiv">
            <h1>Login to discover the exclusive services</h1>
            <h2>Only for our valuable customers!</h2>
        <form method="post" action="login-details.php">
        <span class="span">Email</span>
                    <br>
                    <input type="email" class="input-box" name="email" placeholder="Your Email">
                    <br><br>
                    <span>Password</span>
                    <br>
                    <input type="password" class="input-box" name="password" placeholder="Your Password">
                    <br><br>
                    

            <label>Remember me</label>
            <input type="checkbox" id="remember" name="remember" value="Remember me"><br><br>

            <div class="pass">Forgot Password? </div>
            <br>
            <button class="submit" type="submit" name="log">Login</button>
            

        </form>
    </body>
</html>