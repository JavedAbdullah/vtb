<?php ob_start(); ?>
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
    <title>Flight - Travel and Tour</title>
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
            <div class="row">
                <div class="col-md-5">
                    <div class="left-side">
                        <div class="logo">
                            <img src="images/retina-airport.png" alt="Flight Template">
                        </div>
                        <div class="tabs-content">
                            <!-- <h4>Choose Your Direction:</h4> -->
                            <ul class="social-links">
                                <li><a href="../../index.php">Ritorna alla home </i></a></li>
                                <li><a href="airplanes.html">i nostri aerei </i></a></li>


                            </ul>
                        </div>
                        <div class="page-direction-button" style=" color:#00164d;">
                            <a href="contact.html"><i class="fa fa-phone"></i>Contattaci ora</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>Effettua una <em>prenotazione</em>:</h4>
                                <form id="form-submit" action="prenotazione2.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <fieldset>

                                                <label for="from" style="color: #458095;">DA:</label>
                                                <select required name='citta_partenza' onchange='this.form()'>
                                                    <option value="">Scegli una localit&agrave;...</option>
                                                    <!-- <option value="Cambodia">Cambodia</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Vietnam">Vietnam</option> -->


                                                    <?php 

                                            
                                                    $connection = mysqli_connect("localhost","root","","vtb",3326);
                                                    $query = "SELECT * FROM city";
                                                    $result = mysqli_query($connection,$query);


                                                    if(mysqli_num_rows($result)!=0){
									
                                                    while($row = mysqli_fetch_array($result)){
                                                        if($row[0]!=" "){
                                                       echo"<option value='$row[0]'>$row[0]($row[2])</option>";
                                                    }
                                                    }
                                                }

                                                 
    
                                                ?> 




                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="citta_arrivo" style="color: #458095;">A:</label>
                                                <select required name='citta_arrivo' onchange='this.form()'>
                                                    <option value="">Scegli una localit&agrave;...</option>
                                                    <!-- <option value="Cambodia">Cambodia</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="India">India</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Vietnam">Vietnam</option> -->

                                                    <?php 

                                                                                                
                                                    $connection = mysqli_connect("localhost","root","","vtb",3326);
                                                    $query = "SELECT * FROM city";
                                                    $result = mysqli_query($connection,$query);


                                                    if(mysqli_num_rows($result)!=0){

                                                    while($row = mysqli_fetch_array($result)){
                                                        if($row[0]!=" "){
                                                    echo"<option value='$row[0]'>$row[0]($row[2])</option>";
                                                    }
                                                    }
                                                    }

                                                    ?>


                                                </select>
                                            </fieldset>
                                        </div>





                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="departure" style="color: #458095;">Data partenza:</label>
                                                <input name="data_partenza" type="text" class="form-control date"
                                                    id="deparure" placeholder="Select date..." required=""
                                                    onchange='this.form()'>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-6">
                                            <fieldset>
                                                <label for="return" style="color: #458095;">Data ritorno:</label>
                                                <input name="data_ritorno" type="text" class="form-control date" id="return"
                                                    placeholder="Select date..." required="" onchange='this.form()'>
                                            </fieldset>
                                        </div>









                                        <!-- <div class="col-md-6">
                                            <div class="radio-select">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="round">Round</label>
                                                        <input type="radio" name="trip" id="round" value="round" required="required" onchange='this.form()'>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <label for="oneway">Oneway</label>
                                                        <input type="radio" name="trip" id="oneway" value="one-way" required="required" onchange='this.form()'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <br>

                                        <div class="range">
                                            
                                            <br>
                                            <br>
                                            <div>
                                            <label for="range" style="color: #458095;">scegliere il prezzo massimo</label>
                                            <input type="range" name="prezzo_massimo" min="40" max="1000" value="150">
                                            <output></output>
                                            </div>

                                        </div>




                                        <div class="col-md-6">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="btn">cerca un
                                                    volo</button>
                                            </fieldset>

                                            <?php
                                                if( isset($_POST["citta_partenza"]) &&  isset($_POST["citta_arrivo"]) &&  isset($_POST["data_partenza"]) && isset($_POST["data_ritorno"])&& isset($_POST["prezzo_massimo"])){
                                                    //citta_partenza
                                                    //citta_arrivo
                                                    //data_partenza
                                                    //data_ritorno
                                                    //prezzo_massimo
                                                    $citta_partenza = $_POST["citta_partenza"];
                                                    $citta_arrivo = $_POST["citta_arrivo"];
                                                    $data_partenza = $_POST["data_partenza"];
                                                    $data_ritorno = $_POST["data_ritorno"];
                                                    $prezzo_massimo = $_POST["prezzo_massimo"];

                                                    if($citta_partenza != $citta_arrivo && $data_ritorno>$data_partenza){

                                                        session_start();
                                                        $_SESSION['citta_partenza'] =  $citta_partenza;
                                                        $_SESSION["citta_arrivo"] = $citta_arrivo;
                                                        $_SESSION["data_partenza"]= $data_partenza;
                                                        $_SESSION["data_ritorno"]= $data_ritorno;
                                                        $_SESSION["prezzo_massimo"]= $prezzo_massimo;

                                                        header("Location: voli.php");


                                                    }elseif( $citta_partenza == $citta_arrivo){
                                                        echo"<p><b> &#x26A0;</b> non puoi partire da una citta e andare nella stessa,<b> scegli due localit&agrave diverse! <b/></p>";
                                                    }elseif($data_ritorno<$data_partenza){
                                                        echo"<p><b> &#x26A0;</b> scusa ma non facciamo viaggi nel passato,<b> riprova con altre date!</b></p>";
                                                    }


                                                }
                                            ?>




                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>







    <section id="most-visited">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Most Visited Places</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="owl-mostvisited" class="owl-carousel owl-theme">
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <h4>River Views</h4>
                                    <span>New York</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Lorem ipsum dolor</h4>
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-03.jpg" alt="">
                                <div class="text-content">
                                    <h4>Proin dignissim</h4>
                                    <span>Paris</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-04.jpg" alt="">
                                <div class="text-content">
                                    <h4>Fusce sed ipsum</h4>
                                    <span>Hollywood</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Vivamus egestas</h4>
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <h4>Aliquam elit metus</h4>
                                    <span>New York</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-03.jpg" alt="">
                                <div class="text-content">
                                    <h4>Phasellus pharetra</h4>
                                    <span>Paris</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-04.jpg" alt="">
                                <div class="text-content">
                                    <h4>In in quam efficitur</h4>
                                    <span>Hollywood</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <h4>Sed faucibus odio</h4>
                                    <span>NEW YORK</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <h4>Donec varius porttitor</h4>
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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