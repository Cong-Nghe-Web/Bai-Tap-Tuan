<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"; charset=utf-8" />
<title>Hobby</title>
</head>
    <body>
        <?php
            $name = $_POST["name"];
            $gender = $_POST["gender"];
            $uni = $_POST["uni"];
            $clas = $_POST["clas"];
            $hobbies = $_POST["hobby"];
            echo "<br>Hello, $name<br>";
            echo "You are a $gender. You are studying at $clas, $uni <br>";
            $hobbies = $_POST["hobby"];
            echo "Your hobby is <br>";
            $index = 0;
			if (count($hobbies)!= 0){
				while($index < count($hobbies)){
					echo $index+1;
					echo ". $hobbies[$index] <br>";
					$index++;
				}
			}
        ?>
    </form>
    </body>
</html>
