<html>
    <head>
        <title>Create Table</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"; charset=utf-8" />
    </head>
    
    <body >

        <?php
        require_once './dbconnection.php';
        $server = "localhost:3306";
        $user = "root";
        $pass = "123456789";
        $mydb = "sale";
        $connect= Dbconnection::getConnection();
        $table_name="Products";
        $SQLcmd = "CREATE TABLE $table_name(ProductID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                                            Product_desc VARCHAR(50),
                                            Cost INT, 
                                            Weightn INT, 
                                            Numb INT)";
        if (mysqli_query( $connect, $SQLcmd)){
            print '<font size="4" color="blue"> Created Table';
            print "<i> $table_name </i> in database<i>$mydb</i><br></font>"; 
            print "<br>SQLcmd= $SQLcmd";
        } else {
            die ("Table Create Creation Failed SQLcmd= $SQLcmd");
        }    
        Dbconnection::closeConnection($connect);  
        ?>
        <p ></p>
    </body>
</html>
