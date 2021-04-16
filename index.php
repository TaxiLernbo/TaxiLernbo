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

                <label for="startPos"></label>
                <input type="text" id="startPos" name="startPos" placeholder="Din nuvarande position:"/><br/><br/>
                
                <label for="endPos"></label><br/>
                <input type="text" id="endPos" name="endPos" placeholder="Din önskade destination:"/><br/><br/>

                <label for="date">Önskad tid:</label><br/>
                <input type="date" id="date" name="date" />

                <label for="time"></label>
                <input type="time" id="time" name="time"/><br/><br/>
                
                <label for="music">Musik och konversation:</label><br/>

                <select id="music" name="music">
                <option value="ingen musik">ingen musik</option>
                <option value="80-tal">80-tal</option>
                <option value="90-tal">90-tal</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
                <option value="Hip hop">Hip hop</option>
                <option value="Klassisk">Klassisk</option>
                <option value="Jazz">Jazz</option>
                <option value="EDM">EDM</option>
                <option value="Allsång">Allsång</option>
                <option value="Metal">Metal</option>
                <option value="K-pop">K-pop</option>
                <option value="Schlager">Schlager</option>
                <option value="Svensk">Svensk</option>
                <option value="Blandat">Blandat</option>
                </select>

                <select id="conversation" name="conversation">
                <option value="ingen konversation">ingen konversation</option>
                <option value="konversation">konversation</option>
                </select><br/><br/>





                <label for="name">Ditt namn och mobilnummer:</label><br/>
                <input type="text" id="name" name="name" placeholder="För och efternamn:"/>

                <label for="phone"></label>
                <input type="tel" id="phone" name="phone" placeholder="123-456-78-90" pattern="^(([+]46)\s*(7)|07)[02369]\s*(\d{4})\s*(\d{3})$"><br/><br/>

                <input type="submit" id="bookingFormSubmit" value="Boka"/><br/><br/>
                </form>

            </div>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>