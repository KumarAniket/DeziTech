<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/intialize.php');
if ( !isset ( $_GET['id']))
 header('Location: faculty_view.php');


$query = $con->prepare("SELECT * FROM `faculty` WHERE id='".$_GET['id']."'");
             $query->execute();
             $row = $query->fetch();
 
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Edit Faculty Details -Admin Control Panel</title>
  <!--<base target="_self">--><base href="." target="_self">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" value="notranslate">  

  
  <!--stylesheets / link tags loaded here-->


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/font-awesome.min.css" rel="stylesheet"> 
  <style>
  .image-editor{        
        margin:-170px 250px 0px 55px;
      }
      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 5px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 200px;
        height: 200px;
        display: block;
      }

      .cropit-preview-image-container {
        cursor: move;
        background: url(../<?php echo $row['Dp']; ?>) no-repeat;
        background-size: 200px 200px;               
      }

      .cropit-preview-background {        
        opacity: .2;
        cursor: auto;
      }  

     input, .export {
        /* Use relative position to prevent from being covered by image background */
        position: relative;
        z-index: 10;
        display: inline;
      }
      
    </style>

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
                <a href="faculty_view.php"><strong>Edit Faculty</strong></a>
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
                <a href="stu_res_add.php">Add Stu Download</a> </br>
                <a href="stu_res_view.php">Edit Stu Download</a>
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
                <a href="stu_add.php">Add Stu Achiev</a> </br>
                <a href="stu_view.php">Edit Stu Achiev</a>
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
               
               </div>

               </br>
               <div id="newfac" class="card">
                        <div class="card-header">
                            Enter Faculty details
                        </div>
                        <div class="card-block">                        
                        <form id="update" action="javascript:return false" method="POST">
                            <table style="width:120%">
  <tr>
    <td>Name :</td>    
    <td><input name="Name" required id="Name" value="<?php echo $row['Name']; ?>"></input>
<input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
    </td>       
  </tr> 
  <tr>
    <td>&nbsp;</td>        
  </tr>   
  <tr>
    <td>Designation :</td>
    <td><input name="Position" id="Position" value="<?php echo $row['Position']; ?>"></input></td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr>   
  <tr>
    <td>Cabin No :</td>
    <td><input name="Cabin" id="Cabin" value="<?php echo $row['Cabin']; ?>"></input></td>    
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr> 
  <tr>
    <td>E-mail :</td>
    <td><input name="Email" id="Email" value="<?php echo $row['Email']; ?>"></input></td> 
    <td>
    <div class="image-editor" id="image-editor">
      <input type="file" class="cropit-image-input" id="inputdp">
      <input type="hidden" name="dpsrc" id="dpsrc" value="<?php echo $row['Dp']; ?>">
      <div class="cropit-preview">  </div>          
      <input type="range" class="cropit-image-zoom-input"> </input>      
      <a class="rotate-cw"><img src="../images/rotate.png"></a>     
           
    </div>
      </td>    
  </tr>  
  <tr>
    <td>&nbsp;</td>        
  </tr> 
  <tr>
  <td>About Faculty :</td>
  <td><textarea name="About" id="About" style="width:500px; height:100px;"><?php echo $row['About']; ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr> 
  <tr>
  <td>Experience (in yrs) :</td>
  <td>Industry:<input style="width:50px;"type="number" name="Indus" id="Indus" value="<?php echo $row['Industy']; ?>"></input>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Research:<input style="width:50px;"type="number" name="Resear" id="Resear" value="<?php echo $row['Research']; ?>"></input>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teaching:<input style="width:50px;"type="number" name="Teach" id="Teach" value="<?php echo $row['Teaching']; ?>"></input></td>  
  </tr>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr> 
  <tr>
  <td>Subjects :</td>  
  <td><textarea name="Subject" id="Subject" style="width:500px; height:100px;"><?php echo $row['Subjects']; ?></textarea>&nbsp;Separate by new line.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr> 
  <tr>
  <td>Specialization :</td>  
  <td><textarea name="Splz" id="Splz" style="width:500px; height:100px;"><?php echo $row['Spec']; ?></textarea>&nbsp;Separate by new line.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr>
  <tr>
  <td>Achievements :</td>  
  <td><textarea name="Achiev" id="Achiev" style="width:500px; height:100px;"><?php echo $row['Achievement']; ?></textarea>&nbsp;Separate by new line.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr> 
  <tr>
  <td>Conferences :</td>  
  <td><textarea name="Conf" id="Conf" style="width:500px; height:100px;"><?php echo $row['confs']; ?></textarea>&nbsp;Separate by new line.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr>
  <tr>
  <td>Journals :</td>  
  <td><textarea name="Journ" id="Journ" style="width:500px; height:100px;"><?php echo $row['journals']; ?></textarea>&nbsp;Separate by new line.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr>
  <tr>
  <td>Projects :</td>  
  <td><textarea name="Proj" id="Proj" style="width:500px; height:100px;"><?php echo $row['proj']; ?></textarea>&nbsp;Separate by new line.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr>
</table>
<input class="btn btn-primary" type="submit" name="submit" id="submit"></input>&nbsp;<div id="loading" style="display:none;"><img src="../images/loading.gif">Please Wait...</div>
</form>
                        </div>
                    </div>
           

           
                      
                
</div></div>

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
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/update_faculty.js"></script>
  <script src="js/jquery.cropit.js"></script>  
  
  
  
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