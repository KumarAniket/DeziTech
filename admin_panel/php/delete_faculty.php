<?php
include('intialize.php');
try {
$result = $con->prepare("DELETE FROM faculty WHERE id= '".$_POST['id']."'");
$result->bindParam('id', $id);
$result->execute();
 echo "Faculty Deleted Succesfully!"; 
}
catch (Exception $e) {
	die("Oh noes! There's an error in the query!");
}
?>