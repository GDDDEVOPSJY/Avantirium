<div class="">
	<header class="navigation">
		<div class="header-top ">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-lg-2 col-md-4">
						<div class="header-top-socials text-center text-lg-left text-md-left">
							<a href="#" target="_blank"><i class="ti-s-facebook"></i></a>
							<a href="#" target="_blank"><i class="ti-twitter"></i></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
						<div class="header-top-info">
							<a href="tel:+23-345-67890">Call Us : <span>+1 356-677-5555</span></a>
							<a href="mailto:info@avantiriumsolutions.us"><i class="fa fa-envelope mr-2"></i><span>info@avantiriumsolutions.us</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<nav class="navbar navbar-expand-lg" id="navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo.png" width="60%" />
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars" style="color: black!important;"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="navbarsExample09">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php"><strong>Home</strong> <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php"><strong>About Us</strong></a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link" onclick="document.getElementById('service-modal').style.display='block'"><strong>Services</strong></a>

							<div id="service-modal" class="modal">
								<div class="container services row" id="service-container">
									<div class="card col-3 m-3">
										<div class="row">
											<div class="face face1 col-12">
												<div class="content">
													<a href="services.php#Mortgage Services">
														<img src="images/icons/header-services-1-light.png" style="width: 60%; aspect-ratio: 1/1;">
														<h3>Mortgage services</h3>
													</a>
												</div>
											</div>
											<div class="face face2 col-12">
												<div class="content half">
													<a class="options" href="mortgage-loan-services.php">Mortgage Loan Services</a><br>
													<a class="options" href="mortgage-preprocessing-services.php">Mortgage Preprocessing Services</a><br>
													<a class="options" href="mortgage-processing-services.php">Mortgage Processing Services</a><br>
												</div>
												<div class="content half">
													<a class="options" href="mortgage-underwriting-services.php">Underwriting Services</a><br>
													<a class="options" href="mortgage-closing-support-services.php">Mortgage Closing Support Services</a><br>
													<a class="options" href="mortgage-loan-modification-and-origination-services.php">Loan Modification and Origination Services</a><br>
												</div>
											</div>
										</div>
									</div>
									<div class="card col-3 m-3">
										<div class="row">
											<div class="face face1 col-12">
												<div class="content">
													<a href="services.php#QC Services">
														<img src="images/icons/header-services-2-light.png" style="width: 60%; aspect-ratio: 1/1;">
														<h3>QC services</h3>
													</a>
												</div>
											</div>
											<div class="face face2 col-12">
												<div class="content">
													<a class="options medium" href="mortgage-post-closing-audit-services.php">Mortgage Post Closing Audit Services</a><br>
													<a class="options medium" href="mortgage-prefund-qc-audit-services.php">Mortgage Prefund QC Audit Services</a><br>
													<a class="options medium" href="mortgage-underwriting-qc-services.php">Mortgage Underwriting QC Services</a><br>
												</div>
											</div>
										</div>
									</div>
									<div class="card col-3 m-3">
										<div class="row">
											<div class="face face1 col-12">
												<div class="content">
													<a href="services.php#More Services">
														<img src="images/icons/header-services-3-light.png" style="width: 45%; aspect-ratio: 1/1;">
														<h3>More Services</h3>
													</a>
												</div>
											</div>
											<div class="face face2 col-12">
												<div class="content">
													<a class="options medium " href="loan-boarding-services.php">Loan Boarding Services</a><br>
													<a class="options medium" href="mortgage-indexing-services.php">Mortgage Indexing Services</a><br>
													<a class="options medium " href="reo-services.php">REO services</a><br>
													<a class="options medium" href="title-support-services.php">Title Support Services</a><br>
												</div>
											</div>
										</div>
									</div>
								</div>



							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="how-we-work.php"><strong>How We Work</strong></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php"><strong>Contact</strong></a>
						</li>
					</ul>
				</div>
			</div>
			<script>
				// Get the modal
				var modal = document.getElementById('service-modal'), container = document.getElementById("service-container");

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal || event.target == container) {
						modal.style.display = "none";
					}
				}
			</script>
		</nav>
	</header>
</div>