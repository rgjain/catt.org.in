<?php
	include_once 'dbCon.php';

	$post = $_POST;
	$record_id = $post['record_id'];
	$action = $post['action'];

	$update_query = "update contributions set status = '$action' where id=$record_id";
	$res = mysql_query($update_query) or die(mysql_error());

	if ($res) {
        
        // get the contribution details
        $getQuery = "select * from contributions where id = $record_id";
        $getres = mysql_query($getQuery) or die(mysql_error());
        
        list ($name, $email_address, $address, $amount, $cause, $id, $timestamp, $date, $status) = mysql_fetch_row($getres);
        
        ob_start();
        include_once("php/contributionEmail.php");
        $emailContent = ob_get_contents();
        ob_end_clean();

        ob_start();
        include_once("80gcertificate.php");
        $ackContent = ob_get_contents();
        ob_end_clean();

        $dompdf = new DOMPDF(); // Create new instance of dompdf  
        $dompdf->load_html($ackContent); // Load the html  
        $dompdf->render(); // Parse the html, convert to PDF  
        $pdf_ackContent = $dompdf->output(); // Put contents of pdf into variable for later  

        $file_location = "./acks_store/" . $pan . "_acknowledgment.pdf";
        file_put_contents($file_location, $pdf_ackContent); 


        include_once('php/emailAcknowledgement.php'); // sends an email for the acknowledgement.

        
        
		print $action;
	} else {
		print "error";
	}

	include_once 'dbDisCon.php';


// Google sign-in details
// client ID - 369320507427-59khundtso4otj1p3u52a7mri0oc5k8f.apps.googleusercontent.com
// client secret - gOLGpBd_TJzD_9N-ilfIwrkK

?>
