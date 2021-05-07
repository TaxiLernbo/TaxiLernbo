<?php

require_once("include/CApp.php");

if(!isset($_GET["id"]))
    die("Felaltigt ID");

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
            echo("Ditt ID är: ");
            echo($_GET["id"])
            ?>
        </div>
    </div>
    <?php
    renderFooter();
    ?>
</html>