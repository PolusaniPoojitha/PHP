<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Days Array</title>
		<meta http-equiv="content-type"     content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<p>
			<?php
				
				$Days = array ("Sunday" , "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" );
				$DaysCnt = count($Days);
				echo "The days of a week in English are: ";
				for($i = 0; $i < $DaysCnt; $i++)
				{
					echo $Days[$i] . "  ";
				}
				
				$Days = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
				$FrenchDaysCnt = count($Days);
				echo "\r \n The days of a week in French are: ";
				for($i = 0; $i < $FrenchDaysCnt; $i++)
				{
					echo $Days[$i] . "  ";
				}
			?>
		</p>
	</body>
</html>