<!DOCTYPE html>
<html lang="en-US">
<head>
	<!-- Title -->
	<title>Casafrique - Register</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skins/default.css" data-color-skins="">
</head>
<body>
	<!-- Full Container -->
	<div id="full-container">

		<!-- Header -->
		<header>

			<!-- Header Top Content -->
            <?php include('includes/header-top.php'); ?>
            <!-- End Header Top Content -->

			<!-- Header Featured Content Outer -->
			<section id="header-featured-content-outer">
				<div class="header-parallax" data-stellar-background-ratio="0.3" data-parallax-background-image="image123.jpg">

					<div class="pattern-overlay" data-pattern-overlay-darkness-opacity="0.0" data-pattern-overlay-background-image="none">
					</div><!-- End Pattern Overlay -->
					<div class="header-colored-background gradient-BG1">
					</div><!-- End Header Colored Background -->

					<!-- Header Featured Content -->
					<div class="header-featured-content">

						<div class="container">
							<div class="row">
								<div class="col-md-10 col-md-offset-1 text-center">

									<!-- Header Center Box -->
									<div class="header-center-box">
										<div class="header-featured-title style2">
											<h1>Register and Book a Slot</h1>
											<h4 class="subheader">
                                            Agency should not be stressful it should be seamlessly done from your phone.
											</h4>
										</div><!-- End Header Featured Title -->
                                        <!-- Header Form -->
                                        <div class="col-md-10 col-md-offset-1 text-center">
										<form id="header-form" class="form-inline">
											<div class="form-group">
												<i class="fa fa-user"></i>
												<input type="text" class="form-control" id="hfFName" name="hfFName" placeholder="First Name">
                                            </div><!-- End Form Group -->
                                            <div class="form-group">
												<i class="fa fa-user"></i>
												<input type="text" class="form-control" id="hfLName" name="hfLName" placeholder="Last Name">
											</div><!-- End Form Group -->
											<div class="form-group">
												<i class="fa fa-envelope"></i>
												<input type="text" class="form-control" id="hfEmail" name="hfEmail" placeholder="Email">
											</div><!-- End Form Group --><br><br><br>
											<div class="form-group">
												<i class="fa fa-phone"></i>
												<input type="number" class="form-control" id="hfPhone" name="hfPhone"  placeholder="Phone">
                                            </div><!-- End Form Group -->
                                            <div class="form-group">
												<i class="fa fa-map"></i>
												<input type="text" class="form-control" id="hfState" name="hfState" placeholder="State of Resident">
                                            </div><!-- End Form Group --> 
                                            <div class="form-group">
												<i class="fa fa-flag"></i>
												<input type="text" class="form-control" id="hfNation" name="hfNation" placeholder="Country of Resident">
											</div><!-- End Form Group --> <br><br><br>
											<div class="form-group">
                                            <div styly="text-align:right;">
                                            <input type="submit" class="submit form-control" id="hfSubmit" value="Book A Slot">

                                            </div>
											</div><!-- End Form Group -->
										</form> </div><!-- End Header Form -->
									</div><!-- End Header Center Box -->
									<div class="hf-submit-msg">
										<div class="hf-submit-msg-cont"></div>
										<i class="close-icon"></i>
									</div><!-- end header-form-submit-message -->

								</div><!-- End col-md-10 -->
							</div><!-- End row -->
						</div><!-- End container -->

			</section><!-- End Header Featured Content Outer -->

		</header><!-- End Header -->

		<!-- Logo and Nav -->
        <?php include('includes/header.php'); ?>
        <!-- End Logo and Nav -->

		<!-- Main Container -->
		<div id="main">

			<!-- =================================
				  "Intro" 
			================================== -->
			<!-- Flat Section -->
			
				<!-- =====================================
				  "Contact Info Boxes"
			====================================== -->
			<!-- Flat Section -->
			<?php include('includes/flat-section.php'); ?>



		</div><!-- End Main -->

		<!-- Footer -->
		<?php include('includes/footer.php'); ?>
		<!-- End Footer -->

	</div><!-- End Full Container -->

	<!-- Javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.malihu.PageScroll2id.min.js"></script>
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src='js/jquery.tweet.js'></script>
	<script src='js/instafeed.min.js'></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src='js/wow.min.js'></script>
	<script src='js/jquery.magnific-popup.min.js'></script>
	<script src='js/jquery-ui.min.js'></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src='js/custom.js'></script>

</body>
</html>