<?php
session_start();
?>

 
 

<!DOCTYPE html>
<html>

<head>
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.ico">
    <!--
        

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->
    <title>area clienti</title>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/tooplate-style.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- per il reange -->

    <style>
    .range {
        padding: 30px;
        max-width: 400px;
        margin: 0 auto;
    }

    output {
        display: block;
        text-align: center;
    }
    

    
    </style>
</head>

<body>


    <section class="banner" id="top">
        <div class="container">
        <div class="left-side">
                        <div class="logo">
                            <img src="images/retina-airport.png" alt="Flight Template">
                        </div>
                        
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4><b>la tua Area <em>personale</em></b></h4>
                         
                                 <a href="../../index.php" class="btn btn-success btn-lg"></i>&#127968; ritorna alla Home <br></a>
                                <br>
                                <br>
                                <a href="biglietto.php" class="btn btn-success btn-lg"></i>&#127915; biglietto</a>
                                <br>
                                <br>
                                <a href="check_in.php" class="btn btn-success btn-lg"></i>&#x2713; effettua check-in online</a>
                      
                            </div>
                        </div>
                    </section>
                    
                </div>
                
            </div>
            
        </div>
       
    </section>

    


<!-- 
    SELECT prenotazioni.cod_prenotazione, prenotazioni.posto, prenotazioni.num_bagagli, voli.Data_volo, biglietti.classe, biglietti.costo
FROM prenotazioni,clienti,voli,biglietti
WHERE prenotazioni.id_cliente  =clienti.id_cliente and clienti.id_cliente = 5  and prenotazioni.cod_volo = voli.cod_volo AND biglietti.cod_prenotazione = prenotazioni.cod_prenotazione -->
<br>
<?php

   
    $connection = mysqli_connect("localhost","root","","vtb",3326);

    // $query = "SELECT clienti.id_cliente FROM clienti WHERE clienti.username = '$username' AND clienti.passwd='$passwd' LIMIT 1";
    // $result = mysqli_query($connection,$query);
    // if(mysqli_num_rows($result)!=0){
        
    //     while($row = mysqli_fetch_array($result)){
    //         $_SESSION["id_cliente"]= $row[0];
            
    //     }
    // }

    $id_cliente =  $_SESSION["id_cliente"];


    $query = "SELECT prenotazioni.cod_prenotazione, prenotazioni.posto, prenotazioni.num_bagagli, voli.Data_volo, biglietti.classe, biglietti.costo
    FROM prenotazioni,clienti,voli,biglietti
    WHERE prenotazioni.id_cliente  = clienti.id_cliente and clienti.id_cliente =  $id_cliente  and prenotazioni.cod_volo = voli.cod_volo AND biglietti.cod_prenotazione = prenotazioni.cod_prenotazione";
    $result = mysqli_query($connection,$query);

   
            

        echo" <table>";
        echo" <thead>";
        echo"<tr>";
        echo" <th>&#127380; codice prenotazione</th>";
        echo" <th>&#128186; posto</th>";
        echo"<th>&#129523; numero bagagli</th>";
        echo"<th>&#128337; data volo</th>";
        echo"<th>&#128204; classe</th>";
        echo"<th>&#128176; costo</th>";
        echo"</tr>";
        echo" <thead>";
        echo"<tbody>";

    if(mysqli_num_rows($result)!=0){
        
        while($row = mysqli_fetch_array($result)){
            echo"<tr>";
            echo" <th><h3>$row[0]</h3></th>";
            echo" <th><h3>$row[1]</h3></th>";
            echo" <th><h3>$row[2]</h3></th>";
            echo" <th><h3>$row[3]</h3></th>";
            echo" <th><h3>$row[4]</h3></th>";
            echo" <th><h3>$row[5] €</h3></th>";
            echo"</tr>";
            
        }

        
    }else{
        echo "non ci sono prenotazioni";
    }
    echo"</tbody>";
    echo"<table/>";
    echo"<br>";

?>



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
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
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

    <script src="js/datepicker.js"></script>
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



    // <!-- per il range -->

    $(function() {
        var $document = $(document),
            $inputRange = $('input[type="range"]');

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
            var value = element.value,
                output = element.parentNode.getElementsByTagName('output')[0];
            output.innerHTML = value +"€";
        }
        for (var i = $inputRange.length - 1; i >= 0; i--) {
            valueOutput($inputRange[i]);
        };
        $document.on('input', 'input[type="range"]', function(e) {
            valueOutput(e.target);
        });
        // end


        $inputRange.rangeslider({
            polyfill: false
        });
    });
    </script>

    <!-- per il calendario -->






    <!-- JS -->
    <script src="../../js/jquery-2.1.4.min.js"></script>

    <script src="../../js/mfn.menu.js"></script>
    <script src="../../js/jquery.plugins.js"></script>
    <script src="../../js/jquery.jplayer.min.js"></script>
    <script src="../../js/animations/animations.js"></script>
    <script src="../../js/translate3d.js"></script>
    <script src="../../js/scripts.js"></script>
</body>

</html>