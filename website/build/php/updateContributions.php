<?php
	include_once 'dbCon.php';

	$post = $_POST;
	$record_id = $post['record_id'];
	$action = $post['action'];

	echo $update_query = "update contributions set status = '$action' where id=$record_id";
	$res = mysql_query($update_query) or die(mysql_error());

	if ($res) {
		print $action;
	} else {
		print "error";
	}

	include_once 'dbDisCon.php';


// Google sign-in details
// client ID - 369320507427-59khundtso4otj1p3u52a7mri0oc5k8f.apps.googleusercontent.com
// client secret - gOLGpBd_TJzD_9N-ilfIwrkK

?>