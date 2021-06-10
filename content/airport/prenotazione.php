<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description" content="">
    <meta name="author" content="">








    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet'
        href='http://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href='../../css/global.css'>
    <link rel='stylesheet' href='css/structure.css'>
    <link rel='stylesheet' href='css/airport.css'>
    <link rel='stylesheet' href='css/custom.css'>
    <link rel="stylesheet" href="main.css">


    <style>
    @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i&display=swap");

    .form {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 16px;
    }

    .form * {
        box-sizing: border-box;
        line-height: 1.5;
    }

    .form__title {
        font-size: 2em;
        font-weight: 600;
    }

    .form__item {
        display: flex;
        flex-direction: column;
    }

    .form__item>* {
        align-self: flex-start;
    }

    .form__label {
        font-weight: 600;
        padding: 10px 0;
    }

    .form__input {
        -webkit-appearance: none;

        width: 100%;
        max-width: 425px;

        /* Fix for Safari/iOS date fields */
        min-height: calc(0.9em + (0.8em * 2) + 0.6em);

        padding: 0.8em;
        font-size: 0.9em;
        font-family: "Source Sans Pro", sans-serif;

        outline: none;
        border: 1px solid #dddddd;
        border-radius: 4px;
        background: #f9f9f9;
        transition: background 0.25s, border-color 0.25s, color 0.25s;
    }

    .form__input:focus {
        background: #ffffff;
    }

    .form__input::placeholder {
        color: #bbbbbb;
    }

    .form__input--error {
        color: #d50000;
        background: #fff8f8;
        border-color: #d50000;
    }

    .form__input--error::placeholder {
        color: #ffbfbf;
    }

    .form__error {
        padding-top: 10px;
        color: #d50000;
        font-size: 0.9em;
        visibility: hidden;
    }

    .form__input--error+.form__error {
        visibility: visible;
    }

    .form__input--small {
        max-width: 250px;
    }

    textarea.form__input {
        resize: none;
        min-height: 200px;
    }

    .form__btn {
        font-family: "Source Sans Pro", sans-serif;
        font-weight: 600;
        font-size: 1.1em;
        padding: 10px 16px;
        margin: 10px 0;

        color: #ffffff;
        background: #14b64a;
        border: 2px solid #0fa942;
        border-radius: 5px;

        cursor: pointer;
        outline: none;
    }

    .form__btn:active {
        background: #0fa942;
    }
    </style>

</head>

<body
    class="color-custom style-default button-default layout-full-width no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-left menu-link-color menuo-no-borders mobile-tb-hide mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-sticky be-reg-2064">
    <div id="Wrapper">
        <div id="Header_wrapper">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="../../index-airport.html" title="BeAirport - BeTheme"
                                        data-height="60" data-padding="30"><img class="logo-main scale-with-grid"
                                            src="images/airport.png" data-retina="images/retina-airport.png"
                                            data-height="59" alt="airport"><img class="logo-sticky scale-with-grid"
                                            src="images/airport.png" data-retina="images/retina-airport.png"
                                            data-height="59" alt="airport"><img class="logo-mobile scale-with-grid"
                                            src="images/airport.png" data-retina="images/retina-airport.png"
                                            data-height="59" alt="airport"><img
                                            class="logo-mobile-sticky scale-with-grid" src="images/airport.png"
                                            data-retina="images/retina-airport.png" data-height="59" alt="airport">
                                    </a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu menu-main">
                                            <li>
                                                <a href="../../index-airport.html"><span>Home</span></a>
                                            </li>
                                            <li class="current-menu-item">
                                                <a href="flights.html"><span>Flights</span></a>
                                            </li>
                                            <li>
                                                <a href="airplanes.html"><span>Airplanes</span></a>
                                            </li>
                                            <li>
                                                <a href="press.html"><span>Press</span></a>
                                            </li>
                                            <li>
                                                <a href="news.html"><span>News</span></a>
                                            </li>
                                            <li>
                                                <a href="contact.html"><span>Contact</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                            <div class="top_bar_right">
                                <div class="top_bar_right_wrapper">
                                    <a href="#" class="button button_theme button_js action_button"
                                        target="_blank"><span class="button_label">controlla un volo</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div id="Subheader" style="padding:70px 0">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Prenota un volo</h1>
                    </div>
                </div>
            </div>
        </div>
        <div id="Content" class="animation">

            <div id="animation">
                <center>
                    <!-- <div style="padding:70px 0; color:orange">
                        <div class="container">
                            <div class="column one">
                                <h1 class="title">inserire i dati richiesti</h1>
                            </div>
                        </div>
                    </div> -->
                    <br>
                    <br>
                    <form class="form" action="./" method="POST">


                        <label for="cars" style="padding:20px 11; color:#cfdae5 "><h4 style="padding:20px 11; color:#cfdae5; font-weight: bold;"  >DA</h4></label>
                        <select name="cars" id="cars" style="padding:20px 11; color:#00164d; -webkit-appearance: none;

width: 100%;
max-width: 425px;

/* Fix for Safari/iOS date fields */
min-height: calc(0.9em + (0.8em * 2) + 0.6em);

padding: 0.8em;
font-size: 0.9em;
font-family: 'Source Sans Pro', sans-serif;

outline: none;
border: 1px solid #dddddd;
border-radius: 4px;
background: #f9f9f9;
transition: background 0.25s, border-color 0.25s, color 0.25s;">
                        <option value="">scegli la partenza :</option>
                            <option value="volvo">Parigi</option>
                            <option value="saab">Milano</option>
                            <option value="mercedes">Londra</option>
                            <option value="audi">Madrid</option>
                        </select>

                        <label for="cars"><h4 style="padding:20px 11; color:#cfdae5; font-weight: bold;"  >A</h4></label>
                        <select name="cars" id="cars"  style="padding:20px 11; color:#00164d; -webkit-appearance: none;

width: 100%;
max-width: 425px;

/* Fix for Safari/iOS date fields */
min-height: calc(0.9em + (0.8em * 2) + 0.6em);

padding: 0.8em;
font-size: 0.9em;
font-family: 'Source Sans Pro', sans-serif;

outline: none;
border: 1px solid #dddddd;
border-radius: 4px;
background: #f9f9f9;
transition: background 0.25s, border-color 0.25s, color 0.25s;">
                        <option value="">scegli la destinazione:</option>
                            <option value="volvo">Parigi</option>
                            <option value="saab">Milano</option>
                            <option value="mercedes">Londra</option>
                            <option value="audi">Madrid</option>
                        </select>

                        <input type="date" data-date-inline-picker="true"  style="padding:20px 11; color:#00164d; -webkit-appearance: none;

width: 100%;
max-width: 425px;

/* Fix for Safari/iOS date fields */
min-height: calc(0.9em + (0.8em * 2) + 0.6em);

padding: 0.8em;
font-size: 0.9em;
font-family: 'Source Sans Pro', sans-serif;

outline: none;
border: 1px solid #dddddd;
border-radius: 4px;
background: #f9f9f9;
transition: background 0.25s, border-color 0.25s, color 0.25s;"/>

                        <button class="form__btn" type="submit">trova volo</button>

                    </form>








                    

                </center>
            </div>

        </div>
        <footer id="Footer" class="clearfix">
            <div class="widgets_wrapper" style="padding:70px 0">
                <div class="container">
                    <div class="column one-third">
                        <!-- <aside class="widget_text widget widget_custom_html">
                            <h4>Nullam wisi ultricies vitae</h4>
                            <div class="textwidget custom-html-widget">
                                <hr class="no_line" style="margin:0 auto 30px">
                              
                            </div>
                        </aside> -->
                    </div>
                    <div class="column one-third">
                        <aside class="widget_text widget widget_custom_html">
                            <h4>trovaci sui social media</h4>
                            <div class="textwidget custom-html-widget">
                                <hr class="no_line" style="margin:0 auto 30px">
                                <a href="#" class="icon_bar  icon_bar_facebook icon_bar_big"><span class="t"><i
                                            class="icon-facebook"></i></span><span class="b"><i
                                            class="icon-facebook"></i></span></a><a href="#"
                                    class="icon_bar  icon_bar_google icon_bar_big"><span class="t"><i
                                            class="icon-gplus"></i></span><span class="b"><i
                                            class="icon-gplus"></i></span></a><a href="#"
                                    class="icon_bar  icon_bar_twitter icon_bar_big"><span class="t"><i
                                            class="icon-twitter"></i></span><span class="b"><i
                                            class="icon-twitter"></i></span></a><a href="#"
                                    class="icon_bar  icon_bar_youtube icon_bar_big"><span class="t"><i
                                            class="icon-youtube"></i></span><span class="b"><i
                                            class="icon-youtube"></i></span></a>
                            </div>
                        </aside>
                    </div>
                    <div class="column one-third">
                        <aside class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <h5
                                    style="background: url(images/home_airport_pic10.png) no-repeat right center; padding-right: 80px; text-align: right;">
                                    hai domande?
                                    <br>
                                    contattaci ora!
                                </h5>
                                <div style="width: 185px; height: 2px; background: #cfdae5; float: right;"></div>
                                <hr class="no_line" style="margin:0 auto 20px">
                                <h2 style="text-align: right; color: #00164d;"><span style="font-size: 16px; ">(+39)
                                    </span> 339 726 224</h2>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>


            <!-- ------------------------------------------------ -->
            <div class="footer_copy">
                <div class="container">
                    <div class="column one">
                        <a id="back_to_top" class="button button_js" href="#"><i class="icon-up-open-big"></i></a>
                        <div class="copyright">
                            &copy; 2021 VTB - volare tutto bene</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- mobile nav -->
    <div id="Side_slide" class="right dark" data-width="250">
        <div class="close-wrapper">
            <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
        </div>
        <div class="extras">
            <a href="#" class="button button_theme button_js action_button" target="_blank">
                <span class="button_label">controlla un volo</span>
            </a>
        </div>
        <div class="menu_wrapper"></div>
    </div>
    <div id="body_overlay"></div>

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