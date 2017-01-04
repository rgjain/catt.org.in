<?php
	include_once 'dbCon.php';

	$post = $_POST;
	$name = $post['name'];
	$emailid = $post['emailid'];
	$address = $post['address'];
	$amount = $post['amount'];
	$cause = $post['cause'];
	$date = date('Y-m-d', strtotime($post['date']));
	$transref = $post['transref'];

	$insert_query = "insert into contributions(name, email_address, address, amount, cause, date, transref) values('$name', '$emailid', '$address', $amount, '$cause', '$date', '$transref')";
	$res = mysql_query($insert_query) or die(mysql_error());

	if ($res) {
		print "true";
	} else {
		print "false";
	}

	include_once 'dbDisCon.php';


// Google sign-in details
// client ID - 369320507427-59khundtso4otj1p3u52a7mri0oc5k8f.apps.googleusercontent.com
// client secret - gOLGpBd_TJzD_9N-ilfIwrkK

?>
