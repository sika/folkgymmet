<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Open connection to database

        $dbc = mysqli_connect('localhost', 'sika', 'my3qd_ue'); //variable connection: where server is; username; password
// Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        //Select database
        $db_select = mysqli_select_db($dbc, "youtube");
        //$db_select = mysql_select_db("youtube", $dbc);
//        echo "select database: $db_select <br>";
        if (!$db_select) {
            die("Can't connect :" . mysql_error());
        }
        ?>
    </body>
</html>
<!--        $query = "UPDATE customers SET city='Micke' WHERE id=1";
        $result = mysql_query($query);
//        echo 'Query result: '. $result;
        mysql_close($dbc);
        if(!$dbc){
            die('Not closed :' . mysql_error());
        }-->
