<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/header_info.php" ?>
  <body>    
  
    <!-- Hero section -->
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/navbar.php" ?>
    </section>

        <!-- Select Race by id nummber -->
        <section id="introduction" class="tm-section-pad-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-5"> </div>
                            <div class="col-lg-2">
                                <form action="results" method="post">
                                    <div class="form-group">
                                        <h6 style="text-align:center;">Enter een Race ID</h6>
                                        <input type="text"class="form-control" name="id" placeholder="" pattern="\d+"> 
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width:100%;">Enter</button>
                                </form>
                            </div>
                            <div class="col-lg-5">
                                <i class="far fa-question-circle" onclick="result_info()"></i>
                            </div>
                        </div>

                        </br>
                        <?php 
                            //When nothing is enterd in the input nothing happens
                            if($_POST['id'] == ""){
                                NULL;
                            }
                            //Zero is not a valid race id so it will out put a alert/error message 
                            elseif($_POST['id'] == 0){
                            ?>
                                <div class="row">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-2"> 
                                        <h6 style="text-align:center;"><?php echo "Geen valide Race ID";?> </h6>
                                    </div>
                                    <div class="col-lg-5"></div>
                                    </div>
                            <?php
                            }
                            //A valid id will use the id number in the query and load that query
                            //$race_id FROM setting.php
                            elseif($_POST['id'] < $race_id){ ?>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Positie</th>
                                            <th scope="col">Driver</th>
                                            <th scope="col">Tijd</th>
                                            <th scope="col">Fastest Lap</th>
                                            <th scope="col">Punten</th>
                                            <th scope="col">Strafpunten</th>
                                        </tr>
                                    </thead>
                                        <?php 
                                            //Set id and db_index_fix_id to load the id's on the
                                            // WHERE Clause in the query
                                            $id = $_POST['id'];
                                            $db_index_fix_id = $id - 1;
                                            include "includes/uitslagen/grand_prix_name.php";       //$race
                                            include "includes/uitslagen/single_race_result.php";    //$standing
                                            ?>
                                            <h1 style="text-align:center;"> 
                                                <?php
                                                    while($row = mysql_fetch_assoc($race)) {
                                                        $gp = $row["Race"];
                                                    }
                                                    Echo $gp;
                                                ?> 
                                            </h1>
                                            <?php
                                            if(mysql_num_rows($standing)> 1) {
                                                while($row = mysql_fetch_assoc($standing)) {
                                                    echo    "<tr>          
                                                            <td>".$row["plek"]."</td>
                                                            <td>".$row["driver"]."</td>
                                                            <td>".$row["tijd"]."</td>
                                                            <td>".$row["snelste_ronde"]."</td>
                                                            <td>".$row["Punten"]."</td>
                                                            <td>".$row["straf_punten"]."</td>
                                                            </tr>";
                                                }
                                            }
                                        ?>
                                </table>
                        <?php 
                        }
                        //A valid id will use the id number in the query and load that query
                        elseif($_POST['id'] >= $race_id && $_POST['id'] <= $max_num_races){
                        ?>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"> 
                                    <h6 style="text-align:center;"> <?php echo "Deze race is nog niet vereden";?> </h6>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                        <?php
                        }
                        //Zero / every number above the amount of race numbers
                        //are not a valid race id's so it will out put a alert/error message                     
                        elseif($_POST['id'] >= $max_num_races){
                        ?>
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-2"> 
                                    <h6 style="text-align:center;"><?php echo "Geen valide Race ID";?> </h6>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        <?php
                        //If none of the above statements has been triggerd
                        }else{
                        ?>
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-2"> 
                                    <h6 style="text-align:center;"><?php echo "Onbekende Error";?> </h6>
                                </div>
                                <div class="col-lg-5"></div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
                                
    </br></br></br></br>

    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>
    <script>
        
    </script>
  </body>
</html>
