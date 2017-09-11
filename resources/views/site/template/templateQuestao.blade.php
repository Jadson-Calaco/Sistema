<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <title>Darp</title>
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
        <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="  https://cdn.datatables.net/select/1.2.2/css/select.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{url('assets/site/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
    </head>

    <body onselectstart="return false">
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

        <div class="section">
             <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li>
          <a href="buscarquestoes">Nova Busca<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-search"></span></a>
        </li>          
        <li ><a href="simulado">Simulado<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>        
        
      </ul>
    </div>
  </div>
        </nav>  
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        @yield('conteudo')
                         @stack('scripts') 

                    </div>

                    <div class="col-md-4">
                        <form role="form">

                            @yield('conteudo2')

                        </form>
                    </div>
                </div>
            </div>
        </div>

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
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" ></script>
        <script src=" https://cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js"></script>
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
       <script type="text/javascript" src="js/selectdinamico.js"></script>
       <script type="text/javascript" src="js/tabelas.js"></script> 
       <script type="text/javascript" src="assets/layout/js/app.js"></script> 
    </body>
</html>