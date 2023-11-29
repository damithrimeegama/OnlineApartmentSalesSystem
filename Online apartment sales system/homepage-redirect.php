<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-image: url("background1.jpg");
      background-size: cover;
      background-repeat: no-repeat;
    }

    .button {
      position: relative;
      padding: 20px 30px;
      color: white;
      border: 2px solid #4CAF500;
      cursor: pointer;
      transition: transform 0.3s, background-color 0.3s;
      background-image: linear-gradient(to right, #4CAF50, #45a049);
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
      display: inline-block;
      text-align: center;
      line-height: 2;
      overflow: hidden;
    }

    .button:hover {
      background-image: linear-gradient(to right, #45a049, #4CAF50);
      transform: scale(1.05);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 20vh;
    }

    .center img {
      max-width: 550px;
      max-height: 550px;
      border: 2px solid black;
      border-radius: 5px;
      cursor: pointer;
    }

    .facilities {
      position: absolute;
      top: 20px;
      right: 20px;
      text-align: right;
    }

    .popup {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 999;
      visibility: hidden;
      opacity: 0;
      transition: visibility 0s, opacity 0.5s;
    }

    .popup img {
      max-width: 80%;
      max-height: 80%;
      border-radius: 5px;
    }

    .popup.active {
      visibility: visible;
      opacity: 1;
      transition: visibility 0s, opacity 0.5s;
    }
  </style>
</head>
<body>
  <button class="button"><a href="intro.php">Introduction</a></button>
  <button class="button"><a href="buying.php">Buying</a></button>
  <button class="button"><a href="buyingprocess.php">Buying Process</a></button>

  <h3 style="text-align: left;">Description</h3>
  <p style="text-align: left;"><i><b>Welcome to this modern apartment in the heart of a 
<br>sought-after neighborhood. Located in a peaceful area, 
<br>this property offers both tranquility and convenience<br>. 
You can customize your dream apartment from us with<br> 
any facility you need.</b></i></p>

  <div class="center">
    <img src="apartment.jpg" alt="Description of the image" onclick="showImage(this.src)">
  </div>
  <br>

  <h3>Features</h3>
  <ul><b>
    <li>Spacious Open Floor Plan</li>
    <li>Stunning City Views</li>
    <li>Modern Amenities and Facilities</li></b>
  </ul>

  <div class="facilities">
    <h3>Facilities</h3>
    <ul><b>
      <li>Swimming Pool</li>
      <li>Car Parking</li>
      <li>Fitness Center</li>
      <li>Playground</li></b>
    </ul>
  </div>

  <div class="popup" onclick="hideImage()">
    <img id="popupImage" src="">
  </div>

  <script>
    function showImage(src) {
      const popupImage = document.getElementById("popupImage");
      popupImage.src = src;
      document.querySelector(".popup").classList.add("active");
    }

    function hideImage() {
      document.querySelector(".popup").classList.remove("active");
    }
  </script>
</body>
</html>