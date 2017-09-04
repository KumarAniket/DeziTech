<?php
include 'admin_panel/php/intialize.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
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
				<h2 class="heading text-center">About Us</h2>
				<hr width="80%">
				<div class="single-inline">
					<div>		
						<p class="sed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempus tempor mattis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse pulvinar orci nec ex commodo pulvinar. Morbi vitae ipsum massa. Mauris lobortis ligula justo, vel euismod lacus dapibus nec. Nullam quis tortor sollicitudin, auctor sapien vel, viverra dui. Praesent sodales urna malesuada sodales varius. Praesent mattis vitae ipsum maximus euismod. Mauris faucibus metus tincidunt, egestas lectus sed, lobortis velit. Quisque ut gravida turpis, nec blandit massa. Aenean id nulla convallis, dignissim magna sit amet, vulputate diam. Morbi porttitor ligula vitae ex pretium, ac gravida augue tincidunt. Etiam nec ullamcorper nisl.<br>

							Pellentesque ac varius tellus. Nunc urna lacus, imperdiet mattis justo vitae, viverra accumsan dolor. Cras elementum elit ac quam rutrum semper. Cras luctus ac elit pretium interdum. Nam at magna sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ut dapibus nunc. Vestibulum et felis sed ligula aliquet tristique eu molestie ligula. Duis sed consectetur velit. Suspendisse potenti. Aliquam quis metus tristique, iaculis purus nec, varius velit. Aliquam erat volutpat. Donec accumsan bibendum velit sit amet maximus. Nunc at metus in eros fermentum pulvinar.<br>
							<br>Phasellus interdum nisi sit amet sem rhoncus tincidunt. Donec nec nibh mauris. Mauris sit amet metus et odio sollicitudin viverra a eget magna. Pellentesque pretium eu risus sit amet porta. Cras finibus erat non dignissim congue. Aliquam placerat sem mi, id convallis nisi tristique at. Maecenas euismod vestibulum augue in efficitur.<br>
							<br>Integer consectetur nulla rutrum elit gravida molestie. Duis interdum neque a molestie aliquam. Mauris elementum ex sagittis sapien efficitur, in aliquet erat tincidunt. Vivamus bibendum sem non ornare condimentum. Nulla nunc lectus, sollicitudin in tortor non, vehicula interdum orci. Sed justo leo, pulvinar a tempus vel, rutrum eu massa. Praesent at mauris rutrum, ultricies est non, fermentum ante.<br>
							<br>Nullam quis orci efficitur, fringilla magna in, volutpat mauris. Fusce a metus non odio dapibus fermentum sit amet nec magna. Quisque porta luctus mollis. Sed feugiat cursus pretium. Pellentesque et facilisis justo. Etiam mollis ultrices augue nec semper. Etiam faucibus vitae lacus eget ornare. Ut dictum sodales malesuada. Nunc varius dapibus nulla eu fringilla. Proin diam metus, mollis laoreet sodales nec, rutrum vel libero. Etiam posuere feugiat magna. Cras in imperdiet dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque non venenatis sem. Nam interdum congue ligula, eget vehicula nibh venenatis sit amet.</p>
						</div>
						<div class="clearfix"> </div>
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