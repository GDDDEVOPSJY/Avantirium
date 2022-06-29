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
        
        <section class="career-banner">
        <div class="container">
        	
            <div class="cloud-head">
            	
                <h1>GROW WITH US</h1>
                <h2>Let’s work together and Explore opportunity<</h2>
                
            </div>
            
        </div>
        </section>
        
        <section id="news" class="pt-5 pb-5">
        <div class="container">
        
            <div class="row">
            <?php $id = $_GET['id'];
					$sql = "select * from careers where id = $id ";
                     $result = mysqli_query($conn, $sql);
					 while ($row = $result -> fetch_object()) {
					?>    
                <div class="col-md-8">
                    <h2><?php echo $row->job_position;?></h2>
                            
                    <?php echo $row->description;?>
                     <p class="pt-3">
                        Interested candidates mail your resumes to <span class="codea-color2">careers@codeatech.com</span> specifying the designation for which you are applying in the subject. 
                    </p>
                </div>
                
                <div class="col-md-4 pt-5">

                    <form class="form" name="connet" method="post" action="jobapplication.php" " enctype="multipart/form-data">
                    	 <?php  //session_start();session_destroy();?>
                     <?php// if(isset($_SESSION['message']['message'])): ?>
                         <div class="form-group">
                        <label class="danger"><?php //echo $_SESSION['message']['message']; ?></label>
                        </div>
                        <?php 
                          // unset($_SESSION['message']['message']); 
                            //endif; 
                        ?>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Name*</label>
                        <input type="text" name="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                        <label for="exampleInputEmail1">Mobile Number*</label>
                        <input type="number" name="phone"  class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                        <label for="exampleInputEmail1">E-mail*</label>
                        <input type="email" name="email"  class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Let us know how we can help you today</label>
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                        <label for="exampleFormControlFile1">Upload your Resume</label>
                        <input type="file" name="fileToUpload"  required id="fileToUpload" class="form-control-file" id="exampleFormControlFile1" style="background:none;">
                        </div>
						<input type="hidden" name="career_id" value="<?php echo $id;?> ">
						<input type="hidden" name="job_position" value="<?php echo $row->job_position;?> ">                        
                        <button type="submit" class="btn more mt-3">Apply Now</button>
                        
                    </form>
                    
                </div>
			  <?php  } ?>
            </div>
            
        </div>
        </section>
        
        <?php include('footer.php'); ?>
        
        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.js" type="text/javascript"></script>
        
        <script src="assets/js/menu.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.7.2.js"></script>
<script type="text/javascript">
         $(document).ready(function(){
            <?php if(isset($_SESSION['message'])): ?>
            <?php if($_SESSION['message']['status']==true): ?>
                alert('mail send successfully , We will contact you soon');
            <?php else: ?>
                alert('<?php echo $_SESSION['message']['message']; ?>');
            <?php endif; ?>
            
        <?php 
           unset($_SESSION['message']); 
            endif; 
        ?>
    });
   </script >     
    </body>
  
</html>