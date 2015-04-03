<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'db_connection.php';
setlocale(LC_TIME, 'sv_SV', 'swedish');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Folkgymmet</title>
        <link rel="stylesheet" href="css/ss_index.css">
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body> <!--Css settings in stylesheet.css-->
        <header id="header_image">
            <!--<img src="images/header_index_white.png">-->
        </header>
        <div id="wrapper_main"> <!--Wraps the page inside 98% width-->
            <div id="wrapper_events">
                <nav id="navbar">
                    <ul>
                        <li><a href="#">Ändra inställningar</a></li>
                        <li><a href="newEvent.php">+ Nytt pass</a></li>
                    </ul>
                </nav>
                <?php $categori1 = "dennaVecka";
                ?>
                <div class="eventContainer" id="<?php echo $categori1; ?>" style="background-color: #2B4699;">
                    <p>Denna vecka</p>
                </div><!--eventContainer ends--> 
                <div class="eventList" id="dennaVecka_table">
                    <?php
                    //new query
                    $query = "SELECT * FROM db_test ORDER BY datetime, time_from";
//send query - returns number of row
                    $result = mysqli_query($dbc, $query);
//                $result = mysql_query($query);
//Return number of rows
                    $rowcount = mysqli_num_rows($result);
                    if ($rowcount > 0) {
                        echo "<table><tr>"
                        . "<td>Tid och datum</td>"
                        . "<td>Typ och plats</td>"
                        . "<td>Ansvarig</td>"
                        . "<td>Lediga platser</td>"
                        . "</tr>";
//                    data-info="23;dennaVecka"    =". $row["id"] . ; \"dennaVecka\""
//                    data-info=" . $row["id"] ." class
                        while ($row = mysqli_fetch_assoc($result)) { //strtotime converts string to timestamp. strftime accepts timestamp
                            echo "<tr data-info=" . fixSlashes($row["id"], $categori1) . " class=\"tableclass\"><td>"
                            . strftime("%A %d/%m", strtotime($row["datetime"])) . "<br>" . "kl " . date('H:i', strtotime($row["time_from"])) . "-" . date('H:i', strtotime($row["time_to"])) . "</td>"
                            . "<td>" . $row["event_name"] . "<br>" . $row["place"] . "</td>"
                            . "<td>" . "x" . "</td> "
                            . "<td>" . "x av " . $row["spots"] . "</td>";
                        }
                        echo "</table>";
                    }
                    mysqli_close($dbc);
                    ?>

                </div>
                <div class="eventContainer" id="cykel" style="background-color: #339966;">
                    <p>Cykel</p>
                </div>
                <div class="eventList" id="cykel_table">
                    <table >
                        <tr>
                            <td>Tid och datum</td>
                            <td>Typ och plats</td>
                            <td>Ansvarig</td>
                            <td>Lediga platser</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>2 av 20</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>4 av 25</td>
                        </tr>
                    </table>
                </div>
                <div class="eventContainer" id="fotboll" style="background-color: #CCCC00;">
                    <p>Fotboll</p>
                </div>
                <div class="eventList" id="fotboll_table">
                    <table >
                        <tr>
                            <td>Tid och datum</td>
                            <td>Typ och plats</td>
                            <td>Ansvarig</td>
                            <td>Lediga platser</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>2 av 20</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>4 av 25</td>
                        </tr>
                    </table>
                </div>
                <div class="eventContainer" id="lopning" style="background-color: #CC3300;">
                    <p>Löpning</p>
                </div>
                <div class="eventList" id="lopning_table">
                    <table >
                        <tr>
                            <td>Tid och datum</td>
                            <td>Typ och plats</td>
                            <td>Ansvarig</td>
                            <td>Lediga platser</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>2 av 20</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>4 av 25</td>
                        </tr>
                    </table>
                </div>
                <div class="eventContainer" id="mix" style="background-color: #6699FF;">
                    <p>Mix</p>
                </div>
                <div class="eventList" id="mix_table">
                    <table >
                        <tr>
                            <td>Tid och datum</td>
                            <td>Typ och plats</td>
                            <td>Ansvarig</td>
                            <td>Lediga platser</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>2 av 20</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>4 av 25</td>
                        </tr>
                    </table>
                </div>
                <div class="eventContainer" id="styrka" style="background-color: #993366;">
                    <p>Styrka</p>
                </div>
                <div class="eventList" id="styrka_table">
                    <table >
                        <tr>
                            <td>Tid och datum</td>
                            <td>Typ och plats</td>
                            <td>Ansvarig</td>
                            <td>Lediga platser</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>2 av 20</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>4 av 25</td>
                        </tr>
                    </table>
                </div>
                <div class="eventContainer" id="ovrigt" style="background-color: black;">
                    <p>Övrigt</p>
                </div>
                <div class="eventList" id="ovrigt_table">
                    <table >
                        <tr>
                            <td>Tid och datum</td>
                            <td>Typ och plats</td>
                            <td>Ansvarig</td>
                            <td>Lediga platser</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>2 av 20</td>
                        </tr>
                        <tr>
                            <td>Onsdag 17/5<br> kl 18:00-19:30</td>
                            <td>Löpning<br>
                                Hellasgården</td>
                            <td>Lina Andersson</td>
                            <td>4 av 25</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/jsFolkgymmet.js"></script>
    </body>
</html>
<?php

function fixSlashes($idP, $categoriP) {
    $str = addslashes($idP . ";" . $categoriP);
    return $str;
}
?>
