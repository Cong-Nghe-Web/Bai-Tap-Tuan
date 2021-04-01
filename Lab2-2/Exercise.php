<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"; charset=utf-8" />
<title>Date Time Validation</title>
</head>

<body>
	<font size="5"> Enter your name and select date and time for the appointment</font><br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
    <table>
    	<tr>
    		<td>Your name: </td>
            <td colspan="3"><input type="text" size="50" maxlength="20" name="yourName"> </td>
    	</tr>
        <tr>
    		<td>Date: </td>    
            <td>
            	<select name="date">
					<?php
                        for ($i1=1; $i1<=31; $i1++){
                            print ("<option>$i1</option>");
                            }
                    ?>
    			</select>
            </td>
         	<td>
                <select name="month">
                    <?php
                        for ($i2=1; $i2<=12; $i2++){
                            print ("<option>$i2</option>");
                            }
                    ?>
                </select>
             </td>
             <td>
                <select name="year">
                    <?php
                        for ($i3=1900; $i3<=2021; $i3++){
                            print ("<option>$i3</option>");
                            }
                    ?>
                </select>
        	</td>
         <tr>
         	<td>Time: </td>
            <td>
            	<select name="h">
					<?php
                        for ($t1=1; $t1<=24; $t1++){
                            print ("<option> $t1</option>");
                        }			
                    ?>
     			</select>
            </td>
            <td>
                <select name="i">
                <?php
                    for ($t2=1; $t2<=60; $t2++){
                        print ("<option> $t2</option>");
                    }			
                ?>
                </select>
            </td>
            <td>
                <select name="s">
                <?php
                    for ($t3=1; $t3<=60; $t3++){
                        print ("<option> $t3</option>");
                    }			
                ?>
                </select>
             </td>
       		<tr> 
      		<td align="right"><input type="submit" value="Submit"></td>
      		<td align="left"><input type="reset" value="Reset"></td>
      	</tr>
    </table>
      <?php
	  	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	  		$yourName= $_POST["yourName"];
			$date= $_POST["date"];
			$month= $_POST["month"];
			$year= $_POST["year"];
			$h= $_POST["h"];
			$i=$_POST["i"];
			$s= $_POST["s"];
      		echo ("Hi $yourName! <br>");
			echo "You have choose tho have an appointment on $h:$i:$s, $date/$month/$year <br>";
			echo "<br>";
			echo ("More information<br>");
			echo "<br>";
			if($h >12) 
                        echo ("In 12 hours, the time and date is $h-12:$i:$s PM, $date/$month/$year<br>");
                    else 
                        echo ("In 12 hours, the time and date is $h:$i:$s AM, $date/$month/$year<br>");
                    	echo ("<br>");
                        $check = NULL;
                        if($year%100==0) {
                            if($year%400==0)
                                $check=TRUE;
                            else
                                $check=FALSE;
                        } else if($year%4==0)
                            $check=TRUE;
                        else
                            $check=FALSE;
                        
                        $thangco31ngay = array(1,3,5,7,8,10,12);
                        $thangco30ngay = array(4,6,9,11);
                        if (in_array($month, $thangco31ngay))
                            echo("This month has 31 days!<br>");
                        elseif (in_array($month, $thangco30ngay))
                            echo("This month has 30 days!<br>");
                        elseif ($check==TRUE)
                            echo("This month has 29 days!<br>");
                        else
                            echo ("This month has 28 days!<br>");
		}
	  ?>
      </form>
</body>
</html>