<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >


    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
        
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    
    <link rel="stylesheet" href="css/style.css">
    <title>Home - Yapacode</title>

    <meta name="description" content="Desarrollador de aplicaciones web y de escritorio y muy pronto desarrollador de aplicaciones móviles nativas. mis habilidades son Back-end y Front-end.">
    <meta name="keywords" content="Backend, Frontend, Developer, Developers, CSS3, HTML5, Javascript, PHP, Desarrollo">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Yapacode" />
    <meta property="og:description" content="Desarrollo de aplicaciones Web" />
    <meta property="og:image" content="http://yapacode.com/img/yapacode.jpg" />
    <meta property="og:url" content="http://yapacode.com" />
    <meta property="og:site_name" content="Yapacode" />
    <meta name="description" content="Desarrollo Web">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118407538-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118407538-1');
    </script>


  </head>
  <body>        
    <header></header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Juan Rodas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!--<span class="navbar-toggler-icon"></span>-->
                <i class="fas fa-bars"></i>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#index"><span><i class="fas fa-male"></i></span>Sobre mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about_me"><span><i class="fas fa-address-card"></i></span>Contáctame</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experience"><span><i class="fas fa-desktop"></i></span>Experiencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services"><span><i class="fas fa-code"></i></span>Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills"><span><i class="fas fa-gamepad"></i></span>Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects"><span><i class="fas fa-briefcase"></i></span>Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact"><span><i class="fas fa-envelope"></i></span>Escríbeme</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <section class="about_me" id="index">
            <img src="/img/juan.jpg" width="260" height="260" class="about_me_img">
            <div class="about_me_box">
                <h1 class="name">Juan Rodas</h1>
                <h2 class="profession">Developer</h2>
                <ul class="social_media">
                    <li><a href="https://gitlab.com/juanrodasm"><i class="fab fa-gitlab"></i></a></li>
                    <li><a href="https://github.com/juancitowillyr46"><i class="fab fa-github"></i></a></li>
                    <li><a href="https://twitter.com/wrmwilly"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/juan-rodas-127150a6/"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.facebook.com/wrmjuancito"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
        </section>

        <!--<article id="about_me">
            <header>
                <h2>Sobre mí</h2>
            </header>
            <div class="content about_me_de">
                <div class="row">
                    <div class="col-sm">
                        <img src="https://dummyimage.com/260x260/000/fff" class="about_me_img">   
                    </div>
                    <div class="col-sm">
                        <div class="about_me_box">
                            <h1 class="name">Juan Rodas</h1>
                            <h2 class="profession">Developer</h2>
                            <ul class="social_media">
                                <li><a href="#"><i class="fab fa-gitlab"></i></a></li>
                                <li><a href="#"><i class="fab fa-github"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p>Soy Juan desarrollador de aplicaciones web y de escritorio y muy pronto desarrollador de aplicaciones móviles nativas. mis habilidades son Back-end y Front-end.</p>
                        <a href="#" class="download_cv">Descargar CV</a>
                    </div>
                    <div class="col-sm">
                        <div class="content_detail">
                            <div class="box_detail">
                                <div class="box_detail_label">Edad</div><div class="box_detail_input">28 Años</div>
                            </div>
                            <div class="box_detail">
                                <div class="box_detail_label">Residencia</div><div class="box_detail_input">Lima, Perú</div>
                            </div>
                            <div class="box_detail">
                                <div class="box_detail_label">Email</div><div class="box_detail_input">juan.rodas.manez@gmail.com</div>
                            </div>
                            <div class="box_detail">
                                <div class="box_detail_label">Teléfono</div><div class="box_detail_input">943873302</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>-->

        <article id="d-index">
            <header>
                <h2>Sobre mí</h2>
            </header>
            <div class="content">
                <img src="/img/juan.jpg" width="260" height="260" class="about_me_img">
                <h1 class="name">Juan Rodas</h1>
                <h2 class="profession">Developer</h2>
                <p>Desarrollador de aplicaciones web y de escritorio y muy pronto desarrollador de aplicaciones móviles nativas. mis habilidades son Back-end y Front-end.</p>
                <ul class="social_media">
                    <li><a href="https://gitlab.com/juanrodasm"><i class="fab fa-gitlab"></i></a></li>
                    <li><a href="https://github.com/juancitowillyr46"><i class="fab fa-github"></i></a></li>
                    <li><a href="https://twitter.com/wrmwilly"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/juan-rodas-127150a6/"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.facebook.com/wrmjuancito"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
                <br><br>
                <a href="/pdf/CV-WILFREDO-RODAS-MANEZ.pdf" download class="download_cv">Descargar CV</a>

            </div>
        </article>

        <article id="about_me">
            <header>
                <h2>Sobre mí</h2>
            </header>
            <div class="content">
                <p>Soy Juan desarrollador de aplicaciones web y de escritorio y muy pronto desarrollador de aplicaciones móviles nativas. mis habilidades son Back-end y Front-end.</p>
                <a href="#" class="download_cv">Descargar CV</a>
                <div class="content_detail">
                    <div class="box_detail">
                        <div class="box_detail_label">Edad</div><div class="box_detail_input">28 Años</div>
                    </div>
                    <div class="box_detail">
                        <div class="box_detail_label">Residencia</div><div class="box_detail_input">Lima, Perú</div>
                    </div>
                    <div class="box_detail">
                        <div class="box_detail_label">Email</div><div class="box_detail_input">juan.rodas.manez@gmail.com</div>
                    </div>
                    <div class="box_detail">
                        <div class="box_detail_label">Teléfono</div><div class="box_detail_input">943873302</div>
                    </div>
                </div>
            </div>
        </article>
        <article id="experience">
            <header>
                <h2>Experiencia</h2>
            </header>
            <div class="content">
                <section id="conference-timeline">
                    <!--<div class="timeline-start">Start</div>-->
                    <div class="conference-center-line"></div>
                    <div class="conference-timeline-content">
                        <!-- Article -->
                        <div class="timeline-article">
                        <div class="content-left-container">
                            <div class="content-left">
                                <p>2008 - 2010</p>
                                <p>
                                    <a href="http://cepea.edu.pe">Educativo Cepea S.A.C</a>
                                </p>
                                <p>
                                    Inicie realizando mis prácticas profesionales, luego forme parte del equipo de Desarrollo
                                    donde comencé a desarrollar Sistemas academicos para entornos Webs.
                                </p>
                            </div>
                            <!--<span class="timeline-author">John Doe</span>-->
                        </div>
                        <!--<div class="content-right-container">
                            <div class="content-right">
                            <p>When I orbited the Earth in a spaceship, I saw for the first time how beautiful our planet is. <span class="article-number">02</span></p>
                            </div>
                            <span class="timeline-author">John Doe</span>
                        </div>-->
                        <div class="meta-date">
                            <!--<span class="date">18</span>
                            <span class="month">APR</span>-->
                        </div>
                        </div>
                        <!-- // Article -->
                        
                        <!-- Article -->
                        <div class="timeline-article">
                        <div class="content-right-container">
                            <div class="content-right">
                                <p>2011 - 2013</p>    
                                <p>
                                    <a href="https://manya.pe/">Agencia de Publicidad Manya</a>
                                </p>
                                <p>
                                    Fue aquí donde mi movitación por el Desarrollo Web fue incrementando, 
                                    conociendo nuevas tecnologías y desarrollando nuevos proyectos muy interesantes.
                                </p>
                            </div>
                            
                        </div>
                        <!--<div class="content-right-container">
                            <div class="content-right">
                            <p>When I orbited the Earth in a spaceship, I saw for the first time how beautiful our planet is. <span class="article-number">02</span></p>
                            </div>
                            <span class="timeline-author">John Doe</span>
                        </div>-->
                        <div class="meta-date">
                            <!--<span class="date">18</span>
                            <span class="month">APR</span>-->
                        </div>
                        </div>
                        <!-- // Article -->
                        
                        <!-- Article -->
                        <div class="timeline-article">
                        <div class="content-left-container">
                            <div class="content-left">
                                <p>2014 - 2017</p>    
                                <p><a href="https://www.doktuz.com/">StartUp Doktuz S.A.C</a></p>
                                <p>
                                    Aquí puse en práctica todo lo aprendido, teniendo la oportunidad de brindar mi aporte técnológico desarrollando una plataforma médica 
                                    para brindar una mejor experiencia en salud para las personas. 
                                </p>
                            </div>
                        </div>
                        <!--<div class="content-right-container">
                            <div class="content-right">
                            <p>When I orbited the Earth in a spaceship, I saw for the first time how beautiful our planet is. <span class="article-number">02</span></p>
                            </div>
                            <span class="timeline-author">John Doe</span>
                        </div>-->
                        <div class="meta-date">
                            <!--<span class="date">18</span>
                            <span class="month">APR</span>-->
                        </div>
                        </div>
                        <!-- // Article -->
                    </div>
                <!--<div class="timeline-end">End</div>-->
                </section>
            </div>
        </article>
        <article id="skills">
            <header>
                <h2>Skills</h2>
            </header>
            <div class="content">
                <div class="progress_skills">
                    <div class="progress_skills_item">
                        <p>PHP</p>
                        <div class="progress">                        
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                        </div>
                    </div>
                    <div class="progress_skills_item">
                        <p>HTML5</p>
                        <div class="progress">                        
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>
                    <div class="progress_skills_item">
                        <p>CSS3</p>
                        <div class="progress">                        
                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                        </div>
                    </div>
                    <div class="progress_skills_item">
                        <p>Javascript</p>
                        <div class="progress">                        
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                    <div class="progress_skills_item">
                        <p>SQL</p>
                        <div class="progress">                        
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                    <div class="progress_skills_item">
                        <p>Wordpress</p>
                        <div class="progress">                        
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                    </div>
                    <div class="progress_skills_item">
                        <p>jQuery</p>
                        <div class="progress">                        
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                        </div>
                    </div>
                    <div class="progress_skills_item">
                        <p>Laravel</p>
                        <div class="progress">                        
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <article id="services">
            <header>
                <h2>Servicios</h2>
            </header>
            <div class="content">
                <div class="row servicios_list">
                    <div class="col-12 col-sm servicio_item">
                        <div class="item_img"><i class="fas fa-file-code"></i></div>
                        <h3 class="item_title">Back-end</h3>
                        <p>Desarrollo de sitios webs administrables e implementación de servicios RESTful, Web Services </p>
                    </div>
                    <div class="col-12 col-sm servicio_item">
                        <div class="item_img"><i class="fas fa-file-code"></i></div>
                        <h3 class="item_title">Front-end</h3>
                        <p>Tu sitio web hecho a la medida para múltiples dispositivos</p>
                    </div>
                    <div class="col-12 col-sm servicio_item">
                        <div class="item_img"><i class="fas fa-file-code"></i></div>
                        <h3 class="item_title">Desarrollo Móvil</h3>
                        <p>Tu marca, producto o servicios en la palma de la mano de los usuarios.</p>
                    </div>
                </div>
            </div>
        </article>
        <article id="projects">
            <header>
                <h2>Proyectos</h2>
            </header>
            <div class="content">
                <div class="servicios_list projects">
                    <div class="servicio_item">
                        <div class="item_img"><a href="http://35.160.125.247/projects/konitex/"><img src="img/konitex.png" width="160" height="160" alt=""></a></div>
                        <h3 class="item_title"><a href="http://35.160.125.247/projects/konitex/">Konitex</a></h3>
                        <p>Desarrollo de landing page para la solicitud de camisetas</p>
                    </div>
                    <div class="servicio_item">
                        <div class="item_img"><a href="http://intranetehsq.ehsqgroup.com"><img src="img/cabex.png" width="160" height="160" alt=""></a></div>
                        <h3 class="item_title">EHSQ Group</h3>
                        <p>Desarrollo de intranet académico</p>
                    </div>
                    <div class="servicio_item">
                        <div class="item_img"><a href="https://www.doktuz.com/"><img src="img/dokuz.png" width="160" height="160" alt=""></a></div>
                        <h3 class="item_title"><a href="https://www.doktuz.com/">Doktuz</a></h3>
                        <p>Desarrollo de plataforma médica</p>
                    </div>

                    <div class="servicio_item">
                        <div class="item_img"><a href="http://be-you.pe/"><img src="img/beyou.png" width="160" height="160" alt=""></a></div>
                        <h3 class="item_title"><a href="http://be-you.pe/">BeYou Medical Spa</a></h3>
                        <p>Desarrollo de sitio administrable</p>
                    </div>
                    <div class="servicio_item">
                        <div class="item_img"><img src="img/abbril.png" alt=""></div>
                        <h3 class="item_title">Abbril</h3>
                        <p>Desarrollo de landing page administrable</p>
                    </div>
                </div>
            </div>
        </article>
        <article id="contact">
            <header>
                <h2>Contacto</h2>
            </header>
            <div class="content">
                <p>Duda, comentario y/o sugerencia escríbeme y con gusto te responderé :)</p>
                <form action="submit.php" class="contact" method="POST">
                    <div class="form-group">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="comment" class="form-control" cols="30" rows="10" placeholder="Comentario"></textarea>
                    </div> 
                    <button type="submit" class="btn btn-primary">Enviar</button>   
                </form>
            </div>
        </article>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Muchas Gracias por contactarte conmigo ;)
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script>
    $(document).ready(function(){
        <?php if($_GET){ ?>
        $('#myModal').modal();
        <?php } ?>
        $('.projects').slick();

        var delay = 300;
        $(".progress-bar").each(function(i){
            $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );
        
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: delay,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now)+'%');
                }
            });
        });

        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();
            
            $('.navbar-collapse.show').collapse('hide');
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 60
                
            }, 500, function(){
                
            });

            $(".progress-bar").each(function(i){
                $(this).delay( delay*i ).animate( { width: 0 + '%' }, delay );
            
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: delay,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now)+'%');
                    }
                });
            });

            if($.attr(this, 'href') == '#skills'){
                var delay = 300;
                $(".progress-bar").each(function(i){
                    $(this).delay( delay*i ).animate( { width: $(this).attr('aria-valuenow') + '%' }, delay );
                
                    $(this).prop('Counter',0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: delay,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now)+'%');
                        }
                    });
                });
            }
        });


         $(".contact").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages:{
                name: {
                    required: 'Es necesario saber tu nombre para conocerte mejor',
                },
                email: {
                    required: 'Para comunicarnos es necesario saber tu correo electrónico',
                    email: 'El correo que ingresaste al parecer no es el correcto'
                }
            }

         }); 

    });
    </script>
    
  </body>
</html>