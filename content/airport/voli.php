<?php
session_start();

?>
<?php ob_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->
    <title>voli disponibili</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/tooplate-style.css">

    <link
        href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


    <style>
    /* .bordo-doppiato {
  border-style: double;
  border-width: thick;
} */


    /* html {
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
} */
    /* 
*, *:before, *:after {
  box-sizing: inherit;
} */

    .background {
        padding: 0 25px 25px;
        position: relative;
        width: 100%;
    }

    /* 
.background::after {
  content: '';
  background: #60a9ff;
  background: -moz-linear-gradient(top, #60a9ff 0%, #4394f4 100%);
  background: -webkit-linear-gradient(top, #60a9ff 0%,#4394f4 100%);
  background: linear-gradient(to bottom, #60a9ff 0%,#4394f4 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#60a9ff', endColorstr='#4394f4',GradientType=0 );
  height: 350px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
} */

    @media (min-width: 900px) {
        .background {
            padding: 0 0 25px;
        }
    }

    /* .container {
  margin: 0 auto;
  padding: 50px 0 0;
  max-width: 960px;
  width: 100%;
} */

    .panel {
        background-color: #fff;
        border-radius: 10px;
        padding: 15px 25px;
        position: relative;
        width: 100%;
        z-index: 10;
    }

    .pricing-table {
        box-shadow: 0px 10px 13px -6px rgba(0, 0, 0, 0.08), 0px 20px 31px 3px rgba(0, 0, 0, 0.09), 0px 8px 20px 7px rgba(0, 0, 0, 0.02);
        display: flex;
        flex-direction: column;
    }

    @media (min-width: 900px) {
        .pricing-table {
            flex-direction: row;
        }
    }

    .pricing-table * {
        text-align: center;
        text-transform: uppercase;
    }

    .pricing-plan {
        border-bottom: 1px solid #e1f1ff;
        padding: 25px;
    }

    .pricing-plan:last-child {
        border-bottom: none;
    }

    @media (min-width: 900px) {
        .pricing-plan {
            border-bottom: none;
            border-right: 1px solid #e1f1ff;
            flex-basis: 100%;
            padding: 25px 50px;
        }

        .pricing-plan:last-child {
            border-right: none;
        }
    }

    .pricing-img {
        margin-bottom: 25px;
        max-width: 100%;
    }

    .pricing-header {
        color: #888;
        font-weight: 600;
        letter-spacing: 1px;
    }

    .pricing-features {
        color: #016FF9;
        font-weight: 600;
        letter-spacing: 1px;
        margin: 50px 0 25px;
    }

    .pricing-features-item {
        border-top: 1px solid #e1f1ff;
        font-size: 12px;
        line-height: 1.5;
        padding: 15px 0;
    }

    .pricing-features-item:last-child {
        border-bottom: 1px solid #e1f1ff;
    }

    .pricing-price {
        color: #016FF9;
        display: block;
        font-size: 32px;
        font-weight: 700;
    }

    .pricing-button {
        border: 1px solid #9dd1ff;
        border-radius: 10px;
        color: #348EFE;
        display: inline-block;
        margin: 25px 0;
        padding: 15px 35px;
        text-decoration: none;
        transition: all 150ms ease-in-out;
    }

    .pricing-button:hover,
    .pricing-button:focus {
        background-color: #e1f1ff;
    }

    .pricing-button.is-featured {
        background-color: #48aaff;
        color: #fff;
    }

    .pricing-button.is-featured:hover,
    .pricing-button.is-featured:active {
        background-color: #269aff;
    }
    </style>
</head>

<body>


    <section class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <img src="images/retina-airport.png" alt="Flight Template">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-direction-button">
                        <a href="../../index.php" class="fa fa-home"></i> ritorna alla Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>i Voli disponibili</h2>
                        <br>

                    </div>


                    <!-- </div>
                <div class="col-md-4">
                    <img src="img/contact-01.jpg" alt="">
                    <h1 class="bordo-doppiato" >ciaooo sono il l'opzione 1</h1>
                </div>
                <div class="col-md-4">
                    <img src="img/contact-02.jpg" alt="">
                    <h1>ciaooo sono il l'opzione 2</h1>
                </div> -->



                    <!-- <div class="col-md-4">
                    <br>
                <div class="bordo-doppiato">
                <p ><b>Citt&agrave partenza:</b> Parigi [bandiera]</p>
                <p><b>Citt&agrave arrivo:</b> Milano [bandiera]</p>
                <p><b>Data partenza:</b> 25/06/2021</p>
                <p><b>Data ritorno:</b> 29/06/2021</p>
                <p><b>Lunghezza spazio aereo:</b> 78km</p>
                <p><b>Codice aereo:</b> 3</p>
                <p><b>Costo:</b> 156[random]</p>

                <center>
                    
                <form action="" method="post">
                    <div class="btn btn-info">
                    <button type="submit" name="prenota"><p>Prenota</p> </button>
                  
                    </div>
                </form>
                
                </center>


                <br>
                </div>
                <br>
                </div> -->

                    <?php
               
                //session_start();
                    $immagini_offerte = ["https://s22.postimg.cc/8mv5gn7w1/paper-plane.png","https://s28.postimg.cc/ju5bnc3x9/plane.png","https://s21.postimg.cc/tpm0cge4n/space-ship.png"];
                    $tipi_offerte = ["Economy","Economy FC","Business"];
                    $_SESSION["Economy"] = "Economy";
                    $_SESSION["EconomyFC"] = "Economy FC";
                    $_SESSION["Business"] = "Business";
                    $cod_aereo = [3,32,321];

                    
                    $citta_partenza = $_SESSION['citta_partenza'];
                    $citta_arrivo = $_SESSION["citta_arrivo"];
                    $data_partenza = $_SESSION["data_partenza"];
                    $data_ritorno = $_SESSION["data_ritorno"];
                    $prezzo_massimo = $_SESSION["prezzo_massimo"];
                    $prezzi = [$prezzo_massimo-40,$prezzo_massimo-25,$prezzo_massimo];
                    if($prezzo_massimo==40){
                        $prezzi[0] = 25;
                        $prezzi[1] = 30;
                        $prezzi[2] = 40;
                    }elseif($prezzo_massimo<200 && $prezzo_massimo > 40){
                        $prezzi[0] = $prezzo_massimo - 20;
                        $prezzi[1] = $prezzo_massimo - 15;
                        $prezzi[2] = $prezzo_massimo - 5;
                    }else{
                        $prezzi[0] = $prezzo_massimo - 220;
                        $prezzi[1] = $prezzo_massimo - 140;
                        $prezzi[2] = $prezzo_massimo - 43;
                    }
                    $_SESSION["prezzo0"] =  $prezzi[0];
                    $_SESSION["prezzo1"] =  $prezzi[1];
                    $_SESSION["prezzo2"] =  $prezzi[2];


                    $connection = mysqli_connect("localhost","root","","vtb",3326);
                    $query = "SELECT * FROM city";
                    $result = mysqli_query($connection,$query);
                    //<img src='$src_flag ' alt='Girl in a jacket' width='20' height='17'>

                //     $immagine_partenza = "";
                //     $immagine_arrivo = "";

                //     if(mysqli_num_rows($result)!=0){
    
                //     while($row = mysqli_fetch_array($result)){
                //         if($row[2] =="$citta_partenza"){
                //             $immagine_partenza = $row[1];
                //     }elseif($row[2] =="$citta_arrivo"){
                //         $immagine_arrivo = $row[1];
                //     }
                //     }
                // }
               

                    echo"<div class='container'>";
                    echo"<div class='panel pricing-table'>";
                    for($i=0;$i<3;$i++){
                       // if($i==0){$prezzo_massimo=$prezzo_massimo-30;}elseif($i==1){$prezzo_massimo=$prezzo_massimo-20;}
                        echo"
                    
                        
        
          
          <div class='pricing-plan'>
          
            <img src='$immagini_offerte[$i]' alt='' class='pricing-img'>
            <h2 class='pricing-header'>$tipi_offerte[$i]</h2>
            <ul class='pricing-features'>
              <li class='pricing-features-item'><b>Citt&agrave partenza:</b> $citta_partenza</li>
              <li class='pricing-features-item'><b>Citt&agrave arrivo:</b> $citta_arrivo</li>
              <li class='pricing-features-item'><b>Data partenza:</b> $data_partenza</li>
              <li class='pricing-features-item'><b>Data ritorno:</b> $data_ritorno</li>
              <li class='pricing-features-item'><b>Lunghezza spazio aereo:</b> 78km</li>
              <li class='pricing-features-item'><b>Codice aereo:</b>$cod_aereo[$i]</li>
            </ul>
            <span class='pricing-price'>€$prezzi[$i]</span>
            <form action='completa_registrazione.php' method='post'>
            <button class='pricing-button is-featured' name='$prezzi[$i]' id='$prezzi[$i]'>Prenota</button>
            </form>
          </div>
       
     "; }
     echo "</div>";


    
     ?>

                    <details>
                        <summary class="pricing-button is-featured'">cosa cambia tra le varie scelte?</summary>
                        <p><b>Economy</b> ottimo per chi non ha grosse esigenze e vuole tenere le spese al minimo, (pasti inclusi)(posto normale e  casuale)</p>
                        <p><b>Economy First Class</b> ottimale per chi vuole viaggiare sereno in modo economico e con tutte le comodit&agrave; (pasti inclusi)(posto normale a  scelta)(sneak gratuiti per tutto il volo)</p>
                        <p><b>Buisness</b> ottimo per chi viaggia per lavoro e vuole avere il massimo del confort, (pasti inclusi)(posto speciale a  scelta)(sneak gratuiti per tutto il volo)</p>
                    </details>






                    <?php
                    // session_start();
                    // $citta_partenza = $_SESSION['citta_partenza'];
                    // $citta_arrivo = $_SESSION["citta_arrivo"];
                    // $data_partenza = $_SESSION["data_partenza"];
                    // $data_ritorno = $_SESSION["data_ritorno"];
                    // $prezzo_massimo = $_SESSION["prezzo_massimo"];
                    // for($i=0;$i<3;$i++){
                        
                    // }
                ?>



                    <!-- <div class="col-md-4">
                    <h6>Proin dignissim rhoncus</h6>
                    <p>Aliquam elit metus, varius in ligula sed, posuere aliquam nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis vel rhoncus lectus.</p>
                </div>
                <div class="col-md-4">
                    <h6>Duis vehicula quis elit</h6>
                    <p>Donec nisl felis, eleifend eu diam ut, condimentum finibus erat. Aliquam luctus commodo ultricies. Etiam in tellus mi. Nam lobortis est magna, et rutrum ipsum lacinia id.</p>
                </div>
                <div class="col-md-4">
                    <h6>Duis vel rhoncus lectus</h6>
                    <p>Mauris aliquet eget lorem a tempor. Morbi in dui sed orci placerat ultrices sed a mi. Praesent eget porttitor enim. In tempor eros mi. Morbi a lobortis ante. Sed blandit vitae diam commodo ultricies.</p>
                </div> -->
                </div>
            </div>
    </section>

    <!-- FORM DO CONTATTO  -->
    <!-- 
    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Leave us a message</h2>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact" action="#" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Submit Your Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->


    <!-- MAPPA DI GOOGLE -->
    <!-- <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="map"> -->
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
        -->
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.7292378922843!2d10.214405015630252!3d45.55577207910222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4781764dfe7fa49f%3A0x4a60c73b38fd1a4a!2sVia%20Antonio%20Cantore%2C%2025128%20Brescia%20BS!5e0!3m2!1sit!2sit!4v1623265918506!5m2!1sit!2sit"
                            width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#" class="scroll-top">RITORNA SU</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                    </ul>
                </div>
                <div class="col-md-12">
                    <p>&copy; 2021 VTB - volare tutto bene</p>
                </div>
            </div>
        </div>
    </footer>





    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event) {
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function(event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed) {
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({
            scrollTop: targetOffset
        }, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() {}
        };
    }
    </script>
</body>

</html>