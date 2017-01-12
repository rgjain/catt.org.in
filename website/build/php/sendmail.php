<?php
	function sendEmail($mail_cfg){

		$mail = new PHPMailer();
		try{
			$mail->IsSMTP();
			$mail->Host = 'relay-hosting.secureserver.net';
            //$mail->SMTPDebug = 2;
			$mail->FromName = $mail_cfg['Fromname'];
			$mail->From = $mail_cfg['From'];

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
			$mail->MsgHTML($mail_cfg['MsgHTML']);
			$mail->WordWrap = $mail_cfg['WordWrap'];
			$mail->addStringAttachment($mail_cfg['stringAttachmentContent'], $mail_cfg['stringAttachmentFileName']);

			return ($mail->Send()) ? true : false;

		} catch (phpmailerException $e) {
		  	// echo $e->errorMessage(); //error messages from PHPMailer
		} catch (Exception $e) {
		  	// echo $e->getMessage();
		}
	}
?>
