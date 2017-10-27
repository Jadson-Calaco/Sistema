@extends('site.template.template')

@section('conteudo')

<!-- Start home section -->
<div id="home">
    <!-- Start cSlider -->
    <div id="da-slider" class="da-slider">
        <div class="triangle"></div>
        <!-- mask elemet use for masking background image -->
        <div class="mask"></div>
        <!-- All slides centred in container element -->
        <div class="container">
            <!-- Start first slide -->
            @foreach($principal as $principal)
            <div class="da-slide">
                <h2 class="fittext2">{{$principal->titulo}}</h2>

                <!--h4>Clean & responsive</h4-->
                <p>{{$principal->descricao}}</p>
                <a href="#" class="da-link button">Consulte Mais informação</a>

                <div class="da-img">
                    <img src="{{$principal->imagem}}" width="320" alt="image03">
                </div>
            </div>
            @endforeach
            <!-- Start third slide -->
            <!-- Start cSlide navigation arrows -->
            <div class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </div>
            <!-- End cSlide navigation arrows -->
        </div>
    </div>
</div>
<!-- End home section -->
<!-- Service section start -->
<div class="section primary-section" id="service">
    <div class="container">
        <!-- Start title section -->
        <div class="title">
            <h1>Nossos Serviços</h1>
            <!-- Section's title goes here -->
            <p>Adquira um dos nossos serviços personalizados.</p>
            <!--Simple description for section goes here. -->
        </div>
        <div class="row-fluid">
            @foreach($servico as $servico)
            <div class="span4">
                <div class="centered service">
                    <div class="circle-border zoom-in">
                        <img class="img-circle" src="{{$servico->imagem}}" alt="service 1">
                    </div>
                    <h3>{{$servico->titulo}}</h3>
                    <p>{{$servico->descricao}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service section end -->
<!-- Portfolio section start -->
<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            <h1>Tutorial</h1>
            <p>Este tutorial tem por finalidade explicar detalhadamente o site Meta Educa.</p>
            <p>Acreditamos que com ele todos poderão navegar e utilizar os recursos disponíveis na plataforma.</p>
        </div>
        <ul class="nav nav-pills">
            <li class="filter" data-filter="all">
                <a href="#noAction">All</a>
            </li>
            <li class="filter" data-filter="web">
                <a href="#noAction">Web</a>
            </li>
            <li class="filter" data-filter="photo">
                <a href="#noAction">Photo</a>
            </li>
            <li class="filter" data-filter="identity">
                <a href="#noAction">Identity</a>
            </li>
        </ul>
        <!-- Start details for portfolio project 1 -->
        <div id="single-project">
            <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio01.png" alt="project 1" />
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Webste for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be successful or happy.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 1 -->
            <!-- Start details for portfolio project 2 -->
            <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio02.png" alt="project 2">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Webste for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>Life is a song - sing it. Life is a game - play it. Life is a challenge - meet it. Life is a dream - realize it. Life is a sacrifice - offer it. Life is love - enjoy it.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 2 -->
            <!-- Start details for portfolio project 3 -->
            <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio03.png" alt="project 3">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Webste for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>How far you go in life depends on your being tender with the young, compassionate with the aged, sympathetic with the striving and tolerant of the weak and strong. Because someday in your life you will have been all of these.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 3 -->
            <!-- Start details for portfolio project 4 -->
            <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio04.png" alt="project 4">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Project for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>Life's but a walking shadow, a poor player, that struts and frets his hour upon the stage, and then is heard no more; it is a tale told by an idiot, full of sound and fury, signifying nothing.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 4 -->
            <!-- Start details for portfolio project 5 -->
            <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio05.png" alt="project 5">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Webste for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>We need to give each other the space to grow, to be ourselves, to exercise our diversity. We need to give each other space so that we may both give and receive such beautiful things as ideas, openness, dignity, joy, healing, and inclusion.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 5 -->
            <!-- Start details for portfolio project 6 -->
            <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio06.png" alt="project 6">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Webste for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>I went to the woods because I wished to live deliberately, to front only the essential facts of life, and see if I could not learn what it had to teach, and not, when I came to die, discover that I had not lived.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 6 -->
            <!-- Start details for portfolio project 7 -->
            <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio07.png" alt="project 7">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Webste for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>Always continue the climb. It is possible for you to do whatever you choose, if you first get to know who you are and are willing to work with a power that is greater than ourselves to do it.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 7 -->
            <!-- Start details for portfolio project 8 -->
            <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio08.png" alt="project 8">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Webste for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>What if you gave someone a gift, and they neglected to thank you for it - would you be likely to give them another? Life is the same way. In order to attract more of the blessings that life has to offer, you must truly appreciate what you already have.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 8 -->
            <!-- Start details for portfolio project 9 -->
            <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="assets/layout/images/Portfolio09.png" alt="project 9">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>Webste for Some Client</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>Some Client Name</div>
                            <div>
                                <span>Date</span>July 2013</div>
                            <div>
                                <span>Skills</span>HTML5, CSS3, JavaScript</div>
                            <div>
                                <span>Link</span>http://examplecomp.com</div>
                        </div>
                        <p>I learned that we can do anything, but we can't do everything... at least not at the same time. So think of your priorities not in terms of what activities you do, but when you do them. Timing is everything.</p>
                    </div>
                </div>
            </div>
            <!-- End details for portfolio project 9 -->
            <ul id="portfolio-grid" class="thumbnails row">
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio01.png" alt="project 1">
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <li class="span4 mix photo">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio02.png" alt="project 2">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <li class="span4 mix identity">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio03.png" alt="project 3">
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio04.png" alt="project 4">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <li class="span4 mix photo">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio05.png" alt="project 5">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <li class="span4 mix identity">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio06.png" alt="project 6">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio07.png" alt="project 7" />
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv6">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <li class="span4 mix photo">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio08.png" alt="project 8">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
                <li class="span4 mix identity">
                    <div class="thumbnail">
                        <img src="assets/layout/images/Portfolio09.png" alt="project 9">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>Thumbnail label</h3>
                        <p>Thumbnail caption...</p>
                        <div class="mask"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Portfolio section end -->
<!-- Client section start -->
<!-- Client section start -->
<!--div id="clients">
    <div class="section primary-section">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>What Client Say?</h1>
                <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
            </div>
            <div class="row">
                <div class="span4">
                    <div class="testimonial">
                        <p>"I've worked too hard and too long to let anything stand in the way of my goals. I will not let my teammates down and I will not let myself down."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="assets/layout/images/Client1.png" class="centered" alt="client 1">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="testimonial">
                        <p>"In motivating people, you've got to engage their minds and their hearts. I motivate people, I hope, by example - and perhaps by excitement, by having productive ideas to make others feel involved."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="assets/layout/images/Client2.png" class="centered" alt="client 2">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="testimonial">
                        <p>"Determine never to be idle. No person will have occasion to complain of the want of time who never loses any. It is wonderful how much may be done if we are always doing."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="assets/layout/images/Client3.png" class="centered" alt="client 3">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
            <p class="testimonial-text">
                "Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away"
            </p>
        </div>
    </div>
</div-->
<!-- Price section start -->
<div id="price" class="section secondary-section">
    <div class="container">
        <div class="title">
            <h1>Planos</h1>
            <p> Adquira seu plano, é fácil, rápido e seguro !</p>
        </div>
        <div class="price-table row-fluid">
         @foreach($planos as $planos)
            <div class="span3 price-column">
                <h3>{{$planos->nome_plano}}</h3>
                <ul class="list">
                    <li class="huge"><strong>{{$planos->quant_questao}}</strong> Questões</li>
                    <li><strong>{{$planos->quant_mes}}</strong></li>
                    <li>{{$planos->valor}}</li> 
                </ul>
                <a href="cadastro?id={{$planos->id}}" class="button button-ps">Comprar</a>
            </div>
          @endforeach 
        </div>
        <div class="centered">
            <p class="price-text">Nós oferecemos planos personalizados. Contacte-nos para mais informações.</p>
            <a href="#contact" class="button">Contacte-nos</a>
        </div>
    </div>
</div>
<!-- Price section end -->
<!-- Newsletter section start -->
<div class="section third-section">
    <div class="container newsletter">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3>Boletim de Notícias</h3>
                </div>
            </div>
        </div>
        <div id="success-subscribe" class="alert alert-success invisible">
            <strong> Você inscreve-se com sucesso !!</strong></div>
        <div class="row-fluid">
            <div class="span5">
                <p>Cadastre-se para receber ofertas exclusivas e lançamentos do nosso site.</p>
            </div>
            <div class="span7">
                <form class="inline-form" method="post" action="{{ url('/emailNoticias')}}">
                    {!!csrf_field()!!}
                    <input type="email" name="email" id="nlmail" class="span8" placeholder="Digite seu email" required />
                    <button id="btemail" class="button button-sp">Inscreva-se</button>
                </form>
                <div id="err-subscribe" class="error centered">Forneça um endereço de e-mail válido.</div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter section end -->
<!-- Contact section start -->
<div id="contact" class="contact">
    <div class="section secondary-section">
        <div class="container">
            <div class="title">
                <h1>Contatos</h1>
                <p>Entre em contato para solucionar dúvidas, solicitar suporte ou informações específicas sobre nossos planos e serviços.</p>
            </div>
        </div>
        <div class="map-wrapper">
            <!--div class="map-canvas" id="map-canvas">Loading map...</div-->
            <div class="container">
                <div class="row-fluid">
                    <div class="span10 contact-form center">
                        <h3>Olá</h3>
                        <div id="successSend" class="alert alert-success invisible">
                            <strong>Sua mensagem foi enviada.</strong></div>
                        <div id="errorSend" class="alert alert-error invisible">Ocorreu um erro</div>
                        <form id="contact-form" method="post" action="{{ url('/emailDuvidas')}}">
                            {!!csrf_field()!!}
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="text" id="name" name="name" placeholder="* Seu nome..." />
                                    <div class="error left-align" id="err-name">Digite seu nome.</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input class="span12" type="email" name="email" id="email" placeholder="* Seu email..." />
                                    <div class="error left-align" id="err-email">Digite um endereço de email válido</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <textarea class="span12" name="comment" id="comment" placeholder="* Comentário..."></textarea>
                                    <div class="error left-align" id="err-comment">Digite seu comentário.</div>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button id="btemailDuvidas" class="message-btn">Enviar mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!--div class="span9 center contact-info">
                <p>123 Fifth Avenue, 12th,Belgrade,SRB 11000</p>
                <p class="info-mail">ourstudio@somemail.com</p>
                <p>+11 234 567 890</p>
                <p>+11 286 543 850</p>
                <div class="title">
                    <h3>Redes Sociais</h3>
                </div>
            </div-->
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
<!-- About us section start -->
<div class="section primary-section" id="about">
    <div class="triangle"></div>
    <div class="container">
        <div class="title">
            @foreach($sobre as $sobre)
            <h1>Sobre</h1>
            <p>{{$sobre->titulo}}</p>
            <p>{{$sobre->descricao}}</p>
        </div>
        @endforeach
    </div>
    <!--div class="row-fluid team">
        <div class="span4" id="first-person">
            <div class="thumbnail">
                <img src="assets/layout/images/Team1.png" alt="team 1">
                <h3>John Doe</h3>
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
                </ul>
                <div class="mask">
                    <h2>Copywriter</h2>
                    <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                </div>
            </div>
        </div>
        <div class="span4" id="second-person">
            <div class="thumbnail">
                <img src="assets/layout/images/Team2.png" alt="team 1">
                <h3>John Doe</h3>
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
                </ul>
                <div class="mask">
                    <h2>Designer</h2>
                    <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                </div>
            </div>
        </div>
        <div class="span4" id="third-person">
            <div class="thumbnail">
                <img src="assets/layout/images/Team3.png" alt="team 1">
                <h3>John Doe</h3>
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
                </ul>
                <div class="mask">
                    <h2>Photographer</h2>
                    <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                </div>
            </div>
        </div>
    </div-->
    <!--div class="about-text centered">
        <h3>Sobre nós</h3>
        <p>A Meta Educa, como é mais conhecido, foi desenvolvido para ser um gerenciador de questões que possibilitasse ao professor rapidamente elaborar suas atividades de avaliação. Hoje, contendo um banco de itens com mais de 125.000 questões. a Meta Educa é a ferramenta indispensável para esta tarefa. São contempladas as disciplinas Biologia, Espanhol, Filosofia, Física, Geografia, História, Inglês, Matemática, Português, Química e Sociologia. Há também questões para Ensino Fundamental II e para o Ensino Superior.</p>
    </div-->
    <!--h3>Skills</h3>
    <div class="row-fluid">
        <div class="span6">
            <ul class="skills">
                <li>
                    <span class="bar" data-width="80%"></span>
                    <h3>Graphic Design</h3>
                </li>
                <li>
                    <span class="bar" data-width="95%"></span>
                    <h3>Html & Css</h3>
                </li>
                <li>
                    <span class="bar" data-width="68%"></span>
                    <h3>jQuery</h3>
                </li>
                <li>
                    <span class="bar" data-width="70%"></span>
                    <h3>Wordpress</h3>
                </li>
            </ul>
        </div>
        <div class="span6">
            <div class="highlighted-box center">
                <h1>Dica !!</h1>
                <p> Disponibilize aos professores de sua instituição uma ferramenta para elaboração de avaliações com qualidade e rapidez...</p>
                <button class="button button-sp">Junte-se a nós</button>
            </div>
        </div>
    </div-->
</div>
</div>
<!-- About us section end -->
<div class="section secondary-section">
    <div class="triangle"></div>
    <div class="container centered">
        <p class="large-text">Adquira seu plano, é fácil, rápido e seguro !!</p>
        <a href="#" class="button">ADQUIRA JÁ O SEU!</a>
    </div>
</div>
@endsection

