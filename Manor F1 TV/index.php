<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title>Manor F1 - Replays</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../MANOR F1 TV/css/bootstrap.min.css">
        <link rel="stylesheet" href="../MANOR F1 TV/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../MANOR F1 TV/css/fontAwesome.css">
        <link rel="stylesheet" href="../MANOR F1 TV/css/light-box.css">
        <link rel="stylesheet" href="../MANOR F1 TV/css/manor.css">
        <link rel="stylesheet" href="../MANOR F1 TV/css/template.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="full-hero">
        <div class="hero-container">
            <div class="col1">
                <h1 class="title">Welcome to <br> Manor F1 TV</h1>
                <p class="subtitle">With all the Manor F1 race replays and funniest moments.</p>
                <a class="button" href="#replays">
                    Scroll to see the replays
                </a>
                <a class="button" href="../index.php">
                    Back to Main Website
                </a>
            </div>
            <div class="col2">
                <img src="../MANOR F1 TV/../MANOR F1 TV/img/manor.png" class="f1-car" alt="F1-bolide">
            </div>
        </div>
    </div>

    <div class="section quotes">
        <div class="quote">
            <p>"Just leave me alone, I know what I'm doing!"</p>
            <p class="driver">- Kimi Räikkönen</p>
        </div>
        <div class="quote">
            <p>"You mean like... forever?"</p>
            <p class="driver">- Lando Norris</p>
        </div>
        <div class="quote">
            <p>“You have to leave the space! All the time you have to leave the space!”</p>
            <p class="driver">- Fernando Alonso</p>
        </div>
    </div>

    <?php
        $jsondata = file_get_contents("grandprix_data.json");
        $json = json_decode($jsondata,TRUE);
    ?>

    <div class="full-screen-portfolio" id="portfolio">
        <a name="replays"></a>
        <div class="container-fluid">
            <?php $x = 0; 
            while($x <= count($json['grandprixs'])-1){?>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href='<?php echo $json['grandprixs'][$x]['url']; ?>'>
                    <div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1 class="f1-font">RACE <em><?echo $json['grandprixs'][$x]['title'];?></em></h1>
                                <p><?echo $json['grandprixs'][$x]['subtitle'];?></p>
                            </div>
                        </div>
                        <div class="image">
                            <img src='<?echo $json['grandprixs'][$x]['image'];?>'>
                        </div>
                    </div>
                    </a>
                </div>
        </div>
        <?php $x++; 
        echo $json['grandprixs'][$x]['url'];} ?>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
              <p>Copyright &copy; 2019 MANOR F1 RACING | Designed by MARK V/D MOLEN, JORDI ZANDHUIS & DEMI KWANT</p>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../MANOR F1 TV/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../MANOR F1 TV/js/vendor/bootstrap.min.js"></script>
    
    <script src="../MANOR F1 TV/js/plugins.js"></script>
    <script src="../MANOR F1 TV/js/main.js"></script>

    
</body>
</html>