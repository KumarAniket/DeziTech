<?php
include('intialize.php');
try {
$result = $con->prepare("DELETE FROM event WHERE id= '".$_POST['id']."'");
$result->bindParam('id', $id);
$result->execute();
 echo "Event Deleted Succesfully!"; 
}
catch (Exception $e) {
	die("Oh noes! There's an error in the query!");
}
?>