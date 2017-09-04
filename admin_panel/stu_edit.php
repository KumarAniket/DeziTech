<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include('php/intialize.php');
if ( !isset ( $_GET['id']))
 header('Location: stu_view.php');


$query = $con->prepare("SELECT * FROM `stu` WHERE id='".$_GET['id']."'");
             $query->execute();
             $row = $query->fetch();

?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>Edit Achievments- Admin Control Panel</title>
  <!--<base target="_self">--><base href="." target="_self">  
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
                <a href="stu_view.php"><strong>Edit Stu Achiev</strong></a>
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
                            Enter Achievments details
                        </div>
                        <div class="card-block">                        
                        <form id="update_workshop" action="javascript:return false" method="POST">
                            <table style="width:100%">
  <tr>
    <td>Title:</td>    
    <td><input name="Title" required id="Title" style="width:500px;" value="<?php echo $row['Title']; ?>"></input>
      <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
    </td>       
  </tr> 
  <tr>
    <td>&nbsp;</td>        
  </tr>   
  <tr>
    <td>Description :</td>
    <td><textarea name="Description" required id="Description" style="width:500px; height:200px;"><?php echo $row['Description']; ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>        
  </tr>   
  <tr>
    <td>Image :</td>
    <td><input type="file" name="Input" id="Input" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);"></input></td>
    </tr>
    <tr>
    <td>&nbsp;</td>        
  </tr>
    <tr>
    <td>
    &nbsp;</td>
    <td>
    <img style="display:none;" id="Preview" src="#" alt="Preview image" />
    </td>
    </tr>  
  
  <tr>
    <td>&nbsp;</td>        
  </tr>  
  
</table>
<input class="btn btn-primary" type="submit" name="submit" id="submit"></input>&nbsp;<div id="loading" style="display:none;"><img src="../images/loading.gif"></div>
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
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#Preview')
                    .attr('src', e.target.result)
                    .width(700)
                    .height(350);
            };

            reader.readAsDataURL(input.files[0]);
        }
        var div = document.getElementById("Preview");
            div.style.display = "inline";
    }
</script>
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
  <script src="js/update_stu.js"></script>
  
  
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