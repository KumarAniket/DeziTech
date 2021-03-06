<?php
include 'admin_panel/php/intialize.php';

$result = $con->prepare("SELECT * FROM event WHERE type='conference' AND Visibility = 1 ORDER BY id DESC");
$result->execute();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Clusters - DeziTech</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="#" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider1").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
            });
            $("#slider2").responsiveSlides({
                auto: true,
                speed: 500,
                nav: true,
                namespace: "callbacks",
            });
        });
    </script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,400italic,600,300italic,300,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){        
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
            });
        });
    </script>
</head>
<body>
    <!--header section start-->
    <?php 
            require 'navbar.php';
        ?>            <!--header section end-->
                <!-- content-section-starts-here -->
                <div class="content">
                  <!-- blogs -->
                  <div class="blog">
                   <div class="container">                     
                     
                      
                      <h2 class="heading text-center">Clusters</h2>
                      <div class="single-inline">


                          <?php                                     
                          for($i=0; $row = $result->fetch(); $i++){

                            ?>


                            <div class="col-md-6 blog-to">						
                              <a><img style="width:500px; height:270px;" class="img-responsive sin-on" src="<?php echo $row['Image']; ?>" alt="" /></a>
                              <div class="blog-top">
                                 <div class="top-blog">
                                    <a class="fast" href="<?php echo $row['Link']; ?>"><?php echo $row['Title']; ?></a> 
                                    <p align="justify" class="sed">
                                       <?php
                                       echo substr($row['Description'], 0, 500). '...';                                             

                                       ?>
                                       

                                   </p> 
                                   
                                   <a  href="<?php echo $row['Link']; ?>" class="more">Read more<span> </span></a>
                                   
                               </div>
                               <div class="clearfix"> </div>
                           </div>
                       </div>
                       
                       <?php }?>

                       


                   </div>	
                   
               </div>
           </div>
           <!-- //blogs -->
       </div>

       <div class="content">  
        
        <!-- //content-section-ends-here -->
        <!--footer section start-->
                  <?php 
          require 'footer.php';
          ?>
                                <!--footer section end-->
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        var defaults = {
                                            containerID: 'toTop',
                                            containerHoverID: 'toTopHover',
                                            scrollSpeed: 1200,
                                            easingType: 'linear' 
                                        };
                                        $().UItoTop({ easingType: 'easeOutQuart' });
                                        $('.searchQ').click(function(){
                                            $(this).css("float","left");
                                            $('.dropdown').hide();
                                            $('.inps').show();
                                            $('.restore').show();
                                        });
                                        $('.restore').click(function(){
                                            $(this).css("float","left");
                                            $('.dropdown').show();
                                            $('.inps').hide();
                                            $('.restore').hide();
                                        });
                                    });
                                </script>
                                <a href="#to-top" id="toTop" style="display:block;"><span id="toTopHover"style="opacity:1;"></span></a>
                            </body>
                            </html>