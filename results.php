<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/header_info.php" ?>
  <body>    
  
    <!-- Hero section -->
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/navbar.php" ?>
    </section>

        <!-- Select Race by id nummber -->
        <?php   $race_id = 1; 
                $gp_by_id = array("Australia","Bahrein","China");
        ?>
        <!-- Query with the id number -->
        <?php  include "includes/uitslagen_add_on/results_query.php"?>
 
        <section id="introduction" class="tm-section-pad-top">
                <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                        <!-- Title with the name of the displayed GP -->
                        <h2 class="tm-text-primary mb-4 tm-section-title">
                                Grand Prix van <?php Echo $gp_by_id[0];?>
                        </h2>
                        </div>

                        <div class="col-lg-12">
                        
                        <!-- FIX should load the contents of the GP -->
                        <select>
                                <option value="AUS">Australian Grand Prix</option>
                                <option value="BAH">Bahrain Grand Prix</option>
                                <option value="CHN">Chinese Grand Prix</option>
                                <option value="AZE">Azerbaijan Grand Prix</option>
                                <option value="SPA">Spanish Grand Prix</option>
                                <option value="MON">Monaco Grand Prix</option>
                                <option value="CAN">Canadian Grand Prix</option>
                                <option value="FRA">French Grand Prix</option>
                                <option value="OOS">Austrian Grand Prix</option>
                                <option value="GBR">Britisch Grand Prix</option>
                                <option value="DUI">German Grand Prix</option>
                                <option value="HON">Hungarian Grand Prix</option>
                                <option value="BEL">Belgian Grand Prix</option>
                                <option value="ITA">Italian Grand Prix</option>
                                <option value="SIN">Singapore Grand Prix</option>
                                <option value="RUS">Russian Grand Prix</option>
                                <option value="JAP">Japanese Grand Prix</option>
                                <option value="MEX">Mexican Grand Prix</option>
                                <option value="USA">United States Grand Prix</option>
                                <option value="BRA">Brazilian Grand Prix</option>
                                <option value="ABU">Abu Dhabi Grand Prix</option>
                        </select>
                                                
                        </div>

                        <div class="col-lg-12"> </br></div>

                        <div class="col-lg-12">
                        <table class="table" id="demo">
                                <!-- Table headings (Names) -->
                                <thead class="thead-dark">
                                <tr>
                                <th scope="col">Positie</th>
                                <th scope="col">Driver</th>
                                <th scope="col">Tijd</th>
                                <th scope="col">Fastes Lap</th>
                                <th scope="col">Punten</th>
                                </tr>
                                </thead>

                                <tbody>
                                <!-- Run the Query that was created on line 16 -->
                                <?php while($row = mysql_fetch_assoc($result)) {
                                        echo    "<tr>          
                                                        <td>".$row["plek"]."</td>
                                                        <td>".$row["driver"]."</td>
                                                        <td>".$row["tijd"]."</td>
                                                        <td>".$row["snelste_ronde"]."</td>
                                                        <td>".$row["punten"]."</td>
                                                <tr>";
                                }
                                ?>
                                </tbody>
                        </table>
                        </div> 
                </div>
                </div>
                </br></br></br>
        </section>
                                
    </br></br></br></br>

    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>
    <script>
        
    </script>
  </body>
</html>
