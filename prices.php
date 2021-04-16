<?php

require_once("include/CApp.php");

?>

<!DOCTYPE html>

<?php
require_once("include\header.php");
renderHeader();
?>
            <h1> PRISER</h1>
            <?php
////////////////////////////// SERVER TEST //////////////////////////////////

$server = "localhost";
$username = "root";
$password = "root";
$dbname = "taxilernbo";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error)
{
	throw new Exception("Connection failed: " . $conn->connect_error);
}



$query = "SELECT * FROM bookingform WHERE 1";
$result = $conn->query($query);

if($result === false)
{
	throw new Exception("Query error: " . $conn->error);
}

if($result->num_rows > 0)
{
	echo("Rader finns");
	while($row = $result->fetch_assoc())
	{
		//var_dump($row);
		echo("<pre>");
		print_r($row);
		echo("</pre>");
	}
}
else
{
	echo("Det finns inget att visa");
}

////////////////////////////// SERVER TEST //////////////////////////////////
?>
<?php
    renderFooter();   
?>
</html>