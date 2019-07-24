<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<title>Manor F1 TV</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <?php include "grandprix_data.php"?>
        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    <nav>
        <div class="logo"><a href="index.html">Manor F1 TV</a></div>
</nav>

    <div id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
              <h1>Welcome to <em>Manor F1 TV</em></h1>
              <p>With all the Manor F1 race replays and funniest moments</p>
              <div class="scroll-icon">
                <a class="scrollTo" data-scrollTo="portfolio" href="#"><img src="img/scroll-icon.png" alt=""></a>
              </div>    
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="loop.mp4" type="video/mp4" />
        </video>
    </div>

    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
            <?
            foreach ($grandprixs as $item) {
            ?> 
            <div class="col-md-4 col-sm-6">
                            <div class="portfolio-item">
                                <a href=<?echo $item[0];?>><div class="thumb">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h1>Race <em><?echo $item[1];?></em></h1>
                                            <p><?echo $item[2];?></p>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img src=<?echo $item[3];?>>
                                    </div>
                                </div></a>
                            </div>
                        </div>
            <?
            }
            ?>
        </div>
    </div>



    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
              <p>Copyright &copy; 2019 MANOR F1 RACING | Designed by JORDI ZANDHUIS</p>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    
</body>
</html>