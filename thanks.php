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
            <div id="thankYouText">
            Tack för att du bokat.
                <p class="bookedText">För att kunna avboka eller kolla din bokning så går du in på sidan bokningar, anger bokningsnummer & telefonnummer.</p>
                <p class="bookedText">Därefter kommer du få en förfrågan via BankID.</p>
                <p class="bookedText">Efter att du bekräftat på BankID så kommer du kunna se varje bokning du har, samt kunna avboka eller ändra dem.</p>
            </div>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>