<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {

$sql = "UPDATE notice SET Title = :Title,                                           
            Date = :Date
            WHERE id = :id";         
$stmt = $con->prepare($sql);

$stmt->bindParam(':Title', $_POST['Title'], PDO::PARAM_STR);
$stmt->bindParam(':Date', $_POST['Date'], PDO::PARAM_STR);  
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT); 
$stmt->execute();  


if (!empty($_FILES['Input']['name'])){ 

$uploaddir = '../../download/notice/';
$uploadname = preg_replace('/\s+/', '_', $_POST['Title']);
$uploadname .= '(';
$uploadname .=  $_POST['Date'];
$uploadname .=  ')';  
$uploadname .=  '.pdf';               //this will be used for moving image to server   
$uploadfile = $uploaddir . basename($uploadname);
move_uploaded_file($_FILES['Input']['tmp_name'], $uploadfile); 

$filedir ='download/notice/';     
$filedir .= preg_replace('/\s+/', '_', $_POST['Title']);
$filedir .= '(';
$filedir .= $_POST['Date'];
$filedir .= ')';
$filedir .= '.pdf';              //this will be used to adding path to database

$sql = "UPDATE notice SET Link = :File
                           WHERE id = :id";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':File', $filedir, PDO::PARAM_STR); 
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();
}


 echo "Notice Updated Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>