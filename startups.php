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
        ?>
				<!--header section end-->
				<!-- content-section-starts-here -->
				<div class="content">
					<!-- blogs -->
					<div class="blog">
						<div class="container">
							<h2 class="heading text-center">Startups</h2>
							<div class="single-inline">
								<div class="col-md-6 blog-to">						
									<img class="img-responsive sin-on" src="images/startups/s1.png" alt="" />
									<div class="blog-top">
										<div class="top-blog">
											<a class="fast">Macrologic Innovative Solution</a>
											<p class="sed">Their aim is to bring forth marvelous invention and discovers that bless mankind in numerous ways by cooperating with nature.</p> 
											<a  href="http://mlisolution.com" class="more"  target="_blank">Know More<span> </span></a>
											
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-md-6 blog-to">		
									
									<img class="img-responsive sin-on" src="images/startups/s2.png" alt="" />
									<div class="blog-top">
										<div class="top-blog">
											<a class="fast" href="single.html">Innovadors Lab Pvt Ltd </a>
											<p class="sed">Innovadors Lab was founded in the year 2009 with an objective to bridge the gap between idea and innovation through technology. It is recognized and supported by TBI (Technology Business Incubator), Ministry of Science and Technology, Govt. of India.</p> 
											<a  href="http://www.innovadorslab.com/inlab/index.php" class="more" target="_blank">Know More<span> </span></a>
											
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							</div>
						</div>
						<!-- //blogs -->
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