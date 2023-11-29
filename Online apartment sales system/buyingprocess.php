<?php

$connection=mysqli_connect('localhost','root','','appointment');

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
        <title>Buying Apartments</title>
        <link rel="stylesheet" href="buyingprocess.css">
    </head>

    <body>
        <div class="container">
         <header>Personal Details</header><br>
            <form action="#" method="post">
                
                    <div class="details personal">

                        <div class="fields">


                            <div class="inputfield">
                                <label for="name">Full Name : </label><br>
                                <input type="text" name="name" placeholder="Enter the Full Name" required>
                            </div>

                            <div class="inputfield">
                                <label for="address">Address : </label><br>
                                <input type="text" name="address" placeholder="Mention your current address" required>
                            </div>
                            <br><br><br><br>

                            <div class="inputfield">
                                <label for="country">Country : </label><br>
                                <input type="text" name="country" placeholder="Enter your resident Country" required>
                            </div>
                        

                            <div class="inputfield">
                                <label for="phone">Phone : </label><br>
                                <input type="phone" name="phone" placeholder="Mention your mobile number" required>
                            </div>
                            <br><br><br><br>

                            <div class="inputfield">
                                <label for="regno">Reference Number : </label><br>
                                <input type="number" name="regno" min="0" placeholder="Enter the provided reg.no" required>
                            </div>
                            

                            <div class="inputfield">
                                <label class="c1">Apartment Catagory(According to floor) : </label><br>
                                <select name="Catagory">
                                    <option value="ground floor">Ground Floor</option>
                                    <option value="1 st floor">First Floor</option>
                                    <option value="2 nd floor">Second Floor</option>
                                    <option value="3 rd floor">Third Floor</option>
                                    <option value="4 th floor">Fourth Floor</option>
                                    <option value="5 th floor">Fifth Floor</option>
                                    <option value="6 th floor">Sixth Floor</option>
                                    <option value="7 th floor">Seventh Floor</option>
                                    <option value="8 th floor">Eighth Floor</option>
                                </select>
                            </div>
                            <br><br><br><br>

                            <div class="inputfield">
                                <label>Apartment Type : </label><br>
                                <select name="variety">
                                    <option value="2 rooms with sea view">2 rooms with sea view</option>
                                    <option value="2 rooms with city view">2 rooms with city view</option>
                                    <option value="3 rooms with sea view">3 rooms with sea view</option>
                                    <option value="3 rooms with city view">3 rooms with city view</option>
                                    <option value="penthouse">Penthouse</option>
                                </select>
                            </div>
                          

                            <div class="inputfield">
                                <label class="c1">Contacted Sales person's name : </label><br>
                                <select name="variety">
                                    <option value="Damith Karunaratne">Mr.Damith Karunaratne</option>
                                    <option value="Poojani Silva">Ms.Poojani Silva</option>
                                    <option value="Lakshan Perera">Mr.Lakshan Perera</option>
                                    <option value="Jayantha Liyanage">Mrs. Jayantha Liyanage</option>
                                    <option value="Nimal Dias">Mr. Nimal Dias</option>
                                </select>
                                </div>
                             <br><br><br><br>
                            

                        </div>

                    <div><br><input type="submit" class="submit" value="Submit"> </div><br>

                    <div>
                        <br><label>Customer's registration details : </label><br><br>
                        <textarea rows="15" cols="60" placeholder="Your registration details will apear here" required></textarea>
                    </div>

                    <div><input type="checkbox" required>I declare that the above mentioned details are true and acceptable.</div>

                    <br><a href="" class="button1" data-role="button" data-inline="true">Edit Registration details</a>
                    <a href="" class="button2" data-role="button" data-inline="true">Proceed to payments</a>

                    
                </div>
            </form>
        </div>
    </body>
</html>