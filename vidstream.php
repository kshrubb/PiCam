<?php
	session_start();
	 //checking for cookie
	 $keycheck = "enter";
	if($_SESSION["SecretKey"] != $keycheck) 
	{
		echo "<script type = 'text/javascript'>\n";
		echo "window.location = 'index.php';\n";
		echo "</script>";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Video Stream</title>
		<!--Bootstrap Setup-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
		<!--<script src="bootstrap/bootstrap.min.js"></script>-->
	</head>
	<body>
		<div class="container-fluid">
			<!--Navigation Tabs-->
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-tabs" style="text-align:center;">
						<li role="presentation" style="float:none; display:inline-block;" class="active"><a href="vidstream.php">Video Stream</a></li>
						<li role="presentation" style="float:none; display:inline-block;"><a href="picstream.php">Picture Stream</a></li>
					</ul>
				</div>
			</div>
			<!--Video-->
			<center>
				<br>
				<embed type="application/x-vlc-plugin" text="Waiting for stream..." pluginspage="http://www.videolan.org" target="rtsp://192.168.0.236:8554/" height="480" width="640"/>
			</center>
		</div>
	</body>
</html>
