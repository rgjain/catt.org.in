<?php
	function sendEmail($mail_cfg){
		$mail = new PHPMailer();
		try{
			$mail->IsSMTP(); 							// telling the class to use SMTP
			// $mail->SMTPSecure = 'ssl';					// SMTP Secure to SSL/TSL
			$mail->Host = 'relay-hosting.secureserver.net'; // smtp.gmail.com'; 				// SMTP server
			// $mail->Port = 465; 								// SMTP Port
			// $mail->SMTPAuth = true; 							// turn on SMTP authentication  
			// $mail->Username = 'rupeshkumar.rj@gmail.com'; 		// SMTP username  
			// $mail->Password = 'Mer1r00pal!'; //9686719199';				 // SMTP password  	
			$mail->FromName = $mail_cfg['Fromname'];
			$mail->From = $mail_cfg['From'];
			// $mail->SMTPDebug  = 1;
			
			// -- multiple recipients
			if (strlen($mail_cfg['addaddress']) > 0){
				$addaddress_exp = explode(",", $mail_cfg['addaddress']);
				for ($i=0; $i<count($addaddress_exp); $i++){
					$mail->AddAddress($addaddress_exp[$i]);
				}
			}
			if (strlen($mail_cfg['addcc']) > 0){
				$addcc_exp = explode(",", $mail_cfg['addcc']);
				for ($i=0; $i<count($addcc_exp); $i++){
					$mail->AddCC($addcc_exp[$i]);		
				}
			}
			if (strlen($mail_cfg['addbcc']) > 0){
				$addbcc_exp = explode(",", $mail_cfg['addbcc']);
				for ($i=0; $i<count($addbcc_exp); $i++){
					$mail->AddBCC($addbcc_exp[$i]);		
				}
			}
			if (strlen($mail_cfg['addreplyto']) > 0){
				$addreplyto_exp = explode(",", $mail_cfg['addreplyto']);
				for ($i=0; $i<count($addreplyto_exp); $i++){
					$mail->AddReplyTo($addreplyto_exp[$i]);		
				}
			}
			$mail->Subject = $mail_cfg['subject'];
			$mail->isHTML($mail_cfg['IsHTML']);
			$mail->Body = $mail_cfg['body'];
			$mail->WordWrap = $mail_cfg['WordWrap'];
			
			if($mail->Send()){
				print "true";
			}
			else{
				print "false";
			}
		}catch(phpmailerException $e){}
	}
?>