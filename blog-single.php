<?php
include('includes/config.php');

if (isset($_POST['AddCom']))
{
    $comment=$_POST['cfMessage'];
    $authorName=$_POST['cfName'];
	$authorEmail=$_POST['cfEmail'];
	if (isset($_POST['cfCommentID']))
	{
		$CommentID=$_POST['cfCommentID'];
	}
	else
	{
		$CommentID=0;
	}
	$pid=$_GET["pid"];
	
	//echo $CommentID;

    //echo $comment.$authorName.$authorEmail.$pid;
    mysqli_query($con,"INSERT INTO blogcomments(PostID, CommentByName, CommentByEmail, CommentText, sub, Category) values('$pid','$authorName','$authorEmail','$comment', '$CommentID', '1')");

$last_id = mysqli_insert_id($con) +0;
}

$ptitle=str_replace("-", " ",$_GET['title']);
//echo $ptitle;
$query=mysqli_query($con,"SELECT * FROM blogpost WHERE BlogTittle='".$ptitle."'");
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<!-- Title -->
	<title><?php echo $row['BlogTittle']; ?> | Casafrique</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<base href="/">
	<meta name="viewport" content="width=device-width, intial-scale=1, max-scale=1">
	<meta name="author" content="">
	<meta name="description" content="<?php echo (substr($row['FirstPrev'], 0,400)) ?>">
	<meta name="keywords" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/general-elements/favicon/favicon.png">
	<link rel="apple-touch-icon" href="images/general-elements/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/general-elements/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/general-elements/favicon/apple-touch-icon-114x114.png">

	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
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

					<div class="pattern-overlay" data-pattern-overlay-darkness-opacity="0.0" data-pattern-overlay-background-image="none">
					</div><!-- End Pattern Overlay -->
					<div class="header-colored-background gradient-BG1">
					</div><!-- End Header Colored Background -->

					<!-- Header Featured Content -->
					<div class="header-featured-content">

						<div class="container">
							<div class="row">
								<div class="col-md-12">

									<!-- Header Center Box -->
									<div class="header-center-box">
										<div class="header-featured-title">
											<h1>Casafrique - Blog</h1>
											<h4 class="subheader">
											<?php echo $row['BlogTittle']; ?>
											</h4>
										</div><!-- End Header Featured Title -->
										<ul class="breadcrumb" style="background-color:#ffffff00;">
											<li><a href="index">Home</a></li>
											<li><a href="blog">Blog</a></li>
											<li class="active">Admin</li>
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
		<?php
if(isset($last_id) && $last_id>0){ ?>
<div class="alert alert-success" style="text-align:center;">
  <strong>Success!</strong> Your comment has been inserted successfully!.
</div>
<?php
} elseif(isset($last_id) && $last_id==0){ ?>
<div class="alert alert-warning" style="text-align:center;">
  <strong>Warning!</strong> Your comment has not been inserted successfully. Please, try again!
</div>
<?php } 



$string=$row['BlogTittle'];
//$url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
//$string = preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $string);
//echo $string;
$string=urlencode($string);
$string2=str_replace('+','%20', $string);
$pptitle=str_replace(" ", "-",$row['BlogTittle']);
//echo $string2;
$url="https://casafrique.com/blogpost/".$pptitle;
$url=urlencode($url);
//echo $url;
?>

			<!-- =================================
				  "Blog Single" 
			================================== -->
			<!-- Flat Section -->
			<div class="flat-section" style="padding-top:10px;">

				<div class="container">
					<div class="row">

						<!-- Flat Section Content -->
						<div class="flat-section-content">

							<div class="col-md-9">
								<div class="post-content">
									<div id="posts">
										<?php
										$query=mysqli_query($con,"SELECT * FROM blogpost WHERE BlogTittle='".$ptitle."'");
									while ($row=mysqli_fetch_array($query))
                                     {
                                ?>
										<div class="entry">
											<div class="entry-image">
												<a href="blog-single?pid=<?php echo htmlentities($row['ID']) ?>">
													<img src="<?php echo $row['PostBanner'] ?>" width="827"  alt="blog images">
												</a>
											</div><!-- End entry-image -->
											<div class="entry-title">
												<h3>
													<a href="blog-single?pid=<?php echo htmlentities($row['ID']) ?>">
													<?php echo htmlentities($row['BlogTittle']) ?>
													</a>
												</h3>
											</div><!-- End entry-title -->
											<div class="entry-meta">
												<ul>
													<li>
														<i class="fa fa-clock-o"></i>
														<?php echo date("j M Y", strtotime($row['DateOfPost'])) ?>													</li>
													<li>
														<a href="">
															<i class="fa fa-user"></i>
															Admin
														</a>
													</li> 
												<!--	<li>
														<i class="fa fa-folder-open"></i>
														<a href="#">General</a>, <a href="#">Media</a>
													</li>
													<li>-->
														<a href="blog-single?pid=<?php echo htmlentities($row['ID']) ?>">
															<i class="fa fa-comments"></i>
															<?php $pid=$row['ID'];
												 $query4=mysqli_query($con,"SELECT * FROM blogcomments WHERE PostID='".$pid."' AND Category='1'"); ?>
										<?php echo mysqli_num_rows($query4); ?> Comments
														</a>
													</li>
												</ul>
											</div><!-- End entry-meta -->
											<div class="entry-content">
												<p>
													<!-- <span class="dropcap1"><?php //echo htmlentities(substr($row['ContentText'], 0,1)) ?></span> --><?php echo substr($row['ContentText'], 0) ?>
												</p>
												
											</div><!-- End entry-content -->
										</div><!-- End entry -->
										<?php } ?>
										<div class="sp-related-info">
											<div class="row">
												<div class="col-md-6">
													<div class="sp-tags">
														<h5>Tags</h5>
														<div class="tags"><?php
														$query=mysqli_query($con,"SELECT * FROM blogpost WHERE ID='".$_GET['pid']."'");
														$row=mysqli_fetch_array($query);
														$tag_explode=explode(",", $row['PostTags']);
        foreach ($tag_explode as $tag_text)
        {
            if ($tag_text=="" || $tag_text==" ")
            {
            }
            else
            {
				echo '<a href="blog?search='.$tag_text.'&submit=search">'.$tag_text.'</a>';
            }
        } ?>
															
														</div><!-- End tags -->
													</div><!-- Single Post Tags -->
												</div><!-- End col-md-6 -->
												<div class="col-md-6">
													<div class="sp-share">
														<h5>Share</h5>
														<ul class="social-icons x-small colorful-BG hover-grey">
															<li>
																<a class="social-icon-twitter" href="https://twitter.com/intent/tweet/?text=<?php echo $string2; ?>&amp;url=<?php echo $url; ?>" target="_blank" rel="noopener" aria-label="">
																	<i class="fa fa-twitter"></i>
																</a>
															</li>
															<li>
																<a class="social-icon-facebook" href="https://facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank" rel="noopener" aria-label="">
																	<i class="fa fa-facebook"></i>
																</a>
															</li>
															<li>
																<a class="social-icon-instagram" href="https://www.instagram.com/sharer.php?u=<?php echo $url; ?>" target="_blank" rel="noopener" aria-label="">
																	<i class="fa fa-instagram"></i>
																</a>
															</li>
															<li>
																<a class="social-icon-telegram" href="https://telegram.me/share/url?text=<?php echo $string2; ?>&amp;url=<?php echo $url; ?>" target="_blank" rel="noopener" aria-label="">
																	<i class="fa fa-telegram"></i>
																</a>
															</li>
															<li>
																<a class="social-icon-whatsapp" href="whatsapp://send?text=<?php echo $string2; ?>%20<?php echo $url; ?>" target="_blank" rel="noopener" aria-label="">
																	<i class="fa fa-whatsapp"></i>
																</a>
															</li>
															<li>
																<a class="social-icon-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url; ?>&amp;title=<?php echo $string2; ?>&amp;summary=<?php echo $string2; ?>&amp;source=<?php echo $url; ?>" target="_blank" rel="noopener" aria-label="">
																	<i class="fa fa-linkedin"></i>
																</a>
															</li>
															
												<!--			<li>
																<a class="social-icon-google-plus" href="#">
																	<i class="fa fa-google-plus"></i>
																</a>
															</li>
															<li>
																<a class="social-icon-vimeo" href="#">
																	<i class="fa fa-vimeo"></i>
																</a>
															</li>
															<li>
																<a class="social-icon-youtube" href="#">
																	<i class="fa fa-youtube"></i>
																</a>
															</li>
															<li>
																<a class="social-icon-pinterest-p" href="#">
																	<i class="fa fa-pinterest-p"></i>
																</a>
															</li> -->
														</ul><!-- End social-icons -->
													</div><!-- Single Post Share -->												
												</div><!-- End col-md-6 -->
											</div><!-- End row -->
										</div><!-- End Single Post Related Info -->
										<div class="sp-related-info">
											<div class="row">
												<div class="col-md-12">
													<div class="sp-comments">
													    <h3 class="title"><?php $pid=$_GET['pid'];
												 $query=mysqli_query($con,"SELECT * FROM blogcomments WHERE PostID='".$pid."' AND Category='1'"); ?>
										<?php echo mysqli_num_rows($query4); ?> Comments</h3>
													    <ul class="comment-list">

														<?php
														$query6=mysqli_query($con,"SELECT * FROM blogcomments WHERE PostID='".$pid."' AND Category='1' AND sub='0'");
														while ($row=mysqli_fetch_array($query6))
														{
															$comId=$row['ID'];
												   ?>
													        <li class="comment">
													            <div class="single-comment">
													                <span class="avatar">
													                    <img src="images/files/user-comment.jpg" alt="">
													                </span><!-- End Avatar -->
													                <div class="comment-content">
														                <div class="comment-meta">
														                    <h5 class="author"><a href="#"><?php echo $row['CommentByName'] ?></a></h5>
														                    <span class="date"><?php echo date("j M Y", strtotime($row['CommentDate'])) ?>	 - <a class="reply" comid="<?php echo $row['ID'] ?>" >Reply</a></span>
														                </div><!-- End comment-meta -->
														                <div class="comment-wrap">
														                    <p>
																			<?php echo $row['CommentText'] ?>														                    </p>
														                </div><!-- End comment-wrap -->
													                </div><!-- End comment-content -->
																</div><!-- End single-comment -->
																<?php
																$query5=mysqli_query($con,"SELECT * FROM blogcomments WHERE sub='".$comId."'");
																	$rowCount=mysqli_num_rows($query5);
																	if($rowCount>0){
																?>
																<ul class="children">
																<?php
																while ($row2=mysqli_fetch_array($query5))
																{
																	$comId2=$row2['ID'];
																?>

													                <li class="comment">
																	<div class="single-comment">
													                <span class="avatar">
													                    <img src="images/files/user-comment.jpg" alt="">
													                </span><!-- End Avatar -->
													                <div class="comment-content">
														                <div class="comment-meta">
														                    <h5 class="author"><a href="#"><?php echo $row2['CommentByName'] ?></a></h5>
														                    <span class="date"><?php echo date("j M Y", strtotime($row2['CommentDate'])) ?>	 - <a class="reply" comid="<?php echo $row2['ID'] ?>" >Reply</a></span>
														                </div><!-- End comment-meta -->
														                <div class="comment-wrap">
														                    <p>
																			<?php echo $row2['CommentText'] ?>														                    </p>
														                </div><!-- End comment-wrap -->
													                </div><!-- End comment-content -->
																</div><!-- End single-comment -->
																<?php 
																$query7=mysqli_query($con,"SELECT * FROM blogcomments WHERE sub='".$row2['ID']."'");
																$rowCount2=mysqli_num_rows($query7);
																	if($rowCount2>0){
																?> 
																<ul class="children">
																<?php
																while ($row3=mysqli_fetch_array($query7))
																{
																	$comId3=$row3['ID'];
																?>
													                <li class="comment">
																	<div class="single-comment">
													                <span class="avatar">
													                    <img src="images/files/user-comment.jpg" alt="">
													                </span><!-- End Avatar -->
													                <div class="comment-content">
														                <div class="comment-meta">
														                    <h5 class="author"><a href="#"><?php echo $row3['CommentByName'] ?></a></h5>
														                    <span class="date"><?php echo date("j M Y", strtotime($row3['CommentDate'])) ?>	</span>
														                </div><!-- End comment-meta -->
														                <div class="comment-wrap">
														                    <p>
																			<?php echo $row3['CommentText'] ?>														                    </p>
														                </div><!-- End comment-wrap -->
													                </div><!-- End comment-content -->
																</div><!-- End single-comment -->

																<?php }?>
																	</li>
																	<?php }?>
																</ul><!-- End Children -->
																<?php } ?>
													        </li>
													        <?php }?>
														</ul><!-- End comment-list -->
														<?php } ?>
													</div><!-- End sp-comments -->
													

			                                    	<form class="sp-comment-form" method="post">
														<div id="quote">
														
														</div>
													
													    <h3 class="title">Leave a Comments</h3>
			                                    		<div class="row">
			                                    			<div class="col-md-6">

					                                    		<div class="form-group">
					                                    			<i class="field-icon fa fa-user"></i>
					                                    			<input type="text" class="form-control" id="rfName" name="cfName" placeholder="Name">
					                                    		</div><!-- End form-group -->

			                                    			</div><!-- End col-md-6 -->
			                                    			<div class="col-md-6">

					                                    		<div class="form-group">
					                                    			<i class="field-icon fa fa-envelope-o"></i>
					                                    			<input type="text" class="form-control" id="rfEmail" name="cfEmail" placeholder="Email">
					                                    		</div><!-- End form-group -->

			                                    			</div><!-- End col-md-6 -->
															<input type="text" style="visibility:hidden" class="form-control" id="rfPostID" name="cfPostID" value="<?php echo $_GET['pid'] ?>">

			                                    			<div class="col-md-12">

					                                    		<div class="form-group">
					                                    			<i class="field-icon fa fa-file-text-o"></i>
					                                    			<textarea class="form-control" id="rfMessage" name="cfMessage" placeholder="Comment"></textarea>
					                                    		</div><!-- End form-group -->
				    
			                                    			</div><!-- End col-md-12 -->
			                                    			<div class="col-md-12">

					                                    		<div class="form-group">
																	<input type="submit" name="AddCom" class="submit form-control" value="Submit Comment">
					                                    		</div><!-- End form-group -->
				    
			                                    			</div><!-- End col-md-12 -->
			                                    		</div><!-- End row -->

			                                    	</form><!-- End Contact Form -->

												</div><!-- End col-md-12 -->
											</div><!-- End row -->
										</div><!-- End Single Post Related Info -->
									</div><!-- End posts -->
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

											</ul><!-- End instagram-feed -->
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
																<a class="thumb" href="blog-single?pid=<?php echo htmlentities($row['ID']) ?>">
																	<img src="<?php echo $row['PostBanner'] ?>" alt="">
																</a>
																<div class="posts-list-content">
																	<a class="title" href="blog-single?pid=<?php echo htmlentities($row['ID']) ?>"><?php echo htmlentities($row['BlogTittle']) ?></a>
																	<a class="info" href="blog-single?pid=<?php echo htmlentities($row['ID']) ?>"><i class="fa fa-comments-o"></i><?php $pid=$row['ID'];
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
											</div><!-- End tags -->
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
		$("div").on("click", ".comment-meta .reply", function(){
		var comID = $(this).attr("comid");  
		//alert(comID);
		
		$.ajax({  
                url:"qoutation.php",  
                method:"post",
                data:{comID:comID},
                success:function(data){  
                    $('#quote').html(data);  
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
	<script src="js/bootstrap.min.js"></script>

</body>
</html>