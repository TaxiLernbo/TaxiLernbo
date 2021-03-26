<?php

require_once("include/CApp.php");

class CBookingForm{

    public function __construct(CApp &$app){
        $this->m_app = $app;
    }
    private function insert(array $data)
    {	

        $this->m_app->db()->insert("bookingform", $data);
    }
    public function validateAndInsertForm()
    {
        if(empty($_POST))
        return;

        $data = $_POST;
        print_r_pre($_POST);
        $this->insert($_POST);
        ///////VIKIGT LÅT STÅ UNDER INSERT FUNKTION, ANNARS DÅ JÄVLAR/////////
        Header('Location: ' .$_SERVER['PHP_SELF']);
    }
    private $m_app = null;
};
$bookingForm = new CBookingForm($app);
?>
<!DOCTYPE html>
<?php
require_once("include\header.php");
renderHeader();
$bookingForm->validateAndInsertForm();
?>
    
    <div class="content">
        <div id="main">
            <h1> INDEX</h1>
            <div class="bookingFormBox">
                
                <form  method="post" id="bookingForm">
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
                
                <label for="endPos"></label><br/>
                <input type="text" id="endPos" name="endPos" placeholder="Din önskade destination:"/><br/><br/>

                <label for="date"></label><br/>
                <input type="date" id="date" name="date" /><br/><br/>

                <label for="time"></label><br/>
                <input type="time" id="time" name="time"/><br/><br/>

                <label for="description">Kort beskrivning av dig som bokar för igenkänning på plats:</label><br/>
                <input type="text" id="description" name="description"/></input><br/><br/>

                <input type="submit" id="bookingFormSubmit" value="Boka"/><br/><br/>
                </form>

            </div>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>