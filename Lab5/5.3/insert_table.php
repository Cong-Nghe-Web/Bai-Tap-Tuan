<html>
    <head>
        <title>Insert Results</title>
    </head>
    <body>
        <?php
            require_once './dbconnection.php';
            $name= $_POST["item"];
            $cost= $_POST["cost"];
            $weight= $_POST["weight"];
            $count= $_POST["number"];
            $connect= Dbconnection::getConnection();
            $mydb = "sale";
            $sql="INSERT INTO Products VALUES(NULL,'$name','$cost', '$weight','$count')"; 
            if( mysqli_query($connect,$sql)){
                echo "The Ouery is $sql </br>";
                echo 'Insert into '.$mydb.' was successful';
            }  
            Dbconnection::getConnection($connect);
            
        ?>
    </body>
</html>