<?php
session_start();
?>

<?php
 if(isset($_POST["num_bagagli"])  && isset($_POST["num_adulti"]) &&  isset($_POST["num_bambini"])){

    function auto_incremement_ID() {
        $connection = mysqli_connect("localhost","root","","vtb",3326);
        $query = "SELECT cod_volo FROM voli";
        $result = mysqli_query($connection,$query);
        $ultimo_id = 0;
        if(mysqli_num_rows($result)!=0){
        
            while($row = mysqli_fetch_array($result)){
                $ultimo_id =$row[0];
            }
        }
      
    
        return $ultimo_id + 2;
    }
    function auto_incremement_prenotazioni_ID() {
        $connection = mysqli_connect("localhost","root","","vtb",3326);
        $query = "SELECT cod_prenotazione FROM prenotazioni";
        $result = mysqli_query($connection,$query);
        $ultimo_id = 0;
        if(mysqli_num_rows($result)!=0){
        
            while($row = mysqli_fetch_array($result)){
                $ultimo_id =$row[0];
            }
        }
      
    
        return $ultimo_id + 1;
    }
    function auto_incremement_biglietto_ID() {
        $connection = mysqli_connect("localhost","root","","vtb",3326);
        $query = "SELECT numero FROM biglietti";
        $result = mysqli_query($connection,$query);
        $ultimo_id = 0;
        if(mysqli_num_rows($result)!=0){
        
            while($row = mysqli_fetch_array($result)){
                $ultimo_id =$row[0];
            }
        }
      
    
        return $ultimo_id + 1;
    }
        

        $cod_volo = auto_incremement_ID();
        $cod_aereo = 3;
        $data_volo = $_SESSION["data_partenza"];
        
        
        $date1 = strtr($data_volo,'/', '-');
        
        $mese_giorno =  substr($date1, 0, 5);
        $anno = substr($date1, 6, 9);  
        $data_volo = $anno."-".$mese_giorno;
      
       


        $connection = mysqli_connect("localhost","root","","vtb",3326);
        $query = "INSERT INTO `voli`(`cod_volo`, `cod_aereo`, `Data_volo`) VALUES ('$cod_volo','$cod_aereo','$data_volo')";
        $result = mysqli_query($connection,$query);
       




    $cod_prenotazione =  auto_incremement_prenotazioni_ID();
    $id_cliente =  $_SESSION["id_cliente"];
    //$cod_volo
    $classe_scelta = $_SESSION["classe_scelta"];
    $posto = "";
    if($classe_scelta =='Business'){$posto = "ness-2";}else{$posto = "nomy-6";} 
    $num_adulti = $_POST['num_adulti'];
    $num_bambini = $_POST['num_bambini'];
    $ora_prenotazione = date('y/m/d h:i:s a', time());
    $num_bagagli = $_POST['num_bagagli'];


   // $connection = mysqli_connect("localhost","root","","vtb",3326);
        $query = "INSERT INTO `prenotazioni`(`cod_prenotazione`, `id_cliente`, `cod_volo`, `posto`, `num_adulti`, `num_bambini`, `data_ora`, `num_bagagli`) VALUES ($cod_prenotazione,$id_cliente,'$cod_volo','$posto',$num_adulti,$num_bambini,'$ora_prenotazione',$num_bagagli)";
        $result = mysqli_query($connection,$query);
       

        $numero = auto_incremement_biglietto_ID();
        //$cod_prenotazione
        $costo = $_SESSION["prezzo_scelto"];
        $costo_bagagli = 0;
        $cost_bambini  = 0;
        $cost_adulti = 0;

        if($num_bagagli!=0){
            $costo_bagagli = $costo + ($num_bagagli*10);
        }elseif($num_adulti!=0){
            $cost_adulti = ($costo * $num_adulti);
        }elseif($num_bambini!=0){
            $cost_bambini = (($costo-15)  *  $num_bambini);
        }
        $costo = $costo +  $costo_bagagli +  $cost_adulti + $cost_bambini;

        //$classe_scelta
        //$ora_prenotazione
        $query = "INSERT INTO `biglietti`(`numero`, `cod_prenotazione`, `costo`, `classe`, `data_ora`) VALUES ($numero,$cod_prenotazione,$costo,'$classe_scelta','$ora_prenotazione')";
        $result = mysqli_query($connection,$query);




    mysqli_close($connection);

 }
    
 
 
 ?>

<!DOCTYPE html>
<html>

<head>
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
                                <a href="../../index.php" class="btn btn-success btn-lg"></i>&#127915; biglietto</a>
                                <br>
                                <br>
                                <a href="../../index.php" class="btn btn-success btn-lg"></i>&#x2713; effettua check-in online</a>
                      
                            </div>
                        </div>
                    </section>
                    
                </div>
                
            </div>
            
        </div>
        <table>
            
        <thead>
            <tr>
                <th>CODE</th>
                <th>STOCK</th>
                <th>CAP</th>
                <th>INCH</th>
                <th>BOX TYPE</th>
            </tr>
            <thead>
                <tbody>
                    <tr>
                        <td>CES-9000</td>
                        <td>50mt</td>
                        <td>9mm</td>
                        <td>1/2"</td>
                        <td>Kangal / Coil</td>
                    </tr>
                    <tr>
                        <td>CES-9000</td>
                        <td>50mt</td>
                        <td>9mm</td>
                        <td>1/2"</td>
                        <td>Kangal / Coil</td>
                    </tr>
                    <tr>
                        <td>CES-9000</td>
                        <td>50mt</td>
                        <td>9mm</td>
                        <td>1/2"</td>
                        <td>Kangal / Coil</td>
                    </tr>
                    <tr>
                        <td>CES-9000</td>
                        <td>50mt</td>
                        <td>9mm</td>
                        <td>1/2"</td>
                        <td>Kangal / Coil</td>
                    </tr>
                </tbody>
                <table/>
                <br>
    </section>

    







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