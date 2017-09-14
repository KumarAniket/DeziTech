<?php
include 'admin_panel/php/intialize.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Credits - DeziTech</title>
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

		<br />
		<!-- //welcome -->
		<!-- Our-staff-starts -->
		<div class="our-staff">
			<div class="container">

				<div class="our-staff-head text-center">
					<br/>
					<header>
						<h3>Behind The Scence</h3>						
					</header>
					<div class="clearfix"></div>
					<div class="our-staff-grids text-center">
						<div class="col-md-3 our-staff-grid">
							<div class="view view-seventh">
							</div>
						</div>
						<div class="col-md-3 our-staff-grid">
							<div class="view view-seventh">
								<a href="#"><img class="img-responsive" style="border-radius: 100%;" src="images/anjali.jpg" alt=""></a>
								<div class="mask" style="border-radius: 100%;">
									<ul class="staff-social-icons">
										<li><a href="https://www.facebook.com/sandeepkrjsr" target="_blank"><span class="facebook"> </span></a></li>
									</ul>
								</div>
								<h4>Anjali Singh</h4>
							</div>
						</div>
						<div class="col-md-3 our-staff-grid">
							<div class="view view-seventh">
								<a href="#"><img class="img-responsive" style="border-radius: 100%;" src="images/aniket.jpg" alt=""></a>
								<div class="mask" style="border-radius: 100%;">
									<ul class="staff-social-icons">
										<li><a href="https://www.facebook.com/profile.php?id=1830395133&fref=ts" target="_blank"><span class="facebook"> </span></a></li>
									</ul>
								</div>
								<h4>Kumar Aniket</h4>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Our-staff-ends -->
		<!-- Services-starts -->

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