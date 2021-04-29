<!DOCTYPE html>
<html>
<head><style></style></head>
<body>
<h1 style="color: blue;">Category Administration</h1>
    <form action="2.add_Category.php" method="POST">
        <table>
            <tr style="background-color:rgb(211,211,211);">
                <th>Cat ID </th>
                <th>Title </th>
                <th>Description </th>
            </tr>

            <?php
            $server = 'localhost:3306';
            $user = 'root';
            $pass = '123456789';
            $mydb = 'business_service';
            $table_name = 'Categories';

            if(isset($_POST['submit'])) {
                $id = isset($_POST['id']) ? $_POST['id'] : '';
                $title = isset($_POST['title']) ? $_POST['title'] : '';
                $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
                if( ($id != '') && ($title != '') && ($desc != '') ) {
                    $SQLquery = "INSERT INTO $table_name VALUES ('$id', '$title', '$desc')";
                    $mysqli = mysqli_connect($server, $user, $pass, $mydb);
                    mysqli_query($mysqli, $SQLquery);
                }
            }

            $mysqli = mysqli_connect($server, $user, $pass, $mydb);
            $query = "SELECT * FROM $table_name";
            if ($result = $mysqli->query($query)) {
                while ($row = $result->fetch_assoc()) {
                    echo
                        '<tr>
                            <td>' . $row["CategoryID"] . '</td>
                            <td>' . $row["Title"] . '</td> 
                            <td>' . $row["Description"] . '</td> 
                        </tr>';
                }
            }
            ?>

            <tr>
                <td><input type="text" name="id" id="id" required></td>
                <td><input type="text" name="title" id="title" required></td>
                <td><input type="text" name="desc" id="desc" required></td>
            </tr>
            <tr>
            <td align="left"><input type="submit" id="submit" name="submit" value="Add Category" style="width:100%; background-color:grey"></td>
            </tr>
        </table>
    </form>
</body>

</html>