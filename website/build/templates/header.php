		<div class="top-bar w1000 clearfix">
			<a class="links fb-bg" href="https://www.facebook.com/CATTConservationAwarenessTeamTrust" title="connect with us on facebook">
				<img src="assets/images/FBLogoblue29.png" alt="connect with us on facebook" title="connect with us on facebook" />
			</a>
			<a class="links twitter-bg" href="https://twitter.com/catt_org" title="connect with us on twitter">
				<img src="assets/images/TwitterLogo29.png" alt="connect with us on twitter" title="connect with us on twitter" />
			</a>
		</div>
		<div id="header" class="w1000 clearfix">
			<a id="logo" href="./" title="Conservation Awareness Team Trust"><img src="assets/images/catt-logo-150.png" alt="CATT"></a>
			<ul id="nav">
				<li>
					<a href="./?p=aboutus" <?php if ($p == "aboutus" || $p == "focusarea" || $p == "cattteam" || $p == "ourmentor") { echo 'class="active"';} ?> ><span>ABOUT US</span></a>
					<ul>
						<li><a href="./?p=focusarea" <?php if ($p == "focusarea") { echo 'class="active"';} ?> ><span>FOCUS AREA</span></a></li>
						<li><a href="./?p=cattteam" <?php if ($p == "cattteam") { echo 'class="active"';} ?> ><span>CATT TEAM</span></a></li>
						<li><a href="./?p=ourmentor" <?php if ($p == "ourmentor") { echo 'class="active"';} ?> ><span>OUR MENTOR</span></a></li>
					</ul>
				</li>
				<li>
					<a href="./?p=activities" <?php if ($p == "activities" || $p == "wildindia") { echo 'class="active"';} ?> ><span>ACTIVITIES</span></a>
					<ul>
						<li><a href="./?p=wildindia" <?php if ($p == "wildindia") { echo 'class="active"';} ?> ><span>PROJECTS</span></a></li>
					</ul>
				</li>
				<li><a href="./?p=gallery" <?php if ($p == "gallery") { echo 'class="active"';} ?> ><span>GALLERY</span></a></li>
				<li><a href="./?p=members" <?php if ($p == "members") { echo 'class="active"';} ?> ><span>MEMBERS</span></a></li>
				<li><a href="./?p=supporters" <?php if ($p == "supporters") { echo 'class="active"';} ?> ><span>SUPPORTERS</span></a></li>
				<li>
					<a href="./?p=membership" <?php if ($p == "membership" || $p == "cattmerchandize") { echo 'class="active"';} ?> ><span>JOIN THE ROAR</span></a>
					<ul>
						<li><a href="./?p=cattmerchandize" <?php if ($p == "cattmerchandize") { echo 'class="active"';} ?> ><span>CATT Merchandize</span></a></li>
					</ul>
				</li>
				<li><a href="./?p=contactus" <?php if ($p == "contactus") { echo 'class="active"';} ?> ><span>CONTACT US</span></a></li>
			</ul>
		</div>