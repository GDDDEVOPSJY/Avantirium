<?php 

    // sending mail
    $msg_status="";
    $status=0;
      $data= $_POST;
	 // echo "<pre>",print_r($_POST,1),"</pre>";
 	  
        if(!empty($data)){

            $msg = "Hi Codea Team, <p>Please find the following information</p>";
			$msg.= "<p>Certified Consultant</p>";
            $msg.="<table border=0>";
         /*   $msg.="<tr><td>Company name</td><td>".$data['company_name']."</td></tr>";
            $msg.="<tr><td>Address</td><td>".$data['address']."</td></tr>";
          //  $msg.="<tr><td>Complement</td><td>".$data['complement']."</td></tr>";
            $msg.="<tr><td>City</td><td>".$data['city']."</td></tr>";
            $msg.="<tr><td>Zip</td><td>".$data['zip']."</td></tr>";
            $msg.="<tr><td>Country</td><td>".$data['country']."</td></tr>";
            $msg.="<tr><td>Industry</td><td>".$data['industry']."</td></tr>";			
            $msg.="<tr><td>State</td><td>".$data['state']."</td></tr>";			
            $msg.="<tr><td>Website</td><td>".$data['website']."</td></tr>";	*/		
            $msg.="<tr><td>Full name</td><td>".$data['full_name']."</td></tr>";			
            $msg.="<tr><td>Position</td><td>".$data['position']."</td></tr>";
            $msg.="<tr><td>Phone contact</td><td>".$data['phone_contact']."</td></tr>";
			$msg.="<tr><td>Mobile</td><td>".$data['mobile']."</td></tr>";
			$msg.="<tr><td>Skype</td><td>".$data['skype']."</td></tr>";			
			$msg.="<tr><td>Email</td><td>".$data['email']."</td></tr>";

			$focus = array();		
			foreach($_POST['focus'] as $foc)
			{
			  $foc_st = "";
              $focus[] = $foc;	
              $foc_st = implode(",",$focus);				  
            }
            $msg.="<tr><td>Focus</td><td>".$foc_st."</td></tr>";
            
            $headers ="";
            $headers .= "Reply-To:<".$data['email'].">\r\n";
            $headers .= "Return-Path:<".$data['email'].">\r\n";
            $headers .= "From: <".$data['email'].">\r\n"; 
            $headers .= "Organization:Codea Technologies\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset: utf8\r\n";
            $headers .= "X-Priority: 3\r\n";
            $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
	     	$email_to = "shiny@codeatech.com,career@codeatech.com";
	     	//$email_to = "nithula@codeatech.com";
			
      
			$sql = "INSERT INTO certifiedconsultants_form (type,full_name,position,phone_contact,mobile,skype,email,focus,industry,status			
			) VALUES ('Certified Consultant','".$data['full_name']."','".$data['position']."' ,'".$data['phone_contact']."','".$data['mobile']."','".$data['skype']."','".$data['email']."','".$foc_st."','".$data['industry']."',1)";  
			require "config.php";
		   if (mysqli_query($conn, $sql)) {
			   $msg_status = "New record created successfully";
			  //$status= 1;
			   if( mail($email_to,"New Application",$msg,$headers))
				 {
					 $status= 1;
					 //$msg_status= "Error occured while sending";
					 $headerRep  = "From: career@codeatech.com <career@codeatech.com>";
                     $subjectRep =   "Development Partner Form:";
                     $messageRep =   "Thank you for your interest in Certified Consultant. We will get back to in 2 business days";
                     // mail($email_to, $subjectRep, $messageRep, $headerRep);
					 $msg_status= "Message sent successfully";
				 }
			   else{
				   $status= 0;
			   } 
			} else {
				echo $msg=  "Error: " . $sql . "" . mysqli_error($conn);
			   $status= 0;
			}

		}  
   session_start();
   $remote_addrs =   $_SERVER['REMOTE_ADDR'];

   if($status==1){
	   $_SESSION['message']=array('status'=> true,'message'=>'Mail send successfully, We will contact you soon');
	 
   }else{
	   $_SESSION['message']=array('status'=> false,'message'=>	$msg);
	     
   }
    header('location:certified-consultants-form.php');
   ?>