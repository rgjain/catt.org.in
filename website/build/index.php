<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="ROBOTS" content="INDEX,FOLLOW" />
		<link rel="canonical" href="http://www.catt.org.in" />
		<meta property="og:site_name" content="CATT :: Conservation Awareness Team Trust" />
		<meta property="og:type" content="website "/>
		<meta property="og:locale" content="en_US" />
		<meta property="og:url" content="http://catt.org.in/"/>
		<meta property="og:image" content="assets/images/catt-logo-150.png" />
		<meta property="og:title" content="CATT :: Conservation Awareness Team Trust" />
		<meta name="msapplication-starturl" content="http://catt.org.in/"/>
		<meta itemprop="name" content="CATT :: Conservation Awareness Team Trust" />
		<meta name="keywords" content="Wildlife, NGO, CATT, Ecology, Environment, Tiger, ELephant, Leopard, Deer, Sambar, Conservation, Bandipur, Human Animal conflict, Mysore region, Nagarhole, BRT, MM Hills, CAT, Poaching, Wildlife Trafficking, Medical camp">
		<meta name="description" content="CATT is a group of believers, who believes in the greater role the society as a whole and the community as one can play to bring about a much needed difference in this broken and often distributed populace of ours for the greater good of our nation's majestic forests. It all started off with a small group of professionals coming together to share their common love for the wild which led to the inception of the Conservation Awareness Team Trust (CATT) as a not for profit organization.">
		<meta property="og:title" content="CATT :: Conservation Awareness Team Trust" />
		<meta property="og:description" content="CATT :: Conservation Awareness Team Trust" />
		<meta itemprop="description" content="CATT :: Conservation Awareness Team Trust" />
		<meta itemprop="keywords" content="Wildlife, NGO, CATT, Ecology, Environment, Tiger, ELephant, Leopard, Deer, Sambar, Conservation, Bandipur, Human Animal conflict, Mysore region, Nagarhole, BRT, MM Hills, CAT, Poaching, Wildlife Trafficking, Medical camp" />

		
		<meta itemprop="image" content="assets/images/catt-logo-150.png" />
		<meta itemprop="publisher" content="CATT :: Conservation Awareness Team Trust" />
		<meta itemprop="url" content="http://catt.org.in/" />
		<meta itemprop="editor" content="CATT :: Conservation Awareness Team Trust" />
		<meta itemprop="headline" content="Conservation Awareness Team Trust" />
		<meta itemprop="inLanguage" content="English" />
		<meta itemprop="articleSection" content="Conservation Awareness" />
		<meta itemprop="sourceOrganization" content="CATT :: Conservation Awareness Team Trust" />
		<meta name="Designer" content="http://catt.org.in/" />
		<meta name="Revisit-After" content="1" />
		<meta name="Rating" content="General" />
		<meta name="audience" content="all" />
		<meta name="Author" content="http://catt.org.in/" />
		<meta name="Language" content="English" />

		<meta name="category" content="Wildlife, NGO, CATT, Ecology, Environment, Tiger, ELephant, Leopard, Deer, Sambar, Conservation, Bandipur, Human Animal conflict, Mysore region, Nagarhole, BRT, MM Hills, CAT, Poaching, Wildlife Trafficking, Medical camp" />
		<meta name="classification" content="Wildlife, NGO, CATT, Ecology, Environment, Tiger, ELephant, Leopard, Deer, Sambar, Conservation, Bandipur, Human Animal conflict, Mysore region, Nagarhole, BRT, MM Hills, CAT, Poaching, Wildlife Trafficking, Medical camp" />
		<meta name="expires" content="never" />
		<meta name="owner" content="CATT :: Conservation Awareness Team Trust" />
		<meta name="page-topic" content="Wildlife, NGO, CATT, Ecology, Environment, Tiger, ELephant, Leopard, Deer, Sambar, Conservation, Bandipur, Human Animal conflict, Mysore region, Nagarhole, BRT, MM Hills, CAT, Poaching, Wildlife Trafficking, Medical camp" />
		<meta name="resource-type" content="Wildlife, NGO, CATT, Ecology, Environment, Tiger, ELephant, Leopard, Deer, Sambar, Conservation, Bandipur, Human Animal conflict, Mysore region, Nagarhole, BRT, MM Hills, CAT, Poaching, Wildlife Trafficking, Medical camp" />
		<meta name="subject" content="Wildlife, NGO, CATT, Ecology, Environment, Tiger, ELephant, Leopard, Deer, Sambar, Conservation, Bandipur, Human Animal conflict, Mysore region, Nagarhole, BRT, MM Hills, CAT, Poaching, Wildlife Trafficking, Medical camp" />
		<meta name="DC.title" content="CATT :: Conservation Awareness Team Trust" />
		<meta name="geo.region" content="IN-KA" />
		<meta name="geo.placename" content="Karnataka, India" />
		<meta name="geo.position" content="" />
		<meta name="ICBM" content="" />

		<meta name="author" content="http://catt.org.in/">
		<meta name="copyright" content="&copy; 2014 - CATT :: Conservation Awareness Team Trust">
		<meta name="google-signin-client_id" content="369320507427-59khundtso4otj1p3u52a7mri0oc5k8f.apps.googleusercontent.com">
						
		<title>CATT :: Conservation Awareness Team Trust</title>
		<link type="text/css" rel="stylesheet" href="assets/styles.css" />
		<link rel="stylesheet" type="text/css" href="assets/magnific-popup.css" media="screen" />
	</head>
	<body>
		<div id="bg-slider"></div>
		<?php
			$p = $_REQUEST['p'];

			include_once 'templates/header.php';

			if (!isset($p) || $p == null || empty($p)) {
				include_once 'templates/banner.php';
				include_once 'templates/vision.php';
				include_once 'templates/highlights_blogs.php';
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
	<script type="text/javascript" src="assets/jquery.validate.js" ></script>
	<script type="text/javascript" src="assets/additional-methods.js" ></script>
</html>