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
                <div class="col-lg-6">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Kalender</h2>
                    <p class="mb-4 tm-intro-text">
                        Practice start om 20:30 (30 min) </br>
                        Kwalificatie start om 21:00 (18 min) </br>
                        Race start om 21:18 (45 min) </br>
                    </p>
                    <a href="kalender.php" class="tm-intro-text tm-btn-primary">Bekijk de kalender</a>
                </div>
                <div class="col-lg-6">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Klassementen</h2>
                    <p class="mb-4 tm-intro-text">
                        Hier kun je de klassementen zien. </br>
                        Deze zijn gebaseerd op alle verreden race's. </br></br>
                    </p>
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
                <h2 class="tm-text-primary mb-4 tm-section-title" id="GP">Australian GP</h2>
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
                        
                        <p id="demo"></p> 
                    </div>
                    </p>
                </div>
            </div>
    </section>
    </br></br></br></br>

    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>
    <?php include "./includes/clock.php"?>
  </body>
</html>
