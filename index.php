<?php
include '/admin_panel/php/intialize.php';

$news = $con->prepare("SELECT * FROM news WHERE Visibility = 1 ORDER BY id DESC LIMIT 5" );   //for displaying recent events in footer
$news->execute();

$events = $con->prepare("SELECT * FROM event 
	WHERE datediff(now(), Date) < 1                       
                       AND Visibility = 1 ORDER BY id DESC LIMIT 4" );   //for displaying events (it only displays events which are yet to occur)
$events->execute();

$notice = $con->prepare("SELECT * FROM notice WHERE Visibility = 1 ORDER BY id DESC LIMIT 5" );   //for displaying recent events in footer
$notice->execute();		         

?>
<!DOCTYPE html>
<html>
<head>
	<title>DeziTech</title>
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
	<div class="slider">
		<ul class="rslides" id="slider1">
			<li><img src="images/campus_1.jpg" alt=""></li>
			<li><img src="images/dept_3.jpg" alt=""></li>
			<li><img src="images/dept_1.jpg" alt=""></li>
			<li><img src="images/campus_3.jpg" alt=""></li>
		</ul>
	</div>
	<div class="content">
		<div class="welcome-top">
			<div class="container">
				<div class="col-md-6 welcome_top_left">
					<h3>Welcome To</h3>
					<h5>DeziTech</h5>
					<p>Pellentesque ac varius tellus. Nunc urna lacus, imperdiet mattis justo vitae, viverra accumsan dolor. Cras elementum elit ac quam rutrum semper. Cras luctus ac elit pretium interdum...</p>
					<a href="#"> Read More...</a>
				</div>
				<div class="col-md-6 welcome_top_right">
					<h3>From the Head's desk</h3>
					<h5></h5>
					<div class="location_img">
						<img src="images/dean.jpg" alt="Dean's Img" />
					</div>
					<p>Phasellus interdum nisi sit amet sem rhoncus tincidunt. Donec nec nibh mauris. Mauris sit amet metus et odio sollicitudin viverra a eget magna pretium eu risus....<br>
						<a href="single.php">Read More....</a></p>
					</div>
				</div>
			</div>
			<div class="welcome2-top">
				<div class="container">
					<div class="col-md-6 welcome2_top_left" style="width:65%;">
						<h3>Latest News</h3>
						<hr/>
						<div class="news-section-grids">
							<?php for($i=0; $row_news=$news->fetch(); $i++){ ?>
							<li><b><?php echo $row_news['Date']; ?></b>, <?php echo $row_news['Title']; ?></li><br>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-6 welcome2_top_right" style="width: 35%;">
						<h3>Notices</h3>
						<hr/>
						<div class="notices">
							<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" scrollamount="2">
								<?php for($i=0; $row_notice=$notice->fetch(); $i++){ ?>
								<li><a href="<?php echo $row_notice['Link']; ?>"><?php echo $row_notice['Date']; ?> :- <?php echo $row_notice['Title']; ?></a></li><br>
								<?php } ?>	
							</marquee>
						</div>        
					</div>
				</div>
			</div>
			<!--            <div class="our-staff">   -->
			<?php if($events->rowCount()>0) {?>
			<div class="container">
				<div class="our-staff-head text-center">
					<header>
						<h3>Forthcoming Events</h3>                        
					</header>							
					<div class="our-staff-grids text-center">
						<?php for($i=0; $row_up_events=$events->fetch(); $i++){?>
						<div class="col-md-3 our-staff-grid">
							<div class="view view-seventh">
								<?php if($row_up_events['Image']!= null) {?>
								<a href="#"><img class="img-responsive" src="<?php echo $row_up_events['Image']; ?>"></a>
								<?php } ?>
								<div class="mask">
									<ul class="staff-social-icons">
										<li><a href="<?php echo $row_up_events['Fb_Link']; ?>" target="_blank"><span class="facebook"> </span></a></li>
										<li><a href="<?php echo $row_up_events['Tw_Link']; ?>" target="_blank"><span class="twitter"> </span></a></li>
									</ul>
								</div>
								<h4><?php echo $row_up_events['Title']; ?></h4>
								<p align="justify"><?php echo substr($row_up_events['Description'], 0, 250). '...'; ?>
								</p>
							</div>
						</div>
						<?php } ?>								
					</div>
				</div>
			</div> <?php } ?>
		</div>
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
