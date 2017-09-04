<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {
$sql = "UPDATE news SET Title = :Title,           
            Date = :Date
            WHERE id = :id";

$stmt = $con->prepare($sql);
$stmt->bindParam(':Title', $_POST['Title'], PDO::PARAM_STR);
$stmt->bindParam(':Date', $_POST['Date'], PDO::PARAM_STR); 
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT); 
$stmt->execute();


 echo "News Updated Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>