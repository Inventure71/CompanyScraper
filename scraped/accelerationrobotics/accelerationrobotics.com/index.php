 <!doctype html>
 <html lang="en">

 <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Styles CSS -->
    <link rel="stylesheet" href="css/comun.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--FONT AWESOME-->
    <!-- <script src="https://kit.fontawesome.com/4de28ea923.js" crossorigin="anonymous"></script> -->
    <script src="js/fontawesome-4de28ea923.js" crossorigin="anonymous"></script>
    <!--<script src="js/fontawesome.js" crossorigin="anonymous"></script>-->

     <!-- CSS específico -->
     <link rel="stylesheet" href="css/home.css">
     <link rel="stylesheet" href="css/products.css">
     <link rel="stylesheet" href="css/assessments.css">

     <!-- Cookies -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
     <title>Acceleration Robotics | Faster robots. Hardware Acceleration for Robots</title>
     <meta name="description"
         content="Semiconductor building blocks for robots. IP cores. Hardware acceleration for robots (ROBOTCORE), ROS 2 hardware acceleration services." />
     <meta name="keywords" content="robotics,hardware acceleration,robotcore,fpga,gpu" />

     <!-- preloads -->
     <!--<link rel="preload" as="image" href="img/robotcore_500.gif">
     <link rel="preload" as="image" href="img/perception_500.gif">
     <link rel="preload" as="image" href="img/transform_545.gif">
     <link rel="preload" as="image" href="img/cloud_500.gif">-->
 </head>

 <body class="home">
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top navbar-superior">
    <a class="navbar-brand" href="index.php">
        <img src="img/acceleration-robotics-logo-white-526w.png" alt="Logo Acceleration Robotics" class="img-white ml-2 ml-lg-0">
        <img src="img/acceleration-robotics-logo-black-526w.png" alt="Logo Acceleration Robotics" class="img-normal ml-2 ml-lg-0">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <span class="cerrar"><a href="" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><i class="fa fa-times" aria-hidden="true" style="font-size:1.5em; color:#1e1e1e"></i></a></span>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link align-middle res-nav" href="products.php" id="navbarDropdownProduct" role="button" aria-haspopup="true" aria-expanded="false">Products</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownProduct">                    
                    <a class="dropdown-item" href="robotcore.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> RPU</a>
                    <a class="dropdown-item" href="robotcore-collaborative.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> Collaborative</a>
                    <a class="dropdown-item" href="robotcore-ros2.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> ROS 2</a>
                    <a class="dropdown-item" href="robotcore-rtps.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> RTPS</a>
                    <a class="dropdown-item" href="robotcore-udpip.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> UDP/IP</a>
                    <a class="dropdown-item" href="robotcore-perception.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> Perception</a>
                    <a class="dropdown-item" href="robotcore-transform.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> Transform</a>
                    <a class="dropdown-item" href="robotcore-framework.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> Framework</a>
                    <a class="dropdown-item" href="robotcore-cloud.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTCORE®</span> Cloud</a>
                    <a class="dropdown-item" href="robotperf.php"><span style="font-family: Gordita-Bold; font-size: 0.8em;">ROBOTPERF®</span> Benchmarks</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link align-middle" href="services.php" id="navbarDropdownServices" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownServices">
                    <a class="dropdown-item" href="robotics-consulting.php">Consulting</a>
                    <a class="dropdown-item last" href="robot-ip-design.php">Robot IP design</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link align-middle" href="about.php" id="navbarDropdownNews" role="button" aria-haspopup="true" aria-expanded="false">Company</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownAbout">
                    <a class="dropdown-item" href="about.php">Company</a>
                    <a class="dropdown-item" href="case-studies.php">Case studies</a>
                    <a class="dropdown-item" href="ros.php">ROS</a>
                    <!-- <a class="dropdown-item last" target="_blank" href="https://robotperf.net/">RobotPerf™</a> -->
                </div>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link align-middle" href="https://news.accelerationrobotics.com/" id="navbarDropdownNews" role="button" aria-haspopup="true" aria-expanded="false">News</a>                
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link al1-link" style="font-family: Gordita-Bold; font-size: 0.8em;" href="robotcore.php"><span>ROBOTCORE®</span></a> -->
                <a class="nav-link al1-link" style="font-family: Gordita-Bold; font-size: 0.8em;" href="products.php"><span>ROBOTCORE®</span></a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-icon first-icon" href="https://es.linkedin.com/company/accelerationrobotics" target="_blank">
                    <svg version="1.1" id="LINKEDINSVGTOP" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 70 73.3" width="28" height="28" xml:space="preserve">
                        <g>
                            <path class="sticono-header" d="M35.2,32.4L35.2,32.4L35.2,32.4L35.2,32.4z" />
                            <path class="sticono-header" d="M66.2,5.2H3.8C3,5.2,2.3,5.9,2.3,6.7v59.9c0,0.8,0.7,1.5,1.5,1.5h62.5c0.8,0,1.5-0.7,1.5-1.5V6.7
                                                C67.7,5.8,67,5.2,66.2,5.2z M20.1,56.7c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7V28.9c0-0.4,0.3-0.7,0.7-0.7h8.3
                                                c0.4,0,0.7,0.3,0.7,0.7V56.7z M15,24.5c-2.9,0-5.2-2.3-5.2-5.2s2.3-5.2,5.2-5.2s5.2,2.3,5.2,5.2S17.9,24.5,15,24.5z M55.1,56.7
                                                c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7V41.8c0-3.9-1.4-6.6-4.9-6.6c-2.7,0-4.3,1.8-5,3.5c-0.3,0.6-0.3,1.5-0.3,2.4
                                                v15.6c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7c0-4,0.1-23.2,0-27.7c0-0.4,0.3-0.7,0.7-0.7h8.3c0.4,0,0.7,0.3,0.7,0.7
                                                v3.4c1.3-2,3.6-4.8,8.7-4.8c6.4,0,11.2,4.2,11.2,13.1V56.7z" />
                        </g>
                    </svg>
                </a>
            </li>
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-icon " href="https://github.com/ros-acceleration" target="_blank">
                    <svg version="1.1" id="GITSVGTOP" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291.3 291.3" xml:space="preserve" width="26" height="28">
                        <g>
                            <path class="sticono-header" d="M145.7,0C65.2,0,0,65.2,0,145.7c0,80.4,65.2,145.7,145.7,145.7s145.7-65.2,145.7-145.7
                                             C291.3,65.2,226.1,0,145.7,0z M186.5,256.6c-0.8-11.4-1.8-25.5-1.8-31.2c-0.4-4.4-0.8-15.5-11.4-22.7c42.1-3.5,62.1-26.8,63.5-57.5
                                             c1.2-17.5-5.8-32.9-18.1-45.3c0.6-13.3-0.4-29-1.3-35.9c-9.5-2.7-31.6,8.9-37.8,13.9c-13-5.1-44.9-6.8-64.3,0
                                             c-13.7-9.7-29.4-15.6-37.9-14c-7.9,17.5-2.8,33.9-1.3,35.9c-10.1,9.3-24.3,20.7-20.4,44.6c6.2,35,30.8,53.9,70.5,58.6
                                             c-8.5,1.7-9.9,8-10.6,10.8c-26.7,11-34.3-6.8-37.6-11.4c-11.2-13.8-21.2-9.8-21.8-9.6c-0.6,0.2-1.1,1.1-1,1.5c0.6,3,6.7,6,7,6.3
                                             c8.3,6.2,11.3,17.3,13.2,20.4c11.8,19.5,39.4,11.4,39.6,11.6c0,1.7-0.2,16-0.4,27.2c-50.2-13.7-87.1-59.5-87.1-114
                                             c0-65.4,53-118.3,118.3-118.3S264,80.3,264,145.7C264,196.7,231.7,240,186.5,256.6z" />
                        </g>
                    </svg>
                </a>
            </li>
            <li class="nav-item nav-item-redes-movil d-lg-none">
              <a class="" href="https://es.linkedin.com/company/alias-robotics" target="_blank">
                  <svg version="1.1" id="LINKEDINSVGTOP" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 70 73.3" width="28" height="28" xml:space="preserve">
                      <g>
                          <path class="sticono-header" d="M35.2,32.4L35.2,32.4L35.2,32.4L35.2,32.4z" />
                          <path class="sticono-header" d="M66.2,5.2H3.8C3,5.2,2.3,5.9,2.3,6.7v59.9c0,0.8,0.7,1.5,1.5,1.5h62.5c0.8,0,1.5-0.7,1.5-1.5V6.7
                                              C67.7,5.8,67,5.2,66.2,5.2z M20.1,56.7c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7V28.9c0-0.4,0.3-0.7,0.7-0.7h8.3
                                              c0.4,0,0.7,0.3,0.7,0.7V56.7z M15,24.5c-2.9,0-5.2-2.3-5.2-5.2s2.3-5.2,5.2-5.2s5.2,2.3,5.2,5.2S17.9,24.5,15,24.5z M55.1,56.7
                                              c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7V41.8c0-3.9-1.4-6.6-4.9-6.6c-2.7,0-4.3,1.8-5,3.5c-0.3,0.6-0.3,1.5-0.3,2.4
                                              v15.6c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7c0-4,0.1-23.2,0-27.7c0-0.4,0.3-0.7,0.7-0.7h8.3c0.4,0,0.7,0.3,0.7,0.7
                                              v3.4c1.3-2,3.6-4.8,8.7-4.8c6.4,0,11.2,4.2,11.2,13.1V56.7z" />
                      </g>
                  </svg>
              </a>
                <a href="" target="_blank">
                    <svg version="1.1" id="GITSVGTOP" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291.3 291.3" xml:space="preserve" width="26" height="28">
                        <g>
                            <path class="sticono-header" d="M145.7,0C65.2,0,0,65.2,0,145.7c0,80.4,65.2,145.7,145.7,145.7s145.7-65.2,145.7-145.7
                                             C291.3,65.2,226.1,0,145.7,0z M186.5,256.6c-0.8-11.4-1.8-25.5-1.8-31.2c-0.4-4.4-0.8-15.5-11.4-22.7c42.1-3.5,62.1-26.8,63.5-57.5
                                             c1.2-17.5-5.8-32.9-18.1-45.3c0.6-13.3-0.4-29-1.3-35.9c-9.5-2.7-31.6,8.9-37.8,13.9c-13-5.1-44.9-6.8-64.3,0
                                             c-13.7-9.7-29.4-15.6-37.9-14c-7.9,17.5-2.8,33.9-1.3,35.9c-10.1,9.3-24.3,20.7-20.4,44.6c6.2,35,30.8,53.9,70.5,58.6
                                             c-8.5,1.7-9.9,8-10.6,10.8c-26.7,11-34.3-6.8-37.6-11.4c-11.2-13.8-21.2-9.8-21.8-9.6c-0.6,0.2-1.1,1.1-1,1.5c0.6,3,6.7,6,7,6.3
                                             c8.3,6.2,11.3,17.3,13.2,20.4c11.8,19.5,39.4,11.4,39.6,11.6c0,1.7-0.2,16-0.4,27.2c-50.2-13.7-87.1-59.5-87.1-114
                                             c0-65.4,53-118.3,118.3-118.3S264,80.3,264,145.7C264,196.7,231.7,240,186.5,256.6z" />
                        </g>
                    </svg>
                </a>                

            </li>
        </ul>

    </div>


    <!-- Cookies -->
    <div class="alert text-center cookiealert" role="alert">
        <strong> <a style="color:#4d4cf5">Do you like cookies?</a></strong> We use cookies to ensure you get the best experience on our website. <!--<a href="https://cookiesandyou.com/" target="_blank" style="color:#7c7c7c">Learn more</a>-->

        <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close" style="background-color:#4d4cf5; border-color:#4d4cf5">
            OK
        </button>

    </div>

      <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>


</nav>

     <!-- Cabecera -->


     <div class="img-primary-home">
         <div class="container-fluid p-0">
             <div class="row no-gutters">
                 <div class="col-12 text-center  d-none d-lg-block">
                     <div class="embed-responsive embed-responsive-16by9">
                         <video id="background-video" loop autoplay muted poster="img/cabecero_poster2.jpg">
                             <source src="videos/accel-video-header-low.mp4" type="video/mp4">
                             <!-- <source src="videos/robotcore_intro_new.mp4" type="video/mp4"> -->
                         </video>
                     </div>
                     <div class="h1-wrapper">
                         <h1><span class="">Faster robots</span>. Faster Industry<br>
                             <span class="f-gordita-bold">Hardware acceleration</span>
                         </h1>
                     </div>
                     <div class="headerbutton">
                         <a href="case-studies.php" class="mb-2 btn btn-linea btn-relleno smooth">Case studies</a>
                     </div>
                 </div>
                 <div class="col-12 text-center py-5 d-lg-none bg-negro" style="
                    min-height: 400px;
                    background-image: url(img/robotcore-intro.jpg);
                    background-repeat: no-repeat;
                    background-position: right bottom;
                    background-size: contain;">
                     <h1 class="my-auto" style="font-size: 2.2em; padding-top:120px;"><span
                             class="f-gordita-bold">Faster robots</span>. Faster ROS<br>
                         <span class="f-gordita-bold">Hardware acceleration</span>
                     </h1>

                 </div>
             </div>
         </div>
     </div>



     <!-- Mision -->
     <div class="our-duty-home" id="our-duty-home">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-xs-12 texto-centrado pb-5">
                     <h2 class="f-azul pt-5">Our mission</h2>
                     <h4 class="">Faster robots. Customized brains for robots</h4>
                     <p class="mt-0">
                        <strong>Acceleration Robotics</strong> is a firm focused on designing customized hardware, or “hardware brains”, that speed up a robot's operation. Shortly, we help make robots in industry move faster. In particular, the company creates custom compute architectures for high performance robots through hardware acceleration solutions (CPU, FPGAs, GPUs and combinations).</p>
                 </div>
                 <!-- <div class="col-md-4 col-xs-12">
                     <h2 class="f-azul">Our mission</h2>
                     <h3>Customized brains for robots</h3>
                     <p><strong>Acceleration Robotics</strong> is a firm focused on designing customized hardware, or
                         “brains”, that speed up a robot's operation. In particular, the company creates custom compute
                         architectures for high performance robots through hardware acceleration solutions (CPU, FPGAs,
                         GPUs and combinations).</p>
                 </div>
                 <div class="col-md-6 offset-md-2 col-xs-12 my-auto pt-5 pt-md-0">
                     <img src="img/coche.png" class="img-responsive">
                 </div> -->
             </div>
         </div>
         <div class="container">
             <div class="row justify-content-center texto-centrado">
                <!-- Automated Vehicles -->
                <!-- <div class="col-lg-4 col-12 target-applications mb-3">
                     <img src="img/coche.png">
                     <h5 class="mt-3 mb-3">Automated Vehicles</h5>
                 </div>                  -->
                <!-- AMRs -->
                 <div class="col-lg-4 col-12 target-applications mb-3">
                     <img src="img/autonomous-mobility.png">
                     <h5 class="mt-3 mb-3">Autonomous Mobility</h5>
                 </div>
                 <!-- Industrial manipulators -->
                 <div class="col-lg-4 col-12 target-applications mb-3">
                     <img src="img/industrial-manipulators.png">
                     <h5 class="mt-3 mb-3">Industrial Manipulators</h5>
                 </div>
                 <!-- Healthcare Robots -->
                 <div class="col-lg-4 col-12 target-applications mb-3">
                     <img src="img/healthcare.png">
                     <h5 class="mt-3 mb-3">Healthcare Robots</h5>
                 </div>
             </div>
         </div>

         <br>
     </div>

     <!-- Reseach & News -->
     <div class="container-fluid no-gutters p-0" id="HardAcc">
         <div class="row no-gutters">
             <div class="col-12 col-lg-6 p-5" style="background-image: url(img/celsa-render.png);">
                 <h4 class="f-blanco f-gordita-light" style="font-size: 2em;">Accelerating</h4>
                 <h5 class="f-blanco f-gordita-bold" style="font-size: 1.8em;">metal part manufacturing</h5>
                 <h4 class="f-blanco f-gordita-light" style="font-size: 2em;">with robots</h4>
                 <a href="case-study-celsa.php" class="">
                     <span class="circle"><span class="icon arrow"></span></span><span
                         class="btn-linea btn-relleno smooth">Explore</span>
                 </a>
             </div>
             <div class="col-12 col-lg-6 p-5" style="background-image: url(img/teknia-digital-twin1.png);">
                 <h4 class="f-blanco f-gordita-light" style="font-size: 2em;">Accelerating</h4>
                 <h5 class="f-blanco f-gordita-bold" style="font-size: 1.8em;">industrial legacy</h5>
                 <h4 class="f-blanco f-gordita-light" style="font-size: 2em;">robot manipulation</h4>
                 <a href="case-study-teknia.php" class="">
                     <span class="circle"><span class="icon arrow"></span></span><span
                         class="btn-linea btn-relleno smooth">Explore</span>
                 </a>
             </div>
         </div>
     </div>

     <!-- All products -->
     <div class="servicios-top servicios-seccion bg-negro">
         <div class="container">
             <div class="row row-titulo texto-top mb-0">
                 <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 col-xs-12">
                     <h2 class="f-blanco">Products</h2>
                 </div>
             </div>
             <!-- <div class="row row-subtitulo texto-centrado">
                 <div class="offset-lg-2 col-lg-8 col-xs-12">
                     <p class="f-blanco">
                         ROS 2 API-compatible hardware acceleration tools and robot Intellectual Property (IP)
                         cores.<br />
                         Increasing your robot's performance, including latency, power efficiency and platform
                         scalability.
                     </p>
                 </div>
             </div> -->
         </div>
     </div>

     <div class="servicios-top servicios-seccion bg-negro pt-3">
         <div class="container">
             <div class="row row-subtitulo texto-centrado">
                 <div class="offset-lg-3 col-lg-6 col-xs-12">
                     <h4 style="color:#4d4cf5">Robotic Processing Units (RPUs)</h4>
                     <p style="color:white;">
                         RPUs are robot brains, processing units for robots that map efficiently robot behaviors
                         (programmed as ROS computational graphs) to underlying compute resources. They empower robots
                         with the ability to react faster, consume less power, and deliver additional real-time
                         capabilities.
                     </p>
                 </div>
             </div>

             <div class="row justify-content-md-center">
                 <div class="col-12 col-sm-6 col-lg-3 img-block-text d-none"></div>
                 <div class="col-12 col-sm-6 col-lg-6 img-block-text">
                     <!-- comp1 -->
                     <a href="robotcore.php"><img src="img/robotcore_render_1080.png" alt="ROBOTCORE®"></a>
                     <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®</h4>
                     <p style="color:white;">A robot-specific processing unit<br> specialized in ROS computations.<br>
                         Features 16xCPUs, a GPU and an FPGA.</p>
                     <a href="robotcore.php" class="btn-flecha btn-readmore">
                         <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                             more</span>
                     </a>
                 </div>
                 <div class="col-12 col-sm-6 col-lg-3 img-block-text comp1 d-none"></div>
             </div>
             <!-- <div style="border-bottom:1px dashed #555;"></div> -->
         </div>
     </div>

     <div class="container-fluid no-gutters transition-BtoG">
         <div class="row no-gutters">
             <div class="col-12"></div>
         </div>
     </div>


     <div class="servicios-top servicios-seccion bg-grisoscuro pt-5">
         <div class="container">
             <div class="row row-subtitulo texto-centrado">
                 <div class="offset-lg-3 col-lg-6 col-xs-12">
                     <h4 style="color:#4d4cf5">Tools and IP Cores for robotics</h4>
                     <p style="color:white;">
                         ROS 2 API-compatible hardware acceleration tools and robot Intellectual Property (IP) cores
                         (<strong style="color:#4d4cf5">IP cores</strong>).
                         Increase your robot's performance, including latency, throughput and power efficiency.
                     </p>
                 </div>
             </div>
         </div>

         <div class="servicios-seccion select-assessments mt-5 pt-5 bg-grisoscuro">
             <div class="container">
                 <div class="row justify-content-md-center">                     


                    <!-- Collaborative -->
                    <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                        <img src="img/robotcore_500_blanco.png" alt="" onmouseover="this.src='img/robotcore_500_G.gif'"
                        onmouseout="this.src='img/robotcore_500_blanco.png'">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®
                             <br><span style="color:#4d4cf5">Collaborative</span></h4>
                         <p style="color:white;">
                            <!-- Accelerated dynamic<br> collision avoidance for <br> human-robot collaboration. -->
                            Accelerated dynamic<br> collision avoidance. <br> <span style="font-family: SourceCodePro-Regular;">ros2_control</span> APIs.
                         </p>                                 
                         <a href="robotcore-collaborative.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>

                    <!-- ROS 2 -->
                     <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/ROBOTCORE ROS 2 imago total white.png" onmouseover="this.src='img/ROBOTCORE_ROS_2_G_500.gif'"
                             onmouseout="this.src='img/ROBOTCORE ROS 2 imago total white.png'" alt="">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®
                             <br><span style="color:#4d4cf5">ROS 2</span></h4>
                         <p style="color:white;">
                            Accelerated ROS 2<br> network communications.<br> ROS 2 on FPGA.
                         </p>                                 
                         <a href="robotcore-ros2.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>

                    <!-- RTPS -->
                    <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/ROBOTCORE-RTPS imago-total-white.png" onmouseover="this.src='img/RTPS_G_500.gif'"
                             onmouseout="this.src='img/ROBOTCORE-RTPS imago-total-white.png'" alt="">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®
                             <br><span style="color:#4d4cf5">RTPS</span></h4>
                         <p style="color:white;">
                            Accelerated DDS<br> network communications.<br> DDS-RTPS on FPGA.
                        </p>
                         <a href="robotcore-rtps.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>                     

                    <!-- UDP/IP -->
                    <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                        <img src="img/ROBOTCORE-UPD-IP-imago-total-white.png" onmouseover="this.src='img/UPD_IP_G_500.gif'"
                            onmouseout="this.src='img/ROBOTCORE-UPD-IP-imago-total-white.png'" alt="">
                        <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®
                            <br><span style="color:#4d4cf5">UDP/IP</span></h4>
                        <p style="color:white;">
                            Accelerated UDP/IP<br> networking stack.<br> UDP/IP on FPGA.    
                        </p>
                        <a href="robotcore-udpip.php" class="btn-flecha btn-readmore">
                            <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                more</span>
                        </a>
                    </div>                                          

                    <!-- Perception -->
                    <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/perception_500_blanco.png" onmouseover="this.src='img/perception_500_G.gif'"
                             onmouseout="this.src='img/perception_500_blanco.png'" alt="">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®<br>
                             <span style="color:#4d4cf5">Perception</span></h4>
                         <p style="color:white;">Accelerated ROS 2 <br>robotics perception<br> stack.</p>
                         <a href="robotcore-perception.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>

                     <!-- Transform -->
                     <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/transform_white.png" onmouseover="this.src='img/transform_500_G.gif'"
                             onmouseout="this.src='img/transform_white.png'" alt="">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®
                             <br><span style="color:#4d4cf5">Transform</span></h4>
                         <p style="color:white;">Accelerated ROS 2 <br>coordinate transformations <br>(<span
                                 style="font-family: SourceCodePro-Regular;">tf2</span>).</p>
                         <a href="robotcore-transform.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>

                    <!-- Framework -->
                     <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/robotcore_500_blanco.png" alt="" onmouseover="this.src='img/robotcore_500_G.gif'"
                             onmouseout="this.src='img/robotcore_500_blanco.png'">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®<br>
                             <span style="color:#4d4cf5">Framework</span></h4>
                         <p style="color:white;">Hardware acceleration <br>framework for ROS<br> and ROS 2.</p>
                         <a href="robotcore-framework.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>
                     <!-- Cloud -->
                     <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/cloud_500_blanco.png" onmouseover="this.src='img/cloud_500_G.gif'"
                             onmouseout="this.src='img/cloud_500_blanco.png'" alt="">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®<br>
                             <span style="color:#4d4cf5">Cloud<span></span></h4>
                         <p style="color:white;">Tools to speed-up ROS 2 <br>graphs with the cloud,<br>and in the cloud.
                         </p>
                         <a href="robotcore-cloud.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- ROBOTCORE® -->
     <!-- <div class="bb-home bg-grisoscuro py-5" id="robotcore-home">
         <div class="container pt-5">
             <div class="row">
                 <div class="col-12 col-lg-6 d-none d-lg-block my-auto text-center">
                     <img src="img/robotcore_500_G.gif" alt="ROBOTCORE" class="img-responsive">
                 </div>
                 <div class="col-12 col-lg-5 offset-lg-1 my-auto text-center text-lg-left">
                     <h2 class="titulo-robotcore">ROBOTCORE <span>Framework</span></h2>
                     <h3 class="f-blanco f-gordita-normal py-2 text-center text-lg-left" style="font-size:1.8em;">
                         Hardware Acceleration Framework for ROS</h3>
                     <p class="f-blanco">
                         <strong class="f-azul">ROBOTCORE®</strong> empowers you with capabilities to build custom
                         compute architectures for robots, or "<strong class="f-azul">IP cores</strong>". It deals
                         with vendor proprietary libraries, accelerating computations, increasing performance and
                         abstracting away the complexity of bringing your Robot Operating System (ROS) computational
                         graphs to your favourite silicon architecture.
                     </p>
                     <p class="f-blanco">
                         A ROS hardware acceleration framework that provides its customers with a development, build and
                         deployment experience for hardware and hardware accelerators similar to the standard,
                         non-accelerated ROS development flow.
                     </p>
                     <p class="d-lg-none"><img src="img/robotcore_500_G.gif" class="img-responsive "></p>
                     <a href="robotcore-framework.php" class="btn btn-linea d-inline-block">Learn more</a>
                 </div>
             </div>
         </div>
     </div> -->


     <!-- ROBOTCORE® Perception -->
     <!-- <div class="bb-home bg-grisoscuro py-5" id="robotcore-perception">
         <div class="container pt-5">
             <div class="row">
                 <div class="col-12 col-lg-5 my-auto text-center text-lg-left">
                     <h2 class="titulo-robotcore">ROBOTCORE <span>Perception</span></h2>
                     <h3 class="f-blanco f-gordita-normal py-2 text-center text-lg-left" style="font-size:1.8em;">
                         Accelerate your Robotic Perception Stack</h3>
                     <p class="f-blanco">
                         <strong class="f-azul">ROBOTCORE® Perception</strong> is an optimized robotic perception stack
                         that leverages hardware acceleration to provide a speedup in your perception computations.
                     </p>
                     <p class="f-blanco">
                         <strong class="f-azul">API-compatible with the ROS 2 perception stack</strong>,
                         <strong>ROBOTCORE® Perception</strong> delivers high performance, real-time and reliability to
                         your robots' perception.
                     </p>
                     <p class="d-lg-none"><img src="img/perception_500_G.gif" alt="ROBOTCORE Perception"
                             class="img-responsive "></p>
                     <a href="robotcore-perception.php" class="btn btn-linea d-inline-block">Learn more</a>
                 </div>
                 <div class="col-12 col-lg-6 offset-lg-1 d-none d-lg-block my-auto text-center">
                     <img src="img/perception_500_G.gif" alt="ROBOTCORE Perception" class="img-responsive">
                 </div>

             </div>
         </div>
     </div> -->

     <!-- ROBOTCORE® Transform -->
     <!-- <div class="bb-home bg-grisoscuro py-5" id="robotcore-transform">
         <div class="container pt-5">
             <div class="row">
                 <div class="col-12 col-lg-6 d-none d-lg-block my-auto text-center">
                     <img src="img/transform_500_G.gif" alt="ROBOTCORE Transform" class="img-responsive">
                 </div>
                 <div class="col-12 col-lg-5 offset-lg-1 my-auto text-center text-lg-left">
                     <h2 class="titulo-robotcore">ROBOTCORE <span>Transform</span></h2>
                     <h3 class="f-blanco f-gordita-normal py-2 text-center text-lg-left" style="font-size:1.8em;">
                         Accelerate your Robotic Coordinate System Transformations (TF)</h3>
                     <p class="f-blanco">
                         <strong class="f-azul">ROBOTCORE® Transform</strong> is an optimized robotics transform library
                         that manages efficiently the transformations between coordinate systems in a robot.
                     </p>
                     <p class="f-blanco">
                         <span class="f-azul">API-compatible with the ROS 2 transform (<span
                                 style="font-family: SourceCodePro-Regular;">tf2</span>) library</span>,
                         <strong>ROBOTCORE®
                             Transform</strong> delivers higher throughput and lower latency while aligning with the
                         standard way to keep track of coordinate
                         frames and transform data within a ROS robotic system.
                     </p>
                     <p class="d-lg-none"><img src="img/transform_500_G.gif" alt="ROBOTCORE Transform"
                             class="img-responsive "></p>
                     <a href="robotcore-transform.php" class="btn btn-linea d-inline-block">Learn more</a>
                 </div>
             </div>
         </div>
     </div> -->

     <!-- ROBOTCORE® Cloud -->
     <!-- <div class="bb-home bg-grisoscuro py-5" id="robotcore-cloud">
         <div class="container py-5">
             <div class="row">
                 <div class="col-12 col-lg-5 my-auto text-center text-lg-left">
                     <h2 class="titulo-robotcore">ROBOTCORE <span>Cloud</span></h2>
                     <h3 class="f-blanco f-gordita-normal py-2 text-center text-lg-left" style="font-size:1.8em;">
                         Accelerate your Robotic Computations with The Cloud</h3>
                     <p class="f-blanco">
                         <strong class="f-azul">ROBOTCORE® Cloud</strong> allows roboticists to launch parts of their
                         ROS 2 computational graphs into the cloud while addressing interoperability and scalability
                         issues. It supports the most popular cloud providers including Azure, GCP and AWS.
                     </p>
                     <p class="f-blanco">
                         Technically, it extends ROS 2 to <span class="f-azul">a)</span> provision cloud
                         machines from either the ROS 2 CLI or the ROS 2 launch system, <span class="f-azul">b)</span>
                         set up a secure private network and address
                         interoperability issues and <span class="f-azul">c)</span> deploy the graphs as
                         specified in the ROS 2 launch system extensions. Best of all, it aligns with ROBOTCORE® ,
                         empowering developers with a unique flow to deploy their
                         accelerators into cloud instances in a compute substrate-agnostic manner (across CPUs, GPUs and
                         FPGAs).
                     </p>
                     <p class="d-lg-none"><img src="img/cloud_500_G.gif" alt="ROBOTCORE Cloud" class="img-responsive ">
                     </p>
                     <a href="robotcore-cloud.php" class="btn btn-linea d-inline-block">Learn more</a>
                 </div>
                 <div class="col-12 col-lg-6 offset-lg-1 d-none d-lg-block my-auto text-center">
                     <img src="img/cloud_500_G.gif" alt="ROBOTCORE Cloud" class="img-responsive">
                 </div>
             </div>
         </div>
     </div> -->


     <!-- transition GtoW -->
     <div class="container-fluid no-gutters transition-GtoW">
         <div class="row no-gutters">
             <div class="col-12"></div>
         </div>
     </div>


     <!-- Services -->
     <div class="py-5">
         <div class="container py-5">
             <div class="row">
                 <div class="col-12 text-center">
                     <h2>Hardware acceleration services</h2>
                     <p> Hardware acceleration will revolutionize robotics, enabling faster robots. However, the
                         diversity of
                         acceleration options makes it difficult for roboticists to easily deploy accelerated systems
                         without
                         expertise in each specific hardware platform.
                     </p>
                     <p> Our <strong>robot hardware acceleration services</strong>
                         will help you bring up the full potential of your robots by consulting or designing hardware
                         for you.
                     </p>
                     <p class="pb-5"><img src="img/services-home.jpg" class="img-responsive"></p>
                     <a href="services.php" class="btn btn-relleno find-more d-inline-block">Find out more</a>
                 </div>
             </div>
         </div>
     </div>


     <!-- News -->
     <div class="bg-azul py-5" id="news">
        <div class="container pb-5">
            <div class="row pb-5">
                <div class="col-12 texto-centrado pb-5">
                    <h3 class="f-blanco f-gordita-normal">News</h3>
                </div>

                <div class="col-lg-6">
                    <div class="news-border" onclick="location.href='https://news.accelerationrobotics.com/robotcore-ros-2-and-rtps-ultrafast-networking-communications/';">
                        <h5 class="f-gordita-normal">Acceleration Robotics announces ROBOTCORE® ROS 2 and RTPS, Boosting ROS 2 Communications from 62x to Thousands-Fold Faster</h5>
                        <p class="f-gordita-light">Unleashing Unprecedented Speed in Robotics, Acceleration Robotics' ROBOTCORE® ROS 2 and RTPS Pave the Way Towards Robot-specific Chips Setting New Benchmarks in Performance, Energy-efficiency and Reliability for ROS 2 Networking.</p>
                        <u><a href="https://news.accelerationrobotics.com/robotcore-ros-2-and-rtps-ultrafast-networking-communications/"
                                class="f-gordita-medium">Read press release</a></u>
                    </div>
                </div>                  
                
                <div class="col-lg-6">
                    <div class="news-border" onclick="location.href='https://news.accelerationrobotics.com/robotcore-udp-ip-fast-robot-networking-communications/';">
                        <h5 class="f-gordita-normal">Acceleration Robotics unveils ROBOTCORE® UDP/IP for Ultra-Fast, Deterministic Robot Networking Communications</h5>
                        <p class="f-gordita-light">ROBOTCORE® UDP/IP is a Trailblazing FPGA Robot IP Core Resolving Networking Indeterminism in Robotics. With the ability to send or receive small packages in 700 nanoseconds, it outpaces traditional CPU-based solutions dramatically.</p>
                        <u><a href="https://news.accelerationrobotics.com/robotcore-udp-ip-fast-robot-networking-communications/"
                                class="f-gordita-medium">Read press release</a></u>
                    </div>
                </div>  

                <!-- <div class="col-lg-6">
                    <div class="news-border" onclick="location.href='https://news.accelerationrobotics.com/acceleration-robotics-and-microchip-collaborate-to-bring-ros-2-to-risc-v-fpga-socs/';">
                        <h5 class="f-gordita-normal">Acceleration Robotics collaborating with Microchip to fasten robot computations with ROS 2 and RISC-V FPGA SoCs</h5>
                        <p class="f-gordita-light">Acceleration Robotics, who leads the ROS 2 Hardware Acceleration community efforts is working with Microchip to speed-up robot computations using hardware acceleration on Microchip’s PolarFire® SoC solutions.</p>
                        <u><a href="https://news.accelerationrobotics.com/acceleration-robotics-and-microchip-collaborate-to-bring-ros-2-to-risc-v-fpga-socs//"
                                class="f-gordita-medium">Read press release</a></u>
                    </div>
                </div>                 -->
                
                <!-- <div class="col-lg-6 col-12">
                    <div class="news-border" onclick="location.href='https://news.accelerationrobotics.com/acceleration-robotics-expands-to-india-and-takes-over-technoyantra-to-grow-in-asia/';">
                        <h4 class="f-gordita-normal">Acceleration Robotics expands to India and takes over TechnoYantra
                            to grow in Asia</h4>
                        <p class="f-gordita-light">The company offers semiconductor building blocks for robots and consulting
                            services specialized in the Robot Operating System (ROS). Will grow its business in the
                            semiconductors and autonomous mobility fields through hardware acceleration.</p>
                        <u><a href="https://news.accelerationrobotics.com/acceleration-robotics-expands-to-india-and-takes-over-technoyantra-to-grow-in-asia/"
                                class="f-gordita-medium">Read press release</a></u>
                    </div>
                </div> -->

                <!-- <div class="col-lg-6">
                    <div class="news-border" onclick="location.href='https://news.accelerationrobotics.com/acceleration-robotics-planv-robotics-mcu-ros2-riscv/';">
                        <h5 class="f-gordita-normal">Acceleration Robotics and PlanV collaborating to create a robotics
                            microcontroller unit (MCU) powered by RISC-V and ROS 2</h5>
                        <p class="f-gordita-light">The “roscore-v” project aims to create an MCU that has a native ROS 2
                            hardware implementation and delivers lower latency and additional real-time capabilities.</p>
                        <u><a href="https://news.accelerationrobotics.com/acceleration-robotics-planv-robotics-mcu-ros2-riscv/"
                                class="f-gordita-medium">Read press release</a></u>
                    </div>
                </div> -->

                <!-- <div class="col-lg-6 col-12 pb-5">
                    <h4 class="f-gordita-normal pr-lg-5">2022 Hardware Acceleration Report in Robotics</h4>
                    <p class="f-gordita-light">The 2022 Hardware Acceleration Report in Robotics captures the state-of-the art of hardware acceleration in robotics and presents robotic architects with a resource to consider while designing their robot brains.</p>
                    <u><a href="https://news.accelerationrobotics.com/2022-hardware-acceleration-report-in-robotics" class="f-gordita-medium">Read press release</a></u>
                </div> -->
                
                <div class="col-lg-6 col-12">
                    <div class="news-border" onclick="location.href='https://news.accelerationrobotics.com/robotcore-first-robotic-processing-unit-specialized-ros';">
                        <h4 class="f-gordita-normal">Acceleration Robotics announce and open sources ROBOTCORE®, the
                            first Robotic Processing Unit – specialized in ROS computations</h4>
                        <p class="f-gordita-light">ROBOTCORE® is a processing unit for the robotics architect that maps
                            robotics computations efficiently to its CPUs, GPU and FPGA to obtain faster robots and with
                            additional real-time capabilities.</p>
                        <u><a href="https://news.accelerationrobotics.com/robotcore-first-robotic-processing-unit-specialized-ros"
                                class="f-gordita-medium">Read press release</a></u>
                    </div>
                </div>
                
                <div class="col-lg-6 col-12">
                    <div class="news-border" onclick="location.href='https://news.accelerationrobotics.com/acceleration-robotics-collaborating-with-amd-to-design-next-generation-robotic-compute-architectures-with-ros/';">
                        <h5 class="f-gordita-normal">Acceleration Robotics collaborating with AMD to design
                            next-generation robotic compute architectures with ROS</h5>
                        <p class="f-gordita-light">Acceleration Robotics, who is one of the groups in the robotics landscape leading the use of hardware acceleration, will collaborate with AMD to develop new compute architectures that empower faster robotic capabilities using AMD?s Adaptive SoCs and SOMs. In particular, both companies will collaborate around the use of FPGA SoCs.</p>
                        <u><a href="https://news.accelerationrobotics.com/acceleration-robotics-collaborating-with-amd-to-design-next-generation-robotic-compute-architectures-with-ros/"
                                class="f-gordita-medium">Read press release</a></u>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-12 pb-5">
                    <h5 class="f-gordita-normal pr-lg-5">Towards robot accelerators, democratizing hardware acceleration in robotics</h5>
                    <p class="f-gordita-light">Acceleration Robotics and Harvard University will present in Japan an Open Architecture for hardware accelerating robots that helps prototype “robot chips” and make robot computations faster.</p>
                    <u><a href="https://news.accelerationrobotics.com/towards-robot-accelerators-democratizing-hardware-acceleration-in-robotics/" class="f-gordita-medium">Read press release</a></u>
                </div>              -->

                <!-- <div class="col-lg-4 col-12 pb-5">
                    <h5 class="f-gordita-normal pr-lg-5">Acceleration Robotics launch ROBOTCORE® Framework to speed-up ROS 2 robots</h5>
                    <p class="f-gordita-light">The ROBOTCORE® hardware acceleration framework helps roboticists build “robot chips” and make robot computations faster, more deterministic and power efficient through FPGAs and GPUs.</p>
                    <u><a href="https://news.accelerationrobotics.com/robotcore/" class="f-gordita-medium">Read press release</a></u>
                </div>              -->
            </div>
            </div>
     </div>



     <div class="wearerobots">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>We're robot architects</h2>
                <p>Improving robot computational graphs to run faster, consuming less power and in real-time.</p>
                <a href="start-buying.php" class="btn btn-relleno">Let's talk <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
                <a href="case-studies.php" class="btn btn-linea">Case studies <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
            </div>
            <!-- <div class="company">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-6 comp1">
                            <img src="img/xilinx.png">
                        </div>
                        <div class="col-lg-2 col-6 comp1">
                            <img src="img/amd.png">
                        </div>
                    </div>
                    <p class="comp0 py-2">Trusted by industry leaders</p>
                </div>
            </div> -->
        </div>
    </div>
</div>     <!-- transition footer -->
<div class="container-fluid no-gutters transition-footer">
    <div class="row no-gutters">
        <div class="col-12"></div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <div class="footer-title">
                    <a class="" href="index.php">
                        <img src="img/acceleration_robotics_white.svg" alt="accelerationrobotics">
                    </a>
                    <p>
                        <!-- <strong>Acceleration Robotics</strong> is a firm focused on designing customized brains for robots to hasten their response time. Delivering <i>semiconductor building blocks for robots</i>, the company creates custom compute architectures for high performance robots through hardware acceleration solutions while remaining accelerator-agnostic (FPGAs or GPUs) and robot-agnostic. -->

                        <strong>Acceleration Robotics</strong> is a firm focused on designing <i>semiconductor building blocks for robots</i> that speed up a robot’s operation. By building custom compute architectures, or “robot brains”, we make robots in industry faster through hardware acceleration. Our custom robot circuitry boosts the performance of robotics applications across various industries, ensuring our clients achieve a superior return on their robotics investments.

                    </p>
                    <a href="mailto:contact@accelerationrobotics.com"><strong>contact</strong>@accelerationrobotics.com</a>
                    <br>
                    <a href="tel:+34616151561">(+34) <strong>616151561</strong></a><br>
                    <br>                                

                </div>
            </div>
            <div class="d-none d-lg-block d-xl-block col-lg-3 pt-5">
                <ul class="links">
                    <li> <a href="robotcore.php">ROBOTCORE®</a> </li>
                    <li> <a href="robotcore-collaborative.php">ROBOTCORE® <strong>Collaborative</strong></a> </li>
                    <li> <a href="robotcore-ros2.php">ROBOTCORE® <strong>ROS 2</strong></a> </li>
                    <li> <a href="robotcore-rtps.php">ROBOTCORE® <strong>RTPS</strong></a> </li>
                    <li> <a href="robotcore-udpip.php">ROBOTCORE® <strong>UDP/IP</strong></a> </li>
                    <li> <a href="robotcore-perception.php">ROBOTCORE® <strong>Perception</strong></a> </li>
                    <li> <a href="robotcore-transform.php">ROBOTCORE® <strong>Transform</strong></a> </li>
                    <li> <a href="robotcore-framework.php">ROBOTCORE® <strong>Framework</strong></a> </li>
                    <li> <a href="robotcore-cloud.php">ROBOTCORE® <strong>Cloud</strong></a> </li>                    
                </ul>
                <!-- <p class="follow-text">Follow us on</p> -->
                <ul>
                    <li class="">
                        <a class="iconos-footer" href="https://es.linkedin.com/company/accelerationrobotics" target="_blank">
                            <svg version="1.1" id="LINKEDINSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 70 73.3" width="35" height="35" xml:space="preserve">
                                <g>
                                    <path class="sticono-footer" d="M35.2,32.4L35.2,32.4L35.2,32.4L35.2,32.4z" />
                                    <path class="sticono-footer" d="M66.2,5.2H3.8C3,5.2,2.3,5.9,2.3,6.7v59.9c0,0.8,0.7,1.5,1.5,1.5h62.5c0.8,0,1.5-0.7,1.5-1.5V6.7
                                            C67.7,5.8,67,5.2,66.2,5.2z M20.1,56.7c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7V28.9c0-0.4,0.3-0.7,0.7-0.7h8.3
                                            c0.4,0,0.7,0.3,0.7,0.7V56.7z M15,24.5c-2.9,0-5.2-2.3-5.2-5.2s2.3-5.2,5.2-5.2s5.2,2.3,5.2,5.2S17.9,24.5,15,24.5z M55.1,56.7
                                            c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7V41.8c0-3.9-1.4-6.6-4.9-6.6c-2.7,0-4.3,1.8-5,3.5c-0.3,0.6-0.3,1.5-0.3,2.4
                                            v15.6c0,0.4-0.3,0.7-0.7,0.7h-8.3c-0.4,0-0.7-0.3-0.7-0.7c0-4,0.1-23.2,0-27.7c0-0.4,0.3-0.7,0.7-0.7h8.3c0.4,0,0.7,0.3,0.7,0.7
                                            v3.4c1.3-2,3.6-4.8,8.7-4.8c6.4,0,11.2,4.2,11.2,13.1V56.7z" />
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="">
                        <a class="iconos-footer" href="https://github.com/ros-acceleration" target="_blank">
                            <svg version="1.1" id="GITSVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291.3 291.3" xml:space="preserve" width="32" height="35">
                                <g>
                                    <path class="sticono-footer" d="M145.7,0C65.2,0,0,65.2,0,145.7c0,80.4,65.2,145.7,145.7,145.7s145.7-65.2,145.7-145.7
                                         C291.3,65.2,226.1,0,145.7,0z M186.5,256.6c-0.8-11.4-1.8-25.5-1.8-31.2c-0.4-4.4-0.8-15.5-11.4-22.7c42.1-3.5,62.1-26.8,63.5-57.5
                                         c1.2-17.5-5.8-32.9-18.1-45.3c0.6-13.3-0.4-29-1.3-35.9c-9.5-2.7-31.6,8.9-37.8,13.9c-13-5.1-44.9-6.8-64.3,0
                                         c-13.7-9.7-29.4-15.6-37.9-14c-7.9,17.5-2.8,33.9-1.3,35.9c-10.1,9.3-24.3,20.7-20.4,44.6c6.2,35,30.8,53.9,70.5,58.6
                                         c-8.5,1.7-9.9,8-10.6,10.8c-26.7,11-34.3-6.8-37.6-11.4c-11.2-13.8-21.2-9.8-21.8-9.6c-0.6,0.2-1.1,1.1-1,1.5c0.6,3,6.7,6,7,6.3
                                         c8.3,6.2,11.3,17.3,13.2,20.4c11.8,19.5,39.4,11.4,39.6,11.6c0,1.7-0.2,16-0.4,27.2c-50.2-13.7-87.1-59.5-87.1-114
                                         c0-65.4,53-118.3,118.3-118.3S264,80.3,264,145.7C264,196.7,231.7,240,186.5,256.6z" />
                                </g>
                            </svg>
                        </a>

                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block d-xl-block col-lg-2 pt-5">
                <ul class="links">
                    <li> <a href="case-studies.php">Case studies</a> </li>                    
                    <li> <a href="services.php">Services</a> </li>                    
                    <li> <a href="start-buying.php">Contact</a> </li>
                    <li> <a href="about.php">About us</a> </li>
                    <li> <a href="terms-and-conditions.php">Terms & Conditions</a> </li>
                    <li> <a href="start-buying.php">Hire our services</a></li>
                </ul>
                <p>
                    En cumplimiento con la Ley de transparencia (Ley 19/2013), la información de la sociedad puede ser solicitada <a href="start-buying.php">aquí</a>.
                </p>

                <img src="img/pyme_innovadora_meic_EN_web.svg" alt="Innovative SME MEIC logo" class="img-fluid pyme_innovadora_meic" style="width: 40vw;" loading="lazy">
                <!-- <img src="img/pyme_innovadora_meic_EN_web.svg" alt="pyme_innovadora_meic" class="pyme_innovadora_meic" style="width: 12em;"> -->
            </div>
        </div>

    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--<script src="js/jquery-3.3.1.slim.min.js"></script>-->
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G3FEGN3FKT"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-G3FEGN3FKT');
</script>     <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

 </body>

 </html>