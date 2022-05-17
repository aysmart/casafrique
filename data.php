<?php
include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<!-- Title -->
	<title>Casafrique - Registered Participants</title>

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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">

</head>
<body>
	<!-- Full Container -->
	<div id="full-container">

		<!-- Header -->
		<header id="page-title">

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
											<h1>Registered Participants</h1>
										</div><!-- End Header Featured Title -->
										<ul class="breadcrumb" style="background:#1C00ff00;">
											<li><a href="index.html">Home</a></li>
											<li class="active">Registered Participants</li>
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
		<?php include('includes/header.php') ?>
		<!-- Main Container -->
		<div id="main">
			<div class="flat-section">

				<div class="container">
					<div class="row">
					<div class="container my-4">
						<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
						<thead>
							<tr>
								<th >S/N</th>
								<th >First Name</th>
								<th >Last Name</th>
								<th >Email</th>
								<th >Phone</th>
								<th >State</th>
								<th >Nation</th>
							</tr>
						</thead>
						<tbody>
						<?php 
				$numrow=1;
				$query=mysqli_query($con,"SELECT * from users  ORDER BY fName AND lName ASC");
				while ($row=$query->fetch_assoc())
				{
						?>
							<tr>
								<td><?php echo $numrow; ?></td>
								<td><?php echo $row['fName']; ?></td>
								<td><?php echo $row['lName']; ?></td>
								<td><?php echo $row['uEmail']; ?></td>
								<td><?php echo $row['uPhone']; ?></td>
								<td><?php echo $row['uState']; ?></td>
								<td><?php echo $Pid=$row['uNation']; ?></td>
							</tr>
							<?php 
								$numrow+=1; } 
							?>
						</tbody>
					</table>
	
		</div></div></div></div>
			
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

	 <!-- data table JS
		============================================ -->




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


	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
	$(document).ready(function() {
	    var table = $('#example').DataTable( {
	        lengthChange: false,
	        buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
	    } );
	 
	    table.buttons().container()
	        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
	} );
     </script>

	
</body>
</html>