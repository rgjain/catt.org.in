<!DOCTYPE html>
<html>
	<head>
		<title>CATT :: Conservation Awareness Team Trust</title>
	</head>
	<link type="text/css" rel="stylesheet" href="assets/styles.css" />
	<link rel="stylesheet" type="text/css" href="assets/magnific-popup.css" media="screen" />
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
			
			include_once 'templates/footer.php';
		?>
	</body>
	<script type="text/javascript" src="assets/jquery-1.8.1.min.js"></script>
	<script type="text/javascript" src="assets/flux.min.js"></script>
	<script type="text/javascript" src="assets/script.js"></script>
	<script type="text/javascript" src="assets/jquery.magnific-popup.min.js" ></script>
</html>