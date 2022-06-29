<?php 

    // sending mail
    $msg="";
    $status=0;
      $data= $_POST;
        if(!empty($data)){
            $target_dir = "code/frontend/web/uploads/careers/";
            $target_name = time().basename($_FILES["fileToUpload"]["name"]);
            $target_file = $target_dir.$target_name;
            $msgto = "Hi Codea Team, <p>Please find the following information</p>";
            $msgto.="<table border=0>";
            $msgto.="<tr><td>Name</td><td>".$data['name']."</td></tr>";
            $msgto.="<tr><td>Email</td><td>".$data['email']."</td></tr>";
            $msgto.="<tr><td>Phone</td><td>".$data['phone']."</td></tr>";
            $msgto.="<tr><td>Job Position</td><td>".$data['job_position']."</td></tr>";
            $msgto.="<tr><td>Message</td><td>".$data['message']."</td></tr>";
            $msgto.='<tr><td>Attachment</td><td><a href=www.codeatechnologies.com/code/frontend/web/uploads/careers/'.$target_name.'>Click here</a>';
            $headers .= "Reply-To:<".$data['email'].">\r\n";
            $headers .= "Return-Path:<".$data['email'].">\r\n";
            $headers .= "From: <".$data['email'].">\r\n"; 
            $headers .= "Organization:Codea Technologies\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset: utf8\r\n";
            $headers .= "X-Priority: 3\r\n";
            $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
	     	$email_to = "shiny@codeatech.com,career@codeatech.com";
          
		     //	$email_to = 'nithula@codeatech.com';  
		
			  $uploadOk = 1;
			  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Check if file already exists
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$uploadOk = 0;
					 $status=0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 5000000) {
				$msg= "Sorry, your file is too large.";
					$uploadOk = 0;
					$status= 0;
				}
				// Allow certain file formats
				if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx") {
					$msg= "Sorry, only pdf, doc files are allowed.";
					$uploadOk = 0;
					$status= 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					//	$msg=  "Sorry, your file was not uploaded.";
					$status= 0;
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
							$msg= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
						$attachment =$target_name;
						$sql = "INSERT INTO career_form (name, email,phone,message,attachment,job_position,career_id,status) VALUES ('".$data['name']."', '".$data['email']."','".$data['phone']."','".$data['message']."','".$attachment."','".$data['job_position']."','".$data['career_id']."',1 )";
						require "config.php";
		               if (mysqli_query($conn, $sql)) {
						  	$msg= "New record created successfully";
						  $status= 1;
						   if( mail($email_to,"New Application",$msgto,$headers))
		                     {
		                         $status= 1;
		                        // $msg= "Error occured while sending";
		                         $msg= "Message sent successfully";
		                     }
                		   else{
                			   $status= 0;
                		   } 
						} else {
						   	$msg=  "Error: " . $sql . "" . mysqli_error($conn);
						   $status= 0;
						}
					} else {
							$msg=  "Sorry, there was an error uploading your file.";
						$status= 0;
					}
				}
           }
 
 
   session_start();
   $remote_addrs =   $_SERVER['REMOTE_ADDR'];

   if($status==1){
	   $_SESSION['message']=array('status'=> true,'message'=>'Mail send successfully, We will contact you soon');
	      header('location:careers.php');
   }else{
	   $_SESSION['message']=array('status'=> false,'message'=>	$msg);
	     header('location:job-details.php?id='.$data['career_id']);
   }
  
   ?>