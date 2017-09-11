<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="assets/site/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/site/bootstrap/js/bootstrap.min.js"></script>
        <link href="assets/site/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{{url('assets/site/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="assets/site/dist/css/sb-admin-2.min.css" rel="stylesheet" type="text/css">
        <link href="assets/site/morrisjs/morris.css" rel="stylesheet">
    </head>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-11">
                        <a href="index"><img src="{{url('assets/site/img/img1.png')}}" class="img-responsive img-thumbnail"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-default navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="lead nav navbar-left navbar-nav" id="Planos">
                        <li id="home" class="active">
                            <a href="index"><b>Home</b></a>
                        </li>
                        <li class="" id="planos">
                            <a href="planos"><b>Planos</b></a>
                        </li>
                        <li id="sobre">
                            <a href="sobre">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-11">


                        @yield('conteudo')


                    </div>
                 </div>
            </div>
        </div>
        <br><br><br>
        <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>LogoeWeb</h1>
                        <p>Disponibilize aos professores de sua instituição uma ferramenta para elaboração
                            de avaliações com qualidade e rapidez.</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-info text-right">
                            <br>
                            <br>
                        </p>
                        <div class="row">
                            <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 hidden-xs text-right">
                                <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

