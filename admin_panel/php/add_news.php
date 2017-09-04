<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {
	$Visibility = 1;   //default visibility
$sql = "INSERT news SET Title = :Title,
                        Visibility = :Visibility,           
                        Date = :Date";
$stmt = $con->prepare($sql);   


$stmt->bindParam(':Title', $_POST['Title'], PDO::PARAM_STR);
$stmt->bindParam(':Date', $_POST['Date'], PDO::PARAM_STR);  
$stmt->bindParam(':Visibility', $Visibility, PDO::PARAM_STR);
$stmt->execute();


 echo "News Addded Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>