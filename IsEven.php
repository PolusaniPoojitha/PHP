<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>IsEven</title>
		<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<p>
			<?php
				$num = array("3.14159", "CHECK", "2");
				
				$numCnt = count($num);
				
				for($i = 0; $i < $numCnt; $i++) 
				{
    				if(is_numeric($num[$i]))
    				{
    				    echo "\r\n This is a Number = " . $num[$i];
    				    
    				    $round = round($num[$i]);
    				    echo "\r\n The value after round() is " . $round;
    				    
    				    if($round % 2 == 0)
    				    {
    				        echo "\r\n The number is an Even Number.";
    				    }
    				    else
    				    {
    				        echo "\r\n The number is not an Even Number.";
    				    }
    				}
    				else
    				{
    				    echo "\r\n This is not a Number = " . $num[$i];
    				}
				}
			?>
		</p>
	</body>
</html>