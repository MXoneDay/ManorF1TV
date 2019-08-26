<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/header_info.php" ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
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
                            <div class="container">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                                
    </br></br></br></br>
    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>

    <?php
        $query = "SELECT Race FROM kalender LIMIT 5;";
        $result = mysql_query($query);
        while($row = mysql_fetch_assoc($result)){
            $array[]= $row;
        }

        $myJSON = json_encode($array);
        $arrayz = array_column($array, 'Race');
    ?>

    <?php
        $query2 = "SELECT (snelste_ronde_punten+race_punten-straf_punten) AS Punten FROM race_results WHERE driver = \"ridion\";";
        $result2 = mysql_query($query2);
        while($row = mysql_fetch_assoc($result2)){
            $array2[]= $row;
        }


        $myJSON2 = json_encode($array2);
        $ridion = array_column($array2, 'Punten');
        $results = print_r($ridion, true);


        $value = $array2[0]['Punten'];
        $value1 = $array2[1]['Punten'];
        $value2 = $value + $value1;
        echo $value2 ;
    ?>

    <script>
        var js_array = [<?php echo '"'.implode('","', $arrayz).'"' ;?>];
        var js_ridion = [<?php echo '"'.implode('","', $ridion).'"' ;?>];

        var ctx = document.getElementById('myChart').getContext('2d');
        var mixedChart = new Chart(ctx, {
            type:"line",
            data:{
                labels: js_array,                                       //Array with DB contents of the kalender
                datasets:[{
                    label:"Heel",                                   //team
                    data:js_ridion,
                    fill:false,
                    borderColor:"rgb(75, 192, 192)",
                    lineTension:0.1
                },{
                    label:"Erg mals",                                   //team
                    data:js_ridion,
                    fill:false,
                    borderColor:"rgb(125, 122, 132)",
                    lineTension:0.1
                },
                
                ]
            },
            options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
    </script>
  </body>
</html>
