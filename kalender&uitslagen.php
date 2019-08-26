<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/header_info.php" ?>
  <body>    
    <!-- Hero section -->
    <section class="text-white tm-font-big tm-parallax">
        <?php include "./includes/navbar.php" ?>
    </section>
      
    <section id="introduction" class="tm-section-pad-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Kalender</h2>
                    <p class="mb-4 tm-intro-text">
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                <th>Type</th>
                                <th>Tijd</th>
                                <th>Duur</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>Practice</td>
                                <td>20:30</td>
                                <td>30 Min</td>
                            </tr>
                            <tr>
                                <td>Kwalificatie</td>
                                <td>21:00</td>
                                <td>18 Min</td>
                            </tr>
                            <tr>
                                <td>Race</td>
                                <td>21:18</td>
                                <td>45 Min +/-</td>
                            </tr>
                        </table>
                    </p>
                    </br>
                    <a href="grafieken.php" class="tm-intro-text tm-btn-primary">Bekijk de kalender</a>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Klassementen</h2>
                    <p class="mb-4 tm-intro-text">
                    <table class="table">
                            <thead class="table-primary">
                                <tr>
                                <th>Soorten Klassementen</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>Hier kun je de tussenstanden in het kampioenschap bekijken zoals : </br>
                                    Het Driver Championship, </br>
                                    Het Constructers Championship, </br>
                                    Het Detailed Standings
                                </td>
                            </tr>
                        </table>
                    </p>
                    </br>
                    <a href="driver_standings.php" class="tm-intro-text tm-btn-primary">Bekijk de Klassementen</a>
                </div>
            </div>
    </section>
    <section id="introduction" class="tm-section-pad-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Uitslagen</h2>
                    <p class="mb-4 tm-intro-text">
                        Hier kun je de uitslagen per race bekijken. </br>
                        Daarnaast vind je ook informatie over het race verloop. </br>
                    </p>
                    <a href="results.php" class="tm-intro-text tm-btn-primary">Bekijk de uitslagen</a>
                </div>
                <div class="col-lg-6">
                <h2 class="tm-text-primary mb-4 tm-section-title" id="GP">
                <?php
                    $race = mysql_query("SELECT Race FROM kalender LIMIT $db_index_fix_id, 1");
                    while($row = mysql_fetch_assoc($race)) {
                        $gp = $row["Race"];
                    }
                    echo $gp;
                ?> 
                </h2>
                    <p class="mb-4 tm-intro-text">
                    <div id="clockdiv"> 
                        <div> 
                            <span class="days" id="day"></span> 
                            <div class="smalltext">Days</div> 
                        </div> 
                        <div> 
                            <span class="hours" id="hour"></span> 
                            <div class="smalltext">Hours</div> 
                        </div> 
                        <div> 
                            <span class="minutes" id="minute"></span> 
                            <div class="smalltext">Minutes</div> 
                        </div> 
                        <div> 
                            <span class="seconds" id="second"></span> 
                            <div class="smalltext">Seconds</div> 
                        </div> 
                        </div> 
                    </div>
                    </p>
                </div>
            </div>
    </section>
    </br></br></br></br>

    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>
    <?php include "./includes/klassement&uitslagen/clock.php"?>
  </body>
</html>
