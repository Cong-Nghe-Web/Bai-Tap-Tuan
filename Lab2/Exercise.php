<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"; charset=utf-8" />
<title>Hobby</title>
</head>
    <body>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
            <label for="fname">Name: </label> <br>
            <input type="text" id="fname" name="name">
            <br>
            
            <label for="fgender">Gender: </label> <br>
            <input type="radio" name="gender" value="Male">Male <br>
            <input type="radio" name="gender" value="Female">Female <br>
            
            
            <label for="funi">University: </label> <br>
            <input type="text" id="funi" name="uni"> <br>
            
            <label for="fclass">Class: </label> <br>
            <input type="text" id="fclass" name="clas"> <br>
            
            <label>Hobbies: </label> <br>
            <input type="checkbox" name="hobby[]" value="Listening to music">Listen to music <br>
            <input type="checkbox" name="hobby[]" value="Reading books"> Reading books<br>
            <input type="checkbox" name="hobby[]" value="Playing games"> Playing games<br>
            <input type="checkbox" name="hobby[]" value="Playing sports"> Playing sports<br>
            <input type="checkbox" name="hobby[]" value="Cooking"> Cooking<br>
           	<input type="checkbox" name="hobby[]" value="Traveling"> Traveling<br> 
            
          <input type="submit" value="Submit"> 
        
        <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
		}
        ?>
    </form>
    </body>
</html>
