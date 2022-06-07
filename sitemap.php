<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include("include/head-links.php");
		?>
		<title>Site Map | Sai Laxmi Travels Bilaspur</title>
	</head>
	<body>
		<main>
			<?php
				include("include/header.php");
			?>
			<?php
				include("include/navbar.php");
			?>
			
			<!-- heading & background -->
			<div class="">
				<!--breadcrum-->
				<div class="breadcrumb-section">
					<div class="breadcrumb-inner">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 col-sm-12 text-center">
									<ol class="breadcrumb greylinks">
										<li class="breadcrumb-item"><a href="index.php">Home</a></li>
										<li class="breadcrumb-item active" >Site Map</li>
									</ol>             
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--ends heading-->
			
			<section class="our-rental-plan mt-5">
				<h2 class="my-4 pt-4 display-6 text-center"><span class="red">Site</span> Map </h2>
					<div class="container">
						<div class="row">
							<div class="sitemap">
								<div class="py-10">
									<ol class="main bold">
										<li><a href="index.php" class="text-decoration-none">Home</a></li>
										<li><a href="about.php" class="text-decoration-none">About Us</a></li>
										<li><a href="our-cars.php" class="text-decoration-none">Our Cars</a></li>						
										<li><a href="tour-packages.php" class="text-decoration-none">Tours Packages</a></li>						
										
										<li><a href="trip-gallery.php" class="text-decoration-none">Gallery</a></li>
										<li><a href="contact.php" class="text-decoration-none">Contact Us</a></li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</section>
			
			
			<?php
				include("include/footer.php");
			?>
			
		</main>
		<?php
			include("include/script.php");
		?>
	</body>
</html>