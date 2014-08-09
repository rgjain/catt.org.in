<!DOCTYPE html>
<html>
	<head>
		<title>CATT :: Conservation Awareness Team Trust</title>
	</head>
	<link type="text/css" rel="stylesheet" href="assets/styles.css" />
	<body>
		<div id="bg-slider"></div>
		<?php
			$p = $_REQUEST['p'];

			include_once 'templates/header.php';

			if (!isset($p) || $p == null || empty($p)) {
				include_once 'templates/banner.php';
				include_once 'templates/vision.php';
				include_once 'templates/home.php';
			} else {
				include_once 'templates/' . $p . '.php';
			}
/*
			switch ($p) {
				case 'aboutus':
					include_once 'templates/aboutus.php';
					break;
				
				case 'team':
					include_once 'templates/team.php';
					break;
				
				case 'events':
					include_once 'templates/events.php';
					break;
				
				case 'gallery':
					include_once 'templates/gallery.php';
					break;
				
				case 'ourmentor':
					include_once 'templates/ourmentor.php';
					break;
				
				case 'members':
					include_once 'templates/members.php';
					break;
				
				case 'membership':
					include_once 'templates/membership.php';
					break;

				case 'membershipform':
					include_once 'templates/membershipform.php';
					break;
				
				case 'supporters':
					include_once 'templates/supporters.php';
					break;
				
				case 'contactus':
					include_once 'templates/contactus.php';
					break;
				
				case 'wildindia':
					include_once 'templates/wildindia.php';
					break;
				
				case 'focusarea':
					include_once 'templates/focusarea.php';
					break;
				
				case 'ourmentor':
					include_once 'templates/ourmentor.php';
					break;

				case 'upcomingevents':
					include_once 'templates/upcomingevents.php';
					break;

				default:
					include_once 'templates/banner.php';
					include_once 'templates/vision.php';
					include_once 'templates/home.php';
					break;
			}*/

			include_once 'templates/footer.php';
		?>
	</body>
	<script type="text/javascript" src="assets/jquery-1.8.1.min.js"></script>
	<script type="text/javascript" src="assets/flux.min.js"></script>
	<script type="text/javascript" src="assets/script.js"></script>
</html>