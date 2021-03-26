<?php

require_once("include/CApp.php");

?>
<!DOCTYPE html>
<?php
require("include\header.php");
renderHeader();
?>
    
    <div class="content">
        <div id="main">
            <h1> INDEX</h1>
            <div class="bookingFormBox">
                
                <form id="bookingForm">
                    <iframe class="iframe"
                    width="600"
                    height="450"
                    style="border:0"
                    loading="lazy"
                    allowfullscreen
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD7gBGhEDqMrKNKQsoEBl30BegWB6mKDzg
                      &q=Lernbo+SW">
                  </iframe><br/><br/>

                <label for="startPos"></label><br/>
                <input type="text" id="startPos" name="startPos" placeholder="Din nuvarande position:"/><br/><br/>
                
                <label for="destination"></label><br/>
                <input type="text" id="destination" name="destination" placeholder="Din önskade destination:"/><br/><br/>

                <label for="customerDescription">Kort beskrivning av dig som bokar för igenkänning på plats:</label><br/>
                <textarea class="customerDescription"></textarea><br/><br/>

                <input type="submit" id="bookingFormSubmit" name="bookingFormSubmit" value="Boka"/><br/><br/>
                </form>

            </div>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>