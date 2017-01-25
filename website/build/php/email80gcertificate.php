<?php
	include_once('phpmailer/class.phpmailer.php');
	include_once('phpmailer/class.smtp.php');
	include_once('sendmail.php');

	$mail_cfg['IsHTML'] = true;
	$mail_cfg['Fromname'] = 'CATT';
	$mail_cfg['From'] = 'reach@catt.org.in';
	$mail_cfg['addaddress'] = "$email_address";
	$mail_cfg['subject'] = "[CATT.ORG.IN] 80G Certificate [For: " . $name . "]";
	$mail_cfg['MsgHTML'] = $emailContent;
	$mail_cfg['addreplyto'] = 'reach@catt.org.in';
	// $mail_cfg['addcc'] = 'reach@catt.org.in';
	$mail_cfg['stringAttachmentContent'] = $pdf_certContent;
	$mail_cfg['stringAttachmentFileName'] = $file_location;

	sendEmail($mail_cfg);
?>
