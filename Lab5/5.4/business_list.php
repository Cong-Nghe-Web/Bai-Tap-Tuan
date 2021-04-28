<html>
    <head>

    </head>
    <body>
        <form action="" method="POST">
            <table>
                <tr>Select </tr>
                <tr><select name="select" >
                    <?php
                            require_once './dbconnection.php';
                            $connect= Dbconnection::getConnection();
                            $sql= "Select CategoryID from Categories";
                            $resutl= mysqli_query($connect,$sql);
                            if (mysqli_num_rows($resutl)>0){
                                while ($row = mysqli_fetch_object($resutl)){
                                    echo "<option>$row->CategoryID</option>";
                                }
                            }
                    ?>
                    </select>
                </tr>
                <tr><input type="submit" value="Submit"></tr>
            </table>
        </form>
        <?php
            if (array_key_exists("select", $_POST)){
                $catID= $_POST["select"];
                $sql= "select * from Businesses as B inner join Biz_Categories as BC on B.BusinessID=BC.BusinessID 
                        where BC.CategoryID='$catID'";
                $result = mysqli_query($connect, $sql);
                if (mysqli_num_rows($result)>0){
                    echo '<table border=1 cellspacing=1 cellpading=1 weight="50%">';
                    echo '<tr>';
                    echo '<td>BusinessID</td>';
                    echo '<td>Name</td>';
                    echo '<td>Address</td>';
                    echo '<td>City</td>';
                    echo '<td>Telephone</td>';
                    echo '<td>URL</td>';
                    echo '<td>BusinessID</td>';
                    echo '<td>CategoryID</td>';
                    echo '</tr>';
                    while ($row = mysqli_fetch_object($result)){
                                echo '<tr>';
                                echo "<td> $row->BusinessID </td>";
                                echo "<td> $row->Name</td>";
                                echo "<td> $row->Address</td>";
                                echo "<td> $row->City</td>";
                                echo "<td> $row->Telephone</td>";
                                echo "<td> $row->URL</td>";
                                echo "<td> $row->BusinessID </td>";
                                echo "<td> $row->CategoryID</td>";
                                echo '</tr>';
                    }
                    echo '</table> ';
                } 
            }

            Dbconnection::getConnection($connect);
        ?>
    </body>
</html>