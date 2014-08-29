	<div id="gallery" class="page w1000">
		<h1>GALLERY</h1>
		<div class="content">
			<?php
				$basedir = 'assets/images/gallery/';
				$galleryDir = scandir($basedir);

				for ($i=0; $i < count($galleryDir); $i++) {
					$dirName = $galleryDir[$i];
					$fullPath = $basedir . $dirName;
					$albumImagePath = $fullPath . "/w160/" . "002.jpg";

					if (!($dirName == "." || $dirName == "..")) {
					?>
						<div class="album">
							<a class="album-link" href="./?p=gallerysub&sp=<?php echo $dirName; ?>">
								<div class="album-image">
									<img src="<?php echo $albumImagePath; ?>" />
								</div>
								<strong><?php echo $dirName; ?></strong>
							</a>
						</div>
					<?php
					}
				}
			?>
		</div>
	</div>
