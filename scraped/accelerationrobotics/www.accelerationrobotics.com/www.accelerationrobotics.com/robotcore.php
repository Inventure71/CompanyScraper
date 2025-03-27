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
     <link rel="stylesheet" href="css/robotcore.css">
     <link rel="stylesheet" href="css/product.css">
     <link rel="stylesheet" type="text/css" href="css/asciinema-player.css" />

     <!-- Cookies -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
     <title>ROBOTCORE® RPU | Robot Processing Unit specialized in ROS computations</title>
     <meta name="description"
         content="ROBOTCORE® helps build custom compute architectures for robots, or IP cores, that make robots faster, more deterministic and power-efficient." />
     <meta name="keywords" content="robotcore,IP core,hardware acceleration robots,ros acceleration" />
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
     <!-- <div class="cabecera-interior"> -->
     <div class="img-primary-home">
         <div class="container">
             <div class="row no-gutters">
                 <div class="col-12 col-lg-6">
                     <!-- <h4 class="linkotherproducts mt-4 mb-5">
                            <a href="products.php" class="f-azul pb-4"><i class="fa fa-chevron-left"></i> Other
                                products</a>
                        </h4> -->
                     <h1 class="d-none">ROBOTCORE® RPU</h1>
                     <!-- <img src="img/LOGO_ROBOTCORE.gif" alt="ROBOTCORE®" class="img-responsive logo_robotcore pb-3"> -->
                     <img src="img/logo_robotcore_alfa.gif" alt="ROBOTCORE®" class="img-responsive logo_robotcore pb-3">                     
                     <h3 class="f-blanco f-gordita-normal py-2" style="font-size:1.8em;">The Robotic Processing Unit
                         <br>specialized in ROS computations</h3>
                     <p class="mt-1 pb-4" style="color: white;">
                         <strong class="f-blanco">ROBOTCORE®</strong> is a <strong style="color:#4d4cf5;">robot-specific
                             processing unit</strong> (RPU) that helps map Robot Operating System (ROS) computational graphs to its CPUs, GPU and FPGA efficiently to obtain best performance. It empowers robots with the ability to <u>react
                             faster</u>, <u>consume less power</u>, and deliver <u>additional real-time</u>
                         capabilities.


                         <!-- helps <u>build custom compute architectures for
                                robots</u>, or <strong style="color:#4d4cf5;">IP cores</strong>, that make robots faster, more deterministic and/or power-efficient. Simply put, it
                            provides a vendor-agnostic  development, build and deployment experience for creating robot hardware and hardware accelerators similar to the standard, non-accelerated ROS development flow. -->
                     </p>
                     <a href="start-buying.php" class="mb-2 btn btn-linea btn-relleno smooth">Get 
                         ROBOTCORE®</a>
                     <a href="https://github.com/ros-acceleration/robotic_processing_unit" class="mb-2 btn btn-linea btn-linea smooth">Build your own</a>
                 </div>
                 <div class="col-12 col-lg-1"></div>
                 <div class="col-12 col-lg-5 my-auto text-center text-lg-right pt-5 pt-lg-0">
                     <!-- <img src="img/robotcore_render_1080.png" alt="ROBOTCORE® Robotic Processing Unit" class="img-responsive iconorobotcore"> -->
                     <!-- <img src="img/ROBOTCORE-box-shadow.png" alt="ROBOTCORE® Robotic Processing Unit" class="iconorobotcore img-responsive d-none d-sm-block"> -->

                     <img src="img/ROBOTCORE-box-shadow.png"
                         class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/robotcore_render_1080.png"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">
                 </div>
             </div>
         </div>
     </div>

     <!-- How does it work -->
     <div class="mt-5 mb-0 our-duty-home" id="our-duty-home">
         <div class="container containerAC">
             <div class="row no-gutters">
                 <div class="col-12">
                     <!-- <h2>What's inside the ROBOTCORE® robotics brain?</h2> -->
                     <h2>A processing unit for the robotics architect</h2>
                     <img src="img/robotcore_architecture2.svg"
                         class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/robotcore_architecture2.svg"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">

                     <p class="">
                         ROBOTCORE® features multiple CPUs, a GPU and an FPGA interconnected in a common Ethernet databus which allow combining the traditional control-driven approach used in robotics with a data-driven one. This means that when architected appropriately, through acceleration kernels (<strong style="color:#4d4cf5;">IP cores</strong>), ROBOTCORE® provides robotics architects with ROS 2 <strong>accelerated</strong> libraries that deliver <i>faster computations</i> (getting tasks done quickly once started), additional <i>determinism</i> (task happens in exactly the same timeframe, each time) and <i>real time</i> (meeting the time deadlines set for each task). <br>
                    </p>

                    <div class="company mb-5">
                         <div class="container">
                             <div class="row justify-content-center">
                                 <!-- AMRs -->
                                 <div class="col-lg-4 col-12 target-robots">
                                     <img src="img/CPUs.png">
                                     <p class="mt-0 mb-0"><strong>CPUs</strong></p>
                                     <p class="mt-1 mb-0">Scalar Von-Neumann processors. Deliver conventional full computing control wherein a token of control indicates when a statement should be executed. Great at dealing with complex data and implementing custom control structures.</p>
                                 </div>
                                 <!-- Collaborative Robots -->
                                 <div class="col-lg-4 col-12 target-robots">
                                     <img src="img/GPUs.png">
                                     <p class="mt-0 mb-0"><strong>GPUs</strong></p>
                                     <p class=" mt-1 mb-0">
                                        A vector Von-Neumann processor that uses a token of control for executing a vectorized single instruction delivering domain-specific parallelism (e.g. image, video or math).
                                     </p>
                                 </div>
                                 <!-- Industrial Arms -->
                                 <div class="col-lg-4 col-12 target-robots">
                                     <img src="img/FPGAs.png">
                                     <p class="mt-0 mb-0"><strong>FPGAs</strong></p>
                                     <p class="mt-1 mb-0">
                                        Flexible programmable processing and memory structures that provide eager evaluation: statements are executed as soon as data is available. Deliver best potential for parallelism, with high throughput and determinism.
                                    </p>
                                 </div>
                             </div>
                         </div>
                     </div>

                    <!-- Calls for action -->
                    <a href="#techspecs" class="mr-2 mt-2 mb-5 btn btn-relleno">Tech specs <i
                             class="fas fa-chevron-right" aria-hidden="true"></i></a>

                    <!-- <a href="#benchmarks" class="mt-2 mb-5 btn btn-linea">Benchmarks <i
                                 class="fas fa-chevron-right" aria-hidden="true"></i></a> -->
                 </div>
             </div>
         </div>
     </div>

     <!-- transition WtoG -->
     <div class="container-fluid no-gutters transition-WtoG">
         <div class="row no-gutters">
             <div class="col-12"></div>
         </div>
     </div>


     <!-- Supported hardware -->
     <div class="al1-home" id="al1-home">
         <div class="container containerAC">
             <div class="row">
                 <div class="col-12 col-lg-4 div-img mt-5">
                     <h2>Targeted<br> robot types</h2>
                     <img src="img/flecha-dcha.png" class="d-block flecha-dcha pt-5 pb-1">
                     <h4 class="f-gordita-normal pr-lg-5">ROBOTCORE® is perfect to accelerate <u class="autonomousmobility">autonomous mobility</u>, <u class="manipulators">industrial manipulation</u> and <u class="healthcare">healthcare</u> applications.</h4>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 d-lg-block">
                     <div class="company">
                         <div class="container">
                             <div class="row justify-content-center">
                                 <!-- AMRs -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <!-- <img src="img/robotcore-amr.png"> -->
                                     <img src="img/icono-AMRs-2.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Autonomous Mobile Robots (AMRs)</strong></p>
                                 </div>
                                 <!-- Collaborative Robots -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <!-- <img src="img/robotcore-cobot.png"> -->
                                     <img src="img/icon-cobots.png">
                                     <p class="mt-0 mb-0"><strong class="manipulators">Collaborative Robots (cobots)</strong></p>
                                 </div>
                                 <!-- Industrial Arms -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-arm.png">
                                     <p class="mt-0 mb-0"><strong class="manipulators">Industrial Arms</strong></p>
                                 </div>
                                 <!-- Healthcare -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-healthcare.png">
                                     <p class="mt-0 mb-0"><strong class="healthcare">Healthcare</strong></p>
                                 </div>

                                 <!-- Agriculture -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-agriculture.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Agriculture</strong></p>
                                 </div>
                                 <!-- Construction -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-construction.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Construction</strong></p>
                                 </div>
                                 <!-- Mining -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-mining.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Mining</strong></p>
                                 </div>
                                 <!-- Shuttle Vehicles -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-shuttle.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Shuttle Vehicles</strong></p>
                                 </div>
                                 <!-- Automated Trains -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-trains.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Automated Trains</strong></p>
                                 </div>
                                 <!-- Automated Bus -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-bus.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Automated Bus</strong></p>
                                 </div>
                                 <!-- Automated Trucks -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-trucks.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Automated Trucks</strong></p>
                                 </div>
                                 <!-- Automated Cars -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icons-cars.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Automated Cars</strong></p>
                                 </div>
                                 <!-- Robotaxis -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-robotaxis.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Robotaxis</strong></p>
                                 </div>
                                 <!-- Autonomous Logistics -->
                                 <div class="col-lg-3 col-6 comp1 target-robots">
                                     <img src="img/icon-logistics.png">
                                     <p class="mt-0 mb-0"><strong class="autonomousmobility">Autonomous Logistics</strong></p>
                                 </div>



                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Architecture -->
     <div class="py-5">
         <div class="container">
             <div class="row pt-5">
                 <div class="col-12 text-center">
                     <h2>Packing best-of-class accelerators<br> from top silicon vendors</h2>
                     <!-- <p>
                         ROBOTCORE® deals with vendor proprietary libraries for hardware acceleration in
                         robotics. It helps accelerate computations, increase performance and abstract away the
                         complexity of
                         bringing your ROS computational graphs to your favourite silicon architecture. All while
                         delivering the
                         common ROS development flow.
                     </p> -->
                 </div>
                 <div class="col-lg-12 col-xs-12">
                     <p class="pt-4 text-center">
                         <img src="img/robotcore_exploded.png" class="img-responsive">
                     </p>
                 </div>
             </div>

             <div class="row row-subtitulo texto-centrado pb-5">
                 <div class="offset-lg-3 col-lg-6 col-xs-12">
                     <h4 class="f-gordita-normal" style="margin-top:1em; font-weight: 300;">
                         powered by the technologies from:
                     </h4>

                     <div class="company">
                         <div class="container">
                             <div class="row justify-content-center">
                                 <div class="col-lg-3 col-sm-6 col-xs-12 comp1 my-auto">
                                     <img src="img/amd.png" class="mt-3">
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-xs-12 comp1 my-auto">
                                     <img src="img/nvidia2.png" class="mt-3">
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>

         </div>
     </div>

     <!-- Developer tools and accelerators -->
     <div class="servicios-top servicios-seccion bg-negro pt-5 pb-5">
         <div class="container pt-5">
             <div class="row row-subtitulo texto-centrado">
                 <div class="offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-xs-12">
                     <h1 style="color:white;">Developer-ready Tools<br>and IP Cores for robots</h1>
                 </div>
                 <div class="offset-lg-3 col-lg-6 col-xs-12">
                     <!-- <h4 style="color:#4d4cf5">Tools and IP Cores for robots</h4> -->
                     <p style="color:white;">
                         ROS 2 API-compatible hardware acceleration tools and robot Intellectual Property (IP) cores
                         (<strong style="color:#4d4cf5">IP cores</strong>).
                         Improve your robot's latency, throughput and/or power efficiency by <u>simply dropping them
                             into your ROS workspace</u>.
                     </p>
                 </div>
             </div>
         </div>

         <div class="servicios-seccion select-assessments mt-5 py-5 bg-negro">
             <div class="container">
                 <div class="row justify-content-md-center">

                    <!-- ROS 2 -->
                    <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/ROBOTCORE ROS 2 imago total white.png" onmouseover="this.src='img/ROBOTCORE_ROS_2_N_500.gif'"
                             onmouseout="this.src='img/ROBOTCORE ROS 2 imago total white.png'" alt="">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®<br>
                             <span style="color:#4d4cf5">ROS 2</span></h4>
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
                         <img src="img/ROBOTCORE-RTPS imago-total-white.png" onmouseover="this.src='img/RTPS_N_500.gif'"
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
                         <img src="img/ROBOTCORE-UPD-IP-imago-total-white.png" onmouseover="this.src='img/robotcore_udpip.gif'"
                             onmouseout="this.src='img/ROBOTCORE-UPD-IP-imago-total-white.png'" alt="">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®
                             <br><span style="color:#4d4cf5">UDP/IP</span></h4>
                         <p style="color:white;">
                            Accelerated UDP/IP<br> networking stack.<br> UDP/IP on FPGA.
                         <a href="robotcore-udpip.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>

                    <!-- Perception -->
                    <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/perception_500_blanco.png" onmouseover="this.src='img/perception_500.gif'"
                             onmouseout="this.src='img/perception_500_blanco.png'" alt="">
                         <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE®<br>
                             <span style="color:#4d4cf5">Perception</span></h4>
                         <p style="color:white;">Accelerated ROS 2 <br>robotics perception<br> stack.</p>
                         <a href="robotcore-perception.php" class="btn-flecha btn-readmore">
                             <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn
                                 more</span>
                         </a>
                     </div>

                    <!-- Transforms -->
                     <div class="col-12 col-sm-6 col-lg-3 img-block-text">
                         <img src="img/transform_white.png" onmouseover="this.src='img/transform_545.gif'"
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
                         <img src="img/robotcore_500_blanco.png" alt="" onmouseover="this.src='img/robotcore_500.gif'"
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
                         <img src="img/cloud_500_blanco.png" onmouseover="this.src='img/cloud_500.gif'"
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

     <!-- Why focusing in ROS -->
     <div class="pt-5 pb-5 bg-azul">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 text-center">
                     <h2 class="blanco">Why?</h2>
                     <p class="pt-2 pb-2 text-center">
                         <img src="img/ROS2_White.png" class="img-responsive py-5">
                     </p>
                     <p class="pb-4 blanco">
                         Robot brains and robot behaviors take the form of computational graphs, with data flowing
                         between computation Nodes, across physical networks (communication buses) and while mapping to
                         underlying sensors and actuators. <u>The popular choice to build computational graphs for
                         robots these days is the Robot Operating System (ROS), a framework for robot application
                         development</u>. Most companies building real robots today use ROS (or similar event-driven software frameworks, often in concert with ROS). ROS is thereby the <i>common language</i> in robotics with hundreds of companies and thousands of developers using it everyday.
                         Since it's likely your team is already into ROS, so that you don't spend time reinventing the wheel and re-developing what already works, ROBOTCORE® focuses on accelerating ROS computations.
                     </p>

                     <a href="https://github.com/vmayoral/ros-robotics-companies" class="btn btn-relleno-blanco-blanco">Which companies are using ROS?</a>
                     <a href="ros.php" class="btn btn-relleno-blanco">More about ROS</a>
                     
                 </div>
             </div>

         </div>
     </div>

     <!-- Powered by Ubuntu -->
     <!-- <div class="mt-5 mb-0 our-duty-home">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12">
                     <h2>Powered by Ubuntu,<br> the developer-friendly OS</h2>
                     <p>
                         ROBOTCORE® extends the ROS and ROS 2 build systems to allows roboticists to generate
                         acceleration kernels in the same way they generate CPU libraries. Support for legacy ROS
                         systems, and extensions to other middlewares is also possible.
                     </p>
                     <p class="pt-2 pb-5 text-center">
                         <img src="img/ubuntu-logo3.png" class="img-responsive">
                     </p>

                     <a href="start-buying.php" class="btn btn-relleno">Pre-order ROBOTCORE®</a>
                 </div>
             </div>

         </div>
     </div> -->


     <!-- Tech specs -->
     <div class="especify-about" id="techspecs">
         <div class="container containerAC">
             <h2 class="download-text-2 py-4">Tech specs</h2>

             <!-- Applications -->
             <div class="row">
                 <div class="col-lg-12 col-xl-4">
                     <h3>TARGETED <br> ROBOTS</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> Autonomous Mobile Robots (AMRs) </p>
                     <p> Industrial Arms </p>
                     <p> Agriculture </p>
                     <p> Mining </p>
                     <p> Automated Trains </p>
                     <p>Automated Trucks</p>
                     <p>Robotaxis</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> Collaborative Robots (cobots) </p>
                     <p> Healthcare </p>
                     <p> Construction </p>
                     <p> Shuttle Vehicles </p>
                     <p>Automated Bus</p>
                     <p>Automated Cars</p>
                     <p>Autonomous Logistics</p>
                 </div>
             </div>

             <!-- Hardware -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3>HARDWARE <br>SPECS</h3>
                 </div>

                 <!-- CPUs -->
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>CPUs</strong> </p>
                     <br>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>(<span
                             style="color:#C8C8FC">group 1</span>) 12-Core 64-bit Arm® Cortex®-A78 CPU 3MB L2 + 6MB L3 (<i class="f-source f-lightgray">CPU Max Freq 2.2 GHz</i>)</p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>(<span
                             style="color:#4d4cf5">group 2</span>) 4-Core 64-bit Arm® Cortex®-A53 (<i class="f-source f-lightgray">CPU Max Freq 1.3 GHz</i>)</p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>(<span
                             style="color:#4d4cf5">group 2</span>) 2-Core 32-bit Arm® Cortex-R5F real-time processor (<i class="f-source f-lightgray">CPU Max Freq 600MHz</i>)</p>
                 </div>
             </div>

             <!-- GPU -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>GPU</strong> </p>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>NVIDIA Ampere architecture with 2048 NVIDIA® CUDA® cores and 64 Tensor Cores (<i class="f-source f-lightgray">GPU Max Freq 1.3 GHz</i>)</p>
                 </div>
             </div>
             
             <!-- FPGA -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>FPGA</strong> </p>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>256K System Logic Cells, 1248 DSPs, 26.6Mb on-chip memory (<i class="f-source f-lightgray">LUT: 117K, FF: 256K, DSP: 1248, BRAM: 144, URAM: 64</i>)</p>
                 </div>
             </div>

             <!-- Machine Learning throughput -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>Machine Learning throughput</strong> </p>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>275 TOPS</p>
                 </div>
             </div>

             <!-- Memory -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>Memory</strong> </p>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>(<span
                             style="color:#C8C8FC">group 1</span>) 64GB 256-bit LPDDR5 (<i class="f-source f-lightgray">204.8 GB/s</i>)</p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>(<span
                             style="color:#4d4cf5">group 2</span>) 4GB 64-bit DDR4</p>
                 </div>
             </div>

             <!-- Disk storage -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>Disk storage</strong> </p>
                </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>(<span
                             style="color:#C8C8FC">group 1</span>) 64GB eMMC</p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>(<span style="color:#4d4cf5">groups</span> <span style="color:#C8C8FC">1</span> <span style="color:#4d4cf5">and 2</span>) SDHC card (<i class="f-source f-lightgray">external storage</i>)</p>
                 </div>
             </div>

            <!-- Thermal cooling -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>Thermal cooling</strong> </p>
                    
                </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>Active (Fan + Heatsink)</p>
                 </div>
             </div>

             <!-- I/O -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>I/O</strong> </p>                    
                </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>USB 2.0, SD/SDIO, UART,  CAN 2.0B, I2C, SPI, GPIO, EtherCAT</p>
                 </div>
             </div>

            <!-- High-speed I/O -->
            <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>High-speed I/O</strong> </p>                    
                </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>PCIe® Gen2, USB3.0, SATA 3.1, DisplayPort, Gigabit Ethernet, 2x Time Sensitive Networking (TSN) Ethernet</p>
                 </div>
             </div>

             <!-- Hardware synchronization (PTP) -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>Hardware synchronization (PTP)</strong> </p>
                </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>sub-microsecond precision (<1 us)</p>
                 </div>
             </div>

             <!-- Interconnect -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                <div class="col-lg-12 col-xl-4"></div>
                <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p> <strong>Interconnect between <span style="color:#C8C8FC">group 1</span> and <span style="color:#4d4cf5">group 2</span> </strong> </p>
                </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                    <p>Ethernet-based</p>
                 </div>
             </div>
        

            <!-- Responsive -->
            <div class="row">
                 <div class="col-lg-6 col-xl-4 img-responsive d-sm-none">
                    <p> <strong>CPUs</strong> </p> 
                    <p>(<span
                             style="color:#C8C8FC">group 1</span>) 12-Core 64-bit Arm® Cortex®-A78 CPU 3MB L2 + 6MB L3 (<i class="f-source f-lightgray">CPU Max Freq 2.2 GHz</i>)</p>
                    <p>(<span
                             style="color:#4d4cf5">group 2</span>) 4-Core 64-bit Arm® Cortex®-A53 (<i class="f-source f-lightgray">CPU Max Freq 1.5 GHz</i>)</p>
                    <p>(<span
                             style="color:#4d4cf5">group 2</span>) 2-Core 32-bit Arm® Cortex-R5F real-time processor (<i class="f-source f-lightgray">CPU Max Freq 600MHz</i>)</p>
                    <br>

                    <p> <strong>GPU</strong> </p>
                    <p>NVIDIA Ampere architecture with 2048 NVIDIA® CUDA® cores and 64 Tensor Cores (<i class="f-source f-lightgray">GPU Max Freq 1.3 GHz</i>)</p>
                    <br>

                    <p> <strong>FPGA</strong> </p>
                    <p>256K System Logic Cells, 1248 DSPs, 26.6Mb on-chip memory (<i class="f-source f-lightgray">LUT: 117K, FF: 256K, DSP: 1248, BRAM: 144, URAM: 64</i>)</p>
                    <br>

                    <p> <strong>Machine Learning throughput</strong> </p>
                    <p>275 TOPS</p>
                    <br>

                    <p> <strong>Memory</strong> </p>
                    <p>(<span style="color:#C8C8FC">group 1</span>) 64GB 256-bit LPDDR5 (<i class="f-source f-lightgray">204.8 GB/s</i>)</p>
                    <p>(<span
                             style="color:#4d4cf5">group 2</span>) 4GB 64-bit DDR4</p>
                    <br>
                    
                    <p> <strong>Disk storage</strong> </p>
                    <p>(<span
                             style="color:#C8C8FC">group 1</span>) 64GB eMMC</p>
                    <p>(<span
                             style="color:#4d4cf5">groups 1 and 2</span>) SDHC card (<i class="f-source f-lightgray">external storage</i>)</p>
                    <br>


                     <p> <strong>Thermal cooling</strong> </p>
                     <p>Active (Fan + Heatsink)</p>
                     <br>

                     <p> <strong>I/O</strong> </p>
                     <p>USB 2.0, SD/SDIO, UART,  CAN 2.0B, I2C, SPI, GPIO, EtherCAT</p>
                     <br>

                     <p> <strong>High-speed I/O</strong> </p>
                     <p>PCIe® Gen2, USB3.0, SATA 3.1, DisplayPort, Gigabit Ethernet, 2x Time Sensitive Networking (TSN) Ethernet</p>
                     <br>

                     <p> <strong>Hardware synchronization (PTP)</strong> </p>
                     <p>sub-microsecond precision (<1 us)</p>
                     <br>

                     <p> <strong>Interconnect between <span style="color:#C8C8FC">group 1</span> and <span style="color:#4d4cf5">group 2</span> </strong> </p>
                     <p>Ethernet-based</p>
                     <br>
                </div>

                 <div class="col-lg-6 col-xl-4"></div>
                 <div class="col-md-6">
                     <img src="img/robotcore-connectors-1.png" style="max-height:600px" alt="">
                     <img src="img/robotcore-connectors-2.png" style="max-height:600px" alt="">
                     <img src="img/robotcore-connectors-3.png" style="max-height:600px" alt="">
                     
                 </div>

             </div>             

             <!-- Software -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3>SOFTWARE <br>SPECS</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p> <strong>Operating System</strong> </p>
                </div>
                <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>Ubuntu Linux, Yocto 3.4 Honister (<i class="f-source f-lightgray">on demand</i>)</p>
                     <!-- <p>Yocto 3.4 Honister (<i class="f-source f-lightgray">on demand</i>)</p> -->
                 </div>
            </div>

            <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">            
                <div class="col-lg-6 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p> <strong>Robot Operating System (ROS)</strong> </p>

                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>ROS 2 Humble Hawksbill</p>
                 </div>
            </div>

            <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">            
                <div class="col-lg-6 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p> <strong>Communication middleware</strong> </p>

                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>Data Distribution Service (DDS)</p>
                     <!-- <p>(<i class="f-source f-lightgray">intra-process</i>) ROS 2 (rmw / rcl)</p> -->
                     <!-- <p>(<i class="f-source f-lightgray">inter-process</i>) Shared memory</p> -->
                     <!-- <p>(<i class="f-source f-lightgray">intra-network</i>) Data Distribution Service (DDS)</p> -->
                     <!-- <p>(<i class="f-source f-lightgray">inter-network</i>) Data Distribution Service (DDS)</p> -->
                 </div>
            </div>

            <!-- Responsive -->
            <div class="row">
                 <div class="col-lg-6 col-xl-4 img-responsive d-sm-none">
                    <p> <strong>Operating System</strong> </p>
                    <p>Ubuntu Linux, Yocto 3.4 Honister (<i class="f-source f-lightgray">on demand</i>)</p>
                    <!-- <p>Yocto 3.4 Honister (<i class="f-source f-lightgray">on demand</i>)</p> -->
                    <br>

                    <p> <strong>Robot Operating System (ROS)</strong> </p>
                    <p>ROS 2 Humble Hawksbill</p>
                    <br>


                    <p> <strong>Communication middleware</strong> </p>
                    <p>Data Distribution Service (DDS)</p>
                    <br>

                 </div>
             </div>

             <!-- Mechanical -->
             <div class="row">
                 <div class="col-lg-12 col-xl-4">
                     <h3>MECHANICAL <br>SPECS</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p> <strong>Weight</strong> </p>
                     <p> <strong>Materials</strong> </p>
                     <p> <strong>Colour</strong> </p>
                     <p> <strong>Dimensions</strong> </p>

                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>2.2 kg</p>
                     <p>Aluminium</p>
                     <p>Silver</p>
                     <p>145 x 145 x 147 mm</p>
                     </br></br>
                 </div>

                 <div class="col-lg-6 col-xl-4 img-responsive d-sm-none">
                     <p> <strong>Weight</strong> </p>
                     <p>2.2 kg</p>
                     <p> <strong>Materials</strong> </p>
                     <p>Aluminium</p>
                     <p> <strong>Colour</strong> </p>
                     <p>Orange or Silver</p>
                     <p> <strong>Dimensions</strong> </p>
                     <p>145 x 145 x 147 mm</p>

                 </div>

                 <div class="col-lg-6 col-xl-4"></div>
                 <div class="col-md-6 with-image">
                     <img src="img/robotcore-dimensions-1.png" style="max-height:500px" alt="">
                     <img src="img/robotcore-dimensions-2.png" style="max-height:500px" alt="">
                     <img src="img/robotcore-dimensions-3.png" style="max-height:500px" alt="">
                 </div>
             </div>

             <!-- Power -->
             <div class="row">
                 <div class="col-lg-12 col-xl-4">
                     <h3>POWER <br>SPECS</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p> <strong>Power input</strong> </p>
                     <p> <strong>Power</strong> </p>
                     <p> <strong>Min. power</strong> </p>
                     <p> <strong>Max. power</strong> </p>

                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>9-20 V (<i class="f-source f-lightgray">DC power jack</i>)</p>
                     <p>20 W</p>
                     <p>5 W (only <span
                             style="color:#4d4cf5">group 2</span> enabled)</p>
                     <p>75 W</p>

                 </div>

                 <div class="col-lg-6 col-xl-4 img-responsive d-sm-none">
                     <p> <strong>Power input</strong> </p>
                     <p>9-20 V (<i class="f-source f-lightgray">DC power jack</i>)</p>
                     <br>

                     <p> <strong>Power</strong> </p>
                     <p>20 W</p>
                     <br>

                     <p> <strong>Min. power</strong> </p>
                     <p>5 W (only <span
                             style="color:#4d4cf5">group 2</span> enabled)</p>
                     <br>

                     <p> <strong>Max. power</strong> </p>
                     <p>75 W</p>
                     <br>

                 </div>
             </div>

             <!-- Tools and IP Cores -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">TOOLS AND <br>IP CORES</h3>
                     <p style="color:#4d4cf5">(offered separately)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <a style="color:#e0e0e0; text-decoration: underline;"
                         href="robotcore-framework.php">ROBOTCORE®<strong> Framework</strong> (<span
                             style="color:#4d4cf5">tool</span>)</a>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>Hardware acceleration framework for ROS and ROS 2.</p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <a style="color:#e0e0e0; text-decoration: underline;" href="robotcore-cloud.php">ROBOTCORE®<strong>
                             Cloud</strong> (<span style="color:#4d4cf5">tool</span>)</a>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>Tools to speed-up ROS 2 graphs with the cloud, and in the cloud.</p>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <a style="color:#e0e0e0; text-decoration: underline;"
                         href="robotcore-perception.php">ROBOTCORE®<strong> Perception</strong> (<span
                             style="color:#4d4cf5">IP core</span>)</a>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>Accelerated ROS 2 robotics perception stack.</p>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <a style="color:#e0e0e0; text-decoration: underline;"
                         href="robotcore-transform.php">ROBOTCORE®<strong> Transform</strong> (<span
                             style="color:#4d4cf5">IP core</span>)</a>
                 </div>
                 <div class="col-lg-6 col-xl-4 img-responsive d-none d-sm-block">
                     <p>Accelerated ROS 2 coordinate transformations (<span
                             style="font-family: SourceCodePro-Regular;">tf2</span>).</p>
                 </div>
             </div>


             <!-- ///// Responsive //// -->
             <div class="row">
                 <div class="col-lg-6 col-xl-4 img-responsive d-sm-none">
                     <!-- framework -->
                     <a style="color:#e0e0e0; text-decoration: underline;"
                         href="robotcore-framework.php">ROBOTCORE®<strong> Framework</strong> (<span
                             style="color:#4d4cf5">tool</span>)</a>
                     <p>Hardware acceleration framework for ROS and ROS 2.</p>
                     <!-- cloud -->
                     <a style="color:#e0e0e0; text-decoration: underline;" href="robotcore-cloud.php">ROBOTCORE®<strong>
                             Cloud</strong> (<span style="color:#4d4cf5">tool</span>)</a>
                     <p>Tools to speed-up ROS 2 graphs with the cloud, and in the cloud.</p>
                     <!-- perception -->
                     <a style="color:#e0e0e0; text-decoration: underline;"
                         href="robotcore-perception.php">ROBOTCORE®<strong> Perception</strong> (<span
                             style="color:#4d4cf5">IP core</span>)</a>
                     <p>Accelerated ROS 2 robotics perception stack.</p>
                     <!-- transform -->
                     <a style="color:#e0e0e0; text-decoration: underline;"
                         href="robotcore-transform.php">ROBOTCORE®<strong> Transform</strong> (<span
                             style="color:#4d4cf5">IP core</span>)</a>
                     <p>Accelerated ROS 2 coordinate transformations (<span
                             style="font-family: SourceCodePro-Regular;">tf2</span>).</p>
                 </div>
             </div>

         </div>
     </div>

     <!-- Benchmarks -->
     <!-- <div class="especify-about" id="benchmarks">
         <div class="container containerAC">
             <h2 class="download-text-2 py-4">Benchmarks</h2>
             <p style="font-size:0.8rem">(plots are interactive)</p>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3>ROS 2 (core)</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>ROBOTCORE® intra-FPGA ROS 2 communication queue speedup</strong><br> (<i
                             style="font-size:0.8rem">measured with <a style="font-family: SourceCodePro-Regular;"
                                 href="https://github.com/ros-acceleration/acceleration_examples/tree/main/graphs/perception/perception_2nodes">perception_2nodes</a>
                             ROS 2 pakcage, between subsequent Nodes, using AMD KV260</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">1.5x</strong></p>
                     </p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">                     
                     <p> <strong>Performance-per-watt</strong> (Hz/W)<br>(<i style="font-size:0.8rem">measured during
                             iterations 10-100 using <a style="font-family: SourceCodePro-Regular;"
                                 href="https://github.com/ros-acceleration/acceleration_examples/tree/main/nodes/faster_doublevadd_publisher">faster_doublevadd_publisher</a>,
                             with AMD
                             KV260</i>)</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="corechart"></canvas>
                 </div>
             </div>
             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Performance-per-watt improvement</strong> (Hz/W)<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">3.69x</strong></p>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">ROS 2 PERCEPTION NODES</h3>
                     <p style="color:#4d4cf5">(requires <a href="robotcore-perception.php">ROBOTCORE® Perception</a>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Resize</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">2.61x</strong></p>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Resize</strong> - kernel runtime latency (ms)
                         (<i style="font-size:0.8rem">ROBOTCORE Perception running on an AMD KV260, NVIDIA Isaac ROS
                             running in a Jetson Nano 2GB. Measurements present the kernel runtime in milliseconds (ms)
                             and discard ROS 2 message-passing infrastructure overhead
                             and host-device (GPU or FPGA) data transfer overhead</i>)

                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="resizenode"></canvas>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Rectify</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">7.34x</strong></p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Rectify</strong> - kernel runtime latency (ms)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="rectifynode"></canvas>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Harris</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">30.27x</strong></p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Harris</strong> - kernel runtime latency (ms)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="harrisnode"></canvas>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Histogram of Oriented Gradients</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">509.52x</strong></p>
                 </div>
             </div>
             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Histogram of Oriented Gradients</strong> - kernel runtime latency (ms)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="hognode"></canvas>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>


             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">ROS 2 PERCEPTION GRAPHS</h3>
                     <p style="color:#4d4cf5">(requires <a href="robotcore-perception.php">ROBOTCORE® Perception</a>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             2-Node pre-processing perception graph latency </strong>(ms)

                         <br> (<i style="font-size:0.8rem">Simple graph with 2 Nodes (<span
                                 class="code">Rectify</span>-<span class="code">Resize</span>) demonstrating perception
                             pre-processing with the <a class="f-source" href="/image_pipeline">image_pipeline</a> ROS 2
                             package. AMD's KV260 and NVIDIA's Jetson Nano 2GB boards are used for benchmarking, the
                             former featuring a Quad-core arm Cortex-A53 and the latter a Quad-core arm Cortex-A57.
                             Source code used for the benchmark is available at the <a class="f-source"
                                 href="/acceleration_examples/tree/main/graphs/perception/perception_2nodes">perception_2nodes</a>
                             ROS 2 package</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="perception_2nodes_runtime"></canvas>
                 </div>
             </div>
             <div class="row pt-5" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             2-Node pre-processing perception graph performance-per-watt</strong> (Hz/W)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="myChart4"></canvas>
                 </div>
             </div>
             <div class="row pt-5" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Graph speedup</strong> - 2-Node pre-processing perception graph latency<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">3.6x</strong></p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Performance-per-watt improvement</strong> - 2-Node pre-processing perception graph<br>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">6x</strong></p>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             3-Node pre-processing and region of interest detector perception graph latency
                         </strong>(ms)
                         <br> (<i style="font-size:0.8rem">3-Nodes graph (<span class="code">Rectify</span>-<span
                                 class="code">Resize</span>-<span class="code">Harris</span>) demonstrating perception
                             pre-processing and region of interest detection with the <a class="f-source"
                                 href="/image_pipeline">image_pipeline</a> ROS 2
                             package. AMD's KV260 featuring a Quad-core arm Cortex-A53 is used for benchmarking.
                             Source code used for the benchmark available at the <a class="f-source"
                                 href="/acceleration_examples/tree/main/graphs/perception/perception_3nodes">perception_3nodes</a>
                             ROS 2 package</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="graph3node"></canvas>
                 </div>
             </div>
             <div class="row" style="padding: 3em 0 2em 0">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Graph speedup</strong> - 3-Node pre-processing and region of interest detector
                         perception
                         graph<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">4.5x</strong></p>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-0">ROS 2 TRANSFORM (<span class="f-source">tf2</span>)</h3>
                     <p style="color:#4d4cf5">(requires <a href="robotcore-transform.php">ROBOTCORE® Transform</a>)</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             <span class="code">tf</span> tree subscription latency
                         </strong>(us), <br>2 subscribers

                         <br> (<i style="font-size:0.8rem">Measured the worse case subscription latency in a graph with
                             2 <span class="code">tf</span> tree subscribers. Using AMD's KV260 board, NVIDIA's Jetson
                             Nano 2GB and Microchip's PolarFire Icicle Kit.
                             AMD's KV260 board has been used for benchmarking the CPU default <span
                                 class="f-source">tf2</span> baseline.
                         </i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="tf3nodes"></canvas>
                 </div>
             </div>
             <div class="row" style="padding: 3em 0 2em 0">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             <span class="code">tf</span> tree subscription latency
                         </strong>(us), <br>20-100 subscribers

                         <br> (<i style="font-size:0.8rem">Measured the worse case subscription latency in a graph with
                             multiple <span class="code">tf</span> tree subscribers.
                             AMD's KV260 board has been used for benchmarking all results.
                         </i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="testgraph"></canvas>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">ROS 2 CLOUD NODES</h3>
                     <p style="color:#4d4cf5">(requires <a href="robotcore-cloud.php">ROBOTCORE® Cloud</a>)</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             ORB-SLAM2 Simultaneous Localization and Mapping (SLAM) Node runtime </strong>(s)
                         <br> (<i style="font-size:0.8rem">Measured the mean per-frame runtime obtained from the
                             ORB-SLAM2 Node while running in two scenarios: 1) <span style="color:white">Default ROS
                                 2</span> running on the edge with an Intel NUC with an Intel® Pentium® Silver J5005 CPU
                             @ 1.50 GHz with 2 cores enabled and with a 10 Mbps network connection and 2) <span
                                 style="color:#4d4bfb">ROBOTCORE® Cloud</span> running in the cloud with a 36-core cloud
                             computer provisioned.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="orblslamnode"></canvas>
                 </div>
             </div>
             <div class="row" style="padding: 0em 0 2em 0">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Node speedup</strong> - ORB-SLAM2 SLAM Node runtime<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">4x</strong></p>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">CLOUD (OTHER) </h3>
                     <p style="color:#4d4cf5">(requires <a href="robotcore-cloud.php">ROBOTCORE® Cloud</a>)</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Grasp Planning with Dex-Net compute runtime </strong>(s)
                         <br> (<i style="font-size:0.8rem">Measured the mean compute runtime obtained over 10 trials
                             while using a a Dex-Net Grasp Quality Convolutional Neural Network to compute grasps from
                             raw RGBD image observations. Two scenarios are considered: 1) <span
                                 style="color:white">Edge</span> - running on the edge with an Intel NUC with an Intel®
                             Pentium® Silver J5005 CPU @ 1.50 GHz with 2 cores enabled and with a 10 Mbps network
                             connection and 2) <span style="color:white">ROBOTCORE® Cloud</span> - the same edge machine
                             to collect raw image observations sent to a cloud computer equiped with an Nvidia Tesla T4
                             GPU.
                         </i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="dexnet"></canvas>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Grasp Planning speedup</strong> - Dex-Net computation total runtime (including
                         network)<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">11.7x</strong></p>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Motion Planning Templates (MPT) compute runtime </strong>(s)
                         <br> (<i style="font-size:0.8rem">Measuring the mean compute runtime while running multi-core
                             motion planners from the Motion Planning Templates (MPT) on reference planning problems
                             from the Open Motion Planning Library (OMPL). Two scenarios are considered: 1) <span
                                 style="color:white">Edge</span> - running on the edge with an Intel NUC with an Intel®
                             Pentium® Silver J5005 CPU @ 1.50 GHz with 2 cores enabled and with a 10 Mbps network
                             connection and 2) <span style="color:white">ROBOTCORE® Cloud</span> - the same edge
                             offloads computations to a 96-core cloud computer.
                         </i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="mpt"></canvas>
                 </div>
             </div>
             <div class="row" style="padding: 0em 0 2em 0">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Motion planning speedup</strong> - Motion Planning Templates (MPT) compute runtime
                         (including network)<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">28.9x</strong></p>
                 </div>
             </div>
         </div>
     </div> -->

     <div class="wearerobots">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5 pb-4">
                <h2>Do you have any questions?</h2>
                <p>Get in touch with our team.</p>
                <a href="about.php#find-us" class="btn btn-relleno">Let's talk <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
                <a href="case-studies.php" class="btn btn-linea">Case studies <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
     <!-- transition footer -->
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
</script>

     <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

     <!-- <script>
        // in here scripts for plots
     </script> -->
 </body>

 </html>