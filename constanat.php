<!DOCTYPE html>
<html>
<head>
	<title>Constants</title>
</head>
<body>
	<?php
		$Jake = "WHAT ARE U DOING NOW?";
		//echo $Jake; 

		define("STUDENTS", "Good Morning Students. How are You", true);
		//echo STUDENTS;

		function goodpractise(){
			//echo STUDENTS;
			return STUDENTS;
		}
		//goodpractise();
		echo goodpractise();

		//define("cars", ["Alfa Romeo","BMW","Toyota"]); ONLY USES PHP 7.OO VERSION
		//echo cars[0];
	?>

</body>
</html>