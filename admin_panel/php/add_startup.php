<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {
    $Visibility = 1;   //default visibility
$sql = "INSERT startup SET Title = :Title,
            Visibility = :Visibility,          
            Description = :Description,
            Link = :Link,
            Date = :Date";
$stmt = $con->prepare($sql);

$Link = 'http://';
$Link .=  $_POST['Link'];

$stmt->bindParam(':Title', $_POST['Title'], PDO::PARAM_STR);   
$stmt->bindParam(':Description', $_POST['Description'], PDO::PARAM_STR);
$stmt->bindParam(':Link', $Link, PDO::PARAM_STR);
$stmt->bindParam(':Visibility', $Visibility, PDO::PARAM_STR); 
$stmt->bindParam(':Date', $Date, PDO::PARAM_STR);  
$stmt->execute();  


if (!empty($_FILES['Input']['name'])){
$result = $con->prepare("SELECT * FROM startup ORDER BY id DESC LIMIT 10" );
                 $result->execute();
                 $row = $result->fetch();                         //this whole mess is to fetch the last uploaded id

$ext = end((explode(".", $_FILES['Input']['name']))); //uploaded image extension
$uploaddir = '../../images/start/';
$uploadname = 'start';
$uploadname .=  $row['id'];  
$uploadname .=  '.';
$uploadname .=  $ext;           //this will be used for moving image to server
$uploadfile = $uploaddir . basename($uploadname);
move_uploaded_file($_FILES['Input']['tmp_name'], $uploadfile); 

$imagedir ='images/start/';     
$imagedir .= 'start';
$imagedir .= $row['id'];
$imagedir .= '.';
$imagedir .= $ext;              //this will be used to adding path to database

$sql = "UPDATE startup SET Image = :Image
                           WHERE id = :id";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':Image', $imagedir, PDO::PARAM_STR); 
$stmt->bindParam(':id', $row['id'], PDO::PARAM_INT);
$stmt->execute();

}

 echo "Startup Addded Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>