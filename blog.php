<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<!-- Title -->
	<title>Casafrique - Blog</title>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

</head>
<body>
	<!-- Full Container -->
	<div id="full-container">

		<!-- Header -->
		<header id="page-title">

			<!-- Header Top Content -->
			<?php include('includes/header-top.php') ?>
			<!-- Header Featured Content Outer -->
			<section id="header-featured-content-outer">
				<div class="header-parallax" data-stellar-background-ratio="0.3" data-parallax-background-image="image123.jpg">

					<div class="pattern-overlay" data-pattern-overlay-darkness-opacity="0.0" data-pattern-overlay-background-image="none"></div><!-- End Pattern Overlay -->
					<div class="header-colored-background gradient-BG1"></div><!-- End Header Colored Background -->

					<!-- Header Featured Content -->
					<div class="header-featured-content">

						<div class="container">
							<div class="row">
								<div class="col-md-12">

									<!-- Header Center Box -->
									<div class="header-center-box">
										<div class="header-featured-title">
											<h1>Blog</h1>
											<h4 class="subheader">
												Latest News
											</h4>
										</div><!-- End Header Featured Title -->
										<ul class="breadcrumb">
											<li><a href="index">Home</a></li>
											<li class="active">Blog</li>
										</ul><!-- End Breadcrumb -->
									</div><!-- End Header Center Box -->

								</div><!-- End col-md-12 -->
							</div><!-- End row -->
						</div><!-- End container -->

					</div><!-- End header-featured Content -->
				</div><!-- End header parallax -->


			</section><!-- End Header Featured Content Outer -->

		</header><!-- End Header -->

		<!-- Logo and Nav -->
		<?php include('includes/header.php'); ?>

		<!-- Main Container -->
		<div id="main">

			<!-- =================================
				  "Icons" 
			================================== -->
			<!-- Flat Section -->
			<div class="flat-section" style="padding-top:10px;">>

				<div class="container">
					<div class="row">

						<!-- Flat Section Content -->
						<div class="flat-section-content">

							<div class="col-md-9">
								<div class="post-content" id="posts1">
									
									

									
									
								</div><!-- End post-content -->
							</div><!-- End col-md-9 -->

							<div class="col-md-3">
								<div class="sidebar">
									<div class="sidebar-widgets-wrap">
										<div class="widget">
											<h4>Search Form</h4>
											<form class="search-form" method="get" action="blog">
												<div class="form-group">
													<input name="search" id="search101" value="<?php if(isset($_GET["search"])) echo $_GET["search"];?>" type="text" placeholder="Search for..">
													<button name="submit" value="search" type="submit" class="search-submit">
														<i class="fa fa-search"></i>
													</button>
												</div><!-- End form-group -->
											</form><!-- End search-form -->
										</div><!-- End widget -->
										<div class="widget">
											<h4>Twitter Feed</h4>
											<div class="twitter-feed tweet">

											</div><!-- End twitter-feed -->
										</div><!-- End widget -->
										<div class="widget">
											<h4>Instagram Feed</h4>
											<ul id="instagram-feed">

											</ul><!-- End twitter-feed -->
										</div><!-- End widget -->
										<div class="widget">
											<h4>From Blog</h4>
											<div class="posts-tabs">
												<ul class="posts-tabs-nav">
													<li><a href="#posts-pane-2">Recent</a></li>
												</ul><!-- End posts-tabs-nav -->
												<div class="posts-tabs-content">
													<div id="posts-pane-1" class="content-pane">
														<ul class="posts-list popular-posts">
														<?php 
                                     $query=mysqli_query($con,"SELECT * FROM blogpost WHERE Category='Blog Post' ORDER BY DateOfPost DESC LIMIT 8"); 
                                     while ($row=mysqli_fetch_array($query))
                                     {
                                ?>
															<li>
																<a class="thumb" href="blogpost/<?php echo str_replace(" ", "-",$row["BlogTittle"]) ?>">
																	<img src="<?php echo $row['PostBanner'] ?>" alt="">
																</a>
																<div class="posts-list-content">
																	<a class="title" href="blogpost/<?php echo str_replace(" ", "-",$row["BlogTittle"]) ?>"><?php echo htmlentities($row['BlogTittle']) ?></a>
																	<a class="info" href="blogpost/<?php echo str_replace(" ", "-",$row["BlogTittle"]) ?>"><i class="fa fa-comments-o"></i><?php $pid=$row['ID'];
												 $query4=mysqli_query($con,"SELECT * FROM blogcomments WHERE PostID='".$pid."' AND Category='1'"); ?>
										<?php echo mysqli_num_rows($query4); ?> Comments</a>
																</div><!-- End posts-list-content -->
															</li>
															<?php } ?>
														</ul><!-- End popular-posts -->
													</div><!-- End content-pane -->													
												</div><!-- End posts-tabs-content -->
											</div><!-- End posts-tabs -->
										</div><!-- End widget -->
										<div class="widget">
											<h4>Tags</h4>
											<div class="tags">
											<a href="blog?search=Real Estate&submit=search">Real Estate</a>
												<a href="blog?search=Landlord&submit=search">Landlord</a>
												<a href="blog?search=Agent&submit=search">Agent</a>
												<a href="blog?search=Agency&submit=search">Agency</a>
												<a href="blog?search=Homes&submit=search">Homes</a>
												<a href="blog?search=Office&submit=search">Office</a>
												<a href="blog?search=Customer&submit=search">Customer</a>
												<a href="blog?search=Investment&submit=search">Investment</a>
												<a href="blog?search=General&submit=search">General</a>
												<a href="blog?search=People&submit=search">People</a>
												<a href="blog?search=Offer&submit=search">Offer</a>
											</div><!-- End twitter-feed -->
										</div><!-- End widget -->
									</div><!-- End sidebar-widgets-wrap -->
								</div><!-- End sidebar -->
							</div><!-- End col-md-3 -->


						</div><!-- End Flat Section Content -->
							
					</div><!-- End Row -->
				</div><!-- End Container -->

			</div><!-- End Flat Section -->

			<?php include('includes/flat-section.php'); ?>



		</div><!-- End Main -->

		<!-- Footer -->
		<?php include('includes/footer.php'); ?>
		<!-- End Footer -->

	</div><!-- End Full Container -->

	<!-- Javascript -->

	<script>

$(document).ready(function(){  
limit=10;
searchtext=document.getElementById("search101").value;
var page=1;

$.ajax({  
		url:"blog-pagination.php",  
		method:"post",
		data:{page:page, searchtext:searchtext, limit:limit},
		success:function(data){  
			$('#posts1').html(data);  
		}  
});  
//alert("I was here!");
});

	$(document).ready(function(){  
		$("div").on("click", ".post-content .paginate", function(){
		var page = $(this).attr("pageval");  
		limit=10;
		
		$.ajax({  
                url:"blog-pagination.php",  
                method:"post",
                data:{page:page, searchtext:searchtext, limit:limit},
                success:function(data){  
                    $('#posts1').html(data);  
                }  
        });  

	}); 
}); 
	</script>

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