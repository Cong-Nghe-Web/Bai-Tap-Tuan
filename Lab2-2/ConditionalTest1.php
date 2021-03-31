<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"; charset=utf-8" />
<title>ConditionalTest</title>
</head>

<body>
	<?php
    	$first= $_GET["firstName"];
		$middle=$_GET["middleName"];
		$last= $_GET["lastName"];
		print ("Hi $first! Your full name is $last $middle $first. <br></br>");
		if ($first == $last){
			print ("$first and $last are equal");	
		}
		if ($first < $last){
			print ("$first is less than $last");	
		}
		if ($first > $last){
			print ("$first is greater than $last");	
		}
		print("<br></br>");
		
		$grade1= $_GET["grade1"];
		$grade2= $_GET["grade2"];
		$final= (2* $grade1 + 3 *$grade2) / 5;
		if ($final > 89){
			printf ("Your final grade is $final. You got an A. Congratulation!", $final);
			$rate= "A";
		} elseif ($final > 79){
			printf ("Your final grade is $final. You got a B", $final);
			$rate= "B";
		} elseif ($final > 69){
			printf ("Your final grade is $final. You got an C", $final);
			$rate= "C";
		} elseif ($final > 59){
			printf ("Your final grade is $final. You got an D", $final);
			$rate= "D";
		} elseif ($final >= 0){
			printf ("Your final grade is $final. You got an F", $final);
			$rate= "F";
		} else {
			print ("Illegal grade les than 0. Final grade= $final");	
		}
		
		print("<br></br>");
		switch ($rate){
			case "A": print("Excellent!"); break;
			case "B": print("Good!"); break;
			case "C": print("Not bad!"); break;
			case "D": print("Normal!"); break;
			case "D":
			case "F": print("You have to try again!"); break;	
			default: print ("Illegal grade!");
		}
	?>
</body>
</html>