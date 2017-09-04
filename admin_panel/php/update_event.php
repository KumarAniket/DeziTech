<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {   

$_POST['Date']=date("Y-m-d", strtotime($_POST['Date']));   //converting date to y-m-d format(its necessary for displaying days ago in homepage)

$sql = "UPDATE event SET Title = :Title,           
            Description = :Description,    
             Link = :Link,
            Fb_Link = :Fb_Link,
            Tw_Link = :Tw_Link,
             Date = :Date         
            WHERE id = :id";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':Title', $_POST['Title'], PDO::PARAM_STR);  
$stmt->bindParam(':Description', $_POST['Description'], PDO::PARAM_STR);
$stmt->bindParam(':Link', $_POST['Link'], PDO::PARAM_STR);
$stmt->bindParam(':Date', $_POST['Date'], PDO::PARAM_STR); 
$stmt->bindParam(':Fb_Link', $_POST['Fb_Link'], PDO::PARAM_STR); 
$stmt->bindParam(':Tw_Link', $_POST['Tw_Link'], PDO::PARAM_STR);
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT); 
$stmt->execute();  


if (!empty($_FILES['Input']['name'])){                     

$ext = end((explode(".", $_FILES['Input']['name']))); //uploaded image extension
$uploaddir = '../../images/event/';
$uploadname = $_POST['type'];
$uploadname .=  $_POST['id'];  
$uploadname .=  '.';
$uploadname .=  $ext;           //this will be used for moving image to server
$uploadfile = $uploaddir . basename($uploadname);
move_uploaded_file($_FILES['Input']['tmp_name'], $uploadfile); 

$imagedir ='images/event/';     
$imagedir .= $_POST['type'];
$imagedir .= $_POST['id'];
$imagedir .= '.';
$imagedir .= $ext;  


$sql = "UPDATE event SET Image = :Image
                           WHERE id = :id";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':Image', $imagedir, PDO::PARAM_STR); 
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();

}

 echo "Event updated Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>