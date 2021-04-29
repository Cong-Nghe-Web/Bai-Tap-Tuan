<html><head><title>Create Table</title></head>
<body>
     <?php
    $table1 = "CREATE TABLE Categories(
        CategoryID varchar(255) NOT NULL PRIMARY KEY,
        Title varchar(255),
        Description varchar(255)
    )";

    $table2 = "CREATE TABLE Businesses(
        BusinessID varchar(255) NOT NULL PRIMARY KEY,
        Name varchar(255),
        Address varchar(255),
        City varchar(255),
        Telephone varchar(255),
        URL varchar(255)
    )";

    $table3 = "CREATE TABLE Biz_Categories(
        BusinessID varchar(255) NOT NULL,
        CategoryID varchar(255) NOT NULL,
        PRIMARY KEY(BusinessID, CategoryID),
        FOREIGN KEY(BusinessID) REFERENCES Businesses(BusinessID),
        FOREIGN KEY(CategoryID) REFERENCES Categories(CategoryID)
    )";

    $tables = [$table1, $table2, $table3];

     $server = 'localhost:3306';
     $user = 'root';
     $pass = '123456789';
     $mydb = 'business_service';

     $connect = mysqli_connect($server, $user, $pass, $mydb);
     if (!$connect) {
          die ("Cannot connect to $server using $user");
     } else {
        
        foreach($tables as $k => $sql){
            $query = mysqli_query($connect, $sql);

            if(!$query)
            $errors[] = "Table $k : Creation failed ($conn->error)";
            else
            $errors[] = "Table $k : Creation done";
        }
        foreach($errors as $msg) {
        echo "$msg <br>";
        }
     }
     ?>
    </body>
</html> 