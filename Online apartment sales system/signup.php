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

    <title>SIGN UP FORM</title>
    <link rel="stylesheet" href="signup-style.css">

</head>

<body class="body">
        <div class="Sign-Up-Form">
                <h1 class="Sign_Up">Sign Up</h1>
                <br>
            <div class="form">
                <form action="signup-create.php" method="post">
                    <span class="span">Email</span>
                    <br>
                    <input type="email" class="input-box" name="email" placeholder="Your Email">
                    <br><br><br>
                    <span>Password</span>
                    <br>
                    <input type="password" class="input-box" name="password" placeholder="Your Password">
                    <br><br><br>
                    <span>Confirm Password</span>
                    <br>
                    <input type="password" class="input-box" name="confirmpassword" placeholder="Enter Your Confirm Password">
                    <br><br><br>
                    
                    
                    <button type="submit" class="signup-btn" onclick="callAlert() ">Sign Up</button>
                    <br><br>
                    <span><input type="checkbox" class="checkbox">    I agree to terms and conditions</span>
                    <br><br><br>
                    <hr class="hr">
                    <br>
                         
                </form>
            </div>
        </div>
    <br><br><br><br><br><br>
    <script src="signup-script.js"></script>
</body>

</html>