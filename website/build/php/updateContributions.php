<?php
	include_once 'dbCon.php';
	require_once 'dompdf/autoload.inc.php';
	// require_once 'vendor/dompdf/dompdf/autoload.inc.php';
	use Dompdf\Dompdf;
	use Dompdf\Options;

	$post = $_POST;
	$record_id = $post['record_id'];
	$action = $post['action'];
	$eightygcert_id = ($action == "approved") ? 'CATT' . str_pad($record_id, 6, "0", STR_PAD_LEFT) : "";

	$update_query = "update contributions set status = '$action', 80gcert_number = '$eightygcert_id' where id = $record_id";
	$res = mysql_query($update_query) or die(mysql_error());

	if ($res) {
		if ($action == 'approved') {
        // get the contribution details
	        $getQuery = "select name, email_address, address, amount, ci.cause_name as cause, c.id, timestamp, date, status, transref, 80gcert_number, payment_mode from contributions c, cause_info ci where c.id = $record_id and c.cause = ci.cause_val";
	        $getres = mysql_query($getQuery) or die(mysql_error());

	        list ($name, $email_address, $address, $amount, $cause, $id, $timestamp, $date, $status, $transref, $eightygcert_id, $payment_mode) = mysql_fetch_row($getres);

			$amount_in_words = amountInWords($amount);

	        ob_start();
	        include_once("contributionEmail.php");
	        $emailContent = ob_get_contents();
	        ob_end_clean();


	        ob_start();
	        include_once("80gcertificate.php");
	        $certContent = ob_get_contents();
	        ob_end_clean();

			$options = new Options();
			$options->set('isRemoteEnabled', TRUE);
			$dompdf = new DOMPDF($options); // Create new instance of dompdf

	        $dompdf->load_html($certContent); // Load the html
	        $dompdf->render(); // Parse the html, convert to PDF
	        $pdf_certContent = $dompdf->output(); // Put contents of pdf into variable for later

	        $file_location = "../assets/80gCert/" . $eightygcert_id . ".pdf";
	        file_put_contents($file_location, $pdf_certContent);

	        include_once('email80gcertificate.php'); // sends an email for the acknowledgement.

			// print $action;
		} else {
			// print $action;
		}
		print "success";
	} else {
		print "error";
	}

	include_once 'dbDisCon.php';


// Google sign-in details
// client ID - 369320507427-59khundtso4otj1p3u52a7mri0oc5k8f.apps.googleusercontent.com
// client secret - gOLGpBd_TJzD_9N-ilfIwrkK


	/**
	* Created by PhpStorm.
	* User: sakthikarthi
	* Date: 9/22/14
	* Time: 11:26 AM
	* Converting Currency Numbers to words currency format
	*/
	function amountInWords($number) {
		// $number   = 190908100.25;
		$no       = round($number);
		$point    = round($number - $no, 2) * 100;
		$hundred  = null;
		$digits_1 = strlen($no);
		$i        = 0;
		$str      = array();
		$words    = array(
			'0' => '',
			'1' => 'one',
			'2' => 'two',
			'3' => 'three',
			'4' => 'four',
			'5' => 'five',
			'6' => 'six',
			'7' => 'seven',
			'8' => 'eight',
			'9' => 'nine',
			'10' => 'ten',
			'11' => 'eleven',
			'12' => 'twelve',
			'13' => 'thirteen',
			'14' => 'fourteen',
			'15' => 'fifteen',
			'16' => 'sixteen',
			'17' => 'seventeen',
			'18' => 'eighteen',
			'19' => 'nineteen',
			'20' => 'twenty',
			'30' => 'thirty',
			'40' => 'forty',
			'50' => 'fifty',
			'60' => 'sixty',
			'70' => 'seventy',
			'80' => 'eighty',
			'90' => 'ninety'
		);
		$digits   = array(
			'',
			'hundred',
			'thousand',
			'lakh',
			'crore'
		);
		while ($i < $digits_1) {
			$divider = ($i == 2) ? 10 : 100;
			$number  = floor($no % $divider);
			$no      = floor($no / $divider);
			$i += ($divider == 10) ? 1 : 2;
			if ($number) {
				$plural  = (($counter = count($str)) && $number > 9) ? 's' : null;
				$hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
				$str[]   = ($number < 21) ? $words[$number] . " " . $digits[$counter] . $plural . " " . $hundred : $words[floor($number / 10) * 10] . " " . $words[$number % 10] . " " . $digits[$counter] . $plural . " " . $hundred;
			} else
			$str[] = null;
		}
		$str    = array_reverse($str);
		$result = implode('', $str);
		// $points = ($point) ? "." . $words[$point / 10] . " " . $words[$point = $point % 10] : '';
		return $result;
	}
?>
