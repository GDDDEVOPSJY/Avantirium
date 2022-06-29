<?php 

    // sending mail
    $msg_status="";
    $status=0;
      $data= $_POST;
	 // echo "<pre>",print_r($_POST,1),"</pre>";
 	  
        if(!empty($data)){

            $msg = "Hi Codea Team, <p>Please find the following information</p>";
            $msg.="<table border=0>";
            $msg.="<tr><td>Company name</td><td>".$data['company_name']."</td></tr>";
            $msg.="<tr><td>Address</td><td>".$data['address']."</td></tr>";
            $msg.="<tr><td>Complement</td><td>".$data['complement']."</td></tr>";
            $msg.="<tr><td>City</td><td>".$data['city']."</td></tr>";
            $msg.="<tr><td>Zip</td><td>".$data['zip']."</td></tr>";
            $msg.="<tr><td>Country</td><td>".$data['country']."</td></tr>";
            $msg.="<tr><td>Industry</td><td>".$data['industry']."</td></tr>";			
            $msg.="<tr><td>State</td><td>".$data['state']."</td></tr>";			
            $msg.="<tr><td>Website</td><td>".$data['website']."</td></tr>";			
            $msg.="<tr><td>Full name</td><td>".$data['full_name']."</td></tr>";			
            $msg.="<tr><td>Position</td><td>".$data['position']."</td></tr>";
            $msg.="<tr><td>Phone contact</td><td>".$data['phone_contact']."</td></tr>";
			$msg.="<tr><td>Mobile</td><td>".$data['mobile']."</td></tr>";
			$msg.="<tr><td>Skype</td><td>".$data['skype']."</td></tr>";			
			$msg.="<tr><td>Mobile</td><td>".$data['mobile']."</td></tr>";			
			$msg.="<tr><td>Email</td><td>".$data['email']."</td></tr>";
			
			$category = array();
			foreach($_POST['partnership_category'] as $cate)
			{
			  $cate_st = "";
              $category[] = $cate;		
              $cate_st = implode(",",$category);			   
            }
			$msg.="<tr><td>Partnership Category</td><td>".$cate_st."</td></tr>";	
            $solution = array();			
			foreach($_POST['solution'] as $sol)
			{
			  $sol_st = "";
              $solution[] = $sol;	
              $sol_st = implode(",",$solution);				  
            }
            $msg.="<tr><td>Solution</td><td>".$sol_st."</td></tr>";
			
			$msg.="<tr><td>Main goal</td><td>".$data['main_goal']."</td></tr>";
			$msg.="<tr><td>Current business</td><td>".$data['current_business']."</td></tr>";
			$msg.="<tr><td>Constitute</td><td>".$data['constitute']."</td></tr>";
			$msg.="<tr><td>Services</td><td>".$data['services']."</td></tr>";
			$msg.="<tr><td>Service country</td><td>".$data['service_country']."</td></tr>";
			$msg.="<tr><td>No of officers</td><td>".$data['no_of_officers']."</td></tr>";			
			$msg.="<tr><td>No of customers</td><td>".$data['no_of_customers']."</td></tr>";
			
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
			
      
			$sql = "INSERT INTO qualification_form (company_name, address,complement,
			city,zip,country,state,website,full_name,position,phone_contact,mobile,skype,email,	solution,main_goal,current_business,constitute,services,service_country,
			no_of_officers,no_of_customers,focus,industry,partnership_category,status			
			) VALUES ('".$data['company_name']."', '".$data['address']."','".$data['complement']."',
			'".$data['city']."','".$data['zip']."','".$data['country']."','".$data['state']."','".$data['website']."','".$data['full_name']."',
			'".$data['position']."' ,'".$data['phone_contact']."','".$data['mobile']."','".$data['skype']."','".$data['email']."',
			
			'".$sol_st."','".$data['main_goal']."','".$data['current_business']."','".$data['constitute']."','".$data['services']."',
			'".$data['service_country']."','".$data['no_of_officers']."','".$data['no_of_customers']."','".$foc_st."','".$data['industry']."','".$cate_st."',1)";  
			require "config.php";
		   if (mysqli_query($conn, $sql)) {
			   $msg_status = "New record created successfully";
			  //$status= 1;
			   if( mail($email_to,"New Application",$msg,$headers))
				 {
					 $status= 1;
					 //$msg_status= "Error occured while sending";
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
    header('location:partners-qualification-form.php');
   ?>