<?php
include 'admin_panel/php/intialize.php';

$result = $con->prepare("SELECT * FROM stu_res WHERE Visibility = 1 ORDER BY id DESC");
                                        $result->execute();

$result2 = $con->prepare("SELECT * FROM stu WHERE Visibility = 1 ORDER BY id DESC");
                                        $result2->execute();                                       


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
				<!-- header-section-ends-here -->

				<!-- content-section-starts-here -->
				<div class="content">
					<div class="welcome_bottom">

						<h2 class="heading text-center">Student Corner</h2>

						<!-- //welcome -->
						<div class="welcome_bottom">
							<div class="container">
								<div class="input-group" style="width:50%; float:right;">
									<input type="text" class="form-control" name="Search" id="Search" placeholder="Search for...">								

								</div>	

								<!--intregrate back end-->
								<div class="bs-docs-example">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Name of Document</th>
												<th width="50%">Description</th>
												<th>Date of Issue</th>
												<th>Download Link</th>
											</tr>
										</thead>
										<tbody>
										  <?php for($i=0; $row = $result->fetch(); $i++){ ?>
											<tr>
												<td><a><?php echo $row['Title']; ?></a></td>
												<td><?php echo $row['Description']; ?></td>
												<td><?php echo date("d M Y", strtotime($row['Date'])); ?></td>
												<td><a href="<?php echo $row['Link']; ?>">Download</a></td>
											</tr>
											<?php } ?>
									</tbody>
								</table>
							</div>

						</section>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- News-section -->
	<div class="news-section">
		<div class="container">
			<div class="news-section-head text-center">
				<header>
					<h3 id="achievements">Student Achievements</h3>
					<hr />
				</header>
			</div>
			
			<center>
				<div class="our-staff">
					<div class="container">
						<div class="our-staff-head text-center">
							<div class="our-staff-grids text-center"> 
							<?php for($i=0; $row = $result2->fetch(); $i++){ ?>                              
								<div class="col-md-3 our-staff-grid cards">
									<div class="view view-seventh">
									<?php if($row['Image']!=null) { ?>	
										<a href="#"><img class="img-responsive" src="<?php echo $row['Image']; ?>" alt=""></a>
                                       <?php } ?>
										<h4 style="text-align: left !important"><?php echo $row['Title']; ?></h4>
										<hr />
										<p align="justify"><?php echo $row['Description']; ?></p>
									</div>
									</div>
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</center>
				</div>
			</div>
			<!-- //News-section -->
			<!-- //content-section-ends-here -->
			<!--footer section start-->
								<?php 
					require 'footer.php';
					?>
							<!--footer section end-->
							<script src="js/search.js"></script>
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
