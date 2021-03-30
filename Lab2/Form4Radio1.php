<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"; charset=utf-8" />
<title> Receiving Input</title>
</head>

<body>
	<font size="5"> Thank you: Got your input </font>
    <?php
    	$email= $_GET["email"];
		$contact= $_GET["contact"];
		print ("<br>Your email address is $email");
		print ("<br> Contact preference is $contact");
	?>
</body>
</html>