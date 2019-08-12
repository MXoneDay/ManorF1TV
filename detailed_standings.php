<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/header_info.php" ?>
    <?php  
        include "./includes/dbconnect.php";
        
        $standings  = file_get_contents('./includes/klassement_add_on/detailed_query.php');
                        
        $result = mysql_query($standings);

        if (!$result) {
            die('Could not connect: ' . mysql_error());
        }
    ?>
  <body>    
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/navbar.php" ?>
    </section>

    <section id="introduction" class="tm-section-pad-top">
        <div class="container">
            <?php include "./includes/klassement_add_on/uitslagen_header.php" ?>
        </div>  
    </section>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <table class="table" id="demo">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Nr</th>
                    <th scope="col">Coureur</th>
                    <th scope="col">AUS</th>
                    <th scope="col">BAH</th>
                    <th scope="col">CHN</th>
                    <th scope="col">AZE</th>
                    <th scope="col">SPA</th>
                    <th scope="col">MON</th>
                    <th scope="col">CAN</th>
                    <th scope="col">FRA</th>
                    <th scope="col">OOS</th>
                    <th scope="col">GBR</th>
                    <th scope="col">DUI</th>
                    <th scope="col">HON</th>
                    <th scope="col">BEL</th>
                    <th scope="col">ITA</th>
                    <th scope="col">SIN</th>
                    <th scope="col">RUS</th>
                    <th scope="col">JAP</th>
                    <th scope="col">MEX</th>
                    <th scope="col">USA</th>
                    <th scope="col">BRA</th>
                    <th scope="col">ABU</th>
                    <th scope="col">Punten</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while($row = mysql_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["Nr"]."</td>";
                    echo "<td>".$row["Coureur"]."</td>";
                    include './includes/klassement_add_on/detailed_table_loop.php';
                    echo "<td>".$row["Punten"]."</td>";
                    echo "</tr>";
                    }
                    ?>
                </tbody>

            </table>
        </div>
    </div>

    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>
  </body>
</html>
