<?php
        $query = "SELECT * FROM kalender;";
        $result = mysql_query($query);
        while($row = mysql_fetch_assoc($result)){
            $array[]= $row;
        }

        $myJSON = json_encode($array);
    ?>