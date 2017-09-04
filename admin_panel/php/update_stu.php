<?php
include('intialize.php');
try {    
$sql = "UPDATE stu SET Title = :Title,           
            Description = :Description
            WHERE id = :id";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':Title', $_POST['Title'], PDO::PARAM_STR);  
$stmt->bindParam(':Description', $_POST['Description'], PDO::PARAM_STR); 
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT); 
$stmt->execute();  


if (!empty($_FILES['Input']['name'])){                    

$ext = end((explode(".", $_FILES['Input']['name']))); //uploaded image extension
$uploaddir = '../../images/stu/';
$uploadname = 'stu';
$uploadname .=  $_POST['id'];  
$uploadname .=  '.';
$uploadname .=  $ext;           //this will be used for moving image to server
$uploadfile = $uploaddir . basename($uploadname);
move_uploaded_file($_FILES['Input']['tmp_name'], $uploadfile); 

$imagedir ='images/stu/';     
$imagedir .= 'stu';
$imagedir .= $_POST['id'];
$imagedir .= '.';
$imagedir .= $ext;  


$sql = "UPDATE stu SET Image = :Image
                           WHERE id = :id";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':Image', $imagedir, PDO::PARAM_STR); 
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$stmt->execute();

}

 echo "Achievment updated Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>