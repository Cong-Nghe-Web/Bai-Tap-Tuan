<html>
    <head>
        <title>Table Output</title>
    </head>
    <body>
        <form action="sale.php" method="POST">
            <table>
                <tr>
                    <td>Hammer<input type="radio" name="contact" value="Hammer"></td>
                    <td>Screw Driver<input type="radio" name="contact" value="Screw Driver"></td>
                    <td>Wrench<input type="radio" name="contact" value="Wrench"></td>
                </tr>
                <tr>
                    <td rowpan='2'><input type="submit" value="Click To Submit"></td>
                    <td><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
        <table border=1 cellspacing=1 cellpading=1>
            <tr>
                <td>Number</td>
                <td>Products</td>
                <td>Cost</td>
                <td>Weight</td>
                <td>Count</td>
            </tr>
            <?php 
                require_once './dbconnection.php';
                $connect= Dbconnection::getConnection();
                $sql="Select * from Products";
                echo "The Ouery is $sql";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result)>0){
                    while ($row = mysqli_fetch_object($result)){
                        echo '<tr>';
                        echo "<td> $row->ProductID </td>";
                        echo "<td> $row->Product_desc</td>";
                        echo "<td> $row->Cost</td>";
                        echo "<td> $row->Weightn</td>";
                        echo "<td> $row->Numb</td>";
                        echo '</tr>';
                    }
                } 
                Dbconnection::closeConnection($connect);
            ?>
        </table>    
    </body>
</html>