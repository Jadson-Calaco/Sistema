<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MetaEduca</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="assets/layout/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="assets/layout/css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="assets/layout/css/style.css" />
        <link rel="stylesheet" type="text/css" href="assets/layout/css/pluton.css" />
        <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="assets/layout/css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="assets/layout/css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="assets/layout/css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/layout/images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/layout/images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/layout/images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="assets/layout/images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="assets/layout/images/ico/favicon.ico">
    </head>

    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="assets/layout/images/logo1.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="/#home">Inicio</a></li>
                            <li><a href="/#service">Serviços</a></li>
                            <li><a href="/#portfolio">Tutorial</a></li>
                            <!--li><a href="#clients">Clients</a></li-->
                            <li><a href="/#price">Planos</a></li>
                            <li><a href="/#contact">Contatos</a></li>
                            <li><a href="/#about">Sobre</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>

        <!-- Contact section start -->
        <div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">

                    @yield('cadastro')

                </div>

                <div class="container">

                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2013 Theme by <a href="http://www.graphberry.com">GraphBerry</a>, <a href="http://goo.gl/NM84K2">Documentation</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="assets/layout/js/jquery.js"></script>
        <script type="text/javascript" src="assets/layout/js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="assets/layout/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/layout/js/modernizr.custom.js"></script>
        <script type="text/javascript" src="assets/layout/js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="assets/layout/js/jquery.cslider.js"></script>
        <script type="text/javascript" src="assets/layout/js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="assets/layout/js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <!--script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script-->
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="assets/site/jquery/cep.js"></script>
        <script type="text/javascript" src="assets/layout/js/app.js"></script>
        <!--script type="text/javascript" src="assets/site/jquery/mask.js"></script-->
    </body>
</html>