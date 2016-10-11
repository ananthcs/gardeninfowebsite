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
					<h2>Know About Us</h2>
				</div>
				<div class="col-md-12"></div>
				<div class="col-sm-6 col-md-3">
					<a href="Contact.php"><i class="fa fa-laptop"></i></a>
						<h3>Contact</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="Management.php"><i class="fa fa-cog"></i></a>
						<h3>Management Profile</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="Garden-e-shop.php"><i class="fa fa-shopping-cart"></i></a>
						<h3>Garden E-shop</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="#"><i class="fa fa-user"></i></a>
						<h3>-------</h3>
						</div>
                <div class="col-md-12"></div>
				<div class="col-sm-6 col-md-3">
					<a href="#"><i class="fa fa-laptop"></i></a>
						<h3>---------</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="#"><i class="fa fa-cog"></i></a>
						<h3>--------</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="#"><i class="fa fa-font"></i></a>
						<h3>------</h3>
						</div>
				<div class="col-sm-6 col-md-3">
					<a href="#"><i class="fa fa-user"></i></a>
						<h3>-------</h3>
						</div>
                
                
			</div>
		</div>
	</section>

    <!-- end templatemo navigation -->
	<!-- start templatemo features -->
    
   <!-- end templatemo about -->

	<!-- start templatemo team -->
	
	<!-- end templatemo contact -->

	<!-- start templatemo footer -->
	
	<!-- end templatemo footer -->

	<!-- start back to top -->
	<a href="#top" class="go-top"><i class="fa fa-chevron-up fa-1x"></i></a>
	<!-- end back to top -->
	
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