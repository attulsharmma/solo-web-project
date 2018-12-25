<?php
if(isset($_POST['send'])){
    
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];
    $to = "attulsharmma@gmail.com";
    $email_msg = "name: " . $name . "\n";
    $email_msg .= "phone: " . $phone . "\n";
    $email_msg .= "message: " . $message . "\n";
    $headers = "From: " . $email;
    mail($to,$subject,$email_msg,$headers);
    
}
?>
<!DOCTYPE html>
<html lang="zxx">
<!--here lang is zxx bcoz in document lorem text is used
 otherwise lang should be any known language 
like en-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Atul Sharma">
    <meta name="description" content="SOLO||HTML5 ||CSS3 || JS || jQuery || Bootstrap
    This website belongs to FriskyStop owned By Atul Sharma">
    <meta name="keywords" content="Atul Sharma, FriskyStop, Friskytop, friskystop, frisky stop,HTML5,CSS3,HTML,CSS,Bootstrap Responsive Web Sites,jQuery">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>SOLO || HTML5</title>
    <!--favicon-->
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <!--ion icons-->
    <script src="https://unpkg.com/ionicons@4.4.7/dist/ionicons.js"></script>
    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <!--owl-carousel-->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <!--responsive tabs-->
    <link type="text/css" rel="stylesheet" href="css/responsive-tabs/responsive-tabs.min.css" />
    <!--magnific popup-->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="css/animate/animate.min.css">
    <!--Custom CSS-->
    
    <link rel="stylesheet" href="css/custom.css">
    <!--Responsive CSS-->
    <link rel="stylesheet" href="css/responsive.min.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="71">
    <!--Preloader-->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!--/preloader-->
    <!--Header-->
    <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">
                    <div class="navbar-header">
                        <!--Mobile Menu open button-->
                        <span id="mobile-nav-open-btn">&#9776;</span>
                        <!--/Mobile Menu open button-->
                        <!--logo-->
                        <a href="#home" class="navbar-brand">
                            <img src="img/logo/logo.png" alt="logo">
                        </a>
                        <!--/logo-->

                    </div>
                    <!--main menu-->
                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a class="smooth-scroll" href="#home">HOME</a></li>
                                <li><a class="smooth-scroll" href="#about">ABOUT</a></li>
                                <li><a class="smooth-scroll" href="#team">TEAM</a></li>
                                <li><a class="smooth-scroll" href="#services">SERVICES</a></li>
                                <li><a class="smooth-scroll" href="#portfolio">WORK </a></li>
                                <li><a class="smooth-scroll" href="#blog">BLOG</a></li>
                                <li><a class="smooth-scroll" href="#contact">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/main menu-->
                    <!--Mobile Menu-->
                    <div id="mobile-nav">
                        <!--mobile menu close button-->
                        <span id="mobile-nav-close-btn">&times;</span>
                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li><a class="smooth-scroll" href="#home">HOME </a></li>
                                <li><a class="smooth-scroll" href="#about">ABOUT</a></li>
                                <li><a class="smooth-scroll" href="#team">TEAM</a></li>
                                <li><a class="smooth-scroll" href="#services">SERVICES</a></li>
                                <li><a class="smooth-scroll" href="#portfolio">WORK </a></li>
                                <li><a class="smooth-scroll" href="#blog">BLOG</a></li>
                                <li><a class="smooth-scroll" href="#contact">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/Mobile Menu-->
                </div>
            </div>
        </nav>
    </header>
    <!--/Header-->
    <!--home-->
    <section id="home">
        <!--Background Video-->
        <video id="home-bg-video" poster="video/poster.jpg" autoplay loop muted>
            <source src="video/videomp4.mp4" type="video/mp4">
            <source src="video/videoogv.ogv" type="video/ogv">
            <source src="video/videowebm.webm" type="video/webm">
        </video>
        <!--overlay-->
        <div id="home-overlay"></div>
        <!--home content-->
        <div id="home-content">
            <div id="home-content-inner" class="text-center">
                <div id="home-heading">
                    <h1 id="home-heading-1">
                        Digital
                    </h1><br>
                    <h1 id="home-heading-2">
                        Creative <span>Agency</span>
                    </h1>
                </div>
                <div id="home-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sunt libero error ex sunt libero error ex.</p>
                </div>
                <div id="home-btn">
                    <a href="#about" title="START NOW" class="btn btn-general btn-home smooth-scroll " role="button">START NOW</a>
                </div>
            </div>
        </div>
        <!--/home content-->
        <!--ARROW DOWN-->
        <a href="#about" id="arrow-down" class="smooth-scroll animated bounce">
            <!--<i class="fas fa-angle-down"></i>-->
            <ion-icon name="ios-arrow-down"></ion-icon>
        </a>
    </section>
    <!--/#home-->
    <!--#about-->
    <section id="about">
        <!--about-01-->
        <div id="about-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <!--About left Side-->
                        <div class="col-md-6 col-sm-6 wow slideInLeft" data-wow-duration="1.5s">
                            <div id="about-left">
                                <div class="vertical-heading">
                                    <h5>Who Are We</h5>
                                    <h2>A <strong>Story</strong><br>About Us</h2>
                                </div>
                            </div>
                        </div>
                        <!--About right Side-->
                        <div class="col-md-6 col-sm-6 wow slideInRight" data-wow-duration="1.5s">
                            <div id="about-right">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi inventore fugit dolorem aperiam magni aliquam facilis dolores molestiae non nostrum. Debitis earum laborum, cupiditate mollitia at sunt ipsum, laboriosam vel quos? Molestias, at, ipsum voluptate explicabo sint vel eum doloribus consectetur praesentium in atque excepturi!</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi inventore fugit dolorem aperiam magni aliquam facilis dolores molestiae non nostrum. Debitis earum laborum, cupiditate mollitia at sunt ipsum, laboriosam vel quos? Molestias, at, ipsum voluptate explicabo sint vel eum doloribus consectetur praesentium in atque excepturi!</p>
                            </div>
                        </div>
                    </div>
                    <!--about bottom-->
                    <div class="row">
                        <div class="col-md-12 wow fadeInUp" data-wow-duration="2s">
                            <div id="about-bottom">
                                <img src="img/about/about.jpg" alt="mac desk" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/about-01-->
        <!--about-02-->
        <div id="about-02">
            <div class="content-box-md">
                <div class="container">
                    <div class="row">
                        <!--about 02-01-->
                        <div class="col-md-4 col-sm-4 wow fadeInLeft" data-wow-duration="1.5s">
                            <div class="about-item text-center">
                                <i class="fas fa-rocket "></i>
                                <h3>Mission</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eveniet quas officia perspiciatis facere ad possimus id dolore magni explicabo!</p>
                            </div>
                        </div>
                        <!--/about 02-01-->
                        <!--about 02-02-->
                        <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="1.5s">
                            <div class="about-item text-center">
                                <i class="fas fa-eye "></i>
                                <h3>Vision</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eveniet quas officia perspiciatis facere ad possimus id dolore magni explicabo!</p>
                            </div>
                        </div>
                        <!--/about 02-02-->
                        <!--about 02-03-->
                        <div class="col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1.5s">
                            <div class="about-item text-center">
                                <i class="fas fa-pencil-alt"></i>
                                <h3>Passion</h3>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis in accusamus sequi, quo velit inventore harum, iure sint tempore sapiente
                                    explicabo!.</p>
                            </div>
                        </div>
                        <!--/about 02-03-->
                    </div>
                </div>
            </div>
        </div>
        <!--/about-02-->
    </section>
    <!--/#about-->
    <!--team-->
    <section id="team">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 wow slideInLeft" data-wow-duration="1.5s">
                        <div id="team-left">
                            <div class="vertical-heading">
                                <h5>Who Are We</h5>
                                <h2>Meet Our <br><strong>Talented</strong> Team</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis voluptatibus similique recusandae minima. Voluptatibus beatae iste dolorem illum ex, maxime molestiae hic, itaque animi vitae, non, commodi atque excepturi labore.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow slideInRight" data-wow-duration="1.5s">
                        <div id="team-members" class="owl-carousel owl-theme">
                            <!--member 1-->
                            <div class="team-member">
                                <img src="img/team/team-member-1.jpg" alt="team-member" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Atul Sharma</h6>
                                        <p>Web Designer</p>
                                        <ul class="social-list">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/member 1-->
                            <!--member 2-->
                            <div class="team-member">
                                <img src="img/team/team-member-2.jpg" alt="team-member" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>May Davis</h6>
                                        <p>Web Designer</p>
                                        <ul class="social-list">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/member 2-->
                            <!--member 3-->
                            <div class="team-member">
                                <img src="img/team/team-member-3.jpg" alt="team-member" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Tony Brown</h6>
                                        <p>Web Designer</p>
                                        <ul class="social-list">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/member 3-->
                            <!--member 4-->
                            <div class="team-member">
                                <img src="img/team/team-member-4.jpg" alt="team-member" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>John Williams</h6>
                                        <p>Graphic Designer</p>
                                        <ul class="social-list">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/member 4-->
                            <!--member 5-->
                            <div class="team-member">
                                <img src="img/team/team-member-5.jpg" alt="team-member" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Serena Williams</h6>
                                        <p>Web Designer</p>
                                        <ul class="social-list">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/member 5-->
                            <!--member 6-->
                            <div class="team-member">
                                <img src="img/team/team-member-6.jpg" alt="team-member" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Isabella Brown</h6>
                                        <p>Database Manager</p>
                                        <ul class="social-list">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/member 6-->
                        </div>
                    </div>
                </div>
                <div id="progress-elements" class="wow fadeInUp" data-wow-duration="1.5s">
                    <!--Progress Bar-->
                    <div class="row ">
                        <div class="col-md-6 col-sm-6">
                            <!--Skill 01-->
                            <div class="skill">
                                <h4>Web Designing</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                        <span>95%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!--Skill 02-->
                            <div class="skill">
                                <h4>Graphic Designing</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                        <span>75%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!--Skill 03-->
                            <div class="skill">
                                <h4>Database Management</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                        <span>85%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!--Skill 04-->
                            <div class="skill">
                                <h4>Digital Marketing</h4>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/team-->
    <!--statement-->
    <section id="statement">
        <div class="content-box-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeIn" data-wow-duration="2s">
                        <div id="tech-statement" class="text-center">
                            <h3><i class="fas fa-quote-left"></i>We design and develop for customers of all sizes,<br> specializing in creating modern, stylish websites.<i class="fas fa-quote-right"></i></h3>
                            <p>-Olivia Johnson-</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/statement-->
    <!--Services-->
    <section id="services">
        <!--services part 1-->
        <div id="services-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="horizontal-heading wow slideInDown" data-wow-duration="1.5s">
                                <h5>What We Do</h5>
                                <h2>Our Services</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-7 wow slideInLeft" data-wow-duration="1.5s">
                            <img src="img/services/services-01-left.jpg" alt="services" class="img-responsive">
                        </div>
                        <div class="col-md-5 col-sm-5 wow slideInRight" data-wow-duration="1.5s">
                            <!--service  01-01-->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 ">
                                        <div class="icon text-right">
                                            <i class="fas fa-paint-brush"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <h5>Service 01</h5>
                                        <h4>Web Designing</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptate incidunt vel recusandae quo architecto, sapiente aliquam culpa consequuntur expedita quibusdam accusamus, iure veritatis, obcaecati enim quia dolorum officia rerum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/service  01-01-->
                            <!--service  01-02-->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <div class="icon text-right">
                                            <i class="fas fa-laptop"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <h5>Service 02</h5>
                                        <h4>Web Development</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptate incidunt vel recusandae quo architecto, sapiente aliquam culpa consequuntur expedita quibusdam accusamus, iure veritatis, obcaecati enim quia dolorum officia rerum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/service  01-02-->
                            <!--service  01-03-->
                            <div class="service">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2">
                                        <div class="icon text-right">
                                            <i class="far fa-paper-plane"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <h5>Service 03</h5>
                                        <h4>Digital Marketing</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptate incidunt vel recusandae quo architecto, sapiente aliquam culpa consequuntur expedita quibusdam accusamus, iure veritatis, obcaecati enim quia dolorum officia rerum.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/service 01-03-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/services 01-->
        <!--services 02-->
        <div id="services-02">
            <div class="content-box-md">
                <div id="services-tabs">
                    <ul class="text-center">
                        <li><a href="#service-tab-1">Creativity</a></li>
                        <li><a href="#service-tab-2">Strategy</a></li>
                        <li><a href="#service-tab-3">Design</a></li>
                        <li><a href="#service-tab-4">Development</a></li>
                    </ul>
                    <!--service-tab-1-->
                    <div id="service-tab-1" class="service-tab">
                        <div class="container">
                            <div class="rows">
                                <div class="col-md-6">
                                    <img src="img/services/services-tab-01.jpg" alt="creativity" class="img-responsive">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>01</h2>
                                        <h3>Get More From Life with Creativity</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere eveniet tenetur non voluptas, placeat illo perspiciatis repudiandae excepturi impedit doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ad?</p>
                                        <div id="services-02-btn-01">
                                            <a href="#services" title="GET IN TOUCH" class="btn btn-general btn-yellow" role="button">GET IN TOUCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/service-tab-1-->
                    <!--service-tab-2-->
                    <div id="service-tab-2" class="service-tab">
                        <div class="container">
                            <div class="rows">
                                <div class="col-md-6">
                                    <img src="img/services/services-tab-02.jpg" class="img-responsive" alt="strategy">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>02</h2>
                                        <h3>The Home Of Strategy</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere eveniet tenetur non voluptas, placeat illo perspiciatis repudiandae excepturi impedit doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ad?</p>
                                        <div id="services-02-btn-02">
                                            <a href="#services" title="GET IN TOUCH" class="btn btn-general btn-yellow" role="button">GET IN TOUCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/service-tab-2-->
                    <!--service-tab-3-->
                    <div id="service-tab-3" class="service-tab">
                        <div class="container">
                            <div class="rows">
                                <div class="col-md-6">
                                    <img src="img/services/services-tab-03.jpg" alt="Design" class="img-responsive">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>03</h2>
                                        <h3>Design To Play It Safe</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere eveniet tenetur non voluptas, placeat illo perspiciatis repudiandae excepturi impedit doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ad?</p>
                                        <div id="services-02-btn-03">
                                            <a href="#services" title="GET IN TOUCH" class="btn btn-general btn-yellow" role="button">GET IN TOUCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/service-tab-3-->
                    <!--service-tab-4-->
                    <div id="service-tab-4" class="service-tab">
                        <div class="container">
                            <div class="rows">
                                <div class="col-md-6">
                                    <img src="img/services/services-tab-04.jpg" alt="development" class="img-responsive">
                                </div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>04</h2>
                                        <h3>From Our Development To Yours</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere eveniet tenetur non voluptas, placeat illo perspiciatis repudiandae excepturi impedit doloremque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ad?</p>
                                        <div id="services-02-btn-04">
                                            <a href="#services" title="GET IN TOUCH" class="btn btn-general btn-yellow" role="button">GET IN TOUCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/service-tab-4-->
                </div>
            </div>
        </div>
        <!--/services 02-->
    </section>
    <!--/Services-->
    <!--Work portfolio-->
    <section id="portfolio">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow slideInLeft" data-wow-duration="1.5s">
                        <div class="vertical-heading">
                            <h5>Find Out Work</h5>
                            <h2>Our Amazing <br><strong>Work</strong></h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!--portfolio filter controls-->
                        <div id="isotope-controls">
                            <button data-filter="*" class="btn active"><span>All</span></button>
                            <button data-filter=".logo" class="btn"><span>LOGO</span></button>
                            <button data-filter=".web" class="btn"><span>WEB</span></button>
                            <button data-filter=".mobile" class="btn"><span>MOBILE</span></button>
                            <button data-filter=".desktop" class="btn"><span>DESKTOP</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--porfolio-item wrapper-->
            <section id="portfolio-wrapper" class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div id="isotope-container">
                            <div class="col-md-3 col-sm-6 col-xs-12 desktop">
                                <!--portfolio-item 01-->
                                <div class="portfolio-item">
                                    <a href="img/portfolio/portfolio-item-01.jpg" title="Logo Designing">
                                        <img src="img/portfolio/portfolio-item-01.jpg" alt="portfolio-item-01" class="img-responsive filtr-item" data-category="1">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!--item-header-->
                                                <h3>Logo</h3>
                                                <!--/item-header-->
                                                <!--item-strips-->
                                                <span></span>
                                                <!--/item-strips-->
                                                <!--item-description-->
                                                <p>Desktop and Design</p>
                                                <!--/item-description-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/portfolio-item 01 -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web ">
                                <!--portfolio-item 02-->
                                <div class="portfolio-item">
                                    <a href="img/portfolio/portfolio-item-02.jpg" title="Description Goes here">
                                        <img src="img/portfolio/portfolio-item-02.jpg" alt="portfolio-item-02" class="img-responsive">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!--item-header-->
                                                <h3>PhotoShop</h3>
                                                <!--/item-header-->
                                                <!--item-strips-->
                                                <span></span>
                                                <!--/item-strips-->
                                                <!--item-description-->
                                                <p>Web Design And illustration</p>
                                                <!--/item-description-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/portfolio-item 02 -->
                            </div>
                            <div class="col-md-3 col-xs-12 mobile logo web col-sm-6">
                                <!--portfolio-item 03-->
                                <div class="portfolio-item">
                                    <a href="img/portfolio/portfolio-item-03.jpg" title="Description Goes here">
                                        <img src="img/portfolio/portfolio-item-03.jpg" alt="portfolio-item-03" class="img-responsive">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!--item-header-->
                                                <h3>Web Design</h3>
                                                <!--/item-header-->
                                                <!--item-strips-->
                                                <span></span>
                                                <!--/item-strips-->
                                                <!--item-description-->
                                                <p>Video,Web</p>
                                                <!--/item-description-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/portfolio-item 03 -->
                            </div>
                            <div class="col-md-3 col-xs-12 logo web col-sm-6">
                                <!--portfolio-item 04-->
                                <div class="portfolio-item">
                                    <a href="img/portfolio/portfolio-item-04.jpg" title="Description Goes here">
                                        <img src="img/portfolio/portfolio-item-04.jpg" alt="portfolio-item-04" class="img-responsive">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!--item-header-->
                                                <h3>Logo</h3>
                                                <!--/item-header-->
                                                <!--item-strips-->
                                                <span></span>
                                                <!--/item-strips-->
                                                <!--item-description-->
                                                <p>Desktop and Design</p>
                                                <!--/item-description-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/portfolio-item 04 -->
                            </div>
                            <div class="col-md-3 col-xs-12 mobile logo col-sm-6">
                                <!--portfolio-item 05-->
                                <div class="portfolio-item">
                                    <a href="img/portfolio/portfolio-item-05.jpg" title="Description Goes here">
                                        <img src="img/portfolio/portfolio-item-05.jpg" alt="portfolio-item-05" class="img-responsive">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!--item-header-->
                                                <h3>PhotoShop</h3>
                                                <!--/item-header-->
                                                <!--item-strips-->
                                                <span></span>
                                                <!--/item-strips-->
                                                <!--item-description-->
                                                <p>Web Design And illustration</p>
                                                <!--/item-description-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/portfolio-item 05 -->
                            </div>
                            <div class="col-md-3 col-xs-12 desktop web col-sm-6 ">
                                <!--portfolio-item 06-->
                                <div class="portfolio-item">
                                    <a href="img/portfolio/portfolio-item-06.jpg" title="Description Goes here">
                                        <img src="img/portfolio/portfolio-item-06.jpg" alt="portfolio-item-06" class="img-responsive">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!--item-header-->
                                                <h3>Logo</h3>
                                                <!--/item-header-->
                                                <!--item-strips-->
                                                <span></span>
                                                <!--/item-strips-->
                                                <!--item-description-->
                                                <p>Desktop and Design</p>
                                                <!--/item-description-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/portfolio-item 06 -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 mobile">
                                <!--portfolio-item 07-->
                                <div class="portfolio-item">
                                    <a href="img/portfolio/portfolio-item-07.jpg" title="Description Goes here">
                                        <img src="img/portfolio/portfolio-item-07.jpg" alt="portfolio-item-07" class="img-responsive">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!--item-header-->
                                                <h3>PhotoShop</h3>
                                                <!--/item-header-->
                                                <!--item-strips-->
                                                <span></span>
                                                <!--/item-strips-->
                                                <!--item-description-->
                                                <p>Web Design And illustration</p>
                                                <!--/item-description-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/portfolio-item 07 -->
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 desktop">
                                <!--portfolio-item 08-->
                                <div class="portfolio-item">
                                    <a href="img/portfolio/portfolio-item-08.jpg" title="Description Goes here">
                                        <img src="img/portfolio/portfolio-item-08.jpg" alt="portfolio-item-08" class="img-responsive">
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <!--item-header-->
                                                <h3>Mobile Design</h3>
                                                <!--/item-header-->
                                                <!--item-strips-->
                                                <span></span>
                                                <!--/item-strips-->
                                                <!--item-description-->
                                                <p>Video,Web</p>
                                                <!--/item-description-->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--/portfolio-item 08 -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/porfolio-item wrapper-->
        </div>
    </section>
    <!--/Work portfolio-->
    <!--Testimonials Section-->
    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 wow slideInLeft" data-wow-duration="1.5s">
                    <div class="vertical-heading">
                        <h5>Who Are We</h5>
                        <h2>What our<br><strong>Customers </strong>Say</h2>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 wow fadeIn" data-wow-duration="2.5s">
                    <div id="testimonials-slider" class="owl-carousel owl-theme">
                        <!--testimonial 01-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <div class="stars"><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <!--<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>-->
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur expedita excepturi eius blanditiis. Aspernatur, maiores fuga fugiat quidem? Qui tempore alias eligendi placeat, reiciendis fugit sit obcaecati dignissimos eos asperiores!</p>
                            <div class="author">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="img/testimonials/test1.jpg" alt="testimonial" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-designation">
                                            <p>Sameer Kapoor</p>
                                            <p>Senior Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/testimonial 01-->
                        <!--testimonial 02-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right col-xs-6">
                                    <div class="stars"><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <!--<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>-->
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur expedita excepturi eius blanditiis. Aspernatur, maiores fuga fugiat quidem? Qui tempore alias eligendi placeat, reiciendis fugit sit obcaecati dignissimos eos asperiores!</p>
                            <div class="author">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="img/testimonials/test2.jpg" alt="testimonial" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-designation">
                                            <p>Ramesh Kumar</p>
                                            <p>Senior Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/testimonial 02-->
                        <!--testimonial 03-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right col-xs-6">
                                    <div class="stars"><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <!--<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>-->
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur expedita excepturi eius blanditiis. Aspernatur, maiores fuga fugiat quidem? Qui tempore alias eligendi placeat, reiciendis fugit sit obcaecati dignissimos eos asperiores!</p>
                            <div class="author">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="img/testimonials/test3.jpg" alt="testimonial" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-designation">
                                            <p>Aarushi Sharma</p>
                                            <p>Database Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/testimonial 03-->
                        <!--testimonial 04-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    <div class="stars"><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <!--<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>-->
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur expedita excepturi eius blanditiis. Aspernatur, maiores fuga fugiat quidem? Qui tempore alias eligendi placeat, reiciendis fugit sit obcaecati dignissimos eos asperiores!</p>
                            <div class="author">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="img/testimonials/test4.jpg" alt="testimonial" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-designation">
                                            <p>Lakshit Kapoor</p>
                                            <p>Junior Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/testimonial 04-->
                        <!--testimonial 05-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right col-xs-6">
                                    <div class="stars"><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <!--<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>-->
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur expedita excepturi eius blanditiis. Aspernatur, maiores fuga fugiat quidem? Qui tempore alias eligendi placeat, reiciendis fugit sit obcaecati dignissimos eos asperiores!</p>
                            <div class="author">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="img/testimonials/test5.jpg" alt="testimonial" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-designation">
                                            <p>Jayesh Thakur</p>
                                            <p>Senior Graphic Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/testimonial 05-->
                        <!--testimonial 06-->
                        <div class="testimonial">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3>Quality Support</h3>
                                </div>
                                <div class="col-md-6 text-right col-sm-6 col-xs-6">
                                    <div class="stars"><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <!--<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>
									<ion-icon name="star"></ion-icon>-->
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur expedita excepturi eius blanditiis. Aspernatur, maiores fuga fugiat quidem? Qui tempore alias eligendi placeat, reiciendis fugit sit obcaecati dignissimos eos asperiores!</p>
                            <div class="author">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-6">
                                        <img src="img/testimonials/test6.jpg" alt="testimonial" class="img-responsive img-circle">
                                    </div>
                                    <div class="col-md-10 col-sm-3 col-xs-6">
                                        <div class="author-name-designation">
                                            <p>Bhavin Malhotra</p>
                                            <p>Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/testimonial 06-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Testimonial Section-->
    <!--Pricing Tables-->
    <section id="pricing">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center wow slideInDown" data-wow-duration="1.5s" data-wow-offset="100">
                        <div class="horizontal-heading">
                            <h5>Lovely Customers</h5>
                            <h2>Our Pricing</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 wow fadeInLeft">
                        <!--First Pricing Table-->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Basic</h4>
                            </div>
                            <div class="price">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>29<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <div class="price-description">
                                            <p>You will get all the awesome services with this great price. Get it Now!!!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="package">
                                <li><i class="fas fa-check"></i>Full Access</li>
                                <li><i class="fas fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fas fa-check"></i>Powerfull Admin Panel</li>
                                <li><i class="fas fa-check"></i>Email Accounts</li>
                                <li><i class="fas fa-check"></i>10 Free Websites</li>
                            </ul>
                            <div id="pricing-02-btn-01">
                                <a href="#" title="Get Started" class="btn btn-general btn-yellow" role="button">Get Started</a>
                            </div>
                        </div>
                        <!--/First Pricing Table-->
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="1.5s">
                        <!--Second Pricing Table-->
                        <div class="pricing-table black">
                            <div class="type">
                                <h4>Unlimited</h4>
                            </div>
                            <div class="price">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>57<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <div class="price-description">
                                            <p>You will get all the awesome services with this great price. Get it Now!!!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="package">
                                <li><i class="fas fa-check"></i>Full Access</li>
                                <li><i class="fas fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fas fa-check"></i>Powerfull Admin Panel</li>
                                <li><i class="fas fa-check"></i>Email Accounts</li>
                                <li><i class="fas fa-check"></i>10 Free Websites</li>
                            </ul>
                            <div id="pricing-02-btn-02">
                                <a href="#" title="Get Started" class="btn btn-general btn-white" role="button">Get Started</a>
                            </div>
                        </div>
                        <!--/Second Pricing Table-->
                    </div>
                    <div class="col-md-4 col-sm-4 wow fadeInRight">
                        <!--Third Pricing Table-->
                        <div class="pricing-table">
                            <div class="type">
                                <h4>Professional</h4>
                            </div>
                            <div class="price">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <h2><span class="dollar">&#36;</span>96<br><span class="month">Month</span></h2>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                        <div class="price-description">
                                            <p>You will get all the awesome services with this great price. Get it Now!!!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="package">
                                <li><i class="fas fa-check"></i>Full Access</li>
                                <li><i class="fas fa-check"></i>Unlimited Bandwidth</li>
                                <li><i class="fas fa-check"></i>Powerfull Admin Panel</li>
                                <li><i class="fas fa-check"></i>Email Accounts</li>
                                <li><i class="fas fa-check"></i>10 Free Websites</li>
                            </ul>
                            <div id="pricing-02-btn-03">
                                <a href="#" title="Get Started" class="btn btn-general btn-yellow" role="button">Get Started</a>
                            </div>
                        </div>
                        <!--/Third pricing table-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Pricing Tables-->
    <!--Stats-->
    <section id="stats">
        <div class="content-box-md ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInLeft" data-wow-duration="1.5s">
                        <div class="vertical-heading">
                            <h5>Fun Facts</h5>
                            <h2>We Deliver<br><strong>Excellent </strong>Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-duration="2s">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <!--STATS ITEM 01-->
                        <div class="stats-item text-center">
                            <i class="fas fa-chart-bar"></i>
                            <h3 class="counter">25</h3>
                            <p>Years Experience</p>
                        </div>
                        <!--/STATS ITEM 01-->
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <!--STATS ITEM 02-->
                        <div class="stats-item text-center">
                            <i class="fab fa-codepen"></i>
                            <h3 class="counter">350</h3>
                            <p>Projects Done</p>
                        </div>
                        <!--/STATS ITEM 02-->
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <!--STATS ITEM 03-->
                        <div class="stats-item text-center">
                            <i class="fas fa-trophy"></i>
                            <h3 class="counter">115</h3>
                            <p>Awards Received</p>
                        </div>
                        <!--/STATS ITEM 03-->
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <!--STATS ITEM 04-->
                        <div class="stats-item text-center">
                            <i class="fas fa-users"></i>
                            <h3 class="counter">300</h3>
                            <p>Happy Clients</p>
                        </div>
                        <!--/STATS ITEM 04-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Stats-->
    <!--Clients-->
    <section id="clients">
        <div class="content-box-sm">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="horizontal-heading text-center">
                            <h5>Satisfied Clients</h5>
                            <h2>Our Happy <strong>Clients</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row wow slideInLeft" data-wow-duration="3s" data-wow-delay=".5s" data-wow-offset="20">
                    <div id="clients-list" class="owl-carousel owl-theme">
                        <!--First Client-->
                        <div class="client">
                            <img src="img/clients/client-01.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/First Client-->
                        <!--Second Client-->
                        <div class="client">
                            <img src="img/clients/client-02.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/Second Client-->
                        <!--Third Client-->
                        <div class="client">
                            <img src="img/clients/client-03.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/Third Client-->
                        <!--Fourth Client-->
                        <div class="client">
                            <img src="img/clients/client-04.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/Fourth Client-->
                        <!--Fifth Client-->
                        <div class="client">
                            <img src="img/clients/client-05.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/Fifth Client-->
                        <!--Sixth Client-->
                        <div class="client">
                            <img src="img/clients/client-06.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/Sixth Client-->
                        <!--Seventh Client-->
                        <div class="client">
                            <img src="img/clients/client-07.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/Seventh Client-->
                        <!--Eighth Client-->
                        <div class="client">
                            <img src="img/clients/client-08.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/Eighth Client-->
                        <!--Ninth Client-->
                        <div class="client">
                            <img src="img/clients/client-09.jpg" alt="clients" class="img-responsive">
                        </div>
                        <!--/Ninth Client-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Clients-->
    <!--Blog-->
    <section id="blog">
        <div class="content-box-md">
            <div class="container">
                <div class="row wow" data-wow-offset="50">
                    <div class="col-md-5 col-sm-4 wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
                        <div id="blog-left">
                            <div class="vertical-heading">
                                <h5>Latest News</h5>
                                <h2>Latest<br>From <strong>Blog</strong></h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui reiciendis nihil impedit distinctio hic sit enim.</p>
                            <div id="blog-btn">
                                <a href="#" title="View All Posts" class="btn btn-general btn-yellow" role="button">View All Posts</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-sm-8 ">
                        <div class="row wow fadeInUp" data-wow-duration="3s" data-wow-delay="1s">
                            <div class="col-md-6 col-sm-6">
                                <!--blog post-->
                                <div class="blog-post">
                                    <h4>Your Post Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maxime, quidem saepe. Lorem ipsum dolor sit amet.</p>
                                    <a href="#">READ MORE ></a>
                                    <div class="post-meta">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-8 col-xs-5">
                                                <p><img src="img/blog/blog-01.jpg" alt="author" class="img-circle"> Sameer Kapoor</p>
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-7">
                                                <p class="text-right">October 17, 2017</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/blog post-->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!--blog post-->
                                <div class="blog-post">
                                    <h4>Your Post Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis maxime, quidem saepe. Lorem ipsum dolor sit amet.</p>
                                    <a href="#">READ MORE ></a>
                                    <div class="post-meta">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-8 col-xs-5">
                                                <p><img src="img/blog/blog-02.jpg" alt="author" class="img-circle"> Rishi Kumar</p>
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-7">
                                                <p class="text-right">November 12, 2017</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/blog post-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Blog-->
<!--contact-->
    <section id="contact">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--Left Side-->
                        <div id="contact-left">
                            <div class="vertical-heading wow slideInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <h5>Who Are We</h5>
                                <h2>Get<br> In<strong> Touch</strong></h2>
                            </div>
                            <p class="wow slideInUp" data-wow-duration="1.5s" data-wow-delay="1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci quas pariatur modi, numquam sit modi, numquam sit!</p>
                            <div id="offices" class="wow slideInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="office">
                                            <h4>United States</h4>
                                            <ul class="office-details">
                                                <li><i class="fas fa-mobile-alt"></i>+1-202-555-0120</li>
                                                <li><i class="fas fa-envelope"></i>support@solo.com</li>
                                                <li><i class="fas fa-map-marker-alt"></i><span>1940 Stark Hollow Road<br>California, USA </span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="office">
                                            <h4>Australia</h4>
                                            <ul class="office-details">
                                                <li><i class="fas fa-mobile-alt"></i>+61 491 570 156</li>
                                                <li><i class="fas fa-envelope"></i>support@solo.com</li>
                                                <li><i class="fas fa-map-marker-alt"></i><span>177 Elgin Street<br> New South Wales, Australia </span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-list wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <!--/Left Side-->
                    </div>
                    <div class="col-md-6 wow slideInRight" data-wow-duration="1.5s" data-wow-delay="1s">
                        <!--Right side-->
                        <div id="contact-right">
                            <form action="index.php" method="post">
                                <h4>Send Message</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. soluta.elit. soluta.</p>
                                         <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fas fa-user"></i></div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fas fa-mobile-alt"></i></div>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone No.">
                                    </div>
                                </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                             <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fas fa-at"></i></div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                             <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fas fa-link"></i></div>
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                    </div>
                                    </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                </div>
                                <div id="submit-btn">
                                    <input type="submit" name="send" class="btn btn-general btn-yellow" value="SEND">
                                </div>
                            </form>
                        </div>
                        <!--/ Right Side-->
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--/contact-->
    <!--/contact-->
    <!--Google Maps-->
    <section id="google-map">
        <div class="container-fluid">
            <div class="row">
                <div id="map"></div>
            </div>
        </div>
    </section>
    <!--/Google Maps-->
    <!--Footer-->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Copyright &copy; 2017 All Rights Reserved By <span>SOLO Inc.</span>
                    </p>
                </div>
            </div>
        </div>
        <!--back to top-->
        <a href="#home" id="back-to-top" class="btn btn-sm btn-yellow btn-back-to-top smooth-scroll hidden-sm" title="back to top" role="button">
            <ion-icon name="ios-arrow-up"></ion-icon>
        </a>
        <!--/back to top-->
    </footer>
    <!--/Footer-->

    <!--Scripts Attached-->
    <!--jQuery-->
    <script src="js/jquery.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!--owl carousel js-->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <!--waypoints-->
    <script src="js/waypoints/jquery.waypoints.min.js"></script>
    <!--responsive tabs script-->
    <script src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script>
    <!--isotope js filtering gallery-->
    <script src="js/isotope/isotope.pkgd.min.js"></script>
    <!--magnific popup lightbox gallery-->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--counter up plugin-->
    <script src="js/counter/jquery.counterup.min.js"></script>
    <!--maps js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5gh1QP29hjdQ1qIuWiLL9D8veGv2s7h4"></script>
    <!--easeInOut js-->
    <script src="js/easein/jquery.easing.1.3.min.js"></script>
    <!--wow js-->
    <script src="js/wow/wow.min.js"></script>
    <!--custom script-->
    <script src="js/script.min.js"> </script>
    <!--Attached script ends-->
</body>

</html>
