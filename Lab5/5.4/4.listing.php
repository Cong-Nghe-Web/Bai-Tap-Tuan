<!DOCTYPE html>
<html>

<head>
    <style>
        .main {
            display: flex;
        }
        .list_cat {
            margin: 10px 20px 10px 30px;
        }
        .biz_list {
            margin-top: 50px;
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
    <h1>Business Listing</h1>
    <div class="main">
        <div class="list_cat"> 
            <form action="4.listing.php" method="POST">
                <h3>Choose a category to find the business listing: </h3>
                <?php
                $server = 'localhost:3306';
                $user = 'root';
                $pass = '123456789';
                $mydb = 'business_service';
                $cat_tab = 'Categories';

                $catid;
                $cnt = 0;

                $mysqli = new mysqli($server, $user, $pass, $mydb);

                $query = "SELECT * FROM $cat_tab";
                if ($result = $mysqli->query($query)) {

                    /* fetch associative array */
                    while ($row = $result->fetch_assoc()) {
                        $cnt++;
                    }
                    $result->free();
                }
                if ($result = $mysqli->query($query)) {

                    /* fetch associative array */
                    while ($row = $result->fetch_assoc()) {
                        $catname = $row["Title"];
                        $catid = $row["CategoryID"];
                        echo 
                            '<a id="'.$catid.'" href="4.listing.php?id='.$catid.'">'.$catname.'</a></option> <br>';
                    }
                    $result->free();
                }
                ?>
            </form>
        </div>
            
        <div class="biz_list">
            <table border="1">
                <tr>
                    <th>Business ID </th>
                    <th>Business Name </th>
                    <th>Address </th>
                    <th>City </th>
                    <th>Number phone </th>
                    <th>URL </th>
                </tr>
                <?php
                $server = 'localhost:3306';
                $user = 'root';
                $pass = '123456789';
                $mydb = 'business_service';
                $biz_tab = 'Businesses';
                $cat_tab = 'Categories';
                $biz_cat = 'Biz_categories';
                // $t = 0;

                //lấy url
                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                //cắt url
                $parts = parse_url($actual_link);
                // get dữ liệu url theo query
                if($parts['query'] != '') {
                    parse_str($parts['query'], $query);
                    // get id category trong url tạo bên trên (sau click)
                    if($query['id'] != '') {
                        $cat_selected = $query['id'];
                        // echo $cat_selected. '<br>';

                        if($cat_selected == '') {

                        } else {
                            $mysqli = new mysqli($server, $user, $pass, $mydb);
                            $query1 = "use $mydb";
                            mysqli_query($mysqli, $query1);
                            $query2 = "SELECT $biz_tab.*, $biz_cat.*
                            FROM $biz_tab INNER JOIN $biz_cat
                            ON $biz_tab.BusinessID = $biz_cat.BusinessID
                            WHERE $biz_cat.CategoryID = '$cat_selected'";
                            if ($result = $mysqli->query($query2)) {

                                /* fetch associative array */
                                while ($row = $result->fetch_assoc()) {
                                    // $t++;
                                    $cnt = $row["BusinessID"];
                                    $name = $row["Name"];
                                    $address = $row["Address"];
                                    $city = $row["City"];
                                    $number = $row["Telephone"];
                                    $url = $row["URL"];
                                    echo
                                        '<tr>
                                            <td>' . $cnt . '</td>
                                            <td>' . $name . '</td> 
                                            <td>' . $address . '</td> 
                                            <td>' . $city . '</td> 
                                            <td>' . $number . '</td> 
                                            <td>' . $url . '</td> 
                                        </tr>';
                                }
                                // echo $t;
                                $result->free();
                            }
                        }
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>