	<div id="gallerysub" class="page w1000">
		<h1>GALLERY</h1>
		<div class="content">
			<?php
				$sp = $_GET['sp'];

				$basedir = 'assets/images/gallery/';
				$thisActivityDirFull = $basedir . $sp;
				$thumbImagesDir = $basedir . $sp . "/w160";
				$actualImagesDir = $basedir . $sp . "/w800";
				$thisActivityImages = scandir($thumbImagesDir);
			?>
			<h2><?php echo $sp; ?></h2>
			<div class="activity-images image-list">
			<?php
				for ($i=0; $i < count($thisActivityImages); $i++) {
					$imgFileName = $thisActivityImages[$i];
					if (!($imgFileName == "." || $imgFileName == "..")) {
					?>
						<a href="<?php echo $actualImagesDir . "/" . $thisActivityImages[$i] ?> " >
							<img src="<?php echo $thumbImagesDir . "/" . $thisActivityImages[$i] ; ?> " />
						</a>
					<?php
					}
				}
			?>
			</div>
		</div>
	</div>
