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
     <title>RobotPerf | Reference benchmarking suite used to evaluate robotics computing performance</title>
     <meta name="description"
         content="RobotPerf™ is a reference benchmarking suite used to evaluate robotics computing performance" />
     <meta name="keywords" content="robotperf,benchmarking,ROS,ROS 2,robotics" />
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
     <div class="cabecera-interior">
         <div class="container">
             <div class="row no-gutters">
                 <div class="col-12 col-lg-6 my-auto">
                     <h4 class="linkotherproducts mt-4 mb-2">
                         <!-- <a href="about.php" class="f-azul"><i class="fa fa-chevron-left"></i> About Acceleration Robotics</a> -->
                     </h4>
                     <h1 class="titulo-robotcore">RobotPerf <span>Benchmarks</span></h1>
                     <h3 class="f-blanco f-gordita-normal" style="font-size:1.8em;">
                         The benchmarking suite to evaluate robotics computing performance
                     </h3>
                     <p class="mt-1 pb-4 f-blanco">
                         <strong>RobotPerf™</strong> provides an <strong class="f-azul">open reference
                             benchmarking suite</strong> that is used to <strong class="f-azul">evaluate robotics
                             computing performance fairly with ROS 2 as its common baseline</strong>, so that robotic
                         architects can make informed decisions about the hardware and software components of their
                         robotic systems.
                     </p>
                     <a href="https://github.com/robotperf/benchmarks#benchmarks"
                         class="btn btn-linea btn-relleno smooth">RobotPerf™
                         <span
                             style="font-family: SourceCodePro-Regular;">source code</span></a>
                     <!-- <a href="https://forms.gle/ftr7uG69S2AipKU97"
                         class="btn btn-linea btn-linea smooth mt-2 mt-md-0">Join RobotPerf™ project</a> -->
                     <a href="https://github.com/robotperf/benchmarks/releases" class="btn btn-linea btn-linea smooth mt-2 mt-md-0">RobotPerf™ reports</a>
                     <!-- <a href="#" class="btn btn-linea btn-linea smooth">Read the paper</a> -->
                 </div>
                 <div class="col-12 col-lg-6 my-auto text-center text-lg-right pt-5 pt-lg-0">
                     <img src="img/ROBOTPerf_text1.svg" alt="RobotPerf™ Benchmark"
                         class="img-responsive iconorobotcore">
                 </div>
             </div>
         </div>
     </div>

     <!-- improving robot computations -->
     <div class="mt-5 mb-0 pb-4 our-duty-home" id="our-duty-home">
         <div class="container-fluid">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2>Robot computations can improve when the right<br> computing platform is selected</h2>
                     <p class="mb-3 mt-0">
                         Benchmarking is the act of running a computer program with a known workload to assess the
                         program's relative performance. Performance information can help roboticists design more
                         efficient robotic systems and select the right hardware for their robotic application.
                     </p>
                     <img src="img/RobotPerf-page01-robot-computations-graph.png"
                         class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/RobotPerf-page01-robot-computations-graph.png"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">
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


     <!-- The performance benchmarking suite in robotics -->
     <div class="mb-0 pb-4 our-duty-home al1-home" id="our-duty-home">
         <div class="container-fluid">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2>The performance benchmarking suite in robotics</h2>
                     <p class="mb-3 mt-0">
                         The myriad combinations of robot hardware and robotics software make assessing robotic-system
                         performance challenging, specially in an architecture-neutral, representative, and reproducible
                         manner. <strong>RobotPerf™</strong> addresses this issue delivering <strong class="f-azul">a
                             reference performance benchmarking suite that is used to evaluate robotics computing
                             performance</strong> across CPU, GPU, FPGA and other compute accelerators. The benchmarks
                         are designed to be representative of the performance of a robotic system and to be reproducible
                         across different robotic systems. For that, <strong>RobotPerf™ builds on top of ROS 2</strong>,
                         the de facto standard for robot application development.
                     </p>
                     <img src="img/RobotPerf-page03-benchmarks-graph.png"
                         class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/robotperf-diagram-mobile.png"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">
                     </a>
                 </div>
             </div>
         </div>
     </div>

     <div class="al1-home">
         <div class="container">
             <div class="row pb-0">
                 <div class="col-12 col-lg-6 pb-3 pb-lg-0 pr-lg-5">
                     <h3 class="f-gordita-normal pb-2">Mission</h3>
                     <p class="mt-0">
                         Represented by consortium of robotics leaders from industry, academia and research labs,
                         RobotPerf™
                         is formated as an open project whose mission is to build open, fair and useful robotics
                         benchmarks
                         that are technology agnostic, vendor-neutral and provide unbiased evaluations of robotics
                         computing
                         performance for hardware, software, and services.
                     </p>
                 </div>
                 <div class="col-12 col-lg-6 pt-0 pt-lg-0 pl-lg-5">
                     <h3 class="f-gordita-normal pb-2">Purpose</h3>
                     <p class="mt-0">
                         Benchmarking assists in performance evaluation. Roboticists can use performance data to develop
                         more efficient robotic systems and choose the appropriate hardware for each robotic application
                         with the help of performance data. It can also aid in comprehending the trade-offs between
                         algorithms implementing the same skill.
                     </p>
                 </div>
                 <div class="col-12 col-lg-12 pt-3">
                     <h3 class="f-gordita-normal">Standards</h3>
                     <p class="mt-0">
                         RobotPerf™ aligns to robotics standards so that you don’t spend time reinventing the wheel and
                         re-develop what already works for most. Particularly benchmarks are conducted using the <a
                             href="ros.php" class="f-azul" target="_blank">Robot Operating System 2 (ROS 2)</a> as its
                         common baseline. RobotPerf™ also aligns to standardization initiatives within the ROS ecosystem
                         related to computing performance and benchmarking such as <a
                             href="https://github.com/ros-infrastructure/rep/pull/324" class="f-azul"
                             target="_blank">REP
                             2008</a> (<i>ROS 2 Hardware Acceleration Architecture and Conventions</i>). See the <a
                             href="https://github.com/robotperf/benchmarks/blob/main/benchmarks/README.md"
                             class="f-azul" target="_blank">RobotPerf™ Specification</a> for more details.
                     </p>
                 </div>
             </div>
         </div>
     </div>

     <div class="mb-0 pb-4 our-duty-home al1-home">
         <div class="container-fluid">
             <div class="row no-gutters">
                 <div class="col-12">
                     <a href="https://github.com/robotperf/benchmarks#benchmarks"
                         class="mb-5 btn btn-relleno">RobotPerf™ source code
                     </a>
                 </div>
             </div>
         </div>
     </div>


     <!-- Why? -->
     <div class="py-5 bg-azul">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 text-center">
                     <h2 class="blanco">Why?</h2>
                     <p class="pt-0 pb-2 text-center">
                         <img src="img/ROS2_White.png" class="img-responsive pt-0 pb-2">
                     </p>
                     <p class="pb-4 blanco text-justify">
                         Robot behaviors take the form of computational graphs, with data flowing between computation
                         Nodes, across physical networks (communication buses) and while mapping to underlying sensors
                         and actuators. The popular choice to build these computational graphs for robots these days is
                         the Robot Operating System (ROS), a framework for robot application development. ROS enables
                         you to build computational graphs and create robot behaviors by providing libraries, a
                         communication infrastructure, drivers and tools to put it all together. Most companies building
                         real robots today use ROS or similar event-driven software frameworks. ROS is thereby the
                         common language in robotics, with several hundreds of companies and thousands of developers
                         using it everyday. ROS 2 was redesigned from the ground up to address some of the challenges in
                         ROS and solves many of the problems in building reliable robotics systems.<br>
                         <br>
                         ROS 2 presents a modern and popular framework for robot application development most silicon
                         vendor solutions support, and with a variety of modular packages, each implementing a different
                         robotics feature that simplifies performance benchmarking in robotics.
                     </p>

                     <a href="https://github.com/vmayoral/ros-robotics-companies"
                         class="btn btn-relleno-blanco-blanco">Which companies are using ROS?</a>
                     <a href="https://accelerationrobotics.com/ros.php" class="btn btn-relleno-blanco">More about
                         ROS</a>

                 </div>
             </div>
         </div>
     </div>     

     <!-- Visualizing Robotics Computing Performance -->
     <div class="mt-5 pt-5 pb-4 our-duty-home">
         <div class="container containerAC">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2>Robotics Computing Performance:<br><strong class="f-azul">Visualizing</strong></h2>
                     <p class="mb-3 mt-0 text-center">
                         For robotic architects, delving into the multifaceted dimensions of computing performance is
                         crucial, yet often intricate. RobotPerf™ stands as a beacon in this space, offering a range of
                         visualizations tailored for clarity and depth. One such illustration is the polar plot, which
                         displays benchmarks within a particular robotic computing category on separate axes. Through
                         RobotPerf™, architects can instantly perceive a system's proficiency across these benchmarks.
                         They can pinpoint both the strengths and areas of improvement, and thereby make informed
                         decisions in design and optimization. With RobotPerf™, the complexity of robotics computing
                         performance is transformed into actionable insights, making the architect's role not only
                         simpler but also more effective.
                     </p>
                     <img src="img/visualizing_robotics_computing_performance.png"
                         class="img-responsive img-robots-full2 d-none d-lg-block mb-1 pt-3"
                         alt="Visualizing Robotics Computing Performance with Polar Plots">
                     <img src="img/visualizing_robotics_computing_performance.png"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3"
                         alt="Mobile view of Robotics Computing Polar Plots">
                 </div>
             </div>
         </div>
     </div>



     <!-- benchmarking approaches: black & grey -->
     <div class="mt-5 pt-5 mb-5 pb-4 our-duty-home" id="our-duty-home">
         <div class="container-fluid mb-5">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2><strong class="f-azul">Robot Benchmarks</strong>:<br> Two benchmarking approaches</h2>
                     <!-- <img src="img/RobotPerf-page01-robot-computations-graph.png"
                         class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/RobotPerf-page01-robot-computations-graph.png"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3"> -->
                 </div>
             </div>
         </div>
         <div class="container">
             <div class="row pb-0">
                 <div class="col-12 col-lg-6 pb-3 pb-lg-0 pr-lg-5">
                     <div style="border-radius: 10px; padding: 40px; background: #d5d5d5;">
                         <p class="mt-0">
                             <a class="f-gordita-black">GREY-BOX</a> is an application-specific measure capable of
                             watching internal states of the system that can measure (probe) certain points in the
                             system, thus generate the measurement data with minimal interference incurring into a
                             minimal average latency of only 3.3 us, making it well-suited for real-time systems. This
                             approach is more complex, but it offers a more detailed analysis, and makes it more
                             appealing for real-world robotic applications and real-time systems, but a less good choice
                             for quick prototyping.
                         </p>
                     </div>
                     <img src="img/RobotPerf-page05-greybox-graph.png"
                         class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/RobotPerf-page05-greybox-graph.png"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">
                 </div>
                 <div class="col-12 col-lg-6 pt-0 pt-lg-0 pl-lg-5">
                     <div style="border-radius: 10px; padding: 40px; background: black;">
                         <p class="f-blanco mt-0">
                             <a class="f-gordita-black">BLACK-BOX</a> measures performance by eliminating the layers
                             above the layer-of-interest and replacing those with a specific test application or compute
                             node. While this approach doesn't need extra instrumentation, and is easier to implement,
                             it offers a less detailed analysis, has limited data points, and uses a non-standard data
                             format while altering the computational graph (introducing new nodes). This makes it less
                             appealing for real-world robotic applications and real-time systems, but a good choice for
                             quick prototyping.
                         </p>
                     </div>
                     <img src="img/RobotPerf-page04-blackbox-graph.png"
                         class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/RobotPerf-page04-blackbox-graph.png"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">
                 </div>
             </div>
         </div>
     </div>


     <!-- Supported hardware -->
     <div class="al1-home" id="al1-home">
         <div class="container containerAC">
             <div class="row">
                 <div class="col-12 col-lg-4 div-img mt-5">
                     <h2>RobotPerf™<br> categories</h2>
                     <img src="img/flecha-dcha.png" class="d-block flecha-dcha pt-5 pb-1">
                     <h4 class="f-gordita-normal pr-lg-5">RobotPerf™ benchmarks aim to cover the <strong>complete
                             robotics pipeline</strong> including <u class="robotperf-perception">perception</u>, <u
                             class="robotperf-localization">localization</u>, <u class="robotperf-motion-control">communications middleware</u>, <u class="robotperf-control">control</u>,
                         <u class="robotperf-manipulation">manipulation</u> and <u
                             class="robotperf-navigation">navigation</u></h4>
                     <p>
                         <i>New categories may appear over time</i>.
                     </p>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 d-lg-block">
                     <div class="company">
                         <div class="container">
                             <div class="row justify-content-center">
                                 <!-- Perception -->
                                 <div class="col-lg-4 col-6 comp1 target-robots mt-0">
                                     <img src="img/icon-perception.png">
                                     <p class="mt-0 mb-0"><strong class="robotperf-perception">Perception</strong></p>
                                 </div>
                                 <!-- Localization -->
                                 <div class="col-lg-4 col-6 comp1 target-robots mt-0">
                                     <img src="img/icon-localization.png">
                                     <p class="mt-0 mb-0"><strong class="robotperf-localization">Localization</strong>
                                     </p>
                                 </div>

                                 <!-- Middleware -->
                                 <div class="col-lg-4 col-6 comp1 target-robots">
                                    <img src="img/icon-motion-control.png">
                                     <p class="mt-0 mb-0"><strong class="robotperf-motion-control">Communications middleware</strong></p>
                                 </div>
                                 <!-- Control -->
                                 <div class="col-lg-4 col-6 comp1 target-robots">
                                     <img src="img/icon-control.png">
                                     <p class="mt-0 mb-0"><strong class="robotperf-control">Control</strong></p>
                                 </div>

                                 <!-- Navigation -->
                                 <div class="col-lg-4 col-6 comp1 target-robots">
                                     <img src="img/icon-navigation.png">
                                     <p class="mt-0 mb-0"><strong class="robotperf-navigation">Navigation</strong></p>
                                 </div>
                                 <!-- Manipulation -->
                                 <div class="col-lg-4 col-6 comp1 target-robots">
                                     <img src="img/icon-manipulation.png">
                                     <p class="mt-0 mb-0"><strong class="robotperf-manipulation">Manipulation</strong>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Benchmarks -->
     <div class="especify-about" id="benchmark-summary">
         <div class="container containerAC">
             <!-- <a style="color:#63bfab" class="download-text" href="start-buying.php"> <img src="img/download.svg"
                     class="download"> Download </a> -->
             <h2 class="download-text-2 py-4">Benchmarks summary - beta (<a
                     href="https://github.com/robotperf/benchmarks/releases" class="f-azul">report</a>)</h2>
             <p style="font-size:0.8rem">(plots are interactive)</p>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-6 col-xl-4">
                     <h3 class="mb-1 text-center">PERCEPTION</h3>
                     <canvas id="radarplot_perception"></canvas>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <h3 class="mb-1 text-center">CONTROL</h3>
                     <canvas id="radarplot_control"></canvas>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <h3 class="mb-1 text-center">MANIPULATION</h3>
                     <canvas id="radarplot_manipulation"></canvas>
                 </div>
             </div>




             <!-- <div style="border-bottom:1px dashed #555;"></div> -->


         </div>
     </div>

     <!-- HAWG -->
     <div id="hawg" class="bg-azul py-5">
         <div class="container containerAC">
             <div class="row py-5">
                 <div class="col-12 text-center">
                     <h2 class="f-blanco">ROS 2 Hardware Acceleration Working Group</h2>
                     <p class="f-blanco text-center">We are the leaders the ROS 2 Hardware Acceleration Working Group
                         (HAWG) and drive the creation, <br> maintenance and testing of hardware acceleration for ROS 2
                         and
                         Gazebo.
                        </p>
                    <img src="img/ROS-tablet.png" alt="" class="img-responsive" style="max-width: 25%;"><br>
                     <a href="https://github.com/ros-acceleration" class="btn btn-relleno-blanco">Join the ROS
                         2 HAWG <i class="fas fa-chevron-right"></i></a>
                    <a href="https://www.youtube.com/playlist?list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl" class="btn btn-relleno-blanco-blanco">Watch the videos
                         <i class="fas"></i></a>
                 </div>
             </div>
             <div class="row pb-5">
                 <div class="col-12 col-lg-2 offset-lg-2">
                     <ul class="lista">
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=QfRHJgeSAOw&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=8">ROS
                                         2 Hardware Acceleration WG meeting #1</a></strong></u>, Introduction,
                             objectives,
                             architecture and first acceleration examples</li>
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=a1I4rue1px8&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=6">ROS
                                         2 Hardware Acceleration WG meeting #2</a></strong></u>, A ROS 2 architecture
                             for
                             hardware
                             acceleration, use case and ReconROS</li>
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=GUwS3La8s6Y&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=6">ROS
                                         2 Hardware Acceleration WG meeting #3</a></strong></u>, Hardware acceleration
                             conventions
                             (REP-2008), progress update and robomorphic computing</li>
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=zHawzTtxuhA&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=5">ROS
                                         2 Hardware Acceleration WG meeting #4</a></strong></u>, Progress, adaptive ROS
                             2
                             Nodes and
                             FPGA-based robotic computing</li>

                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=ac-Yr2sRIxk&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=4">ROS
                                         2 Hardware Acceleration WG meeting #5</a></strong></u>, 2021 recap, old
                             business
                             and hardware
                             acceleration in drones with ROS 2</li>

                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=MXrl4dkBA-4&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=4">ROS
                                         2 Hardware Acceleration WG meeting #6</a></strong></u>, Methodology for ROS 2
                             Hardware
                             Acceleration, case study: accelerating ROS 2 Perception</li>


                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=AOFHsCeiBEA&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=2">ROS
                                         2 Hardware Acceleration WG meeting #7</a></strong></u>, REP-2008, ROS
                             perception
                             in FPGAs vs
                             GPUs and the Robotic Processing Unit (RPU)</li>

                     </ul>
                 </div>
                 <div class="col-12 col-lg-2 my-auto">
                     <ul class="lista">

                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=KgxHmkFNNpA&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=2">ROS
                                         2 Hardware Acceleration WG meeting #8</a></strong></u>, Cloud extensions for
                             hardware
                             acceleration, ROS 2 perception Nodes benchmarking and more</li>

                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=HROPmnIOjS4&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=2">ROS
                                         2 Hardware Acceleration WG meeting #9</a></strong></u>, ROS 2 Humble, analysis
                             and visualization of the
                             flow of messages in distributed ROS 2 systems</li>

                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=Hn2IVslaR_0&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=2">ROS
                                         2 Hardware Acceleration WG meeting #10</a></strong></u>, ROS 2 hardware
                             acceleration stack, new reference hardware and RobotCore</li>


                         <li><u><strong>
                                     <a
                                         href="https://www.youtube.com/watch?v=A_fsW-JHjpg&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=1">ROS
                                         2 Hardware Acceleration WG meeting #11</a></strong></u>, Robotic Processing
                             Unit, hardware acceleration survey, Robotics MCU and more</li>

                         <li><u><strong>
                                     <a
                                         href="https://www.youtube.com/watch?list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&v=JV8NSBbA0SA">ROS
                                         2 Hardware Acceleration WG meeting #12</a></strong></u>, RobotPerf, hardware
                             acceleration at ROSCon and IROS, surveys and more</li>


                         <li><u><strong>
                                     <a
                                         href="https://www.youtube.com/watch?v=2d9l2Pm5g3k&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=1">ROS
                                         2 Hardware Acceleration WG meeting #13</a></strong></u>, Hardware acceleration
                             project updates, news on RobotPerf and standardization efforts</li>

                         <li><u><strong>
                                     <a
                                         href="https://www.youtube.com/watch?v=-K32-n84pnU&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=13&pp=gAQBiAQB">ROS
                                         2 Hardware Acceleration WG meeting #14</a></strong></u>, 2022 recap, new goals
                             and updates on strategic projects</li>
                     </ul>
                 </div>
                 <div class="col-12 col-lg-2 my-auto">
                     <ul class="lista">
                         <li style="color: #aaa;"><u><strong><a
                                         href="https://www.youtube.com/watch?v=Ewq9EIHEqEE&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=1">RobotPerf
                                         subproject meeting #1</a></strong></u>, RobotPerf benchmarking weekly meetings,
                             presentations and deep dive/walkthrough into architecture</li>

                         <li style="color: #aaa;"><u><strong><a
                                         href="https://www.youtube.com/watch?v=eV7Do5khhOE&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=11">RobotPerf
                                         subproject meeting #2</a></strong></u>, RobotPerf benchmarking weekly meetings
                         </li>

                         <li style="color: #aaa;"><u><strong><a
                                         href="https://www.youtube.com/watch?v=zJXJhsl5DyM&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=10">RobotPerf
                                         subproject meeting #3</a></strong></u>, RobotPerf benchmarking weekly meetings
                         </li>
                         <li style="color: #aaa;"><u><strong><a
                                         href="https://www.youtube.com/watch?v=Z2k7F17Md2I&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=9">RobotPerf
                                         subproject meeting #4</a></strong></u>, RobotPerf benchmarking weekly meetings
                         </li>
                     </ul>
                 </div>

                 <div class="col-12 col-lg-2 my-auto">
                     <ul class="lista">
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=Ewq9EIHEqEE&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=1">ROS
                                         2 Hardware Acceleration WG meeting #15</a></strong></u>, Robotics MCU,
                             RobotPerf and REP-2014</li>

                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=eV7Do5khhOE&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=11">ROS
                                         2 Hardware Acceleration WG meeting #16</a></strong></u>, RobotPerf benchmarking
                             weekly meetings</li>

                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=zJXJhsl5DyM&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=10">ROS
                                         2 Hardware Acceleration WG meeting #17</a></strong></u>, RobotPerf benchmarking
                             weekly meetings</li>
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=Z2k7F17Md2I&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=9">ROS
                                         2 Hardware Acceleration WG meeting #18</a></strong></u>, RobotPerf benchmarking
                             weekly meetings</li>
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=eV7Do5khhOE&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=11">ROS
                                         2 Hardware Acceleration WG meeting #19</a></strong></u>, RobotPerf benchmarking
                             weekly meetings</li>

                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=zJXJhsl5DyM&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=10">ROS
                                         2 Hardware Acceleration WG meeting #20</a></strong></u>, RobotPerf benchmarking
                             weekly meetings</li>
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=Z2k7F17Md2I&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=9">ROS
                                         2 Hardware Acceleration WG meeting #21</a></strong></u>, RobotPerf benchmarking
                             weekly meetings</li>
                         <li><u><strong><a
                                         href="https://www.youtube.com/watch?v=Z2k7F17Md2I&list=PLf4Fnww4KiFeiP1fNQXgJhyuEI760NVIl&index=9">ROS
                                         2 Hardware Acceleration WG meeting #22</a></strong></u>, RobotPerf benchmarking
                             weekly meetings</li>
                     </ul>
                 </div>

             </div>
         </div>
     </div>


     <!-- Members -->
     <div class="pt-5">
         <div class="container">
             <div class="row pt-5">
                 <div class="col-12 text-center">
                     <h2>Powered by leading players in<br> industry, academia and research labs</h2>
                 </div>
             </div>

             <div class="row row-subtitulo texto-centrado">
                 <div class="offset-lg-2 col-lg-8 col-xs-12">
                     <!-- <h4 class="f-gordita-normal" style="margin-top:1em; font-weight: 300;">Groups behind</h4> -->
                     <div class="company">
                         <div class="container">
                             <div class="row justify-content-center">
                                <!-- Acceleration Robotics -->
                                 <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/ACCELERATION ROBOTICS logo alt.png" class="mt-3">
                                 </div>

                                <!-- AAU -->
                                 <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/aau.png" class="mt-3">
                                 </div>

                                 <!-- Harvard -->
                                 <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/harvard.png" class="mt-3">
                                 </div>

                                <!-- GeorgiaTech -->
                                <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/georgiatech.png" class="mt-3">
                                 </div>                                 

                                <!-- Carnegie Melon University -->
                                <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/carnegie.png" class="mt-3">
                                 </div>           

                                <!-- Johannes Kepler University Linz -->
                                <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/johannes.png" class="mt-3">
                                 </div>           
                                 
                                <!-- Ford -->
                                <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/ford.png" class="mt-3">
                                 </div>                                            

                                <!-- AMD -->
                                <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/amd2.png" class="mt-3">
                                 </div>                                            

                                <!-- Intel -->
                                <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/intel2.png" class="mt-3">
                                 </div>                                            

                                 <!-- Boston University -->
                                <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/boston.png" class="mt-3">
                                 </div>                                            

                                 <!-- Barnard College -->
                                 <div class="col-lg-4 col-sm-4 col-xs-12 comp1 my-auto">
                                     <img src="img/barnard.png" class="mt-3">
                                 </div>                                            
                                 
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="mb-0 pb-4 our-duty-home">
         <div class="container-fluid">
             <div class="row no-gutters">
                 <div class="col-12">
                     <a href="mailto:victor@accelerationrobotics.com" class="mb-5 btn btn-relleno">Join RobotPerf™ project
                     </a>
                     <a href="https://arxiv.org/pdf/2309.09212.pdf" class="mb-5 btn btn-linea">Read the paper</a>
                 </div>
             </div>
         </div>
     </div>


     <!-- with Harvard -->
     <div class="bg-negro py-5">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 col-lg-12 text-center text-lg-left">
                     <h2 class="f-blanco">Building upon<br> past experiences</h2>
                     <p class="f-blanco mt-3 pb-3">
                         <strong>RobotPerf™</strong> is being driven by members of the same group who previously created
                         MLPerf™ and other popular industry benchmarks. Join us to contribute and democratize the
                         benchmarking of robotics software.
                     </p>
                     <!-- <a href="mailto:victor@accelerationrobotics.com" class="btn btn-relleno">Join RobotPerf™</a>
                     <a href="https://arxiv.org/pdf/2309.09212.pdf" class="btn btn-linea mt-2 mt-md-0">Read the paper</a> -->
                 </div>
                 <!-- <div class="col-12 col-lg-5 offset-lg-1 my-auto text-center text-lg-left pt-lg-0">
                     <img src="img/mlperf-white.png" alt="" class="img-responsive">
                 </div> -->
             </div>
         </div>
     </div>

     <div class="wearerobots">
         <div class="container">
             <div class="row">
                 <div class="col-12 pt-5 pb-4">
                     <h2>Need help to run the RobotPerf™ benchmarks?</h2>
                     <!-- <p>Happy to work with you resolving them.</p> -->
                     <a href="https://github.com/robotperf/benchmarks/issues" class="btn btn-relleno">GitHub issues</a>
                     <a href="mailto:contact@accelerationrobotics.com" class="btn btn-linea mt-2 mt-md-0">Get
                         professional
                         support</a>
                 </div>
             </div>
         </div>
     </div>


     

     <script>
         function radarplot(data, labels, placementid, component) {
             var radarplot_data = {
                 labels: labels,
                 datasets: [{
                     label: "ROBOTCORE® Perception: " + component,
                     //  backgroundColor: "#4d4bfb",  
                     backgroundColor: "rgba(77, 75, 251, 0.9)",
                     //  borderColor: "red",
                     data: data
                 }]
             };

             const radarplot_config = {
                 type: 'radar',
                 data: radarplot_data,
                 options: {
                     responsive: true,
                     plugins: {
                         title: {
                             display: false,
                             text: 'Radar Chart'
                         },
                         tooltip: {
                             callbacks: {
                                 label: function (context) {
                                     // "LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"        
                                     let label = ""
                                     if (context.dataIndex == 0) {
                                         label += Math.round(context.raw * 117120 / 100) + " (" + context.raw +
                                             " %)" || '';
                                     } else if (context.dataIndex == 1) {
                                         label += Math.round(context.raw * 234240 / 100) + " (" + context.raw +
                                             " %)" || '';
                                     } else if (context.dataIndex == 2) {
                                         label += Math.round(context.raw * 1248 / 100) + " (" + context.raw +
                                             " %)" || '';
                                     } else if (context.dataIndex == 3) {
                                         label += Math.round(context.raw * 144 / 100) + " (" + context.raw +
                                             " %)" || '';
                                     }
                                     return label;
                                 }
                             }
                         }
                     },
                     scales: {
                         x: {
                             display: false,
                         },
                         y: {
                             display: false
                         },
                         r: {
                             beginAtZero: true,
                             //  max: 20,
                             //  min: 0,
                             grid: {
                                 color: "#c0c0c0",
                                 display: true,
                             },
                             ticks: {
                                 display: "false",
                                 //  color: "red",
                                 callback: function (value, index, values) {
                                     return value + "%";
                                 }
                             }
                         }
                     },
                 },
             };
             return new Chart(document.getElementById(placementid), radarplot_config);
         }

         function hexToRgba(hex, alpha) {
             const bigint = parseInt(hex.slice(1), 16);
             const r = (bigint >> 16) & 255;
             const g = (bigint >> 8) & 255;
             const b = bigint & 255;

             return `rgba(${r},${g},${b},${alpha})`;
         }

         function radarplot_robotperf(datasets, labels, placementid, component) {
             const datasets_internal = datasets.map((item) => {
                 return {
                     label: item.datakey,
                     data: item.values,
                     // borderColor: '#' + Math.floor(Math.random()*16777215).toString(16),  // Generating a random color for each dataset
                     // backgroundColor: '#' + Math.floor(Math.random()*16777215).toString(16),  // Generating a random color for each dataset
                     backgroundColor: hexToRgba(item.color, 0.7),
                     fill: true
                 };
             });

             var radarplot_data = {
                 labels: labels,
                 datasets: datasets_internal
             };

             const radarplot_config = {
                 type: 'radar',
                 data: radarplot_data,
                 options: {
                     responsive: true,
                     plugins: {
                         title: {
                             display: false,
                             text: 'Radar Chart'
                         },
                         tooltip: {
                             callbacks: {
                                 label: function (context) {
                                     // "LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"        
                                     let label = context.raw.toFixed(2) + " (ms)"
                                     return label;
                                 }
                             }
                         }
                     },
                     scales: {
                         x: {
                             display: false,
                         },
                         y: {
                             display: false
                         },
                         r: {
                             beginAtZero: true,
                             //  max: 20,
                             //  min: 0,
                             grid: {
                                 color: "#505050",
                                 display: true,
                             },
                             ticks: {
                                 display: "false",
                                 //  color: "red",
                                 callback: function (value, index, values) {
                                     return value + " ms";
                                 }
                             }
                         }
                     },
                 },
             };
             return new Chart(document.getElementById(placementid), radarplot_config);
         }

         //  const myChart4 = new Chart(document.getElementById('myChart4'), config2);

         //  const radarplot_resize = new Chart(document.getElementById('radarplot_resize'), config3);
         // "LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"
         //  let radarplot_resize = radarplot([3.62, 1.69, 2.89, 4.05], 'radarplot_resize', "Resize");
         let radarplot_rectify = radarplot([12.92, 5.2, 4.23, 9.9, 10.0], ["LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)",
             "inventado"
         ], 'radarplot_rectify', "radarplot 1");
         //  let radarplot_rectify2 = radarplot([12.92, 5.2, 4.23, 9.9], ["LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"], 'radarplot_rectify2', "radarplot 2");


         // Perception
         const names_perception = ['a1', 'a2', 'a5']
         const data_latency_perception = [
            // {
            //      "color": "#c5b0d5",
            //      "datakey": "Intel i7-8700K",
            //      "values": [0.5134974253994338, 0.23663993907037872, 0.45427248406536685]
            //  },
            //  {
            //      "color": "#1f77b4",
            //      "datakey": "AMD Ryzen 5 PRO 4650G",
            //      "values": [0.5570241199474325, 0.26169313432264707, 0.46644844394223944]
            //  },
             // {
             //     "color": "#ff7f0e",
             //     "datakey": "Intel i5-13600K + NVIDIA GeForce RTX 3060 (ROBOTCORE® Perception)",
             //     "values": [0.7093794183824705, 0.3580661154160395, 0.3657756299806922]
             // },
             // {
             //     "color": "#9467bd",
             //     "datakey": "Intel i7-12700H + NVIDIA GeForce RTX 3060 (ROBOTCORE® Perception)",
             //     "values": [0.7297467888250512, 0.6459858299289453, 0.6118818041327856]
             // },
             // {
             //     "color": "#2ca02c",
             //     "datakey": "Intel i7-12700H",
             //     "values": [0.8130503841184561, 0.2686201062796479, 0.739189760511064]
             // },
            //  {
            //      "color": "#aec7e8",
            //      "datakey": "Intel i5-13600K",
            //      "values": [0.9232334394137642, 0.4468749459823587, 0.8648783601653521]
            //  },
             // {
             //     "color": "#bcbd22",
             //     "datakey": "NVIDIA AGX Orin Dev. Kit",
             //     "values": [0.9404767737952475, 0.6891225452580955, 0.7898950406736308]
             // },
             {
                 "color": "#7f7f7f",
                 "datakey": "Kria KR260 (ROBOTCORE® Perception)",
                 "values": [1.6312003135335447, 0.8298220891659414, 0.6635621603294972]
             },
             // {
             //     "color": "#9edae5",
             //     "datakey": "NVIDIA Jetson Nano",
             //     "values": [2.130865921199532, 0.8084741725997332, 1.5805087014267554]
             // },
             {
                 "color": "#f7b6d2",
                 "datakey": "Kria KR260",
                 "values": [2.686198614647549, 1.9015796136961567, 2.4555950197670784]
             },
             // {
             //     "color": "#c7c7c7",
             //     "datakey": "Kria KV260",
             //     "values": [2.9475798795614834, 2.016583355190393, 2.3676199850739246]
             // }
         ];



         // Control
         const names_control = [
             'c1',
             'c2',
             'c3',
             'c4',
             'c5'
         ]
         const data_latency_control = [{
                 "color": "#c5b0d5",
                 "datakey": "Intel i7-8700K",
                 "values": [1.7720783484938771, 3.296253630260103, 2.070085157911148, 1.708516787643753,
                     1.3270670755722531
                 ]
             },
             {
                 "color": "#aec7e8",
                 "datakey": "Intel i5-13600K",
                 "values": [2.0114441904343865, 3.13167609258197, 0.40413620425811064, 0.6911531619530811,
                     0.40413620425811064
                 ]
             },
            //  {
            //      "color": "#2ca02c",
            //      "datakey": "Intel i7-12700H",
            //      "values": [3.346052407033998, 6.2166061010848646, 1.2499131518046076, 1.500973869567852,
            //          1.500973869567852
            //      ]
            //  },
             // {
             //     "color": "#bcbd22",
             //     "datakey": "NVIDIA AGX Orin Dev. Kit",
             //     "values": [4.3082523679437195, 4.349471802498718, 2.0051477569836162, 1.9779607191327053, 3.296144845724363]
             // }
         ];


         // Manipulation
         const names_manipulation = ['d2',
             'd3',
             'd4',
             'd5',
             'd6'
         ]

         const data_latency_manipulation = [{
                 "color": "#aec7e8",
                 "datakey": "Intel i5-13600K",
                 "values": [4.21649319091422, 2.246760326528326, 4.568605007683901, 3.415210264150388,
                     0.19585303377368557
                 ]
             },
            //  {
            //      "color": "#2ca02c",
            //      "datakey": "Intel i7-12700H",
            //      "values": [5.47320956545008, 4.0368755005794545, 4.13064220759631, 2.7315624043496936,
            //          1.3018867829498668
            //      ]
            //  },
             {
                 "color": "#c5b0d5",
                 "datakey": "Intel i7-8700K",
                 "values": [6.2166061010848646, 3.9571707829205507, 4.26480270936337, 4.825192905644472,
                     0.687486667326263
                 ]
             }
         ];


         let radarplot_perception = radarplot_robotperf(data_latency_perception, names_perception,
             'radarplot_perception', "radarplot");
         let radarplot_control = radarplot_robotperf(data_latency_control, names_control, 'radarplot_control',
             "radarplot 2");
         let radarplot_manipulation = radarplot_robotperf(data_latency_manipulation, names_manipulation,
             'radarplot_manipulation', "radarplot 3");
     </script>

     <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

 </body>

 </html>