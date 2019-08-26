<!DOCTYPE html>
<html lang="en">
  <?php include "./includes/header_info.php" ?>
    <?php  
        $kalender  = "SELECT Race, DATE_FORMAT(datum, \"%e %M %Y\"), TIME_FORMAT(Tijd, \"%H %i\") FROM kalender";
        $result = mysql_query($kalender);

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
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="tm-text-primary mb-4 tm-section-title">Kalender F1 2019</h2>
                </div>
                <div class="col-lg-12">
                    <div class="tm-next">
                        <a class="btn btn-sign_up" href="https://docs.google.com/spreadsheets/d/1DcFxKq4HnK-oabswkdSrY2NzZyeF8J_UZgZqf2kPzBk/edit?usp=sharing" role="button">
                            Aanmelden
                        </a>
                    </div>
                </div> 
                <div class="col-lg-12">
                    </br>
                </div>
                <div class="col-lg-12">
                    <table class="table" id="demo">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Race</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Tijd</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while($row = mysql_fetch_assoc($result)) {
                                    echo    "<tr>          
                                                <td>".$row["Race"]."</td>
                                                <td>".$row["DATE_FORMAT(datum, \"%e %M %Y\")"]."</td>
                                                <td>".$row["TIME_FORMAT(Tijd, \"%H %i\")"]."</td>
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

    <?php include "./includes/footer.php"?>
    <?php include "./includes/js_functions.php"?>
  </body>
</html>