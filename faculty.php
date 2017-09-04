<?php
include 'admin_panel/php/intialize.php';
$result = $con->prepare("SELECT * FROM faculty WHERE Visibility = 1 ORDER BY id ASC");
$result->execute();
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
	?>		<!--header section end-->
	<div class="slider">
		<ul class="rslides" id="slider1">
			<li><img src="images/faculty.jpg" alt=""></li>
		</ul>
	</div>
	<!-- content-section-starts-here -->
	<div class="content">
		<div class="welcome_bottom">
			<div class="container">
				<div class="welcome_head text-center">
					<h1>Faculty</h1>
				</div>
				<div class="welcome_head text-center">
					<h4><p>School of Computer Engineering Places significant emphasis on attracting and retaining the best quality faculty, as faculty is the lifeline of any Educational Institution. Faculty members are carefully chosen to have the right balance of skills.</p></h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="input-group" style="width:40%; float:right; margin-right: 140px;">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Go!</button>
				</span>
			</div>
			<br /><br />	
			<!-- //welcome -->
			<!-- Our-staff-starts -->
			<div class="our-staff">
				<div class="container">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">

							<li role="presentation" class="active">
								<a href="#Teaching" id="Teaching-tab" role="tab" data-toggle="tab" aria-controls="Teaching" aria-expanded="true">Teaching Staff</a></li>
								<li role="presentation">
									<a href="#Non-Teaching" id="Non-Teaching-tab" role="tab" data-toggle="tab" aria-controls="Non-Teaching" aria-expanded="true">Non-Teaching Staff</a></li>

								</ul></div>	
							</div>
							<div class="container">
								<div class="bs-docs-example">
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade active in" id="Teaching" aria-labelledby="Teaching-tab">
											<section class="body">
												<?php										
												for($i=0; $row = $result->fetch(); $i++){

													?>
													<a href="profile.php?id=<?php echo $row['id']; ?>">
														<div class="grid">
															<img src="<?php echo $row['Dp'] ?>" class="prof_pic">
															<strong class="name"><h1><?php echo $row['Name']?></h1></strong>
															<div class='pos'>
																<p><?php echo $row['Position'] ?></p>
															</div>

															<div class='email'>
																<p><p class="email"><?php echo $row['Email']?></p></p>
															</div>	

														</div>	</a>
														<?php 
													}
													?>
												</section>

											</div>

										</section>
									</div>
								</div>
							</div>


							<!--Non Teaching Grid-->
							<div class="container">
								<div class="bs-docs-example">
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade active in" id="Non-Teaching" aria-labelledby="Non-Teaching-tab">
											<section class="body">
												<?php										
												for($i=0; $row = $result->fetch(); $i++){
													?>
													<a href="profile.php?id=<?php echo $row['id']; ?>">
														<div class="grid">
															<img src="<?php echo $row['Dp'] ?>" class="prof_pic">
															<strong class="name"><h1><?php echo $row['Name']?></h1></strong>
															<div class='pos'>
																<p><?php echo $row['Position'] ?></p>
															</div>
															<div class='email'>
																<p><p class="email"><?php echo $row['Email']?></p></p>
															</div>	
														</div>	</a>
														<?php 
													}
													?>
												</section>
											</div>
										</section>
									</div>
								</div>
							</div>





						</div>				
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>	
		<!-- //Our-staff-ends -->
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