<?php
	include_once 'dbCon.php';
	include_once '../assets/dompdf/dompdf_config.inc.php';

	$post = $_POST;
	$record_id = $post['record_id'];
	$action = $post['action'];
	$eightygcert_id = ($action == "approved") ? 'CATT' . str_pad($record_id, 6, "0", STR_PAD_LEFT) : "";

	$update_query = "update contributions set status = '$action', 80gcert_number = '$eightygcert_id' where id = $record_id";
	$res = mysql_query($update_query) or die(mysql_error());

	if ($res) {

        // get the contribution details
        echo $getQuery = "select name, email_address, address, amount, ci.cause_name as cause, c.id, timestamp, date, status, transref, 80gcert_number, payment_mode from contributions c, cause_info ci where c.id = $record_id and c.cause = ci.cause_val";
        $getres = mysql_query($getQuery) or die(mysql_error());

        list ($name, $email_address, $address, $amount, $cause, $id, $timestamp, $date, $status, $transref, $eightygcert_id, $paymentMode) = mysql_fetch_row($getres);

        ob_start();
        include_once("contributionEmail.php");
        $emailContent = ob_get_contents();
        ob_end_clean();


        ob_start();
        include_once("80gcertificate.php");
        $certContent = ob_get_contents();
        ob_end_clean();

        $dompdf = new DOMPDF(); // Create new instance of dompdf
        $dompdf->load_html($certContent); // Load the html
        $dompdf->render(); // Parse the html, convert to PDF
        $pdf_certContent = $dompdf->output(); // Put contents of pdf into variable for later

        $file_location = "./80gCert/" . $eightygcert_id . ".pdf";
        file_put_contents($file_location, $pdf_certContent);

        include_once('emailAcknowledgement.php'); // sends an email for the acknowledgement.

		print $action;
	} else {
		print "error";
	}

	include_once 'dbDisCon.php';


// Google sign-in details
// client ID - 369320507427-59khundtso4otj1p3u52a7mri0oc5k8f.apps.googleusercontent.com
// client secret - gOLGpBd_TJzD_9N-ilfIwrkK

?>
