	<div id="contactus" class="page w1000">
		<h1>Admin</h1>
		<div class="content">
			<div class="g-signin2" data-onsuccess="onSignIn"></div>
		</div>		
	</div>
	
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<script type="text/javascript">
		function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
			console.log('Name: ' + profile.getName());
			console.log('Image URL: ' + profile.getImageUrl());
			console.log('Email: ' + profile.getEmail());
		}		
	</script>