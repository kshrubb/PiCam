<!DOCTYPE html>
<html>
	<header>
		<title>Pictures Stream</title>
	</header>
	<body>
		<?php
			$dirname = "pics/";
			$images = glob($dirname."*.jpg");
			foreach($images as $image) {
			echo '<img src="'.$image.'" height="360" width="540" /><br />';
			}
			
		?>
		<script>
			
			setInterval(myTimer, 10000);
			 function myTimer()
			 {
			 	location.reload(); 
			 }
			 
			)
		</script>
	</body>
</html>
