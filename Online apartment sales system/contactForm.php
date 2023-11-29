<?php
session_start();
require 'config-contactus.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Contact-Form</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins&display=swap">
    <script src="validation.js"></script>
   
</head>
<body>
    
    <?php
        if(isset($_SESSION["success"]) && $_SESSION["success"] === true) {
            echo '<script>
                  alert("Contact form submitted successfully");
                  </script>';

            unset($_SESSION['success']);
        }
    ?>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="contactform-create.php" method="post">
                   <h2>Contact-Form</h2>

                   <div class="input-box">
                   <label for="userName">Username</label><br>
                    <input type="text" id="userName" name="userName"required>
                   
                   </div>
                   <div class="input-box">
                   <label for="phoneNumber">Contact Number</label><br>
                    <input type="text" id="phoneNumber" name="phoneNumber" required>
                   
                   </div>
                   <div class="input-box">
                   <label for="pAddress">Address</label><br>
                    <textarea id="pAddress" name="pAddress" rows="4" cols="45"></textarea>
                    
                   </div>
                   <div class="input-box">
                   <label for="email">Email</label><br>
                    <input type="text" id="email" name="email" required>
                   
                   </div>
                   <div class="input-box">
                   <label for="mySubject">Subject</label><br>
                    <input type="text" id="mySubject" name="mySubject" required>
                    
                   </div>
                   <div class="input-box">
                   <label for="inquiry">Add note </label><br>
                    <input type="text" id="inquiry" name="inquiry" required>
                  
                   </div>
                   <div class="banner-btn">
                         <button class="bbtn" type="submit" >Submit</button>
                   </div>
                 
                </form>

            </div>

        </div>
    </section>

</body>
</html>