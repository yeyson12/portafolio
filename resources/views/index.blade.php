<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{!! trans('messages.title') !!}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Yeyson Serrano" />

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/animate.css?n=1') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css?n=1') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css?n=1') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css?n=1') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css?n=1') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css?n=1') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css?n=1') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?n=1') }}">
    <script src="{{ asset('js/modernizr-2.6.2.min.js?n=1') }}"></script>
    </head>
    <body>
    <div id="colorlib-page">
        <div class="container-wrap">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
            <div class="text-center">
                <div class="author-img" style="background-image: url(images/perfil.jpg);"></div>
                <h1 id="colorlib-logo"><a href="https://www.linkedin.com/in/yeyson-serrano-32073a1bb/">{!! trans('messages.name') !!}</a></h1>
                <span class="position"><a href="https://www.linkedin.com/in/yeyson-serrano-32073a1bb/">{!! trans('messages.job') !!}</a> {!! trans('messages.in') !!} Venezuela</span>
            </div>
            <nav id="colorlib-main-menu" role="navigation" class="navbar">
                <div id="navbar" class="collapse">
                    <ul>
                        <li class="active"><a href="#" data-nav-section="home"> {!! trans('messages.home') !!}</a></li>
                        <li><a href="#" data-nav-section="about">{!! trans('messages.about') !!}</a></li>
                        <li><a href="#" data-nav-section="services">{!! trans('messages.services') !!}</a></li>
                        <li><a href="#" data-nav-section="skills">{!! trans('messages.skills') !!}</a></li>
                        <li><a href="#" data-nav-section="education">{!! trans('messages.education') !!}</a></li>
                        <li><a href="#" data-nav-section="experience">{!! trans('messages.experience') !!}</a></li>
                        <li><a href="#" data-nav-section="work">{!! trans('messages.work') !!}</a></li>
                        <li><a href="#" data-nav-section="contact">{!! trans('messages.contact') !!}</a></li>
                    </ul>
                </div>
                    <ul>
                    @if (config('locale.status') && count(config('locale.languages')) > 1)
                        <li>
                            @foreach (array_keys(config('locale.languages')) as $lang)
                                @if ($lang != App::getLocale())
                                <a href="{!! route('lang.swap', $lang) !!}" class="">
                                    @if ($lang == 'es')
                                        Español
                                    @else
                                        Ingles
                                    @endif
                                </a>
                                @endif
                            @endforeach
                        </li>
                    @endif
                    </ul>
            </nav>
            <div class="colorlib-footer">
                <p><small>&copy;
                    {!! trans('messages.copyright') !!} <script>document.write(new Date().getFullYear());</script> {!! trans('messages.allr') !!}
                     </small></p>
                    <ul>
                        <li><a href="https://www.linkedin.com/in/yeyson-serrano-32073a1bb/"><i class="icon-linkedin2"></i></a></li>
                    </ul>
            </div>
        </aside>
        <div id="colorlib-main">
            <section id="colorlib-hero" class="js-fullheight" data-section="home">
                <div class="flexslider js-fullheight">
                    <ul class="slides">
                    <li style="background-image: url(images/img_bg_1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner js-fullheight">
                                        <div class="desc">
                                            <h1>{!! trans('messages.hi') !!} <br>{!! trans('messages.im') !!} {!! trans('messages.name') !!}</h1>
                                            <h2>{!! trans('messages.profession') !!}</h2>
                                                <p>
                                                    <a onclick="miFunc()" class="btn btn-primary btn-learn">
                                                        {!! trans('messages.download') !!}
                                                        <i class="icon-download4"></i>
                                                    </a>
                                                </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
            </section>
            <section class="colorlib-about" data-section="about">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="col-md-12">
                                    <div class="about-desc">
                                        <span class="heading-meta">{!! trans('messages.aboutus') !!} </span>
                                        <h2 class="colorlib-heading">{!! trans('messages.quien') !!}</h2>
                                        <p><strong>{!! trans('messages.hi') !!} {!! trans('messages.im') !!} {!! trans('messages.name') !!} </strong> {!! trans('messages.perfil') !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                    <div class="services color-1">
                                        <span class="icon2"><i class="icon-folder"></i></span>
                                        <h3>{!! trans('messages.web') !!} {!! trans('messages.des') !!}</h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                    <div class="services color-2">
                                        <span class="icon2"><i class="icon-data"></i></span>
                                        <h3>{!! trans('messages.wd') !!}</h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                                    <div class="services color-3">
                                        <span class="icon2"><i class="icon-layers2"></i></span>
                                        <h3>{!! trans('messages.sd') !!}</h3>
                                    </div>
                                </div>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                                    <div class="services color-4">
                                        <span class="icon2"><i class="icon-phone3"></i></span>
                                        <h3>{!! trans('messages.ad') !!}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="colorlib-services" data-section="services">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">{!! trans('messages.wid') !!}</span>
                            <h2 class="colorlib-heading">{!! trans('messages.hase') !!}</h2>
                        </div>
                    </div>
                    <div class="row row-pt-md">
                        <div class="col-md-3 text-center animate-box">
                            <div class="services color-1">
                                <span class="icon">
                                    <i class="icon-folder"></i>
                                </span>
                                <div class="desc">
                                    <h3 class="text-center">{!! trans('messages.web') !!} {!! trans('messages.des') !!}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <div class="services color-2">
                                <span class="icon">
                                    <i class="icon-data"></i>
                                </span>
                                <div class="desc">
                                    <h3>{!! trans('messages.wd') !!}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <div class="services color-3">
                                <span class="icon">
                                    <i class="icon-layers2"></i>
                                </span>
                                <div class="desc">
                                    <h3>{!! trans('messages.sd') !!}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center animate-box">
                            <div class="services color-4">
                                <span class="icon">
                                    <i class="icon-phone3"></i>
                                </span>
                                <div class="desc">
                                    <h3>{!! trans('messages.ad') !!}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="colorlib-narrow-content">
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">{!! trans('messages.projects') !!}</span>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="6" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">{!! trans('messages.clients') !!}</span>
                        </div>
                        <div class="col-md-4 text-center animate-box">
                            <span class="colorlib-counter js-counter" data-from="0" data-to="3" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="colorlib-counter-label">{!! trans('messages.partners') !!}</span>
                        </div>
                    </div>
                </div>
            </div>
            <section class="colorlib-skills" data-section="skills">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">{!! trans('messages.specialty') !!}</span>
                            <h2 class="colorlib-heading animate-box">{!! trans('messages.skills') !!}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>Laravel</h3>
                                <div class="progress">
                                    <div class="progress-bar color-1" role="progressbar" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                    <span>85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>CodeIgniter</h3>
                                <div class="progress">
                                    <div class="progress-bar color-2" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                    <span>75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>API RESTful</h3>
                                <div class="progress">
                                    <div class="progress-bar color-3" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                    <span>80%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>Mysql</h3>
                                <div class="progress">
                                    <div class="progress-bar color-4" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    <span>70%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="progress-wrap">
                                <h3>JavaScript</h3>
                                <div class="progress">
                                    <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    <span>70%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>Bootstrap</h3>
                                <div class="progress">
                                    <div class="progress-bar color-6" role="progressbar" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                    <span>85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="progress-wrap">
                                <h3>Git</h3>
                                <div class="progress">
                                    <div class="progress-bar color-6" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    <span>50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="colorlib-education" data-section="education">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">{!! trans('messages.educations') !!}</span>
                            <h2 class="colorlib-heading animate-box">{!! trans('messages.educations') !!}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="fancy-collapse-panel">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">{!! trans('messages.profession') !!} 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                             <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>{!! trans('messages.educationg') !!}</p>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="colorlib-experience" data-section="experience">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">{!! trans('messages.experience') !!}</span>
                            <h2 class="colorlib-heading animate-box">{!! trans('messages.workex') !!}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                         <div class="timeline-centered">
                             <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                <div class="timeline-entry-inner">
                                   <div class="timeline-icon color-1">
                                      <i class="icon-pen2"></i>
                                   </div>
                                   <div class="timeline-label">
                                      <h2>Pronto Mowers | Full Stack Developer <span>2020-2023</span></h2>
                                      <p><strong>{!! trans('messages.tarea') !!}:</strong></p>
                                      <p>{!! trans('messages.tarea13') !!}</p>
                                      <p>{!! trans('messages.tarea14') !!}</p>
                                      <p>{!! trans('messages.tarea15') !!}</p>
                                      <p>{!! trans('messages.tarea16') !!}</p>
                                   </div>
                                </div>
                             </article>
                             <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                <div class="timeline-entry-inner">
                                   <div class="timeline-icon color-2">
                                      <i class="icon-pen2"></i>
                                   </div>
                                   <div class="timeline-label">
                                    <h2>Decofruta | Freelancer – Full Stack Developer <span>2020-2023</span></h2>
                                      <p>{!! trans('messages.tarea1') !!}</p>
                                      <p>{!! trans('messages.tarea2') !!}</p>
                                      <p>{!! trans('messages.tarea3') !!}</p>
                                      <p>{!! trans('messages.tarea4') !!}</p>
                                      <p>{!! trans('messages.tarea5') !!}</p>
                                      <p>{!! trans('messages.tarea6') !!}</p>
                                      <p>{!! trans('messages.tarea7') !!}</p>
                                      <p>{!! trans('messages.tarea8') !!}</p>
                                      <p>{!! trans('messages.tarea10') !!}</p>
                                      <p>{!! trans('messages.tarea11') !!}</p>
                                      <p>{!! trans('messages.tarea12') !!}</p>
                                      <p>{!! trans('messages.tarea13') !!}</p>
                                   </div>
                                </div>
                             </article>
                             <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                <div class="timeline-entry-inner">
                                   <div class="timeline-icon color-3">
                                      <i class="icon-pen2"></i>
                                   </div>
                                   <div class="timeline-label">
                                    <h2>Malllikeu | Full Stack Developer <span>2017-2020</span></h2>
                                      <p><strong>{!! trans('messages.tarea') !!}:</strong></p>
                                      <p>{!! trans('messages.tarea9') !!}</p>
                                      <p>{!! trans('messages.tarea10') !!}</p>
                                      <p>{!! trans('messages.tarea11') !!}</p>
                                      <p>{!! trans('messages.tarea12') !!}</p>
                                      <p>{!! trans('messages.tarea13') !!}</p>
                                      <p>{!! trans('messages.tarea14') !!}</p>
                                   </div>
                                </div>
                             </article>
                             <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                                <div class="timeline-entry-inner">
                                   <div class="timeline-icon color-none">
                                   </div>
                                </div>
                             </article>
                          </div>
                       </div>
                   </div>
                </div>
            </section>
            <section class="colorlib-work" data-section="work">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">{!! trans('messages.mywor') !!}</span>
                            <h2 class="colorlib-heading animate-box">{!! trans('messages.rewor') !!}</h2>
                        </div>
                    </div>
                    <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="col-md-12">
                            <p class="work-menu"><span><a href="#" class="active">Web</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style=" background-image: url(images/suf.png);">
                                <div class="desc">
                                    <a href="http://revistasufranquicia.com" target="_blank">
                                        <div class="con">
                                            <h3 style="color:white!important">
                                                Revista su Franquicia
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url(images/frut.png);">
                                <div class="desc">
                                    <a href="http://decofruta.com" target="_blank">
                                        <div class="con">
                                            <h3 style="color:white!important">
                                                Decofruta
                                            </h3>
                                        </div>
                                    </a> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url(images/frut.png);">
                                <div class="desc">
                                    <a href="http://decofruit.com" target="_blank">
                                        <div class="con">
                                            <h3 style="color:white!important">
                                                Decofruit
                                            </h3>
                                        </div>
                                    </a>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url(images/medi.png);">
                                <div class="desc">
                                    <a href="http://grupomediccom.com" target="_blank">
                                        <div class="con">
                                            <h3 style="color:white!important">
                                                Grupo Mediccom
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url(images/nho.png);">
                                <div class="desc">
                                    <a href="http://newhorsejeans.com" target="_blank">
                                        <div class="con">
                                            <h3 style="color:white!important">
                                                New Horse Jeans
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <div class="project" style="background-image: url(images/odre.png);">
                                <div class="desc">
                                    <a href="http://odremanyasociados.com" target="_blank">
                                        <div class="con">
                                            <h3 style="color:white!important">
                                                Odreman y Asociados
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="colorlib-contact" data-section="contact">
                <div class="colorlib-narrow-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">{!! trans('messages.git') !!}</span>
                            <h2 class="colorlib-heading"> {!! trans('messages.contact') !!}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-globe-outline"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p><a href="mailto:prioridad.25@gmail.com" target="_blank">prioridad.25@gmail.com</a></p>
                                </div>
                            </div>
                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <i class="icon-map"></i>
                                </div>
                                <div class="colorlib-text">
                                    <p>Caracas-Venezuela</p>
                                </div>
                            </div>
                            <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                <div class="colorlib-icon">
                                    <a href="https://wa.me/584167134874" target="_blank">                                    <i class="icon-phone"></i>
</a>
                                </div>
                                <div class="colorlib-text">
                                    <p><a href="https://wa.me/584167134874" target="_blank">+58 416 713 4874</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-push-1">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                    <form action="">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{!! trans('messages.namecontact') !!}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{!! trans('messages.emailcontact') !!}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{!! trans('messages.subjectcontact') !!}">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="{!! trans('messages.messagecontact') !!}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-send-message" value="{!! trans('messages.sencontact') !!} ">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
    <script type="text/javascript">
    function miFunc() {
        DownloadFile("yeyson_serrano.pdf");
    }
    function DownloadFile(fileName) {
        //Set the File URL.
        var url = window.location+"/yeyson_serrano.pdf";
        //Create XMLHTTP Request.
        var req = new XMLHttpRequest();
        req.open("GET", url, true);
        req.responseType = "blob";
        req.onload = function () {
            //Convert the Byte Data to BLOB object.
            var blob = new Blob([req.response], { type: "application/octetstream" });
            //Check the Browser type and download the File.
            var isIE = false || !!document.documentMode;
            if (isIE) {
                window.navigator.msSaveBlob(blob, fileName);
            } else {
                var url = window.URL || window.webkitURL;
                link = url.createObjectURL(blob);
                var a = document.createElement("a");
                a.setAttribute("download", fileName);
                a.setAttribute("href", link);
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
            }
        };
        req.send();
    };
    </script>
    <script src="{{ asset('js/jquery.min.js?n=1') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js?n=1') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js?n=1') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js?n=1') }}"></script>
    <script src="{{ asset('js/jquery.flexslider-min.js?n=1') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js?n=1') }}"></script>
    <script src="{{ asset('js/jquery.countTo.js?n=1') }}"></script>
    <script src="{{ asset('js/main.js?n=1') }}"></script>
    </body>
</html>

