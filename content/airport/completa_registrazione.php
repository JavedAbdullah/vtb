<?php
session_start();
?>

<?php
        $prezzo0 = $_SESSION["prezzo0"];
        $prezzo1 = $_SESSION["prezzo1"];
        $prezzo2 = $_SESSION["prezzo2"];
        $prezzo_scelto = 0;
		$classe_scelta = "";
        if(isset($_POST[$prezzo0])){
            $prezzo_scelto = $prezzo0;
			$classe_scelta = "Economy";
        }elseif(isset($_POST[$prezzo1])){
            $prezzo_scelto = $prezzo1;
			$classe_scelta = "EconomyFC";
        }elseif(isset($_POST[$prezzo2])){
            $prezzo_scelto = $prezzo2;
			$classe_scelta = "Business";
        }
       // echo "hai scelto il prezzo ".$prezzo_scelto." euro";
        $_SESSION["prezzo_scelto"]= $prezzo_scelto;
		$_SESSION["classe_scelta"]= $classe_scelta ;

    
    ?>

<!DOCTYPE html>
<html>
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.ico">
    <!--
        

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->
    <title>prenotazione</title>
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
        <div class="left-side">
                        <div class="logo">
                            <img src="images/retina-airport.png" alt="Flight Template">
                        </div>
                <div class="col-md-5 col-md-offset-1">
                    <section id="first-tab-group" class="tabgroup">
                        <div id="tab1">
                            <div class="submit-form">
                                <h4>concludi <em>prenotazione</em>:</h4>
                                <form id="form-submit" action="area_clienti.php" method="POST">
                                <label for="from" style="color: #458095;">Numero bagagli</label>
                                                <select required name='num_bagagli' onchange='this.form()'>
                                                    <option value="">Scegli il numero dei bagagli</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                                <label for="from" style="color: #458095;">Numero adulti</label>
                                                <select required name='num_adulti' onchange='this.form()'>
                                                    <option value="">Scegli il numero dei adulti</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                                <label for="from" style="color: #458095;">Numero bambini</label>
                                                <select required name='num_bambini' onchange='this.form()'>
                                                    <option value="">Scegli il numero dei bambini</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>

                                                <fieldset>
                                                <button type="submit" id="form-submit" class="btn">Prenota</button>
                                                </fieldset>
                                  
                                </form>
                                <br>
                                <details>
                        <summary class="btn">come influenza il prezzo?</summary>
                        <p> per ogni <b>numero bagalgi </b> verranno aggiunti 10€</p>
                        <p> per ogni <b>numero adulti </b> verranno aggiunti i costi del biglietto scelto</p>
                        <p> per ogni <b>numero bambini </b> verranno aggiunti i costi del biglietto scelto meno 15€</p>
                    </details>
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
                        <!-- <h2>i Posti pi&Uacute; visitati</h2> -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="owl-mostvisited" class="owl-carousel owl-theme">
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>River Views</h4> -->
                                    <span>New York</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>Lorem ipsum dolor</h4> -->
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-03.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>Proin dignissim</h4> -->
                                    <span>Paris</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-04.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>Fusce sed ipsum</h4> -->
                                    <span>Hollywood</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>Vivamus egestas</h4> -->
                                    <span>Tokyo</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>Aliquam elit metus</h4> -->
                                    <span>New York</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-03.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>Phasellus pharetra</h4> -->
                                    <span>Paris</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-04.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>In in quam efficitur</h4> -->
                                    <span>Hollywood</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-01.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>Sed faucibus odio</h4> -->
                                    <span>NEW YORK</span>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-12">
                            <div class="visited-item">
                                <img src="img/place-02.jpg" alt="">
                                <div class="text-content">
                                    <!-- <h4>Donec varius porttitor</h4> -->
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