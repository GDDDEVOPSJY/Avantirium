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
            	
                <h1>Become a Certified Consultant</h1>
                
            </div>
            
        </div>
        </section>
        
        <section class="mt-5 mb-5">
        <div class="container">
        <div class="row">	
            
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <form name="enquiry" method="post" action="certified-consultants-form-send.php">
            <div class="row">
            	               
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	Domains that are your primary focus (Check all that apply)*
                    <div class="custom-control custom-checkbox mt-3">
                    <input type="checkbox" name="focus[]" value="Fleet Management" class="custom-control-input" id="vmarket1">
                    <label class="custom-control-label" for="vmarket1">Fleet Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Freight and logistics" class="custom-control-input" id="vmarket2">
                    <label class="custom-control-label" for="vmarket2">Freight and logistics</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Asset Management" class="custom-control-input" id="vmarket3">
                    <label class="custom-control-label" name="focus[]" id="" for="vmarket3">Asset Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" class="custom-control-input"  value="Hospitality" name="focus[]" id="vmarket4">
                    <label class="custom-control-label"  for="vmarket4">Hospitality</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" class="custom-control-input"  value="Healthcare" id="vmarket5">
                    <label class="custom-control-label" for="vmarket5">Healthcare</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="IloT" class="custom-control-input" id="vmarket6">
                    <label class="custom-control-label" for="vmarket6">IloT</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="AI & Machine Learning" class="custom-control-input" id="vmarket7">
                    <label class="custom-control-label" for="vmarket7">AI & Machine Learning</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Cloud Consulting"  class="custom-control-input" id="vmarket8">
                    <label class="custom-control-label" for="vmarket8">Cloud Consulting</label>
                    </div> 
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
				    <input class="form-control form" name="industry"   id="industry" type="text" placeholder="Industry">
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
                alert('Thank you for your interest in Certified Consultant. We will get back to in 2 business days');
            <?php else: ?>
                alert('Error occured while sending enquiry!!');
            <?php endif; ?>
            
        <?php 
            unset($_SESSION['message']); 
            endif; 
        ?>
    });
</script>