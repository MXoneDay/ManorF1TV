<?php  
$query = "  SELECT race_id, driver, snelste_ronde, tijd, plek,(race_punten+snelste_ronde_punten-straf_punten)AS Punten, straf_punten 
            FROM race_results 
            WHERE race_id = $id 
            ORDER BY plek ;";

$standing = mysql_query($query);
?>


