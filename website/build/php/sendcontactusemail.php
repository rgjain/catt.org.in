<?php
	include_once('phpmailer/class.phpmailer.php');
	include_once('phpmailer/class.smtp.php');
	include_once('sendmail.php');

	$name = $_POST['name'];
	$emailaddr = $_POST['emailid'];
	$contactmessage = $_POST['message'];
	
	$mail_cfg['Fromname'] = $name;
	$mail_cfg['From'] = 'reach@catt.org.in';
	$mail_cfg['addaddress'] = 'reach@catt.org.in';
	$mail_cfg['subject'] = "[CATT.ORG.IN] Contact Us [From: " . $emailaddr . "]";
	$mail_cfg['body'] = "Name: $name\nEmail: $emailaddr\nMessage: $contactmessage\n\n";
	$mail_cfg['addreplyto'] = $emailaddr;
	
	sendEmail($mail_cfg);
?>