<?php
include('intialize.php');
try {    
$sql = "UPDATE faculty SET Name = :Name, 
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
            proj = :Proj
            WHERE id = :id";
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
$stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);   
$stmt->execute(); 


if (isset( $_POST['imageData'])){

$Imagedata = $_POST['imageData'];               //save your data into a variable - last part is the base64 encoded image
$exp = explode(',', $Imagedata);               //explode at ',' - the last part should be the encoded image now
$base64 = array_pop($exp);                   //we just get the last element with array_pop
$data = base64_decode($base64);              
    $Dp = 'userdata/profile/'.$_POST['Name'].''.$_POST['Cabin'].'.jpg'; //decode the image and finally save it 
    $Dp = preg_replace('/\s+/', '_', $Dp);           //for replacing space with underscore          
     $temp='../../'.$Dp.'';    
    
file_put_contents($temp, $data);

  $sql2 = "UPDATE faculty SET Dp = :Dp
                         WHERE id = :id";
  $stmt2 = $con->prepare($sql2);                                  
$stmt2->bindParam(':Dp', $Dp, PDO::PARAM_STR);
$stmt2->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
$stmt2->execute();                        
}

 echo "Faculty updated Succesfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>