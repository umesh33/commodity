<?php
//print_r($_POST);
//exit; 
 //to show on local data //
	$senderName=$_POST['senderName'];
	//$mobile=$_POST['mobile'];
	$senderEmail=$_POST['senderEmail'];
	$companyName=$_POST['companyName'];
	$phone=$_POST['phone'];
	$url=$_POST['url'];
	$message1=$_POST['message'];
	
	
	//$fax=$_POST['fax'];
	//$email=$_POST['email'];
	//$date=$_POST['date'];
	//$reason=$_POST['reason'];
	//$time=$_POST['time'];


				$to = "umeshgupta1942@gmail.com";
				$subject = "Inquiry";
				$from = "info@creaadesigns.com";
				
				$message = "
				<html>
				<head>
				<title>HTML email</title>
				</head>
				<body>
				Inquiry
				Name:$senderName<br />
				Email:$senderEmail<br />
				companyName:$companyName<br />
				phone:$phone<br />
				url:$url<br />
				Message:$message1<br />
				</body>
				</html>";
				
				
				$headers  = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type: text/html; charset=UTF-8\r\n";
				$headers .= "From: <".$from. ">" ;

/*print_r(mail($to,$subject,$message,$headers));
exit;*/



				//$header= "From:$email<$from>" . "\r\n";
				
				// Always set content-type when sending HTML email
				/*$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
				
				// More headers
				$headers .= "From:$email<$from>" . "\r\n";
				*/
				
				
				if(mail($to,$subject,$message,$headers))
				{
				
					echo "Your request has been proceed successful";
					
				}
				else
				{
					echo "Mail not sent";
				}




?>
		
	

