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
							<a href="#" class="nav-link" onclick="action();"><strong>Services</strong></a>

							<div id="service-modal" class="modal" style="display: none;">
								<div class="dropdown-content">
									<a href="services.php" class="col-12 p-0">
										<div class="header">
											<h2 id="dropdown-header">Services</h2>
										</div>
									</a>
									<div class="row">
										<div class="column wide">
											<h3><a href="services.php#Mortgage%20Services" onclick="document.getElementById('service-modal').style.display = 'none'">
													Mortgage Services</a>
											</h3>
											<a href="mortgage-loan-services.php" class="half">Mortgage Loan Services</a>
											<a href="mortgage-preprocessing-services.php" class="half">Mortgage Pre-processing Services</a>
											<a href="mortgage-processing-services.php" class="half">Mortgage Processing Services</a>
											<a href="mortgage-underwriting-services.php" class="half">Mortgage Underwriting Services</a>
											<a href="mortgage-closing-support-services.php" class="half">Mortgage Closing Support Services</a>
											<a href="mortgage-loan-modification-and-origination-services.php" class="half">Mortgage Loan Modification And Origination Services</a>
										</div>
										<div class="column">
											<h3><a href="services.php#QC%20Services" 
											onclick="document.getElementById('service-modal').style.display = 'none'">
													QC Services</a></h3>
											<a href="mortgage-post-closing-audit-services.php">Mortgage Post Closing Audit Services</a>
											<a href="mortgage-prefund-qc-audit-services.php">Mortgage Prefund QC Audit Services</a>
											<a href="mortgage-underwriting-qc-services.php">Mortgage Underwriting QC Services</a>
										</div>
										<div class="column">
											<h3><a href="services.php#More%20Services"
											onclick="document.getElementById('service-modal').style.display = 'none'">
													More Services</a></h3>
											<a href="loan-boarding-services.php">Loan Boarding Services</a>
											<a href="mortgage-indexing-services.php">Mortgage Indexing Services</a>
											<a href="reo-services.php">REO Services</a>
											<a href="title-support-services.php">Title Support Services</a>
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
				var modal = document.getElementById('service-modal'),
					container = document.getElementById("service-container"),
					header = document.getElementById("dropdown-header"),
					nav_link = document.getElementById("services-nav-item");

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal || event.target == container || event.target == header || event.target == nav_link) {
						modal.style.display = "none";
					}
				}
				const action = () => {

					if (document.getElementById('service-modal').style.display != 'none')
						modal.style.display = 'none';
					else
						modal.style.display = 'block';
				}
			</script>
		</nav>
	</header>
</div>