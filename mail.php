<?php

if( isset($_POST['submit'])) {

$firstName = $_POST['firstName']
$lastName = $_POST['latsName']
$email = $_POST['email']
$message = $_POST['message']

$mailheader = "From:".$lastName."<".$email.">\r\n"

$recipient = "lynsrealtor@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die('Error!');

echo'

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisa's Cakery</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="css.css">

</head>

<body>

    <section id="header">
        <a href="index.html"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="Shop.html">Shop</a></li>
                <li><a href="About.html">About Us</a></li>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a class="active" href="Contact.html">Contact</a></li>
                <li><a href="Cart.html"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>

        </div>
    </section>

    <section id="hero3">
        <div class="container">
            <h3>Thank you for contacting me. I will get back to you as soon as possible</h3>
            <p class="back">Go back to the <a href="index.html">Homepage</a></p>

        </div>

        <div id="status"></div>
            
    </section>

    <footer id="footeradj">
        <h6>LISA'S CAKERY</h6>
        <p>EMAIL: INFO@LISASCAKERY.COM</p>
        <p>HOURS: 9:00 - 21:00, Mon - Sun</p>  

        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
        <li><a href="https://www.youtube.com/"><i class="fab fab fa-youtube"></i></a></li>
        
    </footer>

    <script src="index.js"></script>
</body>


</html>
'
}
?>