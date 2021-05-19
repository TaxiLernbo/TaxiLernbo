<?php

require_once("include/CApp.php");

$id = $_GET["bookingNumber"];

$phone = $_GET["phone"];

?>  

<!DOCTYPE html>

<?php
    require_once("include\header.php");
    renderHeader();
?>
    <div class="content">
        <div id="main">
            <h1> Redigera din Bokning</h1>
            <?php
    
            //$phone = $_GET["phone"];

            $server = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "taxilernbo";

            $conn = new mysqli($server, $username, $password, $dbname);

            if($conn->connect_error)
            {
                throw new Exception("Connection failed: " . $conn->connect_error);
            }



            $query = "SELECT * FROM bookingform WHERE id='$id' and phone='$phone'";
            $result = $conn->query($query);

            if($result === false)
            {
                throw new Exception("Query error: " . $conn->error);
            }
            
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    echo("Ditt Bokningsnummer: " . $row["id"] . "<br>" .
                    "Din Startposition: " . $row["startPos"] . "<br>" .
                    "Din Destination: " . $row["endPos"] . "<br>" .
                    "Datum: " . $row["date"] . "<br>" .
                    "Tid: " . $row["time"] . "<br>" .
                    "Musik: " . $row["music"] . "<br>" .
                    "Konversation: " . $row["conversation"] . "<br>" .
                    "Ditt Namn: " . $row["name"] . "<br>" .
                    "Ditt Mobilnummer: " . $row["phone"] . "<br>" 
                    );

      
                    if(isset($_POST['deleteBooking'])) {
                        $query = "DELETE FROM bookingform WHERE id='$id' and phone='$phone'";
                        $result = $conn->query($query);
                        die("<br>" . "Din bokning har blivit raderad");
                    }
                ?>
                  
                <form method="post">   
                    <br>
                    <input type="submit" name="deleteBooking"
                            value="Avboka"/>
                </form> 
                <br>
                <?php
                    //var_dump($row);
                    /*
                    echo("<pre>");
                    print_r($row);
                    echo("</pre>");
                    */
                }
            }
            else
            {
                echo("Det finns inget att visa");
            }
            ?>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>