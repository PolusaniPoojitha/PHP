<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Rounded Values</title>
		<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<p>
			<?php
				$i = 3.14159;
				
				$round = round($i, 3);
				echo "The value after round() is: " . $round;
				
				$ceil = ceil($i);
				echo "\r\n The value after ceil() is: " . $ceil;
				
				$floor = floor($i);
				echo "\r\n The value after floor() is: " . $floor;
			?>
		</p>
	</body>
</html>