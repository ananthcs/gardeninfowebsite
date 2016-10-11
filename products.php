<?php include('header.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<title>Garden info systems</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/templatemo_style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
                <link href="css/main.css" rel="stylesheet" type="text/css" />
		
   	</head>
	<body id="top" data-spy="scroll" data-target=".navbar-collapse">
	<!-- start templatemo navigation -->
	
    <section id="features" class="features text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<h2>Our Products</h2>
					</div>
			    
                <div class="col-md-12"></div>
				<div class="col-sm-6 col-md-3">
					<a href="office_automation.php"><i class="fa fa-building"></i></a>
						<h3>Office Automation</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="Production_manage.php"><i class="fa fa-cog"></i></a>
						<h3>Production Management System</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="Rest_manage.php"><i class="fa fa-cutlery"></i></a>
						<h3>Restaurant Management System</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="E-comm.php"><i class="fa fa-shopping-cart"></i></a>
						<h3>E-Commerce Portal</h3>
						</div>
                
                
                <div class="col-md-12"></div>
				<div class="col-sm-6 col-md-3">
					<a href="Vehicle.php"><i class="fa fa-truck"></i></a>
						<h3>Vehicle Tracking System</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="Pay.php"><i class="fa fa-credit-card"></i></a>
						<h3>Pay Collecting System</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="Money_lending.php"><i class="fa fa-money"></i></a>
						<h3>Money Lending System</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="#"><i class="fa fa-refresh"></i></a>
						<h3>Coming soon...</h3>
						</div>
			</div>
		</div>
	</section>
    <!-- end templatemo navigation -->
	<!-- start templatemo features -->
    
    
	<!-- end templatemo about -->

	<!-- start templatemo team -->
	<!-- end templatemo team -->
	<!-- start templatemo portfolio -->
	
	<!-- end templatemo portfolio -->

	<!-- start templatemo contact -->
		<!-- end templatemo contact -->

	<!-- start templatemo footer -->
	<!-- end templatemo footer -->

	<!-- start back to top -->
<!--	<a href="#top" class="go-top"><i class="fa fa-chevron-up fa-1x"></i></a>
-->	<!-- end back to top -->
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/jquery.flexslider.js"></script>

	<!-- start templatemo back to top js -->
	<script>
		$(document).ready(function() {
			// FlexSlider 
		  	$('.flexslider').flexslider({
		      animation: "fade",
		      directionNav: false
		  	});

			// Show or hide the sticky footer button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.go-top').fadeIn(200);
				} else {
					$('.go-top').fadeOut(200);
				}
			});		
			// Animate the scroll to top
			$('.go-top').click(function(event) {
				event.preventDefault();
				$('html, body').animate({scrollTop: 0}, 300);
			})
		});
	</script>
	<!-- end templatemo back to top js -->

	</body>
</html>
<?php include('footer.php'); ?>