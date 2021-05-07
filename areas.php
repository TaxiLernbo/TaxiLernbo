<?php

require_once("include/CApp.php");

?>

<!DOCTYPE html>

<?php
    require_once("include\header.php");
    renderHeader();
?>
    <div class="content">
        <div id="main">
            <h1> BOKNIGNAR </h1>
            <div class="bookingFormBox">
                <form  method="post" id="editBookingForm" action="bookings.php">

                <label for="name">Ditt bokningsnummber och mobilnummer:</label><br/>
                <input type="text" id="bookingNumber" name="bookingNumber" placeholder="Bokningsnummer:"/>

                <label for="phone"></label>
                <input type="tel" id="phone" name="phone" placeholder="123-456-78-90" pattern="^(([+]46)\s*(7)|07)[02369]\s*(\d{4})\s*(\d{3})$"><br/><br/>

                <input type="submit" id="bookingFormSubmit" value="Ändra"/><br/><br/>
                <?php 
               // $_GET["id"] = 1;

                ?>
                </form>
            </div>
        </div>
    </div>
    <?php
    renderFooter();
    ?>

</html>