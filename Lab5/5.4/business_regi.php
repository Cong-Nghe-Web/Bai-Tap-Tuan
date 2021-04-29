<html>
    <head>
    </head>
    <body>
        <h2>Business Registration</h2>
        <form action="" method="POST">
            <table> 
                <tr>
                    <td>Business ID</td>
                    <td><input type="text" name="ID" required></td>
                </tr>
                <tr>
                    <td>Business Name</td>
                    <td><input type="text" name="name" requied></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="add" requied></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" requied></td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td><input type="text" name="telephone" requied></td>
                </tr>
                <tr>
                    <td>URL</td>
                    <td><input type="text" name="url" requied></td>
                </tr>
                <tr>
                    <td rowpan='2'><input type="submit" value="Add Business"></td>
                </tr>
            </table>
            <p style="position: fixed; left:500px; right:250px; top:100px;">Select
                <select name="select" >
                    <?php
                        require_once './dbconnection.php';
                        $connect= Dbconnection::getConnection();
                        $sql = "select CategoryID from Categories";
                        $result= mysqli_query($connect, $sql);
                        if (mysqli_num_rows($result)>0){
                            while ($row= mysqli_fetch_object($result)){
                                echo "<option>$row->CategoryID</option>";
                            }
                        }
                    ?>
                </select>
            </p>

            <?php
                if (array_key_exists("select", $_POST)){
                    $businessID= $_POST["ID"];
                    $business= $_POST["name"];
                    $address= $_POST["add"];
                    $city= $_POST["city"];
                    $telephone= $_POST["telephone"];
                    $url= $_POST["url"];
                    $categoryID= $_POST["select"];
                    $connect= Dbconnection::getConnection();
                    $sql1= "insert into Businesses values ($businessID, $business,$address, $city,$telephone,$url)";
                    $sql2= "insert into Biz_Categories values ($businessID, $categoryID)";
                    if (mysqli_query($connect,$sql1) && mysqli_query($connect,$sql2)){
                        echo "Thêm thành công";
                    }
                }
            ?>
        </form>
    </body>
</html>