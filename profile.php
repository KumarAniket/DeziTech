<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
include 'admin_panel/php/intialize.php';
if ( !isset ( $_GET['id'])){
 header('Location: faculty.php');
}  
$result = $con->prepare("SELECT * FROM faculty WHERE id = '".$_GET['id']."'" );
		         $result->execute();
		         $row = $result->fetch();
		         if($row == 0){
              header('Location: faculty.php');  
              }

$total_exp=$row['Industy']+$row['Teaching']+$row['Research'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>School of Computer Engineering</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="#" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
      // Slideshow 1
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
	<!-- web-fonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,400italic,600,300italic,300,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- web-fonts -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!--/script-->
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
	<!-- header-section-starts-here -->
<?php 
            require 'navbar.php';
        ?>
<!-- header-section-ends-here -->

<!-- <div class="slider">
	<ul class="rslides" id="slider1">
		<li><img src="images/2.jpg" alt=""></li>
		<li><img src="images/1.jpg" alt=""></li>
		<li><img src="images/2.jpg" alt=""></li>
		<li><img src="images/1.jpg" alt=""></li>
		<li><img src="images/2.jpg" alt=""></li>
		<li><img src="images/1.jpg" alt=""></li>

	</ul>
</div> -->
<!-- content-section-starts-here -->

<div class="content">
	<div class="welcome-bottom">
		<div class="container">
			<div class="col-md-9 welcome_top">
				<br /><br />
				<p>
					<div class="location_img">
						<img src="<?php echo $row['Dp']; ?>" alt="Faculty Image" style="display:block; width:200px; height:200px;" />
					</div>
					<p>
						<br />
						<font color="black">
							<header>
						
					<h3><?php echo $row['Name']; ?></h3>
					<br />
					<h4><?php echo $row['Position']; ?></h4>
					<hr>
					<h4>
						Contact Details :<br><br>
						<small>
							Email: <b><?php echo $row['Email']; ?></b>                            
							<br> Cabin No.: <b><?php echo $row['Cabin']; ?></b>
						</h4>	</small>
					</header></font>
				</p>
			</div> <div class="clearfix"> </div>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">

						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Profile</a></li>

						<?php if($row['confs'] != null || $row['journals']!=null) {?>
						<li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Publications</a></li>
						<?php } 

                          if($row['proj'] != null) {
						?>

						<li role="presentation"><a href="#project" id="project-tab" role="tab" data-toggle="tab" aria-controls="project" aria-expanded="true">Projects</a></li>
						<?php } ?>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<p>
							   <?php if($row['About'] != null) {?>
								<header>
									<h2>About Me</h2>
								</header>
								<p>
									<?php echo $row['About']; ?>
								</p>
								<hr width="75%" /> <?php } ?>
								<header>
									<h2>Experience</h2>
								</header>
								<div class="bs-docs-example">
									<table class="table" style="width: 60%;">
										<thead>
											<tr>
												<th>Industry</th>
												<th>Research</th>
												<th>Teaching</th>
												<th>Total (years)</th>
											</tr>
										</thead>
										<tbody>
											<tr>											
												<td><?php echo $row['Industy']; ?></td>												
												<td><?php echo $row['Research']; ?></td> 												
												<td><?php echo $row['Teaching']; ?></td> 
												<td><?php echo $total_exp; ?></td>
											</tr>
										</tbody>
									</table>
								</div>
								<header>
									<h2>Subjects Taught</h2>
								</header>
								<ul class="list-group" style="width:60%;">
								<?php 								
                                    $array = explode("\n", $row['Subjects']);
                                    $flag = count($array);
                                    for ($x = 0; $x < $flag; $x++) {                                    
									?>
									<li class="list-group-item"><?php echo $array[$x]; ?></li>
									<?php } ?>
									</ul>
									<header>
										<h2>Specialization</h2>
									</header>
									<ul class="list-group" style="width:60%;">
										<?php 								
                                    $array = explode("\n", $row['Spec']);
                                    $flag = count($array);
                                    for ($x = 0; $x < $flag; $x++) {                                    
									?>
									<li class="list-group-item"><?php echo $array[$x]; ?></li>
									<?php } ?>
									</ul>
									<?php if($row['Achievement'] != null) {?>
									<header>
										<h2>Achievements</h2>
									</header>
									<ul class="list-group" style="width:60%;">
										<?php 								
                                    $array = explode("\n", $row['Achievement']);
                                    $flag = count($array);
                                    for ($x = 0; $x < $flag; $x++) {                                    
									?>
									<li class="list-group-item"><?php echo $array[$x]; ?></li>
									<?php } ?>
									</ul> <?php } ?>

								</p>

							</div>							
							<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
								<p>
								    <?php if($row['confs'] != null) {?>
									<header>
										<h2>Conferences</h2>
									</header>
									<?php 
									$find = "\n";                                //when there is single value in column.
									$pos = strpos($row['confs'], $find);
									if ($pos === false) { ?>
                                    <p style="color:black; font-size: 0.75em; width: 75%;">
										<blockquote><?php echo $row['confs']; ?></blockquote>
									</p>
                                    <?php } 
                                    else {                                      //when there is multiple value in column(separated by newline)
									$array = explode("\n", $row['confs']);
                                    $flag = count($array);
                                    for ($x = 0; $x < $flag; $x++) {                                    
									?>
									<p style="color:black; font-size: 0.75em; width: 75%;">
										<blockquote><?php echo $array[$x]; ?></blockquote>
									</p>
									<?php }}}  

                                    if($row['journals'] != null) {
									?>								

									<header>
										<h2>Journals :-</h2>
									</header>
									<?php 
									$find = "\n";                               //when there is single value in column.
									$pos = strpos($row['journals'], $find);
									if ($pos === false) { ?>
                                    <p style="color:black; font-size: 0.75em; width: 75%;">
										<blockquote><?php echo $row['journals']; ?></blockquote>
									</p>
                                    <?php } 
                                    else {                                       //when there is multiple value in column(separated by newline)
									$array = explode("\n", $row['journals']);
                                    $flag = count($array);
                                    for ($x = 0; $x < $flag; $x++) {                                    
									?>
									<p style="color:black; font-size: 0.75em; width: 75%;">
										<blockquote><?php echo $array[$x]; ?></blockquote>
									</p>
									<?php }}} ?>								
							</div> 

							<div role="tabpanel" class="tab-pane fade" id="project" aria-labelledby="project-tab">
								<ol>
								<?php 
									$find = "\n";                               //when there is single value in column.
									$pos = strpos($row['proj'], $find);
									if ($pos === false) { ?>
                                    <li><p style="color:black; font-size: 1.2em; width: 75%;">
										<?php echo $row['proj']; ?>
									</p></li>
                                    <?php } 
                                    else {                                       //when there is multiple value in column(separated by newline)
									$array = explode("\n", $row['proj']);
                                    $flag = count($array);
                                    for ($x = 0; $x < $flag; $x++) {                                    
									?>
									<li><p style="color:black; font-size: 1.2em; width: 75%;">
										<?php echo $array[$x]; ?>
									</p></li>
									<?php }} ?>										
									
								</ol>
							</div>
						</div>
					</div>
				</div>

			<!-- <div class="col-md-6 welcome_top_right">
				<h3>From the Dean's desk</h3>
				<h5></h5>
				<div class="welcome_right_location">
					<div class="location_img">
						<img src="images/samaresh.jpg" alt="Dean's Img" />
					</div>
					<div class="location">
						<p>School of Computer Engineering, a constituent school of the KIIT University has been on a path of continuous growth...</p>
						<a href="#"> Read More...</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div> -->
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<br/>
		</div>
	</div>
						<?php 
					require 'footer.php';
					?>
		<!-- //footer-section -->
		<!-- //footer-section-ends-here -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<script type="text/javascript">
						$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
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
		<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!----> 

	</body>
	</html>