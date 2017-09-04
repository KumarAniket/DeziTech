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
					<!-- Single-page -->
					<div class="single-page">
						<div class="container">
							<h2 class="heading text-center">Dean's Message</h2>
							<div class="single">
								<div class="blog-to1 service_info">		
									
									<center><img class="img-responsive sin-on" src="images/dean.jpg" alt="dean's photo" /></center>
									<div class="blog-top">
										<div class="top-blog">
											<a class="fast" href="#">Heading or Introductary Line</a>
											<p class="sed">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
												when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500
												when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap.</p> 
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis. Donec et purus nec leo interdum sodales nec sit amet magna.</p>
												<div class="col-md-6 md-in">
													<ul class="grid-part">
														<li><a href="#"><i class="sign"> </i>Sed ut perspiciatis unde omnis</a></li>
														<li><a href="#"><i class="sign"> </i>Lorem ipsum dolor sit amet,  </a></li>
														<li><a href="#"><i class="sign"> </i>Sed ut perspiciatis unde omnis</a></li>
														<li><a href="#"><i class="sign"> </i>Lorem ipsum dolor sit amet,  </a></li>
														<li><a href="#"><i class="sign"> </i>Sed ut perspiciatis unde omnis</a></li>
													</ul>
												</div>
												<div class="col-md-6 md-in">
													<ul class="grid-part">
														<li><a href="#"><i class="sign"> </i>Sed ut perspiciatis unde omnis</a></li>
														<li><a href="#"><i class="sign"> </i>Lorem ipsum dolor sit amet,  </a></li>
														<li><a href="#"><i class="sign"> </i>Sed ut perspiciatis unde omnis</a></li>
														<li><a href="#"><i class="sign"> </i>Lorem ipsum dolor sit amet,  </a></li>
														<li><a href="#"><i class="sign"> </i>Sed ut perspiciatis unde omnis</a></li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>		
									
									<!---->
									
								</div>
							</div>
						</div>
						<!-- //Single-page -->
					</div>
					<!-- //content-section-ends-here -->
					<!--footer section start-->
										<?php 
					require 'footer.php';
					?>			<!--footer section end-->
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