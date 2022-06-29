<?php 
    
    // Checking validity of the captcha
    
    function recaptchVerify($g_recaptcha_response=null,$remote_addrs=null){
        if(!empty($g_recaptcha_response) && !empty($remote_addrs)){
            try {
                $url = 'https://www.google.com/recaptcha/api/siteverify';
                $data = ['secret'   =>'6LfVA8IUAAAAAKDke4xC8J41KQCp5Wzo_bbL9AZL',
                         'response' => $g_recaptcha_response,
                         'remoteip' =>$remote_addrs ];
        
                $options = [
                    'http' => [
                        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                        'method'  => 'POST',
                        'content' => http_build_query($data) 
                    ]
                ];
                $context  = stream_context_create($options);
                $result = file_get_contents($url, false, $context);
                return json_decode($result)->success;
            }
            catch (Exception $e) {
                return false;
            }
        }
        return false;
    }
    
    // sending mail
    
    function sendMail($data=null){
        if(!empty($data)){
            $msg = "Hi Codea Team, <p>Plaese find the following information</p>";
            $msg.="<table border=0>";
            $msg.="<tr><td>Name</td><td>".$data['name']."</td></tr>";
            $msg.="<tr><td>Email</td><td>".$data['email']."</td></tr>";
            $msg.="<tr><td>Country</td><td>".$data['country']."</td></tr>";
            $msg.="<tr><td>Phone</td><td>".$data['phone']."</td></tr>";
            $msg.="<tr><td>Industry</td><td>".$data['industry']."</td></tr>";
            $msg.="<tr><td>Service</td><td>".$data['service']."</td></tr>";
            $msg.="<tr><td>Message</td><td>".$data['message']."</td></tr>";
            $headers .= "Reply-To:<".$data['email'].">\r\n";
            $headers .= "Return-Path:<".$data['email'].">\r\n";
            $headers .= "From: <".$data['email'].">\r\n"; 
            $headers .= "Organization:Codea Technologies\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset: utf8\r\n";
            $headers .= "X-Priority: 3\r\n";
            $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
            mail("jason@codeatech.com","New Enquiry",$msg,$headers);
            return true;
        }
    }
    
    
    
  
      
   session_start();
   $remote_addrs =   $_SERVER['REMOTE_ADDR'];
  
   if(recaptchVerify($_POST['g-recaptcha-response'],$remote_addrs)){
       if(sendMail($_POST)){
           $_SESSION['message']=array('status'=> true,'message'=>'Enquiry send successfully, We will contact you soon');
       }else{
           $_SESSION['message']=array('status'=> false,'message'=>'Something went wrong !!');
       }
   }else{
         $_SESSION['message']=array('status'=> false,'message'=>'Something went wrong !!');
   }
   header('location:contact.php');
   
   ?>