<!DOCTYPE html>
<?php
require 'db_connection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pass</title>
        <link rel="stylesheet" href="css/ss_event.css">
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>

    <body>
        <div id="wrapper">
            <?php
            $id = null;
            $bgColor = null;
            $URL = null;
            //retrieve GET and set id and bgColor variables.
            setGET();
            /*
              $id = mysqli_real_escape_string($dbc, $id);
              //new query
              $query = "SELECT * FROM db_test WHERE id='$id'";
              //return rows
              $result = mysqli_query($dbc, $query);
              //return number of rows
              $rowcount = mysqli_num_rows($result);
              //Fetch a result row as an associative array to be able to use actual field names
              $row = mysqli_fetch_assoc($result);
              //if one or more row was returned
              if ($rowcount > 0) {
              //            print_r($row);
              //echo $row["place"];
              }
             */ 
            ?>

            <header class="eventHeader" style="background-color:<?php echo $bgColor ?>;">
                <p>Denna vecka</p>
            </header>
            <div id="headerNav">
                <a href="<?php echo $URL ?>">&#60;&#60; Tillbaka</a>
            </div>
            <header_for_image>
                <!--<img class="header_image" src="images/football_on_field.jpg">-->
            </header_for_image>
            
            
<!--        //        Dag: onsdag 15/5
            //        Tid: 18:00-19:00
            //        Instruktör: Lina Andersson
            //        
            //        (Meddelande) På onsdag kör vi igen! Vi delar upp oss i tre lag som håller varsin takt. Häng på så har vi lite kul! :)
            //        
            //        Max: 20       Lediga: 2
            //        Var: Hellasgården     KARTA
            //        Adress: adress
            //        
            //        DELTA-->



            <?php
            mysqli_close($dbc);
            ?>
        </div>
    </body>
</html>
<?php

function setGET() {
    if (isset($_GET['id'])) {
        global $id;
        $id = $_GET['id'];
        //echo $id . '<br>';
    } else {
        exit(0);
    }
    if (isset($_GET['bgColor'])) {
        global $bgColor;
        //transform %23 to #
        $bgColor = urldecode($_GET['bgColor']);
        //echo $bgColor;
    } else {
        exit(0);
    }
    if (isset($_GET['url'])){
        global $URL;
        $URL = $_GET['url'];
    }
}
?>