<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include("include/head-links.php");
		?>
		<title>Gallery | Sai Laxmi Travels Bilaspur</title>
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
										<li class="breadcrumb-item active" >Gallery</li>
									</ol>             
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!--ends heading-->
			
			
			<?php
				include("include/trip-gallery.php");
			?>
			
			<?php
				include("include/footer.php");
			?>
			
		</main>
		<?php
			include("include/script.php");
		?>
	</body>
</html>