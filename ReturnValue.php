<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Return Values of Expression</title>
		<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<p>
			<?php
				$ReturnValue = 2 == 3; 
				echo " The value for the expression (2 == 3) is " ;
				var_export($ReturnValue);
				echo "\r\n";
				
				$ReturnValue = "2" + "3";
				echo " The value for the expression ('2'" . "+ '3') is ";
				var_export($ReturnValue);
				echo "\r\n";	
				
				$ReturnValue = 2 >= 3; 
				echo " The value for the expression (2 >= 3) is ";
				var_export($ReturnValue);
				echo "\r\n";
				
				$ReturnValue = 2 <= 3; 
				echo " The value for the expression (2 <= 3) is ";
				var_export($ReturnValue);
				echo "\r\n";
				
				$ReturnValue = 2 + 3; 
				echo " The value for the expression (2 + 3) is ";
				var_export($ReturnValue);
				echo "\r\n";
				
				$ReturnValue = (2 >= 3) && (2 > 3); 
				echo " The value for the expression ((2 >= 3) && (2 > 3)) is ";
				var_export($ReturnValue);
				echo  "\r\n";
				
				$ReturnValue = (2 >= 3) || (2 > 3); 				
				echo " The value for the expression ((2 >= 3) || (2 > 3)) is ";
				var_export($ReturnValue); 
				echo "\r\n";
			?>
		</p>
	</body>
</html>