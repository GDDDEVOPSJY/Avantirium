<?php require "config.php";
  session_start();
?>
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
    
    </head>
    
    <body>
    	
        <?php include('header.php'); ?>
        
        <section class="partner-banner">
        <div class="container">
        	
            <div class="ai-head">
            	
                <h1>Lets partner in Business</h1>
                
            </div>
            
        </div>
        </section>
        
        <section class="mt-5 mb-5">
        <div class="container">
        <div class="row">	
            
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <form name="enquiry" method="post" action="business-form-send.php">
            <div class="row">
            	
                <div class="col-md-12 col-sm-12 col-12 mb-3 text-center">
                	<h5 class="font-weight-normal">Company Profile</h5>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 text-right">
                	*Required field
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<input class="form-control form" name="company_name" id="company_name" type="text" placeholder="Company Name*" required>
                </div>
                
                <div class="col-md-12 col-sm-8 col-12 mb-3">
                	<input class="form-control form" name="address" id="address" type="text" placeholder="Address*" required>
                </div>
                
               <!-- <div class="col-md-4 col-sm-4 col-12 mb-3">
                	<input class="form-control form" name="complement" id="complement" type="text" placeholder="Complement">
                </div>-->
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
                	<input class="form-control form" name="city" id="city" type="text" placeholder="City*" required>
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
                	<input class="form-control form" name="zip" id="zip" type="text" placeholder="ZIP/Postal Code*" required>
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
				    <input class="form-control form" name="country" id="country" type="text" placeholder="Country*" required>
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
				   <input class="form-control form" name="state" id="state" type="text" placeholder="State*" required>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<input class="form-control form" name="website"  id="" type="text" placeholder="Website">
                </div>
                
				 <div class="col-md-12 col-sm-12 col-12 mb-3 mt-5 text-center">
                	<h5 class="font-weight-normal">Brief Company Profile</h5>
                </div>        
				<div class="col-md-12 col-sm-12 col-12 mb-3">
                	<textarea class="form-control form" name="current_business" id=""  placeholder="Brief description of your current business*" required></textarea>
                </div>
                <div class="col-md-12 col-sm-12 col-12 mb-3 mt-5 text-center">
                	<h5 class="font-weight-normal">Contact Information</h5>
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
                	<input class="form-control form" name="full_name"  id="full_name" type="text" placeholder="Full Name*" required>
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
                	<input class="form-control form" name="position"  id="position" type="text" placeholder="Position*" required>
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
                	<input class="form-control form" name="phone_contact"  id="phone_contact" type="text" placeholder="Phone Contact*" required>
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
                	<input class="form-control form" name="mobile"  id="mobile" type="text" placeholder="Mobile">
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
                	<input class="form-control form" name="skype"   id="skype" type="text" placeholder="Skype">
                </div>
                
                <div class="col-md-6 col-sm-6 col-12 mb-3">
                	<input class="form-control form" name="email"  id="" type="email" placeholder="E-mail*" required>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
					<input class="form-control form" name="industry"  id="industry" type="text" placeholder="Industry*">
                </div>
                                                                                               
                <div class="col-12 mb-3">
                <div style="background:rgba(0,0,0,0.1);" class="p-3">
                	By submitting this form, I certify that the information provided is true and accurate. This application form does not constitute an agreement by either party and is purely for information purpose.
               	</div>
                </div>
                
                <div class="col-12 mb-3 text-center">
                	<button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
                
            </div>
            </form>	
            </div>
            <div class="col-md-1"></div>
            
        </div>    
        </div>
        </section>
        
        <?php include('footer.php'); ?>
        
        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        
        <script src="assets/js/menu.js" type="text/javascript"></script>
        
    </body>
  
</html>
<script src="http://code.jquery.com/jquery-1.7.2.js"></script>
<script>
    $(document).ready(function(){
       $('#country').on('change', function() {
            //alert($(this).find("option:selected").text());
            $('#hidden_country').val($(this).find("option:selected").text());
        });
        
        <?php if(isset($_SESSION['message'])): ?>
            <?php if($_SESSION['message']['status']==true): ?>
                alert('Thank you for your interest in Lets Partner in Business. We will get back to in 2 business days');
            <?php else: ?>
                alert('Error occured while sending enquiry!!');
            <?php endif; ?>
            
        <?php 
            unset($_SESSION['message']); 
            endif; 
        ?>
    });
</script>