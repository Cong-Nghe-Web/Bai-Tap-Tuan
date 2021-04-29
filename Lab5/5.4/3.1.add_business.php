<!DOCTYPE html>
<html>

<head>
    <style>
        .main {
            display: flex;
        }
        .list_cat, form_biz {
            margin: 10px 20px 10px 30px;
        }
        .submit {
            margin-left: 20px;
            margin-top: 20px;
        }
        h1 {
            color: blue;
        }
    </style>
</head>

<body>
    <h2 style="color:blue">Business Registration</h2>
    <form action="3.2.add_res.php" method="POST">
        <div class="main">
            <div class="list_cat">
                <select name="cat" size="5" multiple="multiple" required>  
                    <?php
                    $server = 'localhost:3306';
                    $user = 'root';
                    $pass = '123456789';
                    $mydb = 'business_service';
                    $cat_tab = 'Categories';

                    $catid;

                    $mysqli = new mysqli("localhost", $user, $pass, $mydb);

                    $query = "SELECT * FROM $cat_tab";
                    if ($result = $mysqli->query($query)) {

                        /* fetch associative array */
                        while ($row = $result->fetch_assoc()) {
                            $catid = $row["CategoryID"];
                            echo
                                '<option value="'. $catid .'" name="'.$catid.'" id="'.$catid.'">'.$catid.'</option>';
                        }

                        $result->free();
                    }
                    ?>
                </select>
            </div>
            <div class="form_biz">
                <table>
                    <tr>
                        <td>Business name: </td>
                        <td><input type="text" name="biz_name" id="biz_name" required></td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td><input type="text" name="address" id="address" required></td>
                    </tr>
                    <tr>
                        <td>City: </td>
                        <td><input type="text" name="city" id="city" required ></td>
                    </tr>
                    <tr>
                        <td>Telephone: </td>
                        <td><input type="text" name="number" id="number" required></td>
                    </tr>
                    <tr>
                        <td>URL: </td>
                        <td><input type="text" name="url" id="url" required></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <input type="submit" id="submit" name="submit" class="submit" value="Add Business">
        <!-- <input type="reset" class="submit" value="Cancel"> -->
    </form>
</body>

</html>