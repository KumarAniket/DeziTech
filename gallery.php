<?php
include 'admin_panel/php/intialize.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Campus Life - DeziTech</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/lightbox.css" rel="stylesheet" type="text/css" media="all" />
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
    ?>
    <!--header section end-->
<h2 style="text-align: center; padding-top: 35px">GALLERY</h2> 
<div class="gallery">
    <div class="container">
        <div class="gallery-bottom">
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/1.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/2.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/3.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/4.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/5.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/7.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/8.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/9.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/10.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/11.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/12.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/18.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/18.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/21.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/21.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/23.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/23.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/25.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/25.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/29.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/29.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/31.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/31.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/32.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/32.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/33.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/33.jpg" alt=""/></a>
            </div>
            <div class="col-md-3 gallery-grid">
                <a class="example-image-link" href="images/34.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image" src="images/34.jpg" alt=""/></a>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>

    <script src="js/lightbox.js"></script>
    <!----> 

</div>
<!-- //News-section -->
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
