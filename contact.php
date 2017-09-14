<?php
include 'admin_panel/php/intialize.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - DeziTech</title>
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
		<!--contact-->
		<div class="contact-section">
			<div class="container">
				<h2 class="heading text-center">Contact Us</h2>
				<div class="contact-main">
					<div class="col-md-6 contact-grid">
						<form name="sendmail" id='sendmail' action="javascript:return false" method="POST">
							<p class="your-para">Your Name:</p>
							<input type="text" required-id="Name" name="Name">
							<p class="your-para">Your Mail:</p>
							<input type="text" required-id="Email" name="Email">
							<p class="your-para">Your Message:</p>
							<textarea cols="77" rows="6" required-id="msg" name="msg"></textarea>
							<div class="send">
								<input type="submit" name="submit" id="submit" value="Send" >
								<div id="loading" style="display:none;"><img src="images/loading.gif"></div>
							</div>
						</form>
					</div>
					<div class="col-md-6 contact-in">
						<div class="more-address"> 
							<address><font color="black">
								<h3 style="color: black;">Address</h3><br />
								National Institute of Fashion Technology<br>
								IDCO Plot No.-24<br>
								Bhubaneswar-751024<br>
							</address></font>
							<address>
								<font color="black">
									<h3>Contacts</h3><br>
									<abbr title="Phone" style="color: black;">Ph no. :</abbr> (123) 456-7890 <br>
									<abbr title="E-mail" style="color: black;">E-mail :</abbr><a href="mailto:info@example.com" style="color: black;"s> mail@example.com</a><br>
									<abbr title="Website" style="color: black;">Website :</abbr><a href="index.php" style="color: black;"> www.example.com</a>
								</address>
							</div>
						</div></font>
						<div class="clearfix"> </div>
					</div>
					<h3 class="text-center find">Find Us Here</h3>
					<div class="map" style="width: 100%;left: 0;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.7678776079383!2d85.81635471474335!3d20.351205786369334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a190917f281fcdf%3A0xcbb27b9fb9fba2c7!2sNational+Institute+of+Fashion+Technology+Bhubaneswar!5e0!3m2!1sen!2sin!4v1504591990256" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<!--//contact-->

		</div>
		<!-- //content-section-ends-here -->
		<!--footer section start-->
		<?php 
		require 'footer.php';
		?>
		<!--footer section end-->
		<script src="js/sendmail.js"></script>
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