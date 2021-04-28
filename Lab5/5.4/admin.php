<html>
    <head>
        <title>Insert data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"; charset=utf-8" />
    </head>
    <body>
        <form action="" method="POST">
            <table weight="50%">
                <tr>
                    <td ><input type="text" name="catID" required></td>
                    <td><input type="text" name="title" required></td>
                    <td><input type="text" name="des" required></td>
                <tr>
                    <td rowpan='3'><input type="submit" value="Add Category"></td>
                </tr>
            </table>
        </form>
            <?php
                require_once './dbconnection.php';
                $connect= Dbconnection::getConnection();
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $catID= $_POST["catID"];
                    $title= $_POST["title"];
                    $des= $_POST["des"];
                    $sql="INSERT INTO Categories VALUES('$catID','$title', '$des')"; 
                    if( mysqli_query($connect,$sql)){
                        echo '<table border=1 cellspacing=1 cellpading=1 weight="50%">';
                        echo '<tr>';
                        echo '<td >CatID</td>';
                        echo '<td>Titile</td>';
                        echo '<td>Description</td>';
                        echo '</tr>';
                        $sql1="Select * from Categories";
                        $result = mysqli_query($connect, $sql1);
                        if (mysqli_num_rows($result)>0){
                            while ($row = mysqli_fetch_object($result)){
                                echo '<tr>';
                                echo "<td> $row->CategoryID </td>";
                                echo "<td> $row->Title</td>";
                                echo "<td> $row->Description</td>";
                                echo '</tr>';
                            }
                        }
                        echo '</table> ';
                    }else {
                        echo '<table border=1 cellspacing=1 cellpading=1 weight="50%">';
                        echo '<tr>';
                        echo '<td >CatID</td>';
                        echo '<td>Titile</td>';
                        echo '<td>Description</td>';
                        echo '</tr>';
                        $sql1="Select * from Categories";
                        $result = mysqli_query($connect, $sql1);
                        if (mysqli_num_rows($result)>0){
                            while ($row = mysqli_fetch_object($result)){
                                echo '<tr>';
                                echo "<td> $row->CategoryID </td>";
                                echo "<td> $row->Title</td>";
                                echo "<td> $row->Description</td>";
                                echo '</tr>';
                            }
                        }
                        echo '</table> ';
                    }
                }
                Dbconnection::getConnection($connect);
            ?>
    </body>
</html>