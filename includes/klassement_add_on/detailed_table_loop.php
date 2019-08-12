<?php 
    $tracks = ["AUS", "BAH", "CHN", "AZE", "SPA",
                "MON", "CAN", "FRA", "OOS", "GBR",
                "DUI", "HON", "BEL", "ITA", "SIN",
                "RUS", "JAP", "MEX", "USA", "BRA", "ABU"
    ];     


    foreach ($tracks as $track)  {            
        if($row[$track] == 1) {
            Echo "<td bgcolor=\"#FFD700\">".$row[$track]."</td>";
        }
        if($row[$track] == 2) {
            Echo "<td bgcolor=\"#C0C0C0\">".$row[$track]."</td>";
        }
        if($row[$track] == 3) {
            Echo "<td bgcolor=\"#E59400\">".$row[$track]."</td>";
        }
        if($row[$track] >= 4 && $row[$track] <= 10) {
            Echo "<td bgcolor=\"#9ae44d\">".$row[$track]."</td>";
        }
        if($row[$track] >= 11 && $row[$track] <= 20) {
            Echo "<td bgcolor=\"#9999FF\">".$row[$track]."</td>";
        }
        if($row[$track] == "DNF") {
            Echo "<td bgcolor=\"#9999FF\">".$row[$track]."</td>";
        }
        if($row[$track] == "DSQ") {
            Echo "<td bgcolor=\"#323232\">".$row[$track]."</td>";
        }
        if($row[$track] == "") {
            Echo "<td>".$row[$track]."</td>";
        }
    }
?>