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
     <title>ROBOTCORE® Framework | FPGA and GPU Hardware Acceleration framework for ROS</title>
     <meta name="description"
         content="ROBOTCORE® Framework helps build custom compute architectures for robots from ROS, that make robots faster, more deterministic and power-efficient." />
     <meta name="keywords" content="robotcore,robotcore,hardware acceleration robots,ros acceleration" />
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
                     <h4 class="linkotherproducts mt-4 mb-3">
                         <a href="products.php" class="f-azul pb-4"><i class="fa fa-chevron-left"></i> Other
                             products</a>
                     </h4>
                     <h1 class="titulo-robotcore">ROBOTCORE <span>Framework</span></h1>
                     <h3 class="f-blanco f-gordita-normal py-2" style="font-size:1.8em;">FPGA and GPU hardware
                         acceleration framework for ROS</h3>
                     <p class="mt-1 pb-4" style="color: white;">
                         <strong class="f-blanco">ROBOTCORE® Framework</strong> helps <u>build custom compute architectures for
                             robots</u>, or <strong style="color:#4d4cf5;">IP cores</strong>, directly from ROS workspaces without complex third-party tool integrations. Make your robots faster, more deterministic and/or power-efficient. Simply put, it provides a vendor-agnostic  development, build and deployment experience for creating robot hardware and hardware accelerators similar to the standard, non-accelerated ROS development flow.
                     </p>
                    <a href="start-buying.php" class="btn btn-linea btn-relleno smooth mb-2">Get ROBOTCORE® Framework</a>                     
                     <a href="https://arxiv.org/pdf/2205.03929.pdf" class="btn btn-linea btn-linea smooth mb-2">Read the paper</a>                         
                     <!-- <a href="#" class="btn btn-linea btn-linea smooth">Read the paper</a> -->
                 </div>
                 <div class="col-12 col-lg-6 my-auto text-center text-lg-right pt-5 pt-lg-0">
                     <img src="img/robotcore_500.gif" alt="ROBOTCORE FRAMEWORK" class="img-responsive iconorobotcore">
                 </div>
             </div>
         </div>
     </div>



     <!-- How does it work -->
     <div class="mt-5 mb-0 our-duty-home" id="our-duty-home">
         <div class="container containerAC">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2>How does it work?</h2>
                     <p class="mb-3">
                         Traditional software development in robotics is about building <i>dataflows</i> with ROS
                         computational graphs. These dataflows go from sensors to compute technologies, all the way down
                         to actuators and back,
                         representing the "brain" of the robot. Generally, ROS computational graphs are built in the
                         CPUs of a given robot. But CPUs have fixed hardware, with pre-defined memory architectures and
                         constraints which limit the performance. Sparked by the decline of Moore's Law and Dennard
                         Scaling, specialized computing units capable of hardware acceleration have proven to be the
                         answer for achieving higher performance in robotics.<br>
                         <br>
                         ROBOTCORE® <span style="color:#4d4cf5;"><strong>Framework</strong></span> allows to easily leverage FPGA and GPU <strong>hardware acceleration</strong> in a ROS-centric
                         manner and build custom compute architectures for robots, or "<strong
                             style="color:#4d4cf5;">IP cores</strong>".
                         With these IP cores, roboticists can adapt one or simultaneously more of the properties of their
                         computational graphs
                         (e.g., its speed, determinism, power consumption) optimizing the amount of hardware resources
                         and, as a
                         consequence, the performance in an <span style="color:#4d4cf5;"><strong>accelerated</strong>
                             dataflow</span>.
                     </p>
                     <img src="img/robotcore-grafo.svg"
                         class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/robotcore-mobile.svg" class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">
                     <a href="#benchmarks" class="mt-2 mb-5 btn btn-relleno">Benchmarks <i class="fas fa-chevron-right"
                             aria-hidden="true"></i>
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


     <!-- Supported hardware -->
     <div class="al1-home" id="al1-home">
         <div class="container containerAC">
             <div class="row">
                 <div class="col-12 col-lg-4 div-img mt-5">
                     <h2>Supported<br> hardware solutions</h2>
                     <img src="img/flecha-dcha.png" class="d-block flecha-dcha pt-5 pb-1">
                     <h4 class="f-gordita-normal pr-lg-5">Supporting the most popular hardware acceleration solutions
                         and development kits to build robots with hardware acceleration and ROS.</h4>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 d-lg-block">
                     <div class="company">
                         <div class="container">
                             <div class="row justify-content-center">
                                <div class="col-lg-6 col-6 comp1">
                                     <div><a href="robotcore.php"><img src="img/robotcore_render_1080.png"></div></a>
                                     <strong>ROBOTCORE®</strong> robotic processing unit
                                 </div>
                             </div>
                             <div class="row justify-content-center">                                
                                <div class="col-lg-3 col-6 comp1">
                                        <div><img src="img/agilex-board.png"></div>
                                        Intel's
                                        <strong>Agilex® 7 FPGA F-Series FPGA</strong>
                                </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/amd-kr260.png"></div>
                                     AMD's <strong>KR260</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/amd-kv260.png"></div>
                                     AMD's <strong>KV260</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/kd240.png"></div>
                                     AMD's <strong>KD240</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/amd-k26.png"></div>
                                     AMD's <strong>K26</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/k24.png"></div>
                                     AMD's <strong>K24</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/amd-zcu102.png"> </div>
                                     AMD's
                                     <strong>ZCU102</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/amd-zcu104.png"> </div>
                                     AMD's
                                     <strong>ZCU104</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/nvidia-jetson-nano.png"></div>
                                     NVIDIA's <strong>Jetson Nano</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/nvidia-jetson-nano-2gb.png"></div>
                                     NVIDIA's <strong>Jetson Nano 2GB</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/nvidia-jetson-xavier-nx.png"></div>
                                     NVIDIA's <strong>Jetson Xavier NX</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/nvidia-xavier-agx.png"></div>
                                     NVIDIA's <strong>Jetson AGX Xavier</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/nvidia-jetson-agx-orin.png"></div>
                                     NVIDIA's <strong>Jetson AGX Orin</strong>
                                 </div>                                 
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/microchip-polarfire.png"></div>
                                     Microchip's
                                     <strong>PolarFire Icicle Kit</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/nvidia-jetson-tx1.png"></div>
                                     NVIDIA's <strong>Jetson TX1</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/ultra96-v2.png"></div>
                                     AVNET's
                                     <strong>Ultra96-V2</strong>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Supported hardware -->
     <div class="al1-home" id="al1-home">
         <div class="container">
             <div class="row">
                 <div class="col-12 col-xl-6">
                     <div id="robotcore_kv260"></div>
                     <script src="js/asciinema-player.js"></script>
                     <script>
                         AsciinemaPlayer.create('https://asciinema.org/a/492890.cast', document.getElementById(
                             'robotcore_kv260'), {
                             loop: true,
                             theme: 'monokai',
                             autoplay: true,
                             speed: 2,
                         });
                     </script>
                 </div>
                 <div class="col-12 col-xl-6 mt-3 pl-xl-5">
                     <h2 class="pt-5 pt-xl-0">One framework for all<br> hardware acceleration vendors</h2>
                     <h4 class="f-gordita-normal" style="margin-top:1em; font-weight: 300;">
                         Providing a vendor-agnostic ROS-centric development flow for hardware acceleration. Reduced development time in robotics. Easier to integrate in existing applications.
                     </h4>
                     <div class="company">
                         <div class="container">
                             <div class="row ">
                                 <div class="col-lg-3 col-sm-6 col-xs-12 comp1 my-auto">
                                     <img src="img/xilinx.png">
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-xs-12 comp1 my-auto">
                                     <img src="img/amd.png">
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-xs-12 comp1 my-auto">
                                     <img src="img/nvidia2.png">
                                 </div>
                                 <div class="col-lg-3 col-sm-6 col-xs-12 comp1 my-auto">
                                     <img src="img/microchip.png">
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

    <!-- Build accel. kernels -->
     <div class="al1-home" id="al1-home">
         <div class="container">
             <div class="row">                 
                 <div class="col-12 col-xl-6 mt-3">
                     <h2 class="pt-5 pt-xl-0">Build acceleration kernels (<i class="f-gordita-normal">IP cores</i>) directly from your ROS packages</h2>
                     <h4 class="f-gordita-normal" style="margin-top:1em; font-weight: 300;">

                     ROBOTCORE® <strong style="color:#4d4cf5;">Framework</strong> extends the ROS 2 build system (<span class="f-source">ament</span>) with CMake logic to simplify the creation of acceleration kernels directly from your ROS packages' <span class="f-source">CMakeLists.txt</span> files.

                     </h4>            
                 </div>
                 <div class="col-12 col-xl-2"></div>
                 <div class="col-12 col-xl-4 pl-xl-5 justify-content-center pl-5">
                    <p class="f-source" style="font-size: 1.5rem;">
                        
                        <strong style="color:#4d4cf5;">acceleration_kernel</strong>(<br>
                            &emsp;<strong>NAME</strong> vadd<br>
                            &emsp;<strong>FILE</strong> src/vadd.cpp<br>
                            &emsp;<strong>INCLUDE</strong><br>
                                &emsp;&emsp;include<br>
                        )

                        <!-- vitis_acceleration_kernel(<br>
                            &emsp;NAME rectify_accel<br>
                            &emsp;FILE src/image_proc/xf_rectify_accel.cpp<br>
                            &emsp;CONFIG cfg/kv260.cfg<br>
                            &emsp;INCLUDE<br>
                            &emsp;&emsp;include/image_proc<br>
                            &emsp;&emsp;${CMAKE_INSTALL_PREFIX}/include<br>
                            &emsp;TYPE hw<br>
                        ) -->
                    </p>
                 </div>                 
             </div>
         </div>
     </div>

     <!-- Type adaptation -->
     <div class="al1-home" id="type-adaptation">
         <div class="container">
             <div class="row">
                 <div class="col-12 col-xl-6">
                    <img src="img/type_adaptation.gif" class="img-responsive">
                 </div>
                 <div class="col-12 col-xl-6 mt-3 pl-xl-5">
                     <h2 class="pt-5 pt-xl-0">Avoid intra-process ROS 2 data conversions with type adaptation</h2>
                     <h4 class="f-gordita-normal" style="margin-top:1em; font-weight: 300;">
                        Leverages an extension to <span class="f-source">rclcpp</span> that helps convert between ROS types and custom, user-defined types for Topics, Services, and Actions to maximize performance.
                     </h4>                     
                 </div>
             </div>
         </div>
     </div>     

     <!-- Type negotiation -->
     <div class="al1-home" id="type-adaptation">
         <div class="container">
             <div class="row">
                 <div class="col-12 col-xl-6 mt-3">
                     <h2 class="pt-5 pt-xl-0">Dynamically negotiate the message types with ROS 2 type negotiation</h2>
                     <h4 class="f-gordita-normal" style="margin-top:1em; font-weight: 300;">
                     Allow ROS 2 Nodes to dynamically negotiate the message types used by publishers and subscriptions, as well adaptively modifying the behavior of publisher and subscriptions. 
                     </h4>                     
                 </div>
                 <div class="col-12 col-xl-6 pl-xl-5">
                    <img src="img/type_negotiation.gif" class="img-responsive">
                 </div>
             </div>
         </div>
     </div>     

     <!-- Architecture -->
     <div class="py-5">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 text-center">
                     <h2>An open architecture for hardware <br>acceleration in robotics</h2>
                     <p>
                         ROBOTCORE® <span style="color:#4d4cf5;"><strong>Framework</strong></span> deals with vendor proprietary libraries for hardware acceleration in
                         robotics. It helps accelerate computations, increase performance and abstract away the
                         complexity of
                         bringing your ROS computational graphs to your favourite silicon architecture. All while
                         delivering the
                         common ROS development flow.
                     </p>
                     <p class="pt-4 pb-5 text-center">
                         <img src="img/tabla-your-robotcore.svg" class="img-responsive">
                     </p>


                     <a href="start-buying.php" class="mb-3 btn btn-relleno">Need a customization? <i
                             class="fas fa-chevron-right" aria-hidden="true"></i>
                     </a>
                     <a href="https://github.com/ros-acceleration" class="mb-3 btn btn-linea">ROS community
                         contributions <i class="fas fa-chevron-right" aria-hidden="true"></i>
                     </a>
                 </div>
             </div>

         </div>
     </div>

     <!-- ROBOTCORE® extensions -->
     <div class="bg-negro py-5">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 col-lg-6 order-2 order-lg-1 pt-5 pt-lg-0 px-0 pr-lg-4 text-center text-lg-left">
                     <img src="img/tabla-your-robotcore-percetion&cloud.svg" alt="" class="img-responsive">
                 </div>

                 <div class="col-12 col-lg-6 order-1 order-lg-2  pl-lg-5 text-center text-lg-left">

                     <h2 class="f-blanco  pb-4">ROS 2 <i class="f-gordita-normal">cores</i> ready to use</h2>
                     <h3 class="f-blanco f-gordita-normal  pb-3 text-center text-lg-left" style="font-size:1.8em;">ROS 2
                         API-compatible pre-built cores and extensions</h3>

                     <p class="f-blanco mb-3">
                         <strong>ROBOTCORE Perception</strong> is a ROS 2-API compatible optimized perception stack
                         that leverages hardware acceleration to provide a speedup in your perception computations.
                     </p>
                     <a href="robotcore-perception.php" class="btn btn-linea">ROBOTCORE Perception</a>

                     <!-- <p class="f-blanco pb-3">
                         <strong>ROBOTCORE Cloud</strong> allows roboticists to launch parts of their ROS 2
                         computational graphs into the cloud while addressing interoperability and scalability issues.
                         Supports Azure, GCP or AWS cloud providers.
                     </p> -->

                     <p class="f-blanco mb-3 pt-5">
                         <strong>ROBOTCORE Transform</strong> is an optimized robotics transform library. API-compatible with the ROS 2 transform (<span class="f-source">tf2</span>) library, it manages efficiently the transformations between coordinate systems in a robot.
                     </p>                     
                     <a href="robotcore-transform.php" class="btn btn-linea">ROBOTCORE Transform</a>
                 </div>
             </div>
         </div>
     </div>

     <!-- ROS and ROS 2 support -->
     <div class="mt-5 mb-0 our-duty-home">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12">
                     <h2>ROS and ROS 2 support</h2>
                     <p>
                         ROBOTCORE® <span style="color:#4d4cf5;"><strong>Framework</strong></span> extends the ROS and ROS 2 build systems to allows roboticists to generate
                         acceleration kernels in the same way they generate CPU libraries. Support for legacy ROS
                         systems, and extensions to other middlewares is also possible.
                     </p>
                     <p class="pt-2 pb-5 text-center">
                         <img src="img/robotcore-support-ros-ros2.svg" class="img-responsive">
                     </p>

                     <a href="start-buying.php" class="btn btn-linea mt-3">Accelerate ROS</a>
                     <a href="start-buying.php" class="btn btn-relleno mt-3">Accelerate ROS 2</a>
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
                     ROBOTCORE® <span style="color:#4d4cf5;"><strong>Framework</strong></span> is served by seasoned ROS developers for ROS development. It includes documentation,
                     examples, reference designs and the possibility of various levels of support.

                 </p>
                 <a href="start-buying.php" class="btn btn-linea mt-4">Ask about support levels</a>
             </div>
         </div>
     </div>


     <!-- Benchmarks -->
     <div class="especify-about" id="benchmarks">
         <div class="container containerAC">
             <!-- <a style="color:#63bfab" class="download-text" href="start-buying.php"> <img src="img/download.svg"
                     class="download"> Download </a> -->
             <h2 class="download-text-2 py-4">Benchmarks</h2>
             <p style="font-size:0.8rem">(plots are interactive)</p>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3>ROS 2 (core)</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>ROBOTCORE® Framework intra-FPGA ROS 2 communication queue speedup</strong><br> (<i
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
                     <!-- <p><strong style="color:#4d4bfb;">3.69x</strong></p>  -->
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

             <!-- ///////// -->
             <!-- PERCEPTION -->
             <!-- ///////// -->

             <!-- NODES -->
             <!-- Resize -->
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

             <!-- Rectify -->
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
                             (<i style="font-size:0.8rem">ROBOTCORE Perception running on an AMD KV260, NVIDIA Isaac ROS
                             running in a Jetson Nano 2GB. Measurements present the kernel runtime in milliseconds (ms)
                             and discard ROS 2 message-passing infrastructure overhead
                             and host-device (GPU or FPGA) data transfer overhead</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="rectifynode"></canvas>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <!-- Harris -->
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
                             (<i style="font-size:0.8rem">ROBOTCORE Perception running on an AMD KV260, NVIDIA Isaac ROS
                             running in a Jetson Nano 2GB. Measurements present the kernel runtime in milliseconds (ms)
                             and discard ROS 2 message-passing infrastructure overhead
                             and host-device (GPU or FPGA) data transfer overhead</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="harrisnode"></canvas>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <!-- Histogram of Oriented Gradients -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Histogram of Oriented Gradients</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">509.52x</strong></p>
                 </div>
             </div>
             <!-- <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;"> -->
             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Histogram of Oriented Gradients</strong> - kernel runtime latency (ms)
                             (<i style="font-size:0.8rem">ROBOTCORE Perception running on an AMD KV260, NVIDIA Isaac ROS
                             running in a Jetson Nano 2GB. Measurements present the kernel runtime in milliseconds (ms)
                             and discard ROS 2 message-passing infrastructure overhead
                             and host-device (GPU or FPGA) data transfer overhead</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="hognode"></canvas>
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>


             <!-- GRAPHS -->
             <!-- 2-Node pre-processing perception graph latency  -->
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
                     <!-- <p><strong style="color:#4d4bfb;">1.3x</strong></p> -->
                     <canvas id="perception_2nodes_runtime"></canvas>
                 </div>
             </div>
             <!-- 2-Node pre-processing perception graph performance-per-watt  -->
             <div class="row pt-5" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <!-- <p><strong style="color:#4d4bfb;">3.69x</strong></p>  -->
                     <p> <strong>
                             2-Node pre-processing perception graph performance-per-watt</strong> (Hz/W)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <!-- <canvas id="myChart2"></canvas> -->
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
             <!-- <div class="row" style="padding: 0em 0 2em 0;"> -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Performance-per-watt improvement</strong> - 2-Node pre-processing perception graph<br>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">6x</strong></p> <!-- (1e3/(66.82*6))/(1e3/(238.13*10)) -->
                 </div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <!-- 3-Node pre-processing and egion of interest detector perception graph latency  -->
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
                     <!-- <p><strong style="color:#4d4bfb;">1.3x</strong></p> -->
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

             <!--  -->
             <!-- ROS 2 TRANSFORM -->
             <!--  -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <!-- <div class="row" style="border-bottom: 0 !important;"> -->
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
             <!-- <div class="row pt-5" style="border-bottom: 0 !important; padding: 0em 0 0em 0;"> -->
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

             <!--  -->
             <!-- CLOUD -->
             <!--  -->
             <!-- ORB-SLAM2 Node  -->
             <!-- <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;"> -->
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
             <!-- <div class="row pt-5" style="border-bottom: 0 !important; padding: 0em 0 0em 0;"> -->
             <div class="row" style="padding: 0em 0 2em 0">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Node speedup</strong> - ORB-SLAM2 SLAM Node runtime<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">4x</strong></p>
                 </div>
             </div>

             <!-- Dexnet  -->
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

             <!-- MPT -->
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
         const labels = [
             'Default ROS 2',
             'ROBOTCORE® Framework',
         ];

         const data = {
             labels: labels,
             datasets: [{
                     label: 'ROBOTCORE® Framework',
                     backgroundColor: '#4d4bfb',
                     borderColor: '#4d4bfb',
                     data: [10, 5],
                 },
                 {
                     label: 'Default ROS 2',
                     backgroundColor: '#FFF',
                     borderColor: '#FFF',
                     data: [0, 5, 3, 2, 40, 60, 45],
                 }
             ]
         };

         const config = {
             type: 'line',
             data: data,
             options: {}
         };

         const DATA_COUNT = 6;
         const NUMBER_CFG = {
             count: DATA_COUNT,
             min: -100,
             max: 100
         };

         const data_corechart = {
             labels: labels,
             datasets: [{
                     label: 'Default ROS 2',
                     data: [0.6583, 0],
                     backgroundColor: "white",
                 },
                 {
                     label: 'ROBOTCORE® Framework',
                     data: [0, 2.4346],
                     backgroundColor: '#4d4bfb',
                 }
             ]
         };

         const config_corechart = {
             type: 'bar',
             data: data_corechart,
             options: {
                 plugins: {
                     title: {
                         display: false,
                         text: 'Performance-per-watt comparison (10-100 iterations)'
                     },
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
                             text: 'Performance-per-Watt (Hz/W)',
                             //  color: 'white',
                             //  font: {
                             //      family: 'Gordita',
                             //      size: 20,
                             //      style: 'normal',
                             //      lineHeight: 1.2
                             //  },
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

         const data_tf3nodes = {
             labels: [
                 "tf2 (default)",
                 "ROBOTCORE® Transform @ KV260",
                 "ROBOTCORE® Transform @ PolarFire Icicle"
             ],
             datasets: [{
                     label: "tf2 (CPU, default)",
                     data: [34.6659, 0, 0],
                     //  backgroundColor: '#4d4bfb',
                     backgroundColor: 'white',
                 },
                 {
                     label: "KV260 (FPGA)",
                     data: [0, 9.26047, 0],
                     //  backgroundColor: color2,
                     backgroundColor: '#4d4bfb',
                 },
                 {
                     label: "PolarFire Icicle (FPGA)",
                     data: [0, 0, 9.4239],
                     //  backgroundColor: color2,
                     backgroundColor: '#4d4bfb',
                 }
             ]
         };
         const config_tf3nodes = {
             type: 'bar',
             data: data_tf3nodes,
             options: {
                 plugins: {
                     title: {
                         display: false,
                         text: 'Barplot diagram'
                     },
                     tooltip: {
                         callbacks: {
                             label: function (context) {
                                 let label = context.parsed.y + " ms" || '';
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
                             text: "",
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
                                 label: function (context) {
                                     let label = context.parsed.y + " ms" || '';
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

         const data2 = {
             labels: [
                 'ROBOTCORE® Perception',
                 'NVIDIA Isaac ROS',
             ],
             datasets: [{
                     label: 'ROBOTCORE® Perception',
                     data: [1e3 / (66.82 * 6), 0],
                     backgroundColor: '#4d4bfb',
                 },
                 {
                     label: 'NVIDIA Isaac ROS',
                     data: [0, 1e3 / (238.13 * 10)],
                     backgroundColor: "#76b900",

                 }
             ]
         };

         const config2 = {
             type: 'bar',
             data: data2,
             options: {
                 plugins: {
                     title: {
                         display: false,
                         text: 'Performance-per-watt comparison (Hz/W)'
                     },
                     tooltip: {
                         callbacks: {
                             label: function (context) {
                                 let label = context.parsed.y.toFixed(2) + " Hz/W" || '';
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
                             text: 'Performance-per-Watt (Hz/W)',
                             //  color: 'white',
                             //  font: {
                             //      family: 'Gordita',
                             //      size: 20,
                             //      style: 'normal',
                             //      lineHeight: 1.2
                             //  },
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

         const perception_2nodes = {
             labels: [
                 'ROBOTCORE® Perception',
                 'NVIDIA Isaac ROS',
             ],
             datasets: [{
                     label: 'ROBOTCORE® Perception',
                     data: [66.82, 0],
                     backgroundColor: '#4d4bfb',
                 },
                 {
                     label: 'NVIDIA Isaac ROS',
                     data: [0, 238.13],
                     backgroundColor: "#76b900",
                 }
             ]
         };
         const config_perception_2nodes = {
             type: 'bar',
             data: perception_2nodes,
             options: {
                 plugins: {
                     title: {
                         display: false,
                         text: '2-Node Rectify-Resize perception pipeline mean runtime (ms)'
                     },
                     tooltip: {
                         callbacks: {
                             label: function (context) {
                                 let label = context.parsed.y + " ms" || '';
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
                             text: 'Mean runtime (ms)',
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

         const mpt_data = {
             labels: [
                 'ROBOTCORE® Cloud',
                 'Edge',
             ],
             datasets: [{
                     label: 'network (uplink)',
                     data: [0.65, 0],
                     backgroundColor: '#4d4bfb',
                 },
                 {
                     label: 'compute',
                     data: [4.30, 167.9],
                     backgroundColor: "white",
                 },
                 {
                     label: 'network (downlink)',
                     data: [0.65, 0],
                     backgroundColor: '#76b900',
                 },
             ]
         };
         const config_mpt = {
             type: 'bar',
             data: mpt_data,
             options: {
                 plugins: {
                     title: {
                         display: false,
                         text: 'Mean compute runtime (s)'
                     },
                     tooltip: {
                         callbacks: {
                             label: function (context) {
                                 let label = context.parsed.y + " s" || '';
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
                             text: 'Mean runtime (s)',
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

         const dexnet_node = {
             labels: [
                 'ROBOTCORE® Cloud',
                 'Edge',
             ],
             datasets: [{
                     label: 'network (uplink)',
                     data: [0.3, 0],
                     backgroundColor: '#4d4bfb',
                 },
                 {
                     label: 'compute',
                     data: [0.6, 14],
                     backgroundColor: "white",
                 },
                 {
                     label: 'network (downlink)',
                     data: [0.3, 0],
                     backgroundColor: '#76b900',
                 },
             ]
         };
         const config_dexnet = {
             type: 'bar',
             data: dexnet_node,
             options: {
                 plugins: {
                     title: {
                         display: false,
                         text: 'Mean compute runtime (s)'
                     },
                     tooltip: {
                         callbacks: {
                             label: function (context) {
                                 let label = context.parsed.y + " s" || '';
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
                             text: 'Mean runtime (s)',
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


         //  const myChart = new Chart(document.getElementById('myChart'), config);
         //  const myChart2 = new Chart(document.getElementById('myChart2'), config);
         //  const myChart3 = new Chart(document.getElementById('myChart4'), config);

         //  CORE
         const corechart = new Chart(document.getElementById('corechart'), config_corechart);

         // PERCEPTION
         const myChart4 = new Chart(document.getElementById('myChart4'), config2);
         const chart_perception_2nodes = new Chart(document.getElementById('perception_2nodes_runtime'),
             config_perception_2nodes);
         let graph3node = barplot_2(283.68, 1266.32, 'ROBOTCORE® Perception', 'Default ROS', 'Mean runtime (ms)',
             'graph3node', color = "white")
         let resizenode = barplot_2(4.25, 11.13, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'resizenode');
         let rectifynode = barplot_2(3.62, 26.58, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'rectifynode');
         let harrisnode = barplot_2(5.19, 157.11, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'harrisnode');
         let hognode = barplot_2(0.86, 438.19, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'hognode');

         // TRANSFORM
         // let tf3nodes = barplot_2(9.26047, 34.6659, 'ROBOTCORE® Transform', 'tf2 (default)', 'Subscription latency (us)',
         //     'tf3nodes', color = "white")
         const tf3nodes = new Chart(document.getElementById('tf3nodes'), config_tf3nodes);


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

         // CLOUD
         const dexnet = new Chart(document.getElementById('dexnet'), config_dexnet);
         const mpt = new Chart(document.getElementById('mpt'), config_mpt);

         let orblslamnode = barplot_2(0.22, 0.89, 'ROBOTCORE® Cloud (cloud)', 'Default ROS 2 (edge)',
             'Mean Node runtime (s)',
             'orblslamnode', color = "white")
     </script>
 </body>

 </html>