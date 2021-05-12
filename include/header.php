<?php
require("include/footer.php");

function renderHeader()
{
    echo('<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Lernbo</title>
    <link rel="stylesheet" href="styles/general.css">
    <script src="tools/tools.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
</head>

<body>
    <nav class="nav">
        <div class="mobileMenu" id="mobileMenu">
            <i class="fas fa-bars" id="hamburger"></i>
            <div id="mobileMenuLinks" class="mobileMenuHidden">
            <div class="flexLinks">
            <a href="index.php"><li class="mobileLinks" >Startsida</li></a>
            <a href="info.php"><li class="mobileLinks" >Om oss</li></a>
            <a href="prices.php"><li class="mobileLinks" >Priser</li></a>
            <a href="bookings.php"><li class="mobileLinks" >Bokningar</li></a>
                   </div>
            </div>
        </div>
        <div class="leftNav">
            <div class="headerImg">
                <a href="index.php"><img class="menuLogo"src="images/logga.png" alt="logo"></a>
            </div>
        </div>
        <div class="rightNav">
            <ul>
            
     <!--        <li><a href="booking.htm">Boka Oss</a></li>    -->
            <li><a href="index.php">Startsida</a></li>
            <li><a href="info.php">Om oss</a></li>
            <li><a href="prices.php">Priser</a></li>
            <li><a href="bookings.php">Bokningar</a></li>
            </ul>
        </div>  
    </nav>');
}
?>