<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {
$Visibility = 1;   //default visibility
$Imagedata = $_POST['imageData'];               //save your data into a variable - last part is the base64 encoded image

if($Imagedata == null) {
$Dp = 'userdata/profile/default.png';
}

else{   

$exp = explode(',', $Imagedata);               //explode at ',' - the last part should be the encoded image now
$base64 = array_pop($exp);                   //we just get the last element with array_pop
$data = base64_decode($base64);              
    $Dp = 'userdata/profile/'.$_POST['Name'].''.$_POST['Cabin'].'.jpg';                      //decode the image and finally save it 
    $Dp = preg_replace('/\s+/', '_', $Dp);           //for replacing space with underscore   
     $temp='../../'.$Dp.'';    
    
file_put_contents($temp, $data);
}

$sql = "INSERT faculty SET Name = :Name, 
            Position = :Position, 
            Cabin = :Cabin,  
            Email = :Email,  
            Subjects = :Subject,  
            Spec = :Splz, 
            Achievement = :Achiev,  
            journals = :Journ,  
            confs = :Conf,
            Industy = :Indus, 
            Research = :Resear,  
            Teaching = :Teach,  
            About = :About,
            Dp = :Dp,
            Visibility = :Visibility,
            proj = :Proj";
$stmt = $con->prepare($sql);                                  
$stmt->bindParam(':Name', $_POST['Name'], PDO::PARAM_STR);       
$stmt->bindParam(':Position', $_POST['Position'], PDO::PARAM_STR);    
$stmt->bindParam(':Cabin', $_POST['Cabin'], PDO::PARAM_STR);
$stmt->bindParam(':Email', $_POST['Email'], PDO::PARAM_STR); 
$stmt->bindParam(':About', $_POST['About'], PDO::PARAM_STR);       
$stmt->bindParam(':Indus', $_POST['Indus'], PDO::PARAM_STR);    
$stmt->bindParam(':Resear', $_POST['Resear'], PDO::PARAM_STR);
$stmt->bindParam(':Teach', $_POST['Teach'], PDO::PARAM_STR);
$stmt->bindParam(':Subject', $_POST['Subject'], PDO::PARAM_STR);       
$stmt->bindParam(':Splz', $_POST['Splz'], PDO::PARAM_STR);    
$stmt->bindParam(':Achiev', $_POST['Achiev'], PDO::PARAM_STR);
$stmt->bindParam(':Conf', $_POST['Conf'], PDO::PARAM_STR);
$stmt->bindParam(':Journ', $_POST['Journ'], PDO::PARAM_STR);
$stmt->bindParam(':Proj', $_POST['Proj'], PDO::PARAM_STR);  
$stmt->bindParam(':Dp', $Dp, PDO::PARAM_STR);   
$stmt->bindParam(':Visibility', $Visibility, PDO::PARAM_STR); 
$stmt->execute();                     


 echo "Faculty Addded Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>