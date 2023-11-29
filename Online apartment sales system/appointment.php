<?php

session_start();
require 'config-app.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Appointment</title>
    <link rel="stylesheet" href="appointment.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
   
</head>
<body>

    <?php
        if(isset($_SESSION["success"]) && $_SESSION["success"] === true) 
        {
            echo '<script>
                  alert("Appointment reservation added successfully");
                  </script>';
                  
            unset($_SESSION['success']);
        }
    ?>

    <section>
        <div class="container">
        <form action="appointment-create.php" method="post">
            <div class="title">Book Appoinment</div>
            <br>
            <div class="details">
                <div class="form-box">
                    <label for="username">Enter username:</label>
                    <input type="text" id="username" name="username"> 
                </div>
                <br>
            <div class="form-box">
                <label for="appTime">Select date:</label>
                <input type="date" id="appTime" name="appTime"> 
            </div>
            <br>
            <div class="form-box">
                <p>Select type of payment basis</p>
                <input type="radio" id="rent" name="fav_type1" value="R">
                 <label for="rent">Rent basis</label>
                 <input type="radio" id="perm" name="fav_type1" value="P">
                 <label for="perm">Permanant basis</label>
            </div>
            <br>
            <div class="form-box">
                <p>Select type of view:</p>
                <input type="radio" id="sea" name="fav_type2" value="S">
                <label for="sea">Ocean view</label>
                <input type="radio" id="lake" name="fav_type2" value="L">
                <label for="lake">Lake view</label>
                <input type="radio" id="city" name="fav_type2" value="C">
                <label for="city">City view</label>
            </div>
            <br>
        </div>
            <br>
            <div class="banner-btn-check">
            <button type="submit" class="booknow-btn" >Book Now</button>
            </div>
        </form>
    </div>
    </section> 
</body>
</html>


