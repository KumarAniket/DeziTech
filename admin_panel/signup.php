<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/intialize.php');
$message=NULL;
if (isset($_POST['Submit'], $_POST['Username'], $_POST['Password'])){
  $Username=$_POST['Username'];
  $Password=base64_encode($_POST['Password']);
  $result = $con->prepare("SELECT * FROM admins WHERE Username ='".$Username."'  and Password ='".$Password."' ");
  $result->execute();
  $row = $result->fetch();
  if($row>0){
    $_SESSION["Username"] = $row[Username];
    $_SESSION["Password"] = $row[Password];
    if(isset($_GET['r'])){   
      $r=$_GET['r'];       
      header("location:$r");
    }else      
    header("location:index.php");
  }
  else {
    $message="Invalid Username or Password";
  }}
  if(isset($_SESSION["Username"])) {
    if(isset($_GET['r'])){  
      $r=$_GET['r'];        
      header("location:$r");
    }else      
    header("location:index.php");
  }
  ?>
  <!DOCTYPE html>
  <html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Login- Control Panel</title>
    <!--<base target="_self">--><base href="." target="_self">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" value="notranslate">  


    <!--stylesheets / link tags loaded here-->


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" id="login-css" href="css/login.min.css" type="text/css" media="all">

  </head>
  <body>
    <nav class="navbar  navbar-dark bg-primary">
      <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        ☰
      </button>
      <a class="navbar-brand">Sign Up to DeziTech</a>
      <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <ul class="nav navbar-nav pull-right">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Back To Main Website</a>
          </li>           

        </ul>
      </div>
    </nav>
    <div class="login login-action-login wp-core-ui  locale-en-us">
      <div id="login">
        <h1>DeziTech</h1>

        <form name="loginform" id="loginform" action="" method="post">
         <p>
          <label for="user_login">Username<br>
            <input type="text" name="Username" class="input" value="" size="20" vk_1b9fa="subscribed"></label>
          </p>
          <p>
            <label for="user_pass">Password<br>
              <input type="password" name="Password" class="input" value="" size="20" vk_1b9fa="subscribed"></label>
            </p>

            <p class="submit">
              <input type="submit" name="Submit" value="Submit" class="button button-primary button-large" value="Log In">  
            </p>
          </form>
          <br>
          <a style="text-align: center;" href="#"><p>Not Yet Registered ?. Click Here!</p></a>
          <h5><?php echo $message; ?><h5>
          </div>
        </div>
        <!--/col-->

        <footer class="container-fluid">
          <p class="text-right small">©2016 <a href="../index.php">DeziTech</a></p>
        </footer>



        <!--scripts loaded here-->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 

      </body></html>