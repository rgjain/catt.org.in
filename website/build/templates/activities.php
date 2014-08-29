	<div id="activities" class="page w1000">
		<h1>CATT <small>voice of the jungle</small></h1>
		<div class="content">
			<?php
				$basedir = 'assets/images/gallery/';
			?>
			<div class="activity-item">
				<a class="more-less" href="javascript:void(0)">&nbsp;</a>
				<h2>Litter Clearing Drive</h2>

				<?php
					$thisActivityDir = "Litter Clearing Drive";
					$thisActivityDirFull = $basedir . $thisActivityDir;
					$thumbImagesDir = $basedir . $thisActivityDir . "/w160";
					$actualImagesDir = $basedir . $thisActivityDir . "/w800";
					$thisActivityImages = scandir($thumbImagesDir);
				?>

				<div>
					<p>The litter clearing drive is one of the many activities that is envisaged by CATT in helping to conserve wildlife. As of today, our forests and the area surrounding it are defaced by the litter and garbage left behind by the tourists and pilgrims. The amount of detritus that is strewn around, prove to be detrimental to the fragile ecosystem. Each acre of the forest land is covered by thousands if not millions of bits of plastic which could be effectively recycled. 
					</p>
					<div class="img"><img src="<?php echo $thisActivityDirFull . "/001.jpg"; ?>"></div>
					
					<p>The CATT members regularly organize litter clearing drives where our volunteers cover long stretches of forest land along roads clearing litter and lend a helping hand to the forest department to maintain the serenity in our pristine patches of forests. Our goal is to have litter free forests.</p>
					<p>In the past six months, CATT has rid several square kilometers of forest land around various ranges of Bandipur National Park and Talacauvery Wildlife Sanctuary, and what CATT has achieved is quite a feat. </p>
					<ul>
						<li>
							<p>70-80 kilograms of plastic and other non-biodegradable litter was collected from inside and the surrounding vicinity of the Bandipur Tiger Reserve in a project spanning over 4 days. It was during the annual festival at Gopalaswamy Betta range when a huge littering happens by the visiting pilgrims. This year over 3000 people had converged. After the festival, CATT along with another NGO named TPS and forest staffs sanitized the entire stretch by collecting and disposing of all unwanted and non-biodegradable wastes. </p>
							<div class="img"><img src="<?php echo $thisActivityDirFull . "/002.jpg"; ?>"></div>
						</li>
						<li>
							<p>Talacauvery temple is situated at the entrance of the Talacauvery Wildlife Sanctuary. This place gets littered very badly. Around 20% of the total was cleared by CATT volunteers along with the forest guards in an effort to rid the sanctuary of any biodegradable/non-biodegradable material. </p>
							<div class="img"><img src="<?php echo $thisActivityDirFull . "/003.jpg"; ?>"></div>
						</li>
						<li>
							<p>CATT volunteers along with few forest staffs walked around 7 kms to clear litters around the NH in the Bandipur Tiger Reserve. These litters are generally dropped by the visitors and tourists passing by the park. Around 13 bags of litters were collected.</p>
							<div class="img"><img src="<?php echo $thisActivityDirFull . "/004.jpg"; ?>"></div>
						</li>
						<li>
							<p>5 Bags of litter and several other no-biodegradables were collected from the Gopalaswamy Betta Range of the Bandipur National Park for disposal on a weekend. Again these are the dumps by pilgrims, tourists and other visitors.</p>
							<div class="img"><img src="<?php echo $thisActivityDirFull . "/005.jpg"; ?>"></div>
						</li>
					</ul>				
					<div class="activity-images">
						<h4>Event Gallery</h4>
						<div class="image-list">
						<?php
							for ($i=0; $i < count($thisActivityImages); $i++) {
								$imgFileName = $thisActivityImages[$i];
								if ($imgFileName == "." || $imgFileName == "..") {

								} else {
						?>
									<a href="<?php echo $actualImagesDir . "/" . $thisActivityImages[$i] ?> " rel="prettyPhoto[<?php echo $thisActivityDir ?>]">
										<img src="<?php echo $thumbImagesDir . "/" . $thisActivityImages[$i] ; ?> " />
									</a>
						<?php
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="activity-item">
				<a class="more-less" href="javascript:void(0)">&nbsp;</a>
				<h2>Medical Camp</h2>

				<?php
					$thisActivityDir = "Medical Camp";
					$thisActivityDirFull = $basedir . $thisActivityDir;
					$thumbImagesDir = $basedir . $thisActivityDir . "/w160";
					$actualImagesDir = $basedir . $thisActivityDir . "/w800";
					$thisActivityImages = scandir($thumbImagesDir);
				?>

				<div>
					<p>The forest guards and watchers are the guardians of the jungle who risk their lives every day to protect our paradise, our biodiversity, our wilderness and much more than that. The least we can do is - lend a helping hand.</p>
					<p>CATT as an NGO believes in supporting the front line staff &amp; their families who are the backbone of wildlife conservation in Karnataka and across the country. CATT in collaboration with Hosmat Hospital arranges Free Orthopedic Medical Camps to treat several orthopedic issues regarding the forest department staffs who undertake long patrols into the jungle along treacherous terrains amidst unpredictable weather. This is one of the ways to show our support to these brave hearts.</p>
					<p>As of now CATT has organized three medical camps at various Ranges of the Bandipur Tiger Reserve. These camps were attended by more than 300 people ranging from forest guards, watchers, their families and villagers from remote tribal colonies including contract &amp; regular employees of Forest Department who generally refrain from basic medical attention. </p>
					<div class="img">
						<img src="<?php echo $thisActivityDirFull . "/001.jpg"; ?>">
						<img src="<?php echo $thisActivityDirFull . "/002.jpg"; ?>">
					</div>
					<p>CATT vouches to organize many more such Medical Camps in future too.</p>
					<p>The diagnosed patients are:</p>
					<ul>
						<li>Given basic treatment.</li>
						<li>Serious cases are referred to hospitals.</li>
						<li>Advised on how to prevent them.</li>
						<li>Provided with free medicines.</li>
						<li>Taught basic exercises for muscle and bone strengthening.</li>
						<li>Followed up through the volunteers.</li>
					</ul>				
					<div class="activity-images">
						<h4>Event Gallery</h4>
						<div class="image-list">
						<?php
							for ($i=0; $i < count($thisActivityImages); $i++) {
								$imgFileName = $thisActivityImages[$i];
								if ($imgFileName == "." || $imgFileName == "..") {

								} else {
						?>
									<a href="<?php echo $actualImagesDir . "/" . $thisActivityImages[$i] ?> " rel="prettyPhoto[<?php echo $thisActivityDir ?>]">
										<img src="<?php echo $thumbImagesDir . "/" . $thisActivityImages[$i] ; ?> " />
									</a>
						<?php
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="activity-item">
				<a class="more-less" href="javascript:void(0)">&nbsp;</a>
				<h2>Conservation Awareness Campaigns</h2>

				<?php
					$thisActivityDir = "Conservation Awareness Campaign";
					$thisActivityDirFull = $basedir . $thisActivityDir;
					$thumbImagesDir = $basedir . $thisActivityDir . "/w160";
					$actualImagesDir = $basedir . $thisActivityDir . "/w800";
					$thisActivityImages = scandir($thumbImagesDir);
				?>

				<div>
					<p>We at CATT, follow community inclusive strategies where the people spearhead conservation and play an important role in supporting the forest department to bring about preservation. This is achieved by periodic interactions with villagers and other circles which are arranged by our team to educate people on the importance of people led movements while allowing them to cherish the biodiversity. CATT also organizes awareness drives in schools (in cities as well as villages in the forest), corporate circles and our local society.</p>
					<p>In collaboration with WCF (one of leading NGOs in Bandipur national) CATT carried out a Forest Fire Awareness campaign, during the summer of 2014. This campaign was carried out at the schools and colleges in the villages situated at the edges of the Bandipur Tiger Reserve. We visited four schools and two colleges distributing the pamphlets and spreading the words of forest fire, its negative impacts and how to stop it.</p>
					<div class="img">
						<img src="<?php echo $thisActivityDirFull . "/001.jpg"; ?>">
						<img src="<?php echo $thisActivityDirFull . "/002.jpg"; ?>">
					</div>
					<p>We were also present at the street play conducted by WCF in one of the villages of Bandipur Tiger Reserve. The intent of the street play was the role that each and every villager plays in preserving our heritage forests. They were educated about forest fires - on how to prevent one and how to mitigate if one occurred. We believe that such plays are more effective in reaching out to the masses while trying to educate them on human-animal conflicts and how we can reduce them collectively. </p>
					<div class="img">
						<img src="<?php echo $thisActivityDirFull . "/003.jpg"; ?>">
						<img src="<?php echo $thisActivityDirFull . "/004.jpg"; ?>">
					</div>
					<p>CATT also believes in the importance of imparting conservation ideas among the youth for which, it includes programs and drives in Schools to ignite the passion among young minds and encourage them while making them realize the value of our forests and the role they could play in protecting it. Recently, one such drive was held at JSS Public School where, the students dealt with issues and concerns through an interactive session with the CATT members.</p>
					<div class="img">
						<img src="<?php echo $thisActivityDirFull . "/005.jpg"; ?>">
						<img src="<?php echo $thisActivityDirFull . "/006.jpg"; ?>">
					</div>
					<p>The Vibha Dream Run, witnessed CATT members pushing through various needs of the forests among the corporate circles and the great deal of help it could get from them. The activity involved, volunteers reaching out to a number of people to harness the support required and to impart the same values which fuels us when it comes to conservation.</p>
					<div class="activity-images">
						<h4>Event Gallery</h4>
						<div class="image-list">
						<?php
							for ($i=0; $i < count($thisActivityImages); $i++) {
								$imgFileName = $thisActivityImages[$i];
								if ($imgFileName == "." || $imgFileName == "..") {

								} else {
						?>
									<a href="<?php echo $actualImagesDir . "/" . $thisActivityImages[$i] ?> " rel="prettyPhoto[<?php echo $thisActivityDir ?>]">
										<img src="<?php echo $thumbImagesDir . "/" . $thisActivityImages[$i] ; ?> " />
									</a>
						<?php
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="activity-item">
				<a class="more-less" href="javascript:void(0)">&nbsp;</a>
				<h2>Crowd Management</h2>

				<?php
					$thisActivityDir = "Crowd Management";
					$thisActivityDirFull = $basedir . $thisActivityDir;
					$thumbImagesDir = $basedir . $thisActivityDir . "/w160";
					$actualImagesDir = $basedir . $thisActivityDir . "/w800";
					$thisActivityImages = scandir($thumbImagesDir);
				?>

				<div>
					<p>The annual rath yatra of the Venugopalaswamy temple (located atop the Gopalaswamy Betta) witnesses 25 - 30 thousand people thronging the temple located in Bandipur. As this festival occurs during peak summer time, there are high possibilities of forest fires resulting from human activities. To prevent such untoward incidents and to reduce disturbance in the core area, the members of CATT were stationed at strategic locations to prevent people from entering the reserved forests and to manage the crowd. </p>
					<p>Quick response from volunteers and KFD curbed movements of devotees outside the temple area and into the protected reserve. The efforts of KFD, KSP and several other NGOs resulted in no untoward incidents in Gopalaswamy Betta and in the protected forests.</p>
					<p>During the festival, the pilgrims bathed, brushed, washed their clothes and literally made a mess of a very crucial water-hole deep inside the park and the area surrounding it.</p>
					<div class="img"><img src="<?php echo $thisActivityDirFull . "/001.jpg"; ?>"></div>
					<p>After the festival, CATT sanitized the entire stretch by collecting and disposing of all unwanted and non-biodegradable wastes. </p>
					<div class="img"><img src="<?php echo $thisActivityDirFull . "/002.jpg"; ?>"></div>
					<p>There were 2 major forest fires during this period where CATT volunteers helped the forest department by doing fire-line monitoring and acting as fire-watchers to look out for fires.</p>
					<div class="img"><img src="<?php echo $thisActivityDirFull . "/003.jpg"; ?>"></div>
					<p>Dead fish, after it got caught in a gunny sack left behind by pilgrims at a water-hole inside the forest, during the religious festival. This was discovered when CATT- Volunteers were clearing the water-hole of all such litter.</p>
					<div class="img"><img src="<?php echo $thisActivityDirFull . "/004.jpg"; ?>"></div>
					<div class="activity-images">
						<h4>Event Gallery</h4>
						<div class="image-list">
						<?php
							for ($i=0; $i < count($thisActivityImages); $i++) {
								$imgFileName = $thisActivityImages[$i];
								if ($imgFileName == "." || $imgFileName == "..") {

								} else {
						?>
									<a href="<?php echo $actualImagesDir . "/" . $thisActivityImages[$i] ?> " rel="prettyPhoto[<?php echo $thisActivityDir ?>]">
										<img src="<?php echo $thumbImagesDir . "/" . $thisActivityImages[$i] ; ?> " />
									</a>
						<?php
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="activity-item">
				<a class="more-less" href="javascript:void(0)">&nbsp;</a>
				<h2>Forest Fire Prevention Program</h2>

				<?php
					$thisActivityDir = "Forest Fire Prevention Program";
					$thisActivityDirFull = $basedir . $thisActivityDir;
					$thumbImagesDir = $basedir . $thisActivityDir . "/w160";
					$actualImagesDir = $basedir . $thisActivityDir . "/w800";
					$thisActivityImages = scandir($thumbImagesDir);
				?>

				<div>
					<p>In India, we have remaining 78.29 million hectares of forest land covering over 20% of the total land as per The India State of Forest Report 2011 and nearly 800 sq. km less than the 78.37 million hectares published in the 2009 report. As per FSI the forest cover is reducing at an alarming rate. Forest fire is one of the causes.</p>
					<p>The myth behind forest fire is that, it occurs naturally by two trees getting rubbed heavily due to storm. But the fact is, forest fires occur during the peak summer (not in monsoon) and it occurs only at the edges of the forests where there is large number of human settlements, villages or small hamlets are situated. The villagers (at the forest edges) often get inside the animal territories for collecting firewood or any other forest produce and cattle grazing. Animals get disturbed severely and they attack human being or their cattle. Agricultural land at the forest edges attracts wild animals. It results in loss of crop. In retaliation, the agitated villagers set the forest in fire. It has been proved that these forest fires are not natural and merely human driven.</p>
					<p>The wildfire which had started on 13/03/2014, in Bandipur National Park, turned over 1000 acres of these beautiful forests into ashes. The type of fire which had engulfed these forests was "crown" fire which spread from tree-top to tree-tops. In spite of our best efforts, CATT Team could only reach the scene of this tragedy on the next day, but we continued to provide support to Forest Department to put out the fire.</p>
					<p>We have not heard of or seen any large-animal deaths due to the Inferno.</p>
					<p>There were 2 major forest fires during this period where CATT volunteers helped the forest department by doing fire-line monitoring and acting as fire-watchers to look out for fires.</p>
					<div class="activity-images">
						<h4>Event Gallery</h4>
						<div class="image-list">
						<?php
							for ($i=0; $i < count($thisActivityImages); $i++) {
								$imgFileName = $thisActivityImages[$i];
								if ($imgFileName == "." || $imgFileName == "..") {

								} else {
						?>
									<a href="<?php echo $actualImagesDir . "/" . $thisActivityImages[$i] ?> " rel="prettyPhoto[<?php echo $thisActivityDir ?>]">
										<img src="<?php echo $thumbImagesDir . "/" . $thisActivityImages[$i] ; ?> " />
									</a>
						<?php
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
			<div class="activity-item">
				<a class="more-less" href="javascript:void(0)">&nbsp;</a>
				<h2>Foot Patrolling</h2>

				<?php
					$thisActivityDir = "Foot Patrolling";
					$thisActivityDirFull = $basedir . $thisActivityDir;
					$thumbImagesDir = $basedir . $thisActivityDir . "/w160";
					$actualImagesDir = $basedir . $thisActivityDir . "/w800";
					$thisActivityImages = scandir($thumbImagesDir);
				?>

				<div>
					<p>The assiduous work of the forest department has made the forest reserves in Karnataka to be one of the best protected reserves in the country and the home to one of the largest population of tigers. This is achieved by the hard work. The trained forest guards and watchers patrol the rough terrain of dense forests by foot to remove snares, confiscate illegal timber, dismantle poachers’ camps, halt illegal land encroachment and rescue captured wildlife. They also patrol various beats by jeep to guard the forest day and night.</p>
					<p>Foot patrolling is a basic and important activity that is carried out regularly by the forest guards and watchers who often find it difficult to cover the entire range in terms of certain aspects. CATT joins the team of forest staff to carry out menial foot patrols in the jungle.</p>
					<p>CATT assisted the forest department of Bandipur National Park in foot patrolling for tracking an elephant which had strayed out of Bhadra and required immediate action to prevent any animal-human conflict. Unfortunately, the radio collar being used malfunctioned and the forest department had to resort to manual searching. CATT members along with two forest guards patrolled for almost 15 kilometers in search for the elephant.</p>
					<div class="activity-images">
						<h4>Event Gallery</h4>
						<div class="image-list">
						<?php
							for ($i=0; $i < count($thisActivityImages); $i++) {
								$imgFileName = $thisActivityImages[$i];
								if ($imgFileName == "." || $imgFileName == "..") {

								} else {
						?>
									<a href="<?php echo $actualImagesDir . "/" . $thisActivityImages[$i] ?> " rel="prettyPhoto[<?php echo $thisActivityDir ?>]">
										<img src="<?php echo $thumbImagesDir . "/" . $thisActivityImages[$i] ; ?> " />
									</a>
						<?php
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
