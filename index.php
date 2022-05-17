<?php include('includes/config.php'); 

$query=mysqli_query($con,"SELECT * FROM users"); 
$row=mysqli_fetch_array($query);
$numrow=mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<!-- Title -->
	<title>Casafrique - Home</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">
	<meta name="author" content="casafrique">
	<meta name="description" content=" Now you can succeed without stress! All your real estate activities simplified in one place....so it is simple, convenient and fast. ">
	<meta name="keywords" content="nigeria properties for sale, properties for salein Nigeria, private properties nigeria, private properties in nigeria, buying properties in nigeria, buy properties in nigeria, nigeria property centre, nigerian property centre, nigeria property center, nigerian property centre, nigeriapropertycentre, property centre, one bedroom flat for rent in abuja, 1br in Abuja, 1br in Lagos, real estate, houses for rent in abuja, houses for rent in lagos, land for sale in lagos, self contain for rent in lekki, nigerian property centre, property in lagos, 1 bedroom flat for rent in abuja, 1 bedroom flat for rent in lagos, mini flat for rent in abuja, mini flat for rent in Lagos, property for rent in lagos, houses for rent in lekki, real estate in nigeria, 2 bedroom flat for rent in lekki, 2 bedroom flat for rent in gbadada, 2 bedroom flat for rent in Ikeja, houses for sale in lagos, 2 bedroom flat for rent in surulere, self contain for rent in abuja, apartment for rent in lagos, property for sale in lagos, houses for sale in abuja, mini flat for rent in surulere, rent house in lagos, apartments for rent in abuja, nigeria property, nigerian property center, private property nigeria, land for sale in abuja, houses for sale in lekki, house for rent in lekki, rent a house in lagos, 2 bedroom flat for rent in ajah, house for sale in lagos, rent house in abuja, 2 bedroom flat for rent in lagos, property for rent in abuja, house for sale in lekki, mini flat for rent in lagos, house for rent in lagos, mini flat for rent in lekki, 2 bedroom flat for rent in abuja, houses for rent, house for rent, self contain for rent in lagos, real estate nigeria, apartments for rent in lagos, self contain for rent in yaba, rent apartment in lagos, office space for rent in ikeja, a room self contain in yaba, house rent in lagos, to let, house for sale in abuja, npc, property in nigeria, houses for sale in ikoyi, property, self contain for rent in surulere, houses for rent in port harcourt, lekki gardens, affordable estates in abuja, property mart, to let nigeria, house for rent in ibadan, nigerian property, short let apartments in ikeja, house for rent in abuja, lagos homes, nigeriaproperty, banana island, short let apartments in lekki, flats for rent in abuja, a room self contain in surulere, mini flat for rent in ajah, property center, self contain for rent in ajah, bstan homes, land for sale in ibeju lekki, land for sale in lekki, properties for sale in lagos, chevy view estate, dolphin estate, property for sale in abuja, one bedroom flat for rent in lekki, nigeriapropertycenter, gtbank head office, ibeju lekki, a room self contain, houses for sale in lekki phase 1, houses for rent in surulere, gtb head office, amen estate phase 2, 1 bedroom flat for rent in ikeja, 2 bedroom flat for rent in ikeja, bq for rent in lekki, shops for rent in lagos, self contain for rent in ikeja, flats for rent in lagos, house to rent in lagos, property websites in nigeria, nigerianpropertycentre, ajao estate, orisun estate, mini flat for rent in ibadan, propertycentre, self contain for rent in jabi abuja, buy land in lagos, real estate in lagos, houses for rent in ibadan, houses for rent in apo resettlement abuja, 2 bedroom flat for rent in yaba, warehouse for rent in lagos, gtbank head office address, short let apartments in lagos, mini flat for rent in yaba, arium estate, land for sale, crown estate lekki, house to let in lagos, rent to own lagos, a room self contain in ogba, house for rent in surulere, house for rent in ajah, gbagada, room and parlour self contain in surulere, jahi abuja, 4 bedroom bungalow, galadimawa abuja, service apartment in ikeja, houses in abuja, 2 bedroom flat in yaba, revolution plus property, isheri lagos, agbowa ikorodu, real estate companies in lagos, property for rent, serviced apartments for rent in abuja, houses in lagos, banana island lagos, arepo ogun state, one bedroom apartment, houses for rent in yaba, houses for sale in life camp abuja, properties in lagos, osapa london lekki, house for sale in nigeria, vgc, office space for rent in abuja, house for rent in surulere lagos, office space in lagos, ifako gbagada, house, private property, mini flat for rent in ogba, lekki free trade zone, self contain in surulere, maiyegun beach estate, lekki, office space for rent in lekki, serviced apartments in lagos, to let lagos, property center nigeria, eko atlantic, self contain for rent in agungi, bq for rent in ikoyi, land for sale in port harcourt, properties, properties for sale in abuja, property centre nigeria, nigerian properties, apartments in lagos, property pro, property for sale in lekki, plot of land, brick city estate kubwa, houses in lekki, free property advertising sites in nigeria, 2 bedroom flat for rent in gwarinpa abuja, estates in lekki phase 1, osborne estate ikoyi, euc homes, houses for sale in magodo, mini flat for rent in lekki phase 1, dopemu, apartment for rent in lekki, house for rent in yaba, dei dei abuja, 5 bedroom duplex, ikota villa estate, cheap houses for sale in abuja, kurudu abuja, lafiaji lekki, lekki scheme 2, lagos homs, houses for sale in lagos mainland, service apartment in lagos, nigeriapropertycentre.com, igbo efon">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skins/default.css" data-color-skins="">
	
<!--	<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6016aefe9dbb8e001c8909d3&product=inline-share-buttons" async="async"></script> 
		<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60169c2f627bc500198ab470&product=sticky-share-buttons" async="async"></script>-->

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
				<div class="header-parallax" data-stellar-background-ratio="0.5" data-parallax-background-image="image123.jpg">

					<div class="pattern-overlay" data-pattern-overlay-darkness-opacity="0.0" data-pattern-overlay-background-image="none">
					</div>
					<!-- End Pattern Overlay -->
					<div class="header-colored-background gradient-BG1">
					</div>
					<!-- End Header Colored Background -->

					<!-- Header Featured Content -->
					<div class="header-featured-content resp-pb-0">

						<div class="container">
							<div class="row">
								<div class="col-md-5">

									<!-- Header Center Box -->
									<div class="header-center-box">
										<div class="header-featured-title style1">
											<h1>Agency made simple</h1>
											<h4 class="subheader">
											Agency should not be stressful it should be seamlessly done from your phone. The world has moved from hard work to stress-less work. Casafrique means stress-less real estate Agency.										</h4>
										</div>
										<!-- End Header Featured Title -->
									</div>
									<!-- End Header Center Box -->

								</div>
								<!-- End col-md-5 -->
								<div class="col-md-3 col-md-push-4">
									<!-- Header Center Box -->
									<div class="header-center-box text-center">
										<img class="ftr-btn-arrow" src="images/files/button-indicator-arrow.png" alt="">
										<a class="button large white hover-transparent-white" href="<?php if($numrow>=1000) echo '#'; else echo 'register'; ?>">
											Join Now
										</a>
										<span class="button-description">Lock down your own slot <br> for the app experience</span>
										<span><h4 class="subheader"><?php echo 1000-$numrow; ?> slots left</h4></span>
										<br>
										<span><h3 class="subheader" style="color:#fff;">A Few Days To Launch...</h3></span>
										<span><h3 class="subheader" style="color:#fff;"><?php echo date("j M Y", strtotime('2021/11/21')) - date("j M Y"); ?> days to go!</h3></span>
									</div>
									<!-- End Header Center Box -->
								</div>
								<!-- End col-md-3 -->
								<div class="col-md-4 col-md-pull-3">
									<!-- Header Center Box -->
									<div class="header-center-box text-center bottom-position">
										<div class="vf-image">
											<img src="images\files\app-screenshots/header-phone.png" alt="">	
										</div>
										<!-- End Vertical Featured Image -->
									</div>
									<!-- End Header Center Box -->
								</div>
								<!-- End col-md-4 -->
							<!-- End row -->
							</div>
						<!-- End container -->
						</div>

					<!-- End header-featured Content -->
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-12">

								<span class="arrow-down hidden-sm hidden-xs">
									<i class="pe-7s-angle-down-circle"></i>
									Explore More Down
								</span>
								<!-- End Arrow Down [ Movable ] -->

							</div>
							<!-- End col-sm-12 -->
						</div>
						<!-- End Row -->
					</div>
					<!-- End Container -->
				</div>
				<!-- End header parallax -->


			<!-- End header-featured-content-outer -->
			</section>

		</header>
		<!-- End Header -->

		<!-- Logo and Nav -->
		<?php include('includes/header.php'); ?>
		<!-- End Logo and Nav -->

		<!-- Main Container -->
		<div id="main" style="margin-top:0px;">

			<!-- =================================
				  "Intro" 
			================================== -->
			<!-- Flat Section -->
			<div class="flat-section text-center intro" style="padding:25px;" data-background-color="#f3f3f3">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<h2>...The World Of Change...</h2>
							<!-- Flat Section Title -->
							<div class="flat-section-title">
								<h4 class="subheader">Remember when you had to wait by the road at night or in the rain for a taxi ?</h4>
								<h3><strong><i>Uber changed that!</i></strong></h3>
							</div><!-- End Flat Section Title -->
							<!-- Flat Section Title -->
							<div class="flat-section-title">
								<h4 class="subheader">Remember when we had to spend huge sums to make international calls ?</h4>
								<h3><strong><i>Whatsapp changed that!</i></strong></h3>
							</div><!-- End Flat Section Title -->

							<!-- Flat Section Title -->
							<div class="flat-section-title">
								<h4 class="subheader">Remember when shopping meant dirty smelly markets ?</h4>
								<h3><strong><i>Jumia and Amazon changed that!</i></strong></h3>
							</div><!-- End Flat Section Title -->

							<!-- Flat Section Title -->
							<div class="flat-section-title">
								<h4 class="subheader">Real Estate Agency doesn’t have to be stress and sweat before you succeed.</h4>
								<h3 style="color: rgb(184, 15, 10);"><strong><i style="color: rgb(184, 15, 10);">We are changing that!</i></strong></h3>
								<p style="color: rgb(0, 0, 0);">...so it is simple, convenient and fast. Now you can succeed without stress! All your real estate activities simplified in one place.</p>
							
								<a href="<?php if($numrow>=1000) echo '#'; else echo 'register'; ?>" class="button medium colorful hover-transparent-colorful">
				            		Join Now
								</a><span><h4 class="subheader"><?php echo 1000-$numrow; ?> slots left</h4></span>
								
							</div><!-- End Flat Section Title -->

						</div><!-- End col-sm-12 -->
					</div><!-- End Row -->
				</div><!-- End Container -->
<div class="sharethis-inline-share-buttons"></div>
			</div><!-- End Flat Section -->


			
			<!-- =================================
				  "About Us 2"
			================================== -->
			<!-- Flat Section -->
			<div class="flat-section pb-0" style="margin-top:0px; padding:0px;" data-background-color="#f3f3f3">

				<div class="container">
					<div class="row">
						<div class="col-sm-12">

							<!-- Flat Section Title -->
							<div class="flat-section-title text-center">
								<h1>Benefits</h1>
							</div><!-- End Flat Section Title -->

						</div><!-- End col-sm-12 -->

						

						<!-- Flat Section Content -->
						<div class="flat-section-content">

							<div class="col-lg-4 pr-30 resp-pr-20 pt-130 resp-pt-0">
								<div class="row">
									<div class="col-lg-12">

										<!-- Info Box -->
										<div class="info-box1 text-right">
											<span class="info-box-icon icon clean hover-colorful effect1 x4 rounded" data-toggle="modal" data-target="#split-pay">
												<i class="pe-7s-scissors"></i>
											</span>
											<div class="info-box-content">
												<h4>Spilt Payment</h4>
												<p>
												No need to appeal to any Landlord/ Agent; your fee will be automatically split and paid. 
												</p><!-- End Info Box Content -->
											</div>
										</div><!-- End Info Box -->

									</div><!-- End col-lg-12 -->
									<div class="col-lg-12">

										<!-- Info Box -->
										<div class="info-box1 text-right">
											<span class="info-box-icon icon clean hover-colorful effect1 x4 rounded" data-toggle="modal" data-target="#inspection">
												<i class="pe-7s-notebook"></i>
											</span>
											<div class="info-box-content">
												<h4>Inspection Booking</h4>
												<p>
												Your clients or potential clients can book inspections and you will be notified on your phone
												</p><!-- End Info Box Content -->
											</div>
										</div><!-- End Info Box -->

									</div><!-- End col-lg-12 -->
									<div class="col-lg-12">

										<!-- Info Box -->
										<div class="info-box1 text-right">
											<span class="info-box-icon icon clean hover-colorful effect1 x4 rounded" data-toggle="modal" data-target="#agency-fee">
												<i class="pe-7s-cash"></i>
											</span>
											<div class="info-box-content">
												<h4>Agency Fee</h4>
												<p>
												Your agency fee is automatically split and sent to you without delay.
												</p><!-- End Info Box Content -->
											</div>
										</div><!-- End Info Box -->

									</div><!-- End col-lg-12 -->
								</div><!-- End row -->
							</div><!-- End col-lg-4 -->
							<div class="col-lg-4 col-lg-push-4 pl-30 pt-130 resp-pt-0">
								<div class="row">
									<div class="col-lg-12">

										<!-- Info Box -->
										<div class="info-box1">
											<span class="info-box-icon icon clean hover-colorful effect1 x4 rounded" data-toggle="modal" data-target="#listing">
												<i class="pe-7s-pin"></i>
											</span>
											<div class="info-box-content">
												<h4>Property Listing</h4>
												<p>
												We help you with effective property listing and we mean it. 
												</p><!-- End Info Box Content -->
											</div>
										</div><!-- End Info Box -->

									</div><!-- End col-lg-12 -->
									<div class="col-lg-12">

										<!-- Info Box -->
										<div class="info-box1">
											<span class="info-box-icon icon clean hover-colorful effect1 x4 rounded" data-toggle="modal" data-target="#agency-contract">
												<i class="pe-7s-file"></i>
											</span>
											<div class="info-box-content">
												<h4>Agency Contract</h4>
												<p>
												We automate the contracts making it simple and easy for you to sign contracts without muchado
												</p><!-- End Info Box Content -->
											</div>
										</div><!-- End Info Box -->

									</div><!-- End col-lg-12 -->
									<div class="col-lg-12">

										<!-- Info Box -->
										<div class="info-box1">
											<span class="info-box-icon icon clean hover-colorful effect1 x4 rounded" data-toggle="modal" data-target="#rating-review">
												<i class="pe-7s-star"></i>
											</span>
											<div class="info-box-content">
												<h4>Ratings and Reviews</h4>
												<p>
												Rating and reviews helps sort out the men from the boys
												</p><!-- End Info Box Content -->
											</div>
										</div><!-- End Info Box -->

									</div><!-- End col-lg-12 -->
								</div><!-- End row -->
							</div><!-- End col-lg-4 -->
							<div class="col-lg-4 col-lg-pull-4 text-center resp-mt-40">
								<img src="images\files\app-screenshots/header-phone.png" alt="">
							</div><!-- End col-lg-4 -->

						</div><!-- End Flat Section Content -->

					</div><!-- End Row -->
				</div><!-- End Container -->
<div class="sharethis-inline-share-buttons"></div>
			</div><!-- End Flat Section -->
			
			

				<!-- =================================
					"About Us 3" 
				================================== -->
				<!-- Flat Section -->
				<div class="flat-section pb-0">

					<div class="container">

				
					<div><h2 style="text-align:center;">Our Blog</h2></div>

							
<div class="container my-4">
<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

<!--Controls--
<div class="controls-top">
<a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
<a class="btn-floating" href="#multi-item-example" data-slide="next"><i
class="fas fa-chevron-right"></i></a>
</div>
!--/.Controls--

--Indicators--
<ol class="carousel-indicators">
<li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
<li data-target="#multi-item-example" data-slide-to="1"></li>

</ol>
/.Indicators-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

<!--First slide-->
<div class="carousel-item active">
<?php $query=mysqli_query($con,"SELECT * FROM blogpost WHERE Category='Blog Post' ORDER BY RAND() DESC LIMIT 0,3"); 
while($row10=mysqli_fetch_array($query)){
					?>
<div class="col-md-4" style="float:left">
<div class="card mb-2">
<a href="blog-single?pid=<?php echo htmlentities($row10['ID'])?>"> <img class="card-img-top"
src="<?php echo $row10['PostBanner']?>" alt="Card image cap"></a>
<div class="card-body">
<h4 class="card-title" style="font-size:15px;"><?php echo htmlentities($row10['BlogTittle']) ?></h4>
<p class="card-text"><span class="dropcap1"><?php echo htmlentities(substr($row10['FirstPrev'], 0,1)) ?></span><?php echo substr($row10['FirstPrev'], 1, 200)."..." ?></p>
<a class="btn btn-primary" href="blog-single?pid=<?php echo htmlentities($row10['ID']) ?>">Read More</a>
</div>
</div>
</div>
<?php } ?>
</div>
<!--/.First slide-->

</div>
<!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
				
				
							</div><!-- End Flat Section Content -->

						</div><!-- End Row -->
					</div><!-- End Container -->

				</div><!-- End Flat Section -->

					<!-- =================================
					"About Us 3" 
				================================== -->
				<!-- Flat Section -->
				<div class="flat-section pb-0">

					<div class="container">
						
				
							</div><!-- End Flat Section Content -->

						</div><!-- End Row -->
					</div><!-- End Container -->

				</div><!-- End Flat Section -->


<div class="sharethis-inline-share-buttons" style="position:inline" ></div>

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
		<?php include('includes/modals.php'); ?>

		<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Casafrique Real Estate Survey</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Please, kindly fill our online survey. We promise not to take too much of your time.</p>
                <a href="surveys"><button type="submit" class="btn btn-primary">Goto Survey</button></a>
            </div>
        </div>
    </div>
</div>
		<!-- End Footer -->

	</div><!-- End Full Container -->

	<!-- Javascript -->
	<script src='js/bootstrap.min.js'></script>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<script src='js/bootstrap.min.js'></script>

	<script>
    $(document).ready(function(){
		//alert("I was here!");

       // $("#myModal").modal('show');

		
    });
</script>
</body>
</html>