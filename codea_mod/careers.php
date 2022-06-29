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
   <link rel="canonical" href="https://www.codeatechnologies.com/careers.php" >  
    </head>
    
    <body>
    	
        <?php include('header.php'); ?>
        
        <section class="career-banner">
        <div class="container">
        	
            <div class="cloud-head">
            	
                <h1>GROW WITH US</h1>
                <h2>Let’s work together and Explore opportunity<</h2>
                
            </div>
            
        </div>
        </section>
        
        <section>
        <div class="container">
        
            <div class="row mt-5 mb-4">
            	
                <div class="col-md-12">
                	
                    <div class="career-head text-center">
                   
                        <h1 class="mb-2">We just want to have great people<br>working for us</h1>
                        <p>We are always forward-looking in creating next-generation enterprise solutions. Codea Technologies has been growing at a rapid pace garnering customers in newer markets across the globe.</p>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <div class="row">
            	
                <div class="col-md-3"></div>
                
                <div class="col-md-6">
                	
                    <form class="job-search mb-3"  id="search_frm" method="POST">
                        <input class="form-control"  id="search"type="search" name="search" placeholder="Search Job" aria-label="Search Job">
                		<button class="btn shoot" type="submit">SEARCH</button>
                        
                    </form>
                    
                </div>
                
                <div class="col-md-3"></div>
                
            </div>
            
            <div class="row"  id="search_div">
		       <?php if($_POST['search']){
		            $search = $_POST['search'];
			    	$sql = "select * from careers where status =1 and job_position LIKE '%$search%'";
    			}
    			else
    			{
    			   	$sql = "select * from careers where status =1";
    			}
               $result = mysqli_query($conn, $sql);				
				 if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {?>
					 <div class="col-md-4 col-sm-6 text-center mt-5 mb-4">
						
						<div class="career-img">
							<img src="code/frontend/web/uploads/careers/<?php echo $row["image"];?>" alt="" style="height:150px !important;" />
						</div>
						<h2 class="mb-0 codea-color2"><?php echo $row["job_position"];?></h2>
						<p class="m-0"><?php echo $row["location"];?></p>
						<p class="mb-2">No. of Openings: <?php echo $row["no_of_openings"];?></p>
						<a class="career-link" href="job-details.php?id=<?php echo $row["id"];?>">More Info</a>
                    
                      </div>
				<?php	}
				 } else {
					echo "";
				 }
				 ?>                                     
            </div>            
        </div>	
        </section>
                
        <?php include('footer.php'); ?>
        
        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        
        <script src="assets/js/menu.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.7.2.js"></script>
<script type="text/javascript">
// Variable to hold request
var request;

// Bind to the submit event of our form
$("#search_frm").submit(function(event){ 

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input, select, button, textarea");

    // Serialize the data in the form
    var serializedData = $form.serialize();

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "/careers-search-frm.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log(response); var dat = $.parseJSON(response);
		content ="";
		for(var i = 0; i < dat.length; i += 1){
			          content +=   '<div class="col-md-4 col-sm-6 text-center mt-5 mb-4">';
						
					  content +=	'<div class="career-img">';
					  content +=		'<img src="code/frontend/web/uploads/careers/'+dat[i]['image']+'" alt="" />';
					  content +=	'</div>';
					  content +=	'<h2 class="mb-0 codea-color2">'+dat[i]['job_position']+'</h2>';
					  content +=	'<p class="m-0">'+dat[i]['location']+'</p>';
					  content +=	'<p class="mb-2">No. of Openings:'+ dat[i]['no_of_openings']+'</p>';
					  content +=	'<a class="career-link" href="job-details.php?id='+dat[i]['id']+'">More Info</a>';
                    
                       content += '</div>';
			
		}
		 $("#search_div").empty();
		 $("#search_div").append(content);
		
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});
    $(document).ready(function(){
            <?php if(isset($_SESSION['message'])): ?>
            <?php if($_SESSION['message']['status']==true): ?>
                alert('mail send successfully , We will contact you soon');
            <?php else: ?>
                alert('Error occured while sending!!');
            <?php endif; ?>
            
        <?php 
           unset($_SESSION['message']); 
            endif; 
        ?>
    });
</script>      
    </body>
  
</html>