<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {

$sql = "UPDATE `".$_POST['table']."`
             SET Visibility = :Visibility           
            WHERE id = :id";
$stmt = $con->prepare($sql);   


$stmt->bindParam(':Visibility', $_POST['Visibility'], PDO::PARAM_INT);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);  
$stmt->execute();
 
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>