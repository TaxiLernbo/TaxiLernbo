<?php

require_once("include/CApp.php");

$server = "localhost";
$username = "root";
$password = "root";
$dbname = "taxilernbo";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error)
{
    throw new Exception("Connection failed: " . $conn->connect_error);
}



$query = "SELECT * FROM bookingForm ORDER BY id DESC LIMIT 0, 1";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<?php
    require_once("include\header.php");
    renderHeader();
?>
    <div class="content">
        <div id="main">
            <div id="thankYouText">
            Tack för att du bokat.
                <p class="bookedText">För att kunna avboka eller kolla din bokning så går du in på sidan bokningar, anger bokningsnummer & telefonnummer.</p>
                <p class="bookedText">Därefter kommer du få en förfrågan via BankID.</p>
                <p class="bookedText">Efter att du bekräftat på BankID så kommer du kunna se varje bokning du har, samt kunna avboka eller ändra dem.</p>
                <p class="bookedText">Ditt bokningsnummer är:</p>
                <?php 
            if($result === false)
            {
                throw new Exception("Query error: " . $conn->error);
            }
            
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo($row["id"]);
                }
            }
                ?>
            </div>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>