<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('intialize.php');
try {

$to      = $contact_email;
$subject = 'Visitor Mail';
$message = $_POST['msg'];
$headers = 'From: ".$_POST['Email']."' . "\r\n" .
    'Reply-To: ".$_POST['Email']."' . "\r\n";

mail($to, $subject, $message, $headers);


 echo "Mail Sent Sucessfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


 
    ?>