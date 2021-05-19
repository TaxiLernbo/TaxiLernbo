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
if(!empty($_POST))
{
    $bookingForm->validateAndInsertForm();
    redirect("thanks.php");
    die();
}
?>
    <div class="content">
        <div id="main">
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
                <input required="required" type="text" id="startPos" name="startPos" placeholder="Start position:"/><br/><br/>
                
                <label for="endPos"></label><br/>
                <input required="required" type="text" id="endPos" name="endPos" placeholder="Slut destination:"/><br/><br/>

                <label for="date">Önskad tid:</label><br/>
                <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>"/>

                <label for="time"></label>
                <input type="time" id="time" name="time" value="<?php echo date('H:i'); ?>"/><br/><br/>
                
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
                <input required="required" type="text" id="name" name="name" placeholder="För och efternamn:"/>

                <label for="phone"></label>
                <input required="required" type="tel" id="phone" name="phone" placeholder="123-456-78-90" pattern="^(([+]46)\s*(7)|07)[02369]\s*(\d{4})\s*(\d{3})$"><br/><br/>

                <input type="submit" id="bookingFormSubmit" value="Boka"/><br/><br/>
                </form>

            </div>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>