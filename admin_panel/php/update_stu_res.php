<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {

$_POST['Date']=date("Y-m-d", strtotime($_POST['Date']));   //converting date to y-m-d format

$sql = "UPDATE stu_res SET Title = :Title,          
            Description = :Description,                      
            Date = :Date
            WHERE id = :id";
$stmt = $con->prepare($sql);

$stmt->bindParam(':Title', $_POST['Title'], PDO::PARAM_STR);   
$stmt->bindParam(':Description', $_POST['Description'], PDO::PARAM_STR);
$stmt->bindParam(':Date', $_POST['Date'], PDO::PARAM_STR);  
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT); 
$stmt->execute();  


if (!empty($_FILES['Input']['name'])){    

$ext = end((explode(".", $_FILES['Input']['name']))); //uploaded image extension
$uploaddir = '../../download/stu/';
$uploadname = preg_replace('/\s+/', '_', $_POST['Title']);
$uploadname .= '-';
$uploadname .=  $_POST['id'];  
$uploadname .=  '.';
$uploadname .=  $ext;           //this will be used for moving image to server
$uploadfile = $uploaddir . basename($uploadname);
move_uploaded_file($_FILES['Input']['tmp_name'], $uploadfile); 

$filedir ='download/stu/';     
$filedir .= preg_replace('/\s+/', '_', $_POST['Title']);
$filedir .= '-';
$filedir .= $_POST['id'];
$filedir .= '.';
$filedir .= $ext;              //this will be used to adding path to database

$sql = "UPDATE stu_res SET Link = :File
                           WHERE id = :id";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':File', $filedir, PDO::PARAM_STR); 
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();
}


 echo "Item Updated Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>