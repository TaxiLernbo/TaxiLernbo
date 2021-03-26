<?php

require_once("include/CApp.php");

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Lernbo</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
</head>

<body>
    <nav class="nav">
        <div class="mobileMenu">
            <i class="fas fa-bars"></i>
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
            <li><a href="areas.php">Våra områden</a></li>
            </ul>
        </div>  
    </nav>
    <div class="content">
        <div id="main">
            <h1> PRISER</h1>
            <?php
////////////////////////////// SERVER TEST //////////////////////////////////

$server = "localhost";
$username = "root";
$password = "root";
$dbname = "taxilernbo";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error)
{
	throw new Exception("Connection failed: " . $conn->connect_error);
}



$query = "SELECT * FROM bookingform WHERE 1";
$result = $conn->query($query);

if($result === false)
{
	throw new Exception("Query error: " . $conn->error);
}

if($result->num_rows > 0)
{
	echo("Rader finns");
	while($row = $result->fetch_assoc())
	{
		//var_dump($row);
		echo("<pre>");
		print_r($row);
		echo("</pre>");
	}
}
else
{
	echo("Det finns inget att visa");
}

////////////////////////////// SERVER TEST //////////////////////////////////
?>
        </div>
    </div>
    <footer class="footer">
        <div class="footerContent">
            <div id="footerLogos" class="footerSections">
                <img class="footerLogo"src="images/logga.png" alt="footerLogo">
                <div class="socialMedia">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                </div>
    
            </div>
            <div id="footerContact" class="footerSections">
                CONTACT INFORMATION [WORK IN PROGRESS]
            </div>
            <div id="footerLinks" class="footerSections">
                LINKS [WORK IN PROGRESS]
            </div>
        </div>
        </footer>
      
</body>
<script src="scripts/tools.js"></script>

</html>