<?php require "config.php";
  session_start();
?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Software development Codea Technologies</title>
        <link rel="shortcut icon" href="assets/images/codea-icon.png" type="image/x-icon">
        
        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <script src="https://kit.fontawesome.com/085049fa59.js"></script>

  <link rel="canonical" href="https://www.codeatechnologies.com/get-in-touch-form.php" >   
    </head>
    
    <body>
    	
        <?php include('header.php'); ?>
        
        <section class="git-banner">
        <div class="container">
        	
            <div class="ai-head">
            	
                <h1>Get in touch</h1>
                
            </div>
            
        </div>
        </section>
        
        <section class="mt-5 mb-5">
        <div class="container">
        <div class="row">	
            
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <form name="enquiry" method="post" action="get-in-touch-form-send.php">
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
				     <input class="form-control form" name="industry" id="industry" type="text" placeholder="Industry*" required>
                </div>
                
              <!--  <div class="col-md-12 col-sm-12 col-12 mb-3 mt-5 text-center">
                	<h5 class="font-weight-normal">Partnership Category</h5>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	Please, select the preferred partnership option for the Codea Partnership Category:
                    <div class="custom-control custom-checkbox mt-3">
                    <input type="checkbox" name="partnership_category[]" value="Business Partners" class="custom-control-input" id="ptoption1">
                    <label class="custom-control-label" for="ptoption1">Business Partners</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox"  name="partnership_category[]" value="Development Partners"  class="custom-control-input" id="ptoption2">
                    <label class="custom-control-label" for="ptoption2">Development Partners</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox"  name="partnership_category[]" value="Certified Consultants" class="custom-control-input" id="ptoption3">
                    <label class="custom-control-label" for="ptoption3">Certified Consultants</label>
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	Select the solutions of interest for Codea Partnership:
                    <div class="custom-control custom-checkbox mt-3">
                    <input type="checkbox" name="solution[]"  value="Business Process Management" class="custom-control-input" id="codeapt1">
                    <label class="custom-control-label" for="codeapt1">Business Process Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Corporate Performance Management"  class="custom-control-input" id="codeapt2">
                    <label class="custom-control-label" for="codeapt2">Corporate Performance Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Enterprise Asset Management"  class="custom-control-input" id="codeapt3">
                    <label class="custom-control-label" for="codeapt3">Enterprise Asset Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Enterprise Content Management"  class="custom-control-input" id="codeapt4">
                    <label class="custom-control-label" for="codeapt4">Enterprise Content Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Environment, Health and Safety Management"  class="custom-control-input" id="codeapt5" >
                    <label class="custom-control-label" for="codeapt5">Environment, Health and Safety Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Enterprise Quality Management"  class="custom-control-input" id="codeapt6">
                    <label class="custom-control-label" for="codeapt6">Enterprise Quality Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Enterprise Risk Management"  class="custom-control-input" id="codeapt7" >
                    <label class="custom-control-label" for="codeapt7">Enterprise Risk Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]"  value="Governance, Risk and Compliance Management"  class="custom-control-input" id="codeapt8">
                    <label class="custom-control-label" for="codeapt8">Governance, Risk and Compliance Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Human Development Managemen"  class="custom-control-input" id="codeapt9">
                    <label class="custom-control-label" for="codeapt9">Human Development Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="IT Service Management" class="custom-control-input" id="codeapt10">
                    <label class="custom-control-label" for="codeapt10">IT Service Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Product Lifecycle Management" class="custom-control-input" id="codeapt11">
                    <label class="custom-control-label" for="codeapt11">Product Lifecycle Management</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="solution[]" value="Project and Portfolio Management" class="custom-control-input" id="codeapt12">
                    <label class="custom-control-label" for="codeapt12">Project and Portfolio Management</label>
                    </div>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3 mt-5 text-center">
                	<h5 class="font-weight-normal">Main Goal</h5>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<textarea class="form-control form" name="main_goal" id="" placeholder="What is the main goal that you are aiming for with the Partnership?*" required></textarea>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3 mt-5 text-center">
                	<h5 class="font-weight-normal">Brief Company Profile</h5>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<textarea class="form-control form" name="current_business" id=""  placeholder="Brief description of your current business*" required></textarea>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<input class="form-control form" name="constitute" id="constitute" type="text" placeholder="How long has your company been constituted?*" required>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<textarea class="form-control form" name="services" id="services" placeholder="List your main products and services*" required></textarea>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<textarea class="form-control form" name="service_country" id="service_country"  placeholder="List the region(s) or country(ies) for performing this service*" required></textarea>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<input class="form-control form" type="text" name="no_of_officers" id="no_of_officers"  placeholder="Number of worldwide offices?" required>
                </div>
                
                <div class="col-md-12 col-sm-12 col-12 mb-3">
                	<input class="form-control form" type="text" name="no_of_customers" id="no_of_customers" placeholder="Number of worldwide customers?" required>
                </div>
                
               <div class="col-md-12 col-sm-12 col-12 mb-3">
                	Vertical market(s) that are your primary focus (Check all that apply)*
                    <div class="custom-control custom-checkbox mt-3">
                    <input type="checkbox" name="focus[]" value="Agribusiness" class="custom-control-input" id="vmarket1">
                    <label class="custom-control-label" for="vmarket1">Agribusiness</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Architecture, Engineering and Construction" class="custom-control-input" id="vmarket2">
                    <label class="custom-control-label" for="vmarket2">Architecture, Engineering and Construction</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Automotive" class="custom-control-input" id="vmarket3">
                    <label class="custom-control-label"  id="" for="vmarket3">Automotive</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" class="custom-control-input"  value="Chemicals" name="focus[]" id="vmarket4">
                    <label class="custom-control-label"  for="vmarket4">Chemicals</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" class="custom-control-input" id="vmarket5">
                    <label class="custom-control-label" for="vmarket5">Consulting</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Consumer Products" class="custom-control-input" id="vmarket6">
                    <label class="custom-control-label" for="vmarket6">Consumer Products</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Education" class="custom-control-input" id="vmarket7">
                    <label class="custom-control-label" for="vmarket7">Education</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Energy and Utilities"  class="custom-control-input" id="vmarket8">
                    <label class="custom-control-label" for="vmarket8">Energy and Utilities</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Financial Services" class="custom-control-input" id="vmarket9">
                    <label class="custom-control-label" for="vmarket9">Financial Services</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"   value="Food and Beverage" class="custom-control-input" id="vmarket10">
                    <label class="custom-control-label" for="vmarket10">Food and Beverage</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Healthcare"  class="custom-control-input" id="vmarket11">
                    <label class="custom-control-label" for="vmarket11">Healthcare</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="High Tech" class="custom-control-input" id="vmarket12">
                    <label class="custom-control-label" for="vmarket12">High Tech</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="IT and Software" class="custom-control-input" id="vmarket13">
                    <label class="custom-control-label" for="vmarket13">IT and Software</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Automotive" class="custom-control-input" id="vmarket14">
                    <label class="custom-control-label" for="vmarket14">Automotive</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Medical Devices" class="custom-control-input" id="vmarket15">
                    <label class="custom-control-label" for="vmarket15">Medical Devices</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Mining and Metals"  class="custom-control-input" id="vmarket16">
                    <label class="custom-control-label" for="vmarket16">Mining and Metals</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Oil and Gas" class="custom-control-input" id="vmarket17">
                    <label class="custom-control-label" for="vmarket17">Oil and Gas</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Pharmaceuticals and Biotechnology" class="custom-control-input" id="vmarket18">
                    <label class="custom-control-label" for="vmarket18">Pharmaceuticals and Biotechnology</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Pubilc Sector" class="custom-control-input" id="vmarket19">
                    <label class="custom-control-label" for="vmarket19">Pubilc Sector</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]"  value="Retail" class="custom-control-input" id="vmarket20">
                    <label class="custom-control-label" for="vmarket20">Retail</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Services"  class="custom-control-input" id="vmarket21">
                    <label class="custom-control-label" for="vmarket21">Services</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-1">
                    <input type="checkbox" name="focus[]" value="Transportation and Logistics" class="custom-control-input" id="vmarket22">
                    <label class="custom-control-label" for="vmarket22">Transportation and Logistics</label>
                    </div>
                </div>-->
                
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
                alert('Thank you for your interest. We will get back to in 2 business days');
            <?php else: ?>
                alert('Error occured while sending enquiry!!');
            <?php endif; ?>
            
        <?php 
            unset($_SESSION['message']); 
            endif; 
        ?>
    });
</script>