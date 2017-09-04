<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/intialize.php');
$sql = "SELECT count(*) FROM `faculty`"; 
$result = $con->prepare($sql); 
$result->execute(); 
$number_of_faculty = $result->fetchColumn(); 
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Admin Control Panel</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" value="notranslate">  

  
  <!--stylesheets / link tags loaded here-->


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/font-awesome.min.css" rel="stylesheet"> 

</head>
<body>
<?php
if (isset($_SESSION['Username']) && $_SESSION['Password'] == true) {
  ?>
  <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
    <button class="navbar-toggler hidden-sm-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
        ☰
    </button>
    <a class="navbar-brand">Welcome Admin!</a>
    <div class="collapse navbar-toggleable-xs" id="collapsingNavbar">
        <ul class="nav navbar-nav pull-right">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">Home</span></a>
            </li>            
            <li class="nav-item">
                <a class="nav-link" href="" data-target="#myModal" data-toggle="modal">Log Out</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-md-3 col-lg-2 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav nav-pills nav-stacked">                           
                <li class="nav-item"><div class="nav-link">
                <a href="faculty_add.php">Add Faculty</a> </br>
                <a href="faculty_view.php">Edit Faculty</a>
                </div>
                </li>
                <li class="nav-item"><div class="nav-link">
                <a href="news_add.php">Add News</a> </br>
                <a href="news_view.php">Edit News</a>
                </div>
                </li>
                <li class="nav-item"><div class="nav-link">
                <a href="notice_add.php">Add Notice</a> </br>
                <a href="notice_view.php">Edit Notice</a>
                </div>
                </li>
                <li class="nav-item"><div class="nav-link">
                <a href="stu_res_add.php">Add Student Download</a> </br>
                <a href="stu_res_view.php">Edit Student Download</a>
                </div>
                </li>
                <li class="nav-item"><div class="nav-link">
                <a href="event_add.php">Add Events</a> </br>
                <a href="event_view.php">Edit Events</a>
                </div>
                </li>                 
                <li class="nav-item"><div class="nav-link">
                <a href="startup_add.php">Add Startup</a> </br>
                <a href="startup_view.php">Edit Startup</a>
                </div>
                </li>   
                <li class="nav-item"><div class="nav-link">
                <a href="stu_add.php">Add Student Achiev</a> </br>
                <a href="stu_view.php">Edit Student Achiev</a>
                </div>
                </li>           
            </ul>
        </div>
        <!--/col-->

        <div class="col-md-9 col-lg-10 main">

            <!--toggle sidebar button-->
            <p class="hidden-md-up">
                <button type="button" class="btn btn-primary-outline btn-sm" data-toggle="offcanvas"><i class="fa fa-chevron-left"></i> Menu</button>
            </p>

            <h1 class="display-1 hidden-xs-down">
            School Of Computer Engineering
            </h1>  
            <hr>       
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card card-inverse card-success">
                        <div class="card-block bg-success">
                            <div class="rotate">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <h6 class="text-uppercase">Teachers</h6>
                            <h1 class="display-1"><?php echo $number_of_faculty;?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card card-inverse card-danger">
                        <div class="card-block bg-danger">
                            <div class="rotate">
                                <i class="fa fa-list fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">Posts</h6>
                            <h1 class="display-1">87</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card card-inverse card-info">
                        <div class="card-block bg-info">
                            <div class="rotate">
                                <i class="fa fa-twitter fa-5x"></i>
                            </div>
                            <h6 class="text-uppercase">Tweets</h6>
                            <h1 class="display-1">125</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="card card-inverse card-warning">
                        <div class="card-block bg-warning">
                            <div class="rotate">
                                <i class="fa fa-share fa-5x"></i>
                            </div>
                            <h6 class="text-uppercase">Shares</h6>
                            <h1 class="display-1">36</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
<hr>
            <h2 class="sub-header">Use card decks for equal height rows of cards</h2>
            <div class="card-deck-wrapper">
                <div class="card-deck">
                    <div class="card card-inverse card-success text-center">
                        <div class="card-block">
                            <blockquote class="card-blockquote">
                                <p>It's really good news that the new Bootstrap 4 now has support for CSS 3 flexbox.</p>
                                <footer>Makes flexible layouts <cite title="Source Title">Faster</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-inverse card-danger text-center">
                        <div class="card-block">
                            <blockquote class="card-blockquote">
                                <p>The Bootstrap 3.x element that was called "Panel" before, is now called a "Card".</p>
                                <footer>All of this makes more <cite title="Source Title">Sense</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-inverse card-warning text-center">
                        <div class="card-block">
                            <blockquote class="card-blockquote">
                                <p>There are also some interesting new text classes for uppercase and capitalize.</p>
                                <footer>These handy utilities make it <cite title="Source Title">Easy</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    <div class="card card-inverse card-info text-center">
                        <div class="card-block">
                            <blockquote class="card-blockquote">
                                <p>If you want to use cool icons in Bootstrap 4, you'll have to find your own such as Font Awesome or Ionicons.</p>
                                <footer>The Glyphicons are not <cite title="Source Title">Included</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

           
                      
                </div><!--/col-->
            
        </div>
        <!--/main col-->
    </div>

</div>
<!--/.container-->
<footer class="container-fluid">
    <p class="text-right small">©2016 <a href="http://kiit.ac.in">KIIT University</a></p>
</footer>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Logout</h4>
            </div>
            <div class="modal-body">
                Are you sure you want to logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="logout.php"><button type="button" class="btn btn-primary-outline">OK</button></a>
            </div>
        </div>
    </div>
</div> 
  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
    }
    
    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);
  </script>
  
  <!--scripts loaded here-->
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  
  
  <script>
  $(document).ready(function() {
    
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
  
});
  </script>
 <?php } 
 else{ ?>
 <center><h3>You are Not Logged in click <a href="login.php?r=<?php echo $_SERVER['REQUEST_URI'];?>">here</a> to login.</h3></center>
 <?php } ?>
</body></html>