<?php
    $connect = mysql_connect("localhost", "root", "mysql");
    mysql_select_db("f1_championship");

    if (!$connect) {
        die('Could not connect: ' . mysql_error());
    } 
?>