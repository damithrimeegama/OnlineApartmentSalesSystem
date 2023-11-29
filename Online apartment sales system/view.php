<html>
<head>
<title>View</title>
<style>
    body {
        background-image: url("background1.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    
    .apartment-image {
        position: relative;
        display: inline-block;
    }
    
    .apartment-image img {
        width: 300px;
        height: 200px;
        transition: transform 0.3s;
    }
    
    .apartment-image h3 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: opacity 0.3s;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }
    
    .apartment-image:hover img {
        transform: scale(1.05);
    }
    
    .apartment-image:hover h3 {
        opacity: 1;
    }

    h1{
        text-align: center;
        font-size:80px;
    }
</style>
</head>

<body>
   
<h1><b><i>VIEW</i></b></h1><br><br>
<ol>
    <li class="apartment-image">
        <img src="ap1n3.jpg" alt="apartment1">
        <h3>Available</h3>
    </li>
    <li class="apartment-image">
        <img src="ap2n3.jpg" alt="apartment2">
        <h3>Available</h3>
    </li>
    <li class="apartment-image">
        <img src="ap3n3.jpg" alt="apartment3">
        <h3>Not Available</h3>
    </li>
    <li class="apartment-image">
        <img src="ap4n3.jpg" alt="apartment4">
        <h3>Available</h3>
    </li>
    <li class="apartment-image">
        <img src="ap5n3.jpg" alt="apartment5">
        <h3>Not Available</h3>
    </li>
<li class="apartment-image">
        <img src="ap6n3.jpg" alt="apartment5">
        <h3>Not Available</h3>
    </li>
<li class="apartment-image">
        <img src="ap7n3.jpg" alt="apartment5">
        <h3> Available</h3>
    </li>
<li class="apartment-image">
        <img src="ap8n3.jpg" alt="apartment5">
        <h3>Not Available</h3>
    </li>
</ol>

</body>
</html>