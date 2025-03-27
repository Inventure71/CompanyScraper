<!DOCTYPE html>
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

    <title>Hardware Acceleration products for robots</title>
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/assessments.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
    <meta name="description" content="Robotcore. ROS 2 API compatible hardware acceleration tools and robot Intellectual Property (IP) cores." />
    <meta name="keywords" content="robotcores,robot IP,hardware acceleration,gpu,fpga" />

     <!-- preloads -->
     <link rel="preload" as="image" href="img/robotcore_500.gif">
     <link rel="preload" as="image" href="img/perception_500.gif">
     <link rel="preload" as="image" href="img/transform_545.gif">
     <link rel="preload" as="image" href="img/cloud_500.gif">
</head>

<body class="serv-assessments">
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
    <h1 class="d-none">Hardware acceleration products for robots</h1>

    <div>
        <!-- title -->
        <div class="servicios-top servicios-seccion bg-negro">
            <div class="container">
                <div class="row row-titulo texto-top mb-0">
                    <div class="offset-lg-3 col-lg-6 offset-md-2 col-md-8 col-xs-12">
                        <h4 class="linkotherservices"><a href="services.php"><i class="fa fa-chevron-left"></i>
                                Services</a></h4>
                        <h1>Products</h1>
                    </div>                    
                </div>
            </div>
        </div>
        
        <div class="servicios-top servicios-seccion bg-negro pb-5">
            <div class="row mb-0">
                <div class="offset-lg-2 col-lg-8 col-12 ">
                    <img style="width:100%;" src="img/robotcore-ecosystem.png" alt="ROBOTCORE® ecosystem"></img>
                </div>                    
            </div>
        </div>


        <div class="servicios-top servicios-seccion bg-negro pt-5">
            <div class="container">                
                <div class="row row-subtitulo texto-centrado">               
                    <div class="offset-lg-3 col-lg-6 col-xs-12">
                        <h4 style="color:#4d4cf5">Robotic Processing Units (RPUs)</h4>
                        <p style="color:white;">
                            RPUs are robot brains, processing units for robots that map efficiently robot behaviors (programmed as ROS computational graphs) to underlying compute resources. They empower robots with the ability to react faster, consume less power, and deliver additional real-time capabilities.
                            
                            <!-- They include general purpose processors (CPUs) and one or multiple accelerators (FPGAs and/or GPUs) obtaining best performance in robotic computations. -->
                        </p>
                    </div>
                </div>
            
                <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-6 col-lg-3 img-block-text d-none"></div>
                        <div class="col-12 col-sm-6 col-lg-6 img-block-text"> <!-- comp1 -->
                            <a href="robotcore.php"><img src="img/robotcore_render_1080.png" alt="ROBOTCORE®"></a>
                            <h4 class="mt-3 mb-2 f-gordita-medium" style="font-size:1.4em; color:white;">ROBOTCORE® RPU</h4>
                            <p style="color:white;">A robot-specific processing unit<br> specialized in ROS computations.<br> Features 16xCPUs, a GPU and an FPGA.</p>
                            <a href="robotcore.php" class="btn-flecha btn-readmore">
                                <span class="circle"><span class="icon arrow"></span></span><span class="button-text">Learn more</span>
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
                        <h4 style="color:#4d4cf5">Tools and IP Cores for robots</h4>
                        <p style="color:white;">
                            Semiconductor building blocks for robots. ROS 2 API-compatible hardware acceleration tools and robot Intellectual Property (IP) cores (<strong style="color:#4d4cf5">IP cores</strong>).
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

        <div class="wearerobots">
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5">
                        <h2 class="f-negro">Let us be your hardware<br />acceleration partner</h2>
                    </div>
                </div>
                <div class="row row-fila-iconos">
                    <div class="col-md-3 col-sm-6 col-xs-12 icon-block-h3">
                        <img src="img/icon-ros.png" alt="" class="icon-alert" />
                        <h3 class="f-azul">ROS and ROS 2 experts</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 icon-block-h3">
                        <img src="img/icono-world.png" alt="report" class="icon-world" />
                        <h3 class="f-azul">We serve clients from all over the world</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 icon-block-h3">
                        <img src="img/icon-ask.png" alt="report" class="icon-hands" />
                        <h3 class="f-azul">Our past experience speaks for our work. Ask for references!</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 icon-block-h3">
                        <img src="img/icon-tools.png" alt="report" class="icon-draw" />
                        <h3 class="f-azul">We use the best tools in the industry</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-4">
                        <a href="start-buying.php" class="btn btn-relleno">Let's talk <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
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
</script></body>

</html>