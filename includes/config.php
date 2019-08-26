<?php 
    include "settings.php";

    // Switch statement to load the variables for localhost or online mode
    if($connection == "ON"){
        $connect = mysql_connect($online_host, $online_username, $online_password);
        mysql_select_db($online_db);
    }
    elseif($connection == "OFF"){
        $connect = mysql_connect($local_host, $local_username, $local_password);
        mysql_select_db($local_db);
    }
    else{
        echo "rip";
    }

    // Scaling settings for the clock on www.manorracingf1.nl/kalender&uitslagen
    // When $race_id from settings is set, this will scale along
    include "includes/uitslagen/grand_prix_name.php"; 
    while($row = mysql_fetch_assoc($race)) {
        $gp = $row["Race"];
    }
    
    //Create Queries to load specific data
    $query1 = "SELECT DATE_FORMAT(datum, \"%e %M\") FROM kalender WHERE Race LIKE \"%$gp%\";";
    $query2 = "SELECT DATE_FORMAT(datum, \"%Y\") FROM kalender WHERE Race LIKE \"%$gp%\";";
    $query3 = "SELECT Tijd FROM kalender WHERE Race LIKE \"%$gp%\";";
    
    //Set Query to MySQL Query
    $result1 = mysql_query($query1);
    $result2 = mysql_query($query2);
    $result3 = mysql_query($query3);

    //Fetch Queries for usage
    while($row = mysql_fetch_assoc($result1)) {
        $date = $row["DATE_FORMAT(datum, \"%e %M\")"];
    }
    while($row = mysql_fetch_assoc($result2)) {
        $year = $row["DATE_FORMAT(datum, \"%Y\")"];
    }
    while($row = mysql_fetch_assoc($result3)) {
        $time= $row["Tijd"];
    }
?>
    <script>
        // db var into the clock
        var deadline = new Date("<?php Echo $date;?>, <?php Echo $year;?> <?php Echo $time;?>").getTime(); 
    </script>

