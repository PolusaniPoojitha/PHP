<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Interest Array</title>
		<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<p>
			<?php
				$InterestRate1 = .0725;
				$InterestRate2 = .0750;
				$InterestRate3 = .0775;
				$InterestRate4 = .0800;
				$InterestRate5 = .0825;
				$InterestRate6 = .0850;
				$InterestRate7 = .0875;
				
				$RatesArray = array($InterestRate1, $InterestRate2, $InterestRate3, $InterestRate4, $InterestRate5, $InterestRate6, $InterestRate7 );
				
				$ArrayCnt = count($RatesArray); 
				
				for($i = 0; $i < $ArrayCnt; $i++)
				{
				    $j = $i + 1;
					echo "The Interestrate" . $j . " is " . $RatesArray[$i] . ". \r\n";
				}
			?>
		</p>
	</body>
</html>