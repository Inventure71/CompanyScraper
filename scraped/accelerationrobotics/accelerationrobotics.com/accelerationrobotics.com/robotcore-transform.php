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
     <title>Accelerated tf for ROS | Speed up your robotics coordinate system transformations</title>
     <meta name="description" content="Accelerated Transform (tf) for ROS and ROS 2. Speed up your robotics coordinate system transformations" />
     <meta name="keywords" content="hardware acceleration,hardware,robotics,FPGA, GPU" />
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


     <div class="cabecera-interior">
         <div class="container">
             <div class="row no-gutters">
                 <div class="col-12 col-lg-6 my-auto">
                     <h4 class="linkotherproducts mt-4 mb-3">
                    <a href="products.php" class="f-azul pb-4"><i class="fa fa-chevron-left"></i> Other
                             products</a>
                     </h4>
                     <h1 class="titulo-robotcore">ROBOTCORE <span>Transform</span></h1>
                     <h3 class="f-blanco f-gordita-normal" style="font-size:1.8em;">Speed up your ROS
                         Coordinate System Transformations (<span class="f-source">tf</span>)</h3>
                     <p class="mt-1 pb-4 f-blanco">
                         <strong>ROBOTCORE Transform</strong> is an optimized robotics transform library that manages
                         efficiently the transformations between coordinate systems in a robot. <strong class="f-azul">API-compatible with the ROS 2 transform (<span class="f-source">tf2</span>)
                             library</strong>, ROBOTCORE <strong style="color:#4d4cf5;">Transform</strong> delivers
                         higher throughput and lower latency while aligning with the standard way to keep track of
                         coordinate frames and transform data within a ROS robotic system.
                     </p>
                     <a href="start-buying.php" class="btn btn-linea btn-relleno smooth mt-3">Get ROBOTCORE® Transform</a>
                     <a href="robotics-consulting.php" class="btn btn-linea btn-linea smooth mt-3">Robotics 
                         consulting?</a>
                 </div>
                 <div class="col-12 col-lg-6 my-auto text-center text-lg-right pt-5 pt-lg-0">
                     <img src="img/transform_500.gif" alt="ROBOTCORE TRANSFORM" class="img-responsive iconorobotcore">
                 </div>
             </div>
         </div>
     </div>

     <!-- How does it work -->
     <div class="mt-5 mb-0 pb-4 our-duty-home" id="our-duty-home">
         <div class="container-fluid">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2>Accelerated coordinate transformations (<span class="f-source">tf</span>)</h2>
                     <p class="mb-3">
                         The ROS <span class="f-source">tf2</span> library manages the transformations between
                         coordinate systems in a robot. It does so by using a directed single rooted tree that has
                         methods for 1) registration of transformation information and 2) computation of coordinate
                         transformations. The cool thing about <span class="f-source">tf2</span> is that it allows to
                         transform data in time as well as in space, which makes it a centric component in the ROS
                         ecosystem being used in popular robotics stacks including <span class="f-source">navigation2</span>, <span class="f-source">moveit2</span> and <span class="f-source">Autoware.Auto</span>.
                     </p>
                     <p class="mb-3">
                         ROBOTCORE <strong style="color:#4d4cf5;">Transform</strong> introduces architectural upgrades
                         in the <span class="f-source">tf2</span> implementation and leverages hardware acceleration to
                         create customized transform data pipelines that deliver higher throughput and lower the latency
                         while reading (or publishing) the <span class="f-source">tf2</span> tree. ROBOTCORE <strong style="color:#4d4cf5;">Transform</strong> is served either as source code or as an IP which
                         allows your ROS computational graphs to easily integrate it. Delivering <u>lower latency and
                             higher throughput</u>, it's <strong>API-compatible
                             with
                             the ROS 2 <span class="f-source">tf2</span> library</strong> simplifying its integration in
                         existing robots, so that you don’t spend time reinventing the wheel and re-developing what
                         already works.
                     </p>
                     <img src="img/transform-graph.svg" class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/robotcore-transform-mobile.svg" class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3 ">
                     <a href="#benchmarks" class="mt-5 mb-5 btn btn-relleno">Benchmarks <i class="fas fa-chevron-right" aria-hidden="true"></i>
                     </a>
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

     <!-- ROS transform example 1 (why?) -->
     <div class="bg-gris py-5">
         <div class="container containerAC">
             <div class="row py-5">
                 <div class="col-12 col-lg-4 text-center text-lg-left">
                     <h2>Why <span class="f-source">tf2</span>?</h2>
                     <h4 class="f-gordita-normal">To keep track of a robot's position, and the rest of the world in
                         relation to itself</h4>
                     <p class="mt-4">
                         <span class="f-source">tf2</span> allows roboticists to keep track of multiple coordinate
                         frames over time. It maintains the relationship between coordinate frames in a graph-like data
                         structure (a tree) that is buffered in time, and lets the ROS graph-users to transform data
                         between any two coordinate frames at any desired point in time, provided such point is
                         available within the buffers.
                     </p>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 no-padding my-auto">
                     <img src="img/transform-grafico-robot.png" alt="" class="img-responsive d-none d-lg-block">
                     <img src="img/robotcore-transform-why-tf2-mobile.png" class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">

                 </div>
             </div>
         </div>
     </div>

     <!-- ROS transform example 2 (how?) -->
     <div class="bg-azul py-5">
        <div class="container containerAC">
             <div class="row pb-5">
                 <div class="col-12 col-lg-8 my-auto text-center">
                     <img src="img/transform-map-blanco.png" alt="" class="img-responsive mx-auto d-none d-lg-block">
                     <img src="img/why-tf2-mobile.png" class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">

                 </div>
                 <div class="col-12 col-lg-4 my-auto text-center text-lg-left">
                     <h4 class="f-gordita-normal f-blanco"><strong>Transform data between coordinate frames in time and in space</strong></h4>
                     <p class="mt-4" style="color:#b8b7fa;">
                     <span class="f-source">tf2</span> is generally best understood via example: consider a robot
                         fleet consisting on 3 robots in a warehouse that start from similar positions. Each robot
                         senses the environment using the laser mounted on its top (<span class="f-source">base_link_laser</span> frame), as well as the lasers readings from
                         the other robots. The challenge on each robot to integrate all these laser readings requires
                         knowledge of the relationship over time and over space between the laser (<span class="f-source">base_link_laser</span> frame), to the base (<span class="f-source">base_link</span> frame), to the ground level (<span class="f-source">base_footprint</span> frame), to the world frame (<span class="f-source">map</span> frame) and back to whichever frame ends up being used to
                         compute the sensor fusion. After all, sensor readings can only be integrated when expressed in
                         the same coordinate frame.
                     </p>
                 </div>
             </div>
         </div>
     </div>

     <div class="mt-5 our-duty-home" id="our-duty-home">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <h2>Up to 5x faster<br><span class="f-source">tf2</span> tree operations</h2>
                     <p>
                         Transforming data across coordinate frames is key to ROS computational graphs. <span class="f-source">tf2</span> sits at the core of <span class="f-source">navigation2</span>,
                         <span class="f-source">moveit2</span> and <span class="f-source">Autoware.Auto</span> (among
                         others). For every motion computation, the <span class="f-source">tf2</span> tree gets accessed
                         many times. This makes <span class="f-source">tf2</span> a very time-sensitive component in
                         high performance robots, wherein both latency and throughput must be carefully considered.
                         That's where ROBOTCORE <strong style="color:#4d4cf5;">Transform</strong> comes to play. It
                         introduces architectural upgrades in the <span class="f-source">tf2</span> implementation and
                         leverages hardware acceleration delivering a 5x latency speedup in coordinate transformations.
                     </p>
                 </div>
             </div>
             <div class="row pb-3">
                 <div class="col-12">
                     <img src="img/tf2_complex.png" alt="" class="img-responsive">
                 </div>
             </div>

         </div>
     </div>

     <div class="container-fluid">
         <div class="row">
             <div class="col-12 col-lg-6 order-2 order-lg-1 px-0 pr-lg-4 col-imgdoc">                 
             </div>
             <div class="col-12 col-lg-6 col-xl-5 order-1 order-lg-2 p-5 my-auto text-center text-lg-left">
                 <h2>Developer-ready documentation and support</h2>
                 <p class="mb-3" style="margin-top:1em; ">
                     <strong>ROBOTCORE Transform</strong> is served by seasoned ROS developers and for ROS development.
                     It ships as a complement to ROBOTCORE either as IP, or as source code. It includes
                     documentation, examples, reference designs and the possibility of various levels of support.
                 </p>
                 <a href="start-buying.php" class="btn btn-linea mt-4">Ask about support levels</a>
             </div>
         </div>
     </div>






     <!-- Benchmarks -->
     <div class="especify-about" id="benchmarks">
         <div class="container containerAC">
             <h2 class="download-text-2 py-4">Benchmarks</h2>
             <p style="font-size:0.8rem">(plots are interactive)</p>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <!-- <div class="row" style="border-bottom: 0 !important;"> -->
                 <div class="col-lg-12 col-xl-4">
                     <h3>ROS 2 (<span class="f-source">tf2</span>)</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             <span class="code">tf</span> tree subscription latency
                         </strong>(us), <br>2 subscribers

                         <br> (<i style="font-size:0.8rem">Measured the worse case subscription latency in a graph with
                             2 <span class="code">tf</span> tree subscribers.
                             AMD's KV260 board has been used for benchmarking.
                         </i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="tf3nodes"></canvas>
                 </div>
             </div>
             <div class="row pt-5" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             <span class="code">tf</span> tree subscription latency
                         </strong>(us), <br>20-100 subscribers

                         <br> (<i style="font-size:0.8rem">Measured the worse case subscription latency in a graph with
                             multiple <span class="code">tf</span> tree subscribers.
                             AMD's KV260 board has been used for benchmarking.
                         </i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="testgraph"></canvas>
                 </div>
             </div>
             <!-- <div style="border-bottom:1px dashed #555;"></div> -->
         </div>
     </div>



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



     <script>
         function barplot_2(value1, value2, label1, label2, yaxis, placementid, color2 = "#76b900") {
             const barplot_data = {
                 labels: [
                     label1,
                     label2,
                 ],
                 datasets: [{
                         label: label1,
                         data: [value1, 0],
                         backgroundColor: '#4d4bfb',
                     },
                     {
                         label: label2,
                         data: [0, value2],
                         backgroundColor: color2,
                     }
                 ]
             };
             const barplot_config = {
                 type: 'bar',
                 data: barplot_data,
                 options: {
                     plugins: {
                         title: {
                             display: false,
                             text: 'Barplot diagram'
                         },
                         tooltip: {
                             callbacks: {
                                 label: function(context) {
                                     let label = context.parsed.y + " us" || '';
                                     return label;
                                 }
                             }
                         }
                     },
                     responsive: true,
                     scales: {
                         x: {
                             stacked: true,
                         },
                         y: {
                             stacked: true,
                             title: {
                                 display: true,
                                 text: yaxis,
                                 padding: {
                                     top: 30,
                                     left: 0,
                                     right: 0,
                                     bottom: 0
                                 }
                             }
                         }
                     }
                 }
             };
             return new Chart(document.getElementById(placementid), barplot_config);
         }

         function lineplot(labels, data1, data2, label1, label2, placementid, yaxis = "") {

             const lineplot_data = {
                 labels: labels,
                 datasets: [{
                         label: label1,
                         backgroundColor: '#4d4bfb',
                         borderColor: '#4d4bfb',
                         data: data1,
                     },
                     {
                         label: label2,
                         backgroundColor: '#FFF',
                         borderColor: '#FFF',
                         data: data2,
                     }
                 ]
             };


             const lineplot_config = {
                 type: 'line',
                 data: lineplot_data,
                 options: {
                     plugins: {
                         title: {
                             display: false,
                             text: 'Line diagram'
                         },
                         //   tooltip: {
                         //       callbacks: {
                         //           label: function(context) {
                         //               let label = context.parsed.y + " ms" || '';
                         //               return label;
                         //           }
                         //       }
                         //   }
                     },
                     responsive: true,
                     scales: {
                         x: {
                             stacked: false,
                         },
                         y: {
                             stacked: false,
                             title: {
                                 display: true,
                                 text: "Subscription latency (ms)",
                                 padding: {
                                     top: 30,
                                     left: 0,
                                     right: 0,
                                     bottom: 0
                                 }
                             }
                         }
                     }
                 }
             };

             return new Chart(document.getElementById(placementid), lineplot_config);
         }


         let tf3nodes = barplot_2(9.26047, 34.6659, 'ROBOTCORE® Transform', 'tf2 (default)', 'Subscription latency (us)',
             'tf3nodes', color = "white")

         let testgraph = lineplot(
             // //// 2-5
             // [2, 3, 4, 5],
             // [0.00915086, 0.00926047, 0.0132388, 0.016237],
             // [0.024164, 0.0346659, 0.0458848, 0.0585263],

             [20, 40, 60, 80, 100],
             [0.0632416, 0.126576, 0.177825, 0.218277, 0.236887],
             [0.240756, 0.493936, 0.754859, 1.04931, 1.27787],
             'ROBOTCORE® Transform', 'tf2 (default)', "testgraph", "# Components interacting with tf2 tree"
         )
     </script>
 </body>

 </html>