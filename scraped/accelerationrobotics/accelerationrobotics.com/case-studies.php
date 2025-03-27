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
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Acceleration Robotics | Hardware Acceleration Case Studies in Robotics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
    <meta name="description"
        content="Hardware Acceleration Case Studies in Robotics." />
    <meta name="keywords" content="case studies,hardware acceleration,robotics,ros" />
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
    <div class="cabecera-interior cabecera-about text-center">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12">
                    <h1 class="d-none">Hardware Acceleration Case Studies in Robotics</h1>
                    <h1 class="mt-5 pt-5" style="color:white;">Case studies</h1>
                    <!-- <img src="img/acceleration-robotics-logo-blanco.png" alt="Acceleration Robotics"
                        class="img-responsive d-none d-md-inline-block"> -->
                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-lg-12 col-xl-12 texto-centrado2 pt-4">
            <h2 class="f-azul"> Accelerating Robots in Industry</h2>
            <div class="separator"></div>
          </div>
        </div>
    </div>

    <div class="container">
        <div class="row py-2 justify-content-center">
            <!-- Celsa -->
            <div class="py-4 col-12 col-lg-6 pb-3 pb-lg-0 pr-lg-5">
                <div style="position: relative; display: inline-block; width: 80%; opacity: 1.0">
                    <img src="img/celsa-render.png" class="mb-2" alt="report" style="width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);"/>
                    <img src="img/celsa.png" alt="logo" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 20%; filter: brightness(0) invert(1);"/>
                </div>                
                <h3 class="f-gordita-normal pt-3" style="font-size:1.8em;">Accelerating metal part manufacturing with robots</h3>
                <p>
                    <!-- Heavy metallic parts are manipulated by machinery and robots with tasks involving soldering and assembly. The environment is characterized by large robots and slow-communicating large machinery and equipment, with workers overseeing the slow process. In our work with Grupo Celsa we accelerated their robotic vision pipelines by more than 62x, enabling faster robot manipulation and real-time quality control. -->
                    Grupo Celsa, a leader in metal part manufacturing, faced challenges with slow, clunky robots powered by CPU-based vision proccesses, hindering production and quality control. Partnering with them, we accelerated their robot operations. By hardware accelerating their robotic vision pipelines by over 62x, we unlocked significant improvements in their robotic assemly processes. Robots can now operate faster, streamlining production.
                </p>
                <a href="case-study-celsa.php" class="btn btn-linea">Learn more <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
            </div>

            <!-- TEKNIA -->
            <div class="my-4 col-12 col-lg-6 pt-0 pt-lg-0 pl-lg-5">
                <div style="position: relative; display: inline-block; width: 80%; opacity: 1.0">
                    <img src="img/teknia-render.png" class="mb-2" alt="report" style="width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);"/>
                    <img src="img/teknia.png" alt="logo" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 20%; filter: brightness(0) invert(1);"/>
                </div>                            
                <h3 class="f-gordita-normal py-3" style="font-size:1.8em;">Accelerating industrial legacy robot manipulation</h3>
                <p>
                    TEKNIA, an auto parts manufacturer, aimed to accelerate their robot production cycles. Through our collaboration, we first achieved a 16.21% increase in robot movement speed by optimizing trajectories, velocities, and accelerations. In a second stage, we reduced cycle time by 10.78% using double-manipulation techniques. These improvements empowered TEKNIA to produce an additional 800 units per day and over 20,000 units per month.
                </p>
                <a href="case-study-teknia.php" class="btn btn-linea">Learn more <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

    <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-lg-12 col-xl-12 texto-centrado2 pt-4">
              <h2 class="f-azul pb-0">Hardware Acceleration and Semiconductors for robots</h2>
              <h4>FPGA IP core and GPU kernel designs and consulting</h4>
            <div class="separator"></div>
          </div>
        </div>
    </div>

    <div class="container">
        <div class="row py-2">
            <!-- AMD -->
            <div class="py-4 col-12 col-lg-6 pb-3 pb-lg-0 pr-lg-5">
                <div style="position: relative; display: inline-block; width: 80%; opacity: 1.0">
                    <img src="img/patrones/1.jpg" class="mb-2" alt="report" style="width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);"/>
                    <img src="img/amd.png" alt="logo" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 20%; filter: brightness(0) invert(1);"/>
                </div>                
                <h3 class="f-gordita-normal py-3" style="font-size:1.8em;">Foundation for High-Performance ROS 2 Communications</h3>
                <p>
                    <!-- Our work with AMD focused on crafting the hardware foundation for next-generation ROS 2 robots. By leveraging FPGA hardware, we designed silicon building blocks for optimized ROS 2 communication underlayers. This included a custom hardware networking stack (UDP/IP) interfacing with an efficient DDS software implementation. Additionally, we extended AMD's profiling capabilities to precisely capture CPU-to-FPGA interactions, empowering system architects to optimize robot data flow and achieve peak performance. -->

                    In partnership with AMD, we built the hardware groundwork for high-speed ROS 2 robot communications. Using FPGAs, we designed silicon building blocks for streamlined ROS 2 interactions. This involved a custom hardware networking stack (UDP/IP) working with an efficient Linux-bypassed DDS software layer. We also enhanced AMD's profiling tools to precisely track CPU-to-FPGA interactions, allowing system architects to fine-tune robot data flow and maximize performance.
                </p>
                <!-- <a href="#" class="btn btn-relleno">Read more <i class="fas fa-chevron-right" aria-hidden="true"></i></a> -->
            </div>

            <!-- Intel -->
            <div class="my-4 col-12 col-lg-6 pt-0 pt-lg-0 pl-lg-5">
                <div style="position: relative; display: inline-block; width: 80%; opacity: 1.0">
                    <img src="img/patrones/2.jpg" class="mb-2" alt="report" style="width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);"/>
                    <img src="img/intel.png" alt="logo" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 20%; filter: brightness(0) invert(1);"/>
                </div>                            
                <h3 class="f-gordita-normal py-3" style="font-size:1.8em;">
                Supercharging ROS with Agilex FPGAs and benchmarking
                </h3>
                <p>
                    Our partnership with Intel enhanced Quartus suite and oneAPI frameworks, enabling them to seamlessly integrate with ROS. Through build system extensions and various connectors, system architects can now design custom accelerators for Intel's Agilex FPGAs, significantly accelerating robot operations within the familiar ROS environment. We also performed state-of-the art benchmarking to validate the performance gains and ensure peak efficiency.
                </p>
                <!-- <a href="#" class="btn btn-relleno">Read more <i class="fas fa-chevron-right" aria-hidden="true"></i></a> -->
            </div>
        </div> <!-- row -->      
        
        <div class="row py-2">
            <!-- Xilinx -->
            <div class="py-4 col-12 col-lg-6 pb-3 pb-lg-0 pr-lg-5">
                <div style="position: relative; display: inline-block; width: 80%; opacity: 1.0">
                    <img src="img/patrones/3.jpg" class="mb-2" alt="report" style="width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);"/>
                    <img src="img/xilinx.png" alt="logo" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 20%; filter: brightness(0) invert(1);"/>
                </div>                
                <h3 class="f-gordita-normal py-3" style="font-size:1.8em;">
                    <!-- Adaptive Computing Powers Up ROS-Based Robots -->
                    Adaptive Computing Meets ROS
                </h3>
                <p>      
                    Xilinx partnership leveraged our FPGA mastery, optimizing ROS robot performance through custom IP cores and adaptive computing. Strategic intra-FPGA datapaths for ROS accelerated communications, and XEN hypervisor integration boosted performance and development efficiency within the familiar ROS environment.

                    <!-- Our collaboration with Xilinx exemplifies our expertise in FPGAs and the power of adaptive computing in modern robot design. By leveraging FPGAs and custom IP cores, we optimized various ROS-based architectures for peak performance. This involved strategic FPGA integration, development of ROS-specific cores, and hypervisor configurations integration (XEN). This approach unlocked significant performance gains, improved flexibility, and streamlined development, all within the familiar ROS framework. -->
                </p>
                <!-- <a href="#" class="btn btn-relleno">Read more <i class="fas fa-chevron-right" aria-hidden="true"></i></a> -->
            </div>

            <!-- Microchip -->
            <div class="my-4 col-12 col-lg-6 pt-0 pt-lg-0 pl-lg-5">
                <div style="position: relative; display: inline-block; width: 80%; opacity: 1.0">
                    <img src="img/patrones/4.jpg" class="mb-2" alt="report" style="width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);"/>
                    <img src="img/microchip.png" alt="logo" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%; filter: brightness(0) invert(1);"/>
                </div>                            
                <h3 class="f-gordita-normal py-3" style="font-size:1.8em;">
                    Streamlining RISC-V FPGA SoCs
                </h3>
                <p>
                    Our collaboration with Microchip optimized their RISC-V FPGA SoCs for ROS. Leveraging the FPGA fabric, we enabled a vendor-agnostic ROS development experience, mirroring the standard flow. This significantly boosted development speed, streamlined ROS workflows, and empowers next-generation robot architects.
                </p>
                <!-- <a href="#" class="btn btn-relleno">Read more <i class="fas fa-chevron-right" aria-hidden="true"></i></a> -->
            </div>
        </div> <!-- row -->      


        <div class="row py-2">
            <!-- Apex.AI -->
            <div class="py-4 col-12 col-lg-6 pb-3 pb-lg-0 pr-lg-5">
                <div style="position: relative; display: inline-block; width: 80%; opacity: 1.0">
                    <img src="img/patrones/5.jpg" class="mb-2" alt="report" style="width: 100%; border-top-left-radius: 15px; border-top-right-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);"/>
                    <img src="img/apex.png" alt="logo" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 20%; filter: brightness(0) invert(1);"/>
                </div>                
                <h3 class="f-gordita-normal py-3" style="font-size:1.8em;">
                    Hardware Acceleration for Apex.AI
                </h3>
                <p>
                Our collaboration with Apex.AI supported their engineering team to leverage hardware acceleration. Through a series of consultations, we helped adapt Apex.Grace™ development kit architecture to embrace modern acceleration technologies, unlocking next-level performance on their safety-critical robotics software.
                </p>
                <!-- <a href="#" class="btn btn-relleno">Read more <i class="fas fa-chevron-right" aria-hidden="true"></i></a> -->
            </div>


        </div> <!-- row -->           


    </div> <!-- container -->


    <div class="pb-5"></div>
    <!-- <div class="wearerobots">
    <div class="container">
        <div class="row">
            <div class="col-12 pt-5 pb-4">
                <h2>We're here to help</h2>
                <p>Let us help accelerate your robots.</p>
                <a href="about.php#find-us" class="btn btn-relleno">Let's talk <i class="fas fa-chevron-right" aria-hidden="true"></i></a>                
                <a href="case-studies.php" class="btn btn-linea">Case studies <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div> -->
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

    <script>
        $(document).ready(function () {

            $('.counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });

        });
    </script>
</body>

</html>