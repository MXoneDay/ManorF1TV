<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/header_info.php" ?>
    <?php  
        include "./includes/dbconnect.php";
        
        $standings  = file_get_contents('./includes/klassement_add_on/driver_standings_query.php');
                        
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
        <div class="container">
                <div class="col-lg-12">
                    <table class="table" id="demo">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Driver</th>
                            <th scope="col">Team</th>
                            <th scope="col">Punten</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while($row = mysql_fetch_assoc($result)) {
                                    echo    "<tr>          
                                                <td>".$row["driver"]."</td>
                                                <td>".$row["Team"]."</td>
                                                <td>".$row["Punten"]."</td>
                                            <tr>"; 
                            }
                            ?>
                        </tbody>
                    </table>
                </div> 
            </div>
        </div>
    </section>

    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>

    <script>
        function kalender() {
        document.getElementById("demo").innerHTML = "fail";
        }
    </script>

  </body>
</html>