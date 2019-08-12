<?php  
include "./includes/dbconnect.php";
$race_result = "SELECT plek, driver, tijd, snelste_ronde, punten
                FROM race_results
                WHERE race_id = \"$race_id\"
                ORDER BY plek;";
                
$result = mysql_query($race_result);

?>


