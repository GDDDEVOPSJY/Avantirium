<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Codea Technologies</title>
        <link rel="shortcut icon" href="assets/images/codea-icon.png" type="image/x-icon">
        
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <script src="https://kit.fontawesome.com/085049fa59.js"></script>
        <link rel="canonical" href="https://www.codeatechnologies.com/iot-industries.php" >
        
        <style>
            .item-four .nav-link { border-top: 4px solid #f1585d; padding: 1.68rem 1rem; background:rgba(0,0,0,0.05);}
        </style>
    
    </head>
    
    <body>
    	
        <?php include('header.php'); ?>
        
        <section class="iot-banner">
        <div class="container">
        	
            <div class="ecd-head">
            	
                <h2>Ability to transfer data over a network</h2>
                <h1>Internet of Things</h1>
                
            </div>
            
        </div>
        </section>
        
        <section class="mb-5">
        <div class="container">
            <img src="assets/images/IoT-industries.jpg" alt="" class="img-fluid" />
        </div>    
        </section>
        
        <section class="mb-5">
        <div class="container-fluid">
        	
            <div class="row mb-4 pt-5">
            <div class="col-12 text-center">
            	<h1>Industries Covered</h1>
            </div>
            </div>
            
            <div class="row mb-3">
            
                <div class="col-md-4 ind-cover-item" style="background-image:url(assets/images/ind-cover-item-img-01.jpg);">
                <div>
                	<div>Smart Machinery</div>
                </div>
                </div>
                
                <div class="col-md-4 ind-cover-item" style="background-image:url(assets/images/ind-cover-item-img-02.jpg);">
                <div>
                	<div>Smart Energy &amp; Utilities</div>
                </div>
                </div>
                
                <div class="col-md-4 ind-cover-item" style="background-image:url(assets/images/ind-cover-item-img-03.jpg);">
                <div>
                	<div>Smart Factories</div>
                </div>
                </div>
                
                <div class="col-md-4 ind-cover-item" style="background-image:url(assets/images/ind-cover-item-img-04.jpg);">
                <div>
                	<div>Smart Cities / Smart Transportation</div>
                </div>
                </div>
                
                <div class="col-md-4 ind-cover-item" style="background-image:url(assets/images/ind-cover-item-img-05.jpg);">
                <div>
                	<div>Supply Chain and Logistics</div>
                </div>
                </div>
                
                <div class="col-md-4 ind-cover-item" style="background-image:url(assets/images/ind-cover-item-img-06.jpg);">
                <div>
                	<div>Condition Monitoring &amp; Predictive Maintenance</div>
                </div>
                </div>
                
            </div>
            
            <div class="container">
            	
                <div class="row mb-4 pt-5">
                <div class="col-12 text-center">
                    <h1>OUR CUSTOMERS</h1>
                </div>
                </div>
                
                <div class="row">
                	
                    <div class="col">
                    	<img src="assets/images/customers/001.jpg" alt="" class="img-fluid img-border" />
                    </div>
                    
                    <div class="col">
                    	<img src="assets/images/customers/002.jpg" alt="" class="img-fluid img-border" />
                    </div>
                    
                    <div class="col">
                    	<img src="assets/images/customers/003.jpg" alt="" class="img-fluid img-border" />
                    </div>
                    
                    <div class="col">
                    	<img src="assets/images/customers/004.jpg" alt="" class="img-fluid img-border" />
                    </div>
                    
                    <div class="col">
                    	<img src="assets/images/customers/005.jpg" alt="" class="img-fluid img-border" />
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        </section>
        
        <?php include('footer.php'); ?>
        
        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        
        <script src="assets/js/menu.js" type="text/javascript"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
			$(document).ready(function(){
			  $("a").on('click', function(event) {
				if (this.hash !== "") {
				  event.preventDefault();
				  var hash = this.hash;
				  $('html, body').animate({
					scrollTop: $(hash).offset().top
				  }, 800, function(){
					window.location.hash = hash;
				  });
				} 
			  });
			});
		</script>
        
    </body>
  
</html>