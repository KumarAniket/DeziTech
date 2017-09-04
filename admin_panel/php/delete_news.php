<?php
include('intialize.php');
try {
$result = $con->prepare("DELETE FROM news WHERE id= '".$_POST['id']."'");
$result->bindParam('id', $id);
$result->execute();
 echo "News Deleted Succesfully!"; 
}
catch (Exception $e) {
	die("Oh noes! There's an error in the query!");
}
?>