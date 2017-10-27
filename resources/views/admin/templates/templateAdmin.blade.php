<html><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <title>MetaEduca</title>
        <link href="{{url('assets/site/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

        <!-- MetisMenu CSS -->
        <link href="{{url('assets/site/metisMenu/metisMenu.min.css')}}" rel="stylesheet" type="text/css">

        <!-- DataTables CSS -->
        <link href="{{url('assets/site/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="{{url('assets/site/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{url('assets/site/morrisjs/morris.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom CSS -->
        <link href="{{url('assets/site/dist/css/sb-admin-2.css')}}" rel="stylesheet" type="text/css">

        <!-- Custom Fonts -->
        <link href="{{url('assets/site/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="  https://cdn.datatables.net/select/1.2.2/css/select.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/admin/admin')}}">METAEDUCA V 1.0</a>
                </div>
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bem vindo !! {{ auth()->user()->name }}
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                 <a href="{!! url('admin/editar_perfil/'.auth()->user()->id) !!}"><i class="fa fa-user fa-fw"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ url('/auth/logout') }}"><i class="fa fa-sign-out fa-fw"></i>Logout</a></a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="admin"><i class="fa fa-2x fa-cogs fa-fw"></i> Painel de  Controle</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-2x fa-bar-chart-o fa-fw pull-left"></i>Adicionar<span class="arrow fa fa-2x pull-left"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/noticias')}}"><i class="fa fa-1x fa-fw -plus fa-pencil-square-o"></i>Noticia</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/usuarios')}}"><i class="fa fa-1x fa-fw fa-user-plus"></i>Usuarios</a>
                                    </li>
                                    <li>
                                        <a  href="{{url('/admin/questoes')}}"><i class="fa fa-1x fa-edit fa-fw"></i>Adicionar Questões</a>
                                    </li>
                                    <li>
                                        <a href="disciplinas"><i class="fa fa-1x fa-edit fa-fw"></i>Adicionar Disciplinas</a>
                                    </li>
                                    <li>
                                        <a href="assuntos"><i class="fa fa-1x fa-edit fa-fw"></i>Adicionar Assunto</a>
                                    </li>
                                    <!--li>
                                      <a href="novo_asdcasd">Usuarios</a>
                                    </li-->
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="{{url('/admin/planos')}}"><i class="fa fa-2x fa-fw fa-shirtsinbulk"></i>Planos</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/buscarquestoes')}}"><i class="fa fa-2x fa-fw fa-file"></i>Criar provas </a>
                                  
                            <li>
                                <a href="{{url('/admin/simulado')}}"><i class="fa fa-2x fa-fw fa-file"></i>Simulado</a>
                            </li>        
                                    
                            </li>
                            <li>
                                <a href="{{url('admin/clientes')}}"><i class="fa fa-2x fa-fw fa-group"></i>Clientes</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/parceiros')}}"><i class="fa fa-2x fa-fw fa-linux"></i>Parceiros</a>
                            </li>
                            <li>
                                <a href="controle"><i class="fa fa-2x fa-fw fa-cog"></i>Permissões</a>
                            </li>
                            <li>													   						
                                <a href="#"><i class="fa fa-wrench fa-fw"></i>Ver Estatisticas<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.html">Usuarios</a>
                                    </li>
                                    <li>
                                        <a href="buttons.html">Questões</a>
                                    </li>
                                    <li>
                                        <a href="notifications.html">Disciplinas</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Assuntos</a>
                                    </li>
                                    <li>
                                        <a href="icons.html">Planos</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Parcerias</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>              
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        @if( Session::has('message') )
                        <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"> ×</a>
                            {{ Session::get('message') }}
                        </div>
                        @endif

                        <h1 class="page-header">{{$pagina or 'Painel de Controle'}}</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$qtMessage or '0'}}</div>
                                        <div>Nova Mensagem!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$qtAlteracao or '0'}}</div>
                                        <div>Nova Alteração!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$qtCliente or '0'}}</div>
                                        <div>Novo Cliente!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$qtAtualizacao or '0'}}</div>
                                        <div>Nova Atualização!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver detalhes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>  
                <!-- /.row -->
                @yield('conteudo')

                <!--div class="section secondary-section">
                  <div class="triangle"></div>
                  <div class="container centered">
                      <p class="large-text">MetaEduca</p>
                      <a href="#" class="button">facebook</a>
                  </div>
              </div-->
            </div>
            <!-- /#page-wrapper --> 

        </div>
        <!-- jQuery-->
        <script src="{{url('assets/site/jquery/jquery.js')}}" type="text/javascript"></script>
        <!-- Bootstrap Core JavaScript -->
        <script  src="{{url('assets/site/bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{url('assets/site/metisMenu/metisMenu.min.js')}}" type="text/javascript"></script>

        <!-- DataTables JavaScript-->
        <script src="{{url('assets/site/datatables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
        <script src="{{url('assets/site/datatables-plugins/dataTables.bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{url('assets/site/datatables-responsive/dataTables.responsive.js')}}" type="text/javascript"></script>

        <!-- Morris Charts JavaScript-->
        <script src="{{url('assets/site/raphael/raphael.min.js')}}" type="text/javascript"></script>
        <script src="{{url('assets/site/morrisjs/morris.min.js')}}" type="text/javascript"></script>
        <script src="{{url('assets/site/data/morris-data.js')}}" type="text/javascript"></script>

        <!-- Custom Theme JavaScript-->
        <script src="{{url('assets/site/dist/js/sb-admin-2.js')}}" type="text/javascript"></script>

        <script type="text/javascript" src="{{url('js/selectdinamico.js')}}"></script>
        <script type="text/javascript" src="{{url('js/tabelas.js')}}"></script> 																		
        <!-- Page-Level Demo Scripts - Tables - Use for reference-->
        
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src=" https://cdn.datatables.net/select/1.2.2/js/dataTables.select.min.js"></script>
        <script type="text/javascript" src="public/js/selectdinamico.js"></script>
        <script type="text/javascript" src="public/js/tabelas.js"></script>
        
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

    </body>
</html>
