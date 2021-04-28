<?php
class Dbconnection{
    public static function getConnection(){
        $server = "localhost:3306";
        $user = "root";
        $pass = "123456789";
        $mydb = "business_service";
        $connect = mysqli_connect($server, $user, $pass,$mydb);
        
        if (!$connect){
            die ("Cannot connect to $server using $user");
            exit();
        }

        return $connect;
    }

    public static function closeConnection($link){
        mysqli_close($link);
    }
}
?>
