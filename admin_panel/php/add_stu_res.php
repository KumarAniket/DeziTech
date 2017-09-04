<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {
$Visibility = 1;   //default visibility
$_POST['Date']=date("Y-m-d", strtotime($_POST['Date']));   //converting date to y-m-d format

$sql = "INSERT stu_res SET Title = :Title, 
             Visibility = :Visibility,         
            Description = :Description,                      
            Date = :Date";
$stmt = $con->prepare($sql);

$stmt->bindParam(':Title', $_POST['Title'], PDO::PARAM_STR);   
$stmt->bindParam(':Description', $_POST['Description'], PDO::PARAM_STR);
$stmt->bindParam(':Visibility', $Visibility, PDO::PARAM_STR); 
$stmt->bindParam(':Date', $_POST['Date'], PDO::PARAM_STR);  
$stmt->execute();  


if (!empty($_FILES['Input']['name'])){
$result = $con->prepare("SELECT * FROM stu_res ORDER BY id DESC LIMIT 10" );
                 $result->execute();
                 $row = $result->fetch();                         //this whole mess is to fetch the last uploaded id

$ext = end((explode(".", $_FILES['Input']['name']))); //uploaded image extension
$uploaddir = '../../download/stu/';
$uploadname = preg_replace('/\s+/', '_', $_POST['Title']);
$uploadname .= '-';
$uploadname .=  $row['id'];  
$uploadname .=  '.';
$uploadname .=  $ext;           //this will be used for moving image to server
$uploadfile = $uploaddir . basename($uploadname);
move_uploaded_file($_FILES['Input']['tmp_name'], $uploadfile); 

$filedir ='download/stu/';     
$filedir .= preg_replace('/\s+/', '_', $_POST['Title']);
$filedir .= '-';
$filedir .= $row['id'];
$filedir .= '.';
$filedir .= $ext;              //this will be used to adding path to database

$sql = "UPDATE stu_res SET Link = :File
                           WHERE id = :id";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':File', $filedir, PDO::PARAM_STR); 
$stmt->bindParam(':id', $row['id'], PDO::PARAM_INT);
$stmt->execute();
}


 echo "Item Addded Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>