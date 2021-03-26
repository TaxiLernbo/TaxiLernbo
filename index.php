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
                
                <form id="bookingForm" method="post">
                    <iframe class="iframe"
                    width="600"
                    height="450"
                    style="border:0"
                    loading="lazy"
                    allowfullscreen
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD7gBGhEDqMrKNKQsoEBl30BegWB6mKDzg
                      &q=Lernbo+SW">
                  </iframe><br/><br/>

                <label for="StartPos"></label><br/>
                <input type="text" id="startPos" name="startPos" placeholder="Din nuvarande position:"/><br/><br/>
                
                <label for="EndPos"></label><br/>
                <input type="text" id="destination" name="destination" placeholder="Din önskade destination:"/><br/><br/>

                <label for="date"></label><br/>
                <input type="date" id="date" name="date" /><br/><br/>

                <label for="time"></label><br/>
                <input type="time" id="time" name="time"/><br/><br/>

                <label for="description">Kort beskrivning av dig som bokar för igenkänning på plats:</label><br/>
                <textarea class="description"></textarea><br/><br/>

                <input type="submit" id="bookingFormSubmit" name="bookingFormSubmit" value="Boka"/><br/><br/>
                </form>
                <?php
                /*
                class bookingForm
                {
                    private function insert(array $data)
                    {	
                        if(!empty(!$_POST))
                        {
                            $data = $_POST;
                        }
                        $this->m_app->db()->insert("bookingform", $data);
                    }
                }*/
                ?>
            </div>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>