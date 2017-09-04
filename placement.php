<?php
include 'admin_panel/php/intialize.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>School of Computer Engineering</title>
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
        ?>     <!--header section end-->
      <!-- content-section-starts-here -->
      <div class="content">
        <!-- blogs -->
        <div class="blog">
         <div class="container">
          <h2 class="heading text-center">Placement News</h2>
          <div class="single-inline">
            <div class="col-md-6 blog-to">						
              <a href="single.html"><img class="img-responsive sin-on" src="images/message1.jpg" alt="" /></a>
              <div class="blog-top">
               <div class="blog-left">
                <b>14</b>
                <span>Feb</span>
              </div>
              <div class="top-blog">
                <a class="fast" href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                <p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
                <p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                  when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
                  and typesetting industry.</p> 
                  <a  href="single.html" class="more">Readmore<span> </span></a>
                  
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="col-md-6 blog-to">		
             
              <a href="single.html"><img class="img-responsive sin-on" src="images/message2.jpg" alt="" /></a>
              <div class="blog-top">
               <div class="blog-left">
                <b>19</b>
                <span>July</span>
              </div>
              <div class="top-blog">
                <a class="fast" href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                <p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
                <p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                  when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
                  and typesetting industry.</p> 
                  <a  href="single.html" class="more">Readmore<span> </span></a>
                  
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="col-md-6 blog-to">		
             
              <a href="single.html"><img class="img-responsive sin-on" src="images/message3.jpg" alt="" /></a>
              <div class="blog-top">
               <div class="blog-left">
                <b>28</b>
                <span>July</span>
              </div>
              <div class="top-blog">
                <a class="fast" href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                <p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
                <p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                  when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
                  and typesetting industry.</p> 
                  <a  href="single.html" class="more">Readmore<span> </span></a>
                  
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="col-md-6 blog-to">		
             
              <a href="single.html"><img class="img-responsive sin-on" src="images/message4.jpg" alt="" /></a>
              <div class="blog-top">
               <div class="blog-left">
                <b>45</b>
                <span>July</span>
              </div>
              <div class="top-blog">
                <a class="fast" href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                <p>Posted by <a href="single.html">Admin</a> in <a href="#">General</a> | <a href="single.html">10 Comments</a></p> 
                <p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
                  when an unknown printer it to make a type specimen book. It has survived not only five centuries, but also the leap.
                  and typesetting industry.</p> 
                  <a  href="single.html" class="more">Readmore<span> </span></a>
                  
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          <nav>
            <ul class="pagination blog-pagination">
             <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
             <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
             <li><a href="#">2 <span class="sr-only"></span></a></li>
             <li><a href="#">3 <span class="sr-only"></span></a></li>
             <li><a href="#">4 <span class="sr-only"></span></a></li>
             <li><a href="#">5 <span class="sr-only"></span></a></li>
             <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
           </ul>
         </nav>
       </div>
     </div>
     <!-- //blogs -->
   </div>
   <div class="content">
    <div class="about-middle">
      <div class="container">
        <div class="col-lg-4 col-md-6 col-sm-6 testimonials">
          <h3>Top Recruiters</h3>
          <ul class="list3">
            <li>
              <strong>1</strong>
              <div class="extra">
                <p>Cras sagittis tempus ante Curabitur pretium tortor non rhoncus eros orci, ac commodo per, et pret.</p>
              </div>
            </li>
            <li>
              <strong>2</strong>
              <div class="extra">
                <p>Nam pulvinar tellus vel Morbi quam enim, elementum leo maximus, vitae fermentum nunc ultricies.</p>
              </div>
            </li>
            <li>
              <strong>3</strong>
              <div class="extra">
                <p>Asety kertya asetli nerafae Proin malesuada porta diam ut ante accumsan, ultricies velit ut, mollis metus.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 testimonials">
          <h3>Special Mentions</h3>
          <h4>veriti vitaesaert asrtya aset aplica</h4>
          <p>Quisque accumsan nulla et velit ullamcortionem ullam corporis suscipit laboriosam, nisi ut aliquid ex.</p>
          <ul class="list1-2">
            <li><a href="#">Proin dictum elementum velit</a></li>
            <li><a href="#">Euismod conseqat ante</a></li>
            <li><a href="#">Lorem ipsum dolor sit met con</a></li>
            <li><a href="#">Adipiscing elitlentesque sed dolor</a></li>
            <li><a href="#">Aliquam congue fermen tum nisl</a></li>
            <li><a href="#">Mauris accumsan nulla</a></li>
            <li><a href="#">Sed in lacus ut enim adipiscing</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 testimonials-box testimonials">
          <h3>Testimonials</h3>
          <ul class="list4">
            <li>
              <img src="images/quote.png" alt="">
              <div class="extra">
                <p>Vestibulum porttitor placerat urna vitae condimentum. Proin consequat Morbi lacinia ipsum ac mi dictum, ac congue odio faucibus. Nam ut pellentesque neque. </p>
                <a href="#">Maria Brooks, usa</a>
              </div>
            </li>
            <li>
              <img src="images/quote.png" alt="">
              <div class="extra">
                <p>Vestibulum porttitor placerat urna vitae condimentum. Proin consequat Morbi lacinia ipsum ac mi dictum, ac congue odio faucibus. Nam ut pellentesque neque. </p>
                <a href="#">Steven Donovan, usa</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
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