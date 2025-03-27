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
     <!-- <link rel="stylesheet" type="text/css" href="css/asciinema-player.css" /> -->

     <!-- Cookies -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
     <title>ROBOTCORE® Collaborative | Industrial Human-Robot Collaboration</title>
     <meta name="description" content="An HRI-centric hardware-accelerated control approach that ensures that robots and humans collaborate without collisions and/or aggressive behaviors" />
     <meta name="keywords" content="ros2,fpga,hardware acceleration,ros,robotics,human-robot interaction,collaborative robotics" />
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script type="text/javascript" id="MathJax-script" async
            src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>
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
                     <h1 class="titulo-robotcore" style="font-size: 2.8em;">ROBOTCORE <span>Collaborative</span></h1>
                     <h3 class="f-blanco f-gordita-normal py-2" style="font-size:1.8em;">
                        <strong class="f-gordita-bold">Dynamic collision avoidance</strong>:<br> Advanced Human-Robot Collaboration with Accelerated Adaptive Evasion
                     </h3>
                     <p class="mt-1 pb-4" style="color: white;">
                         <strong class="f-blanco">ROBOTCORE® Collaborative</strong> is an innovative Human-Robot Interaction (HRI)-centric hardware-accelerated control approach that ensures seamless and safe collaboration between robots and humans delivering dynamic collision avoidance. By leveraging robot perception and advanced FPGA technology, it provides unparalleled determinism and rapid response times, crucial for <span style="color:#4d4cf5;">preventing collisions and aggressive behaviors in shared workspaces between humans and robots</span>. This cutting-edge solution is fully API-compatible with the ROS 2 control stack, allowing for easy integration into existing robotic systems while significantly enhancing their collaborative capabilities.
                     </p>
                     <a href="start-buying.php" class="btn btn-linea btn-relleno smooth mb-2">Get ROBOTCORE® Collaborative</a>
                     <a href="#benchmarks" class="btn btn-linea btn-linea smooth mb-2">Benchmarks</a>
                     <!-- <a href="#" class="btn btn-linea btn-linea smooth">Read the paper</a> -->
                 </div>
                 <div class="col-12 col-lg-6 my-auto text-center text-lg-right pt-5 pt-lg-0">
                    <img src="img/robotcore_500.gif" alt="ROBOTCORE® Collaborative" class="img-responsive iconorobotcore">
                 </div>
             </div>
         </div>
     </div>


     <!-- How does it work -->
     <div class="mt-5 mb-5 our-duty-home" id="our-duty-home">
         <div class="container">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2 class="pb-0">Revolutionizing <span style="color:#4d4cf5;">Human-Robot Collaboration</span></h2>

                     <p class="mb-3 text-justify">
                         ROBOTCORE® <strong><span style="color:#4d4cf5;">Collaborative</span></strong> is an innovative Human Robot Interaction (HRI)-centric hardware-accelerated control approach that ensures seamless and safe collaboration between robots and humans, without collisions or aggressive behaviors. By leveraging advanced Artificial Potential Field (APF) based control for safe and efficient robotic operation on industrial scenarios and FPGA technology, it provides unparalleled determinism and rapid response times, crucial for preventing collisions and aggressive behaviors in shared workspaces between humans and robots. Moreover, this cutting-edge solution is fully API-compatible with the ROS 2 control stack, allowing for easy integration into existing robotic systems while significantly enhancing their collaborative capabilities.
                     </p>

                     <!-- <img src="img/robotcore-collab-1.jpg" style="margin-top: -10px;"
                         class="img-responsive d-none d-lg-block mb-1 pt-0"> -->

                     <div class="embed-responsive embed-responsive-16by9">
                        <video autoplay loop muted playbackRate="2">
                            <source src="videos/robotcore-collaborative-head.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <script>
                        document.querySelector('video').playbackRate = 1.5;
                    </script>
                   
                     <p class="mb-3 text-justify">
                         With ROBOTCORE® Collaborative, industrial environments can achieve a new level of efficiency and safety in human-robot interactions. The hardware acceleration enables real-time processing of complex sensor data and instant adjustments to robot behavior, ensuring smooth and safe collaboration even in dynamic and unpredictable scenarios. This technology paves the way for more flexible, productive, and human-friendly robotic systems in various industries.
                     </p>

                     <a href="#benchmarks" class="mt-0 mb-5 btn btn-relleno">Benchmarks <i class="fas"
                             aria-hidden="true"></i></a>
                     <a href="start-buying.php" class="ml-3 mt-0 mb-5 btn btn-linea">Talk to us <i class="fas fa-chevron-right" aria-hidden="true"></i></a>
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


     <!-- Key Features -->
     <div class="py-5" style="background-color: #f8f8f9;">
         <div class="container">
             <div class="row pt-5">
                 <div class="col-12 text-center">
                     <h2>
                         <span style="color:#4d4cf5;">Safe, Efficient, and Intelligent</span> <br>Human-Robot Collaboration
                     </h2>
                     <p>
                         ROBOTCORE® <span style="color:#4d4cf5;"><strong>Collaborative</strong></span> revolutionizes traditional robot arms, transforming them into advanced collaborative arms. Our solution offers:
                     </p>
                 </div>
             </div>             
         </div>
     </div>

     <div class="container-fluid pt-0 pb-0 pr-4 pl-4" style="background-color: #f8f8f9;">
         <div class="row no-gutters">
             <div class="col-12 text-center">
                 <div class="company" style="max-width: 100%;">
                     <!-- Replace with actual feature icons and descriptions -->
                                         <div class="row justify-content-center">
                         <div class="col-lg-3 col-md-6 mb-4">
                             <span style="color:#4d4cf5;">Safety First</span>
                                                         <h4>Collision-Free <br>Operation</h4>
                             <p>Advanced algorithms ensure robots avoid collisions with humans and objects in real-time.</p>
                         </div>
                         <div class="col-lg-3 col-md-6 mb-4">
                             <span style="color:#4d4cf5;">High Performance</span>
                             <h4>Hardware-Accelerated <br>Control</h4>
                             <p>FPGA technology delivers microsecond-level responsiveness for smooth interactions.</p>
                         </div>
                         <div class="col-lg-3 col-md-6 mb-4">
                             <span style="color:#4d4cf5;">Interoperable</span>
                             <h4>ROS 2 <br>API-compatible</h4>
                             <p>Seamlessly integrates with ROS 2 control for easy adoption. Available as an IP core or a ROS 2 package.</p>
                         </div>
                         <div class="col-lg-3 col-md-6 mb-4">
                             <span style="color:#4d4cf5;">Multiple Cameras</span>
                             <h4>Extended coverage and occlusion handling</h4>
                             <p>Multiple cameras to extend the coverage of the robot environment and handle occlusions. Robot maintains its evasive behavior even when some cameras are occluded.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="container-fluid pt-0 pb-0 pr-0 pl-0" style="background-color: #f8f8f9;">
         <div class="row no-gutters mb-5">
             <div class="col-md-6">
                 <div class="embed-responsive embed-responsive-16by9">
                     <video autoplay loop muted>
                         <source src="videos/robotcore_collab_tech3-2.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                     </video>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="embed-responsive embed-responsive-16by9">
                     <video autoplay loop muted>
                         <source src="videos/robotcore_collab_tech4-2.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                     </video>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="embed-responsive embed-responsive-16by9">
                     <video autoplay loop muted>
                         <source src="videos/robotcore_collab_tech6-2.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                     </video>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="embed-responsive embed-responsive-16by9">
                     <video autoplay loop muted>
                         <source src="videos/robotcore_collab_tech7.mp4" type="video/mp4">
                         Your browser does not support the video tag.
                     </video>
                 </div>
             </div>                          
         </div>

         <div class="row">
             <div class="col-12 text-center pb-5">
                 <a href="start-buying.php" class="mb-4 mt-0 btn btn-relleno">Enhance Your Industrial Robots with Collaborative Behaviors <i
                         class="fas fa-chevron-right" aria-hidden="true"></i></a>
             </div>
         </div>         
     </div>


    <!-- Unmatched Performance in HRI -->     
    <div class="py-5">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 text-center">
                     <h2>
                        <span style="color:#4d4cf5;">Unmatched Performance in HRI</span> <br>Powered by FPGA-enabled Hardware Acceleration
                     </h2>
                 </div>
             </div>
         </div>

        <div class="container containerAC">                     
            <div class="row">
                <div class="col-12 text-center">
                    <img src="img/robotcore-collaborative.gif" class="img-responsive d-none d-lg-block mb-5 pt-0">
                </div>
             </div>
         </div>

        <div class="container">
             <div class="row py-5">
                 <div class="col-12 text-center">
                     <p>
                         ROBOTCORE® <span style="color:#4d4cf5;"><strong>Collaborative</strong></span> sets new standards in human-robot interaction, delivering unprecedented speed and reliability. Our hardware-accelerated approach ensures consistent, deterministic behavior crucial for safe and efficient collaboration. By leveraging advanced FPGA technology, it provides unparalleled determinism and rapid response times, crucial for preventing collisions and aggressive behaviors in shared workspaces between humans and robots. This cutting-edge solution is fully API-compatible with the ROS 2 control stack, allowing for easy integration into existing robotic systems while significantly enhancing their collaborative capabilities.
                     </p>           
                     
                    <!-- <div class="company pb-5" style="max-width: 100%;">
                        <canvas id="breakdownros2"></canvas>
                    </div>


                     <a href="start-buying.php" class="mb-4 mt-0 btn btn-relleno">Need a customization? <i
                             class="fas fa-chevron-right" aria-hidden="true"></i>
                     </a> -->
                 </div>
             </div>
         </div>

         <div class="container containerAC">
             <div class="row no-gutters">
                 <div class="col-12 text-center">
                    <div class="company pb-5" style="max-width: 100%;">
                        <canvas id="breakdownros2"></canvas>
                    </div>


                     <a href="start-buying.php" class="mb-4 mt-0 btn btn-relleno">Bring your application on top <i
                             class="fas fa-chevron-right" aria-hidden="true"></i>
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

     <!-- Transforming industries -->
     <div class="al1-home" id="al1-home">
         <div class="container containerAC">
             <div class="row mb-5">
                 <div class="col-12 col-lg-4 div-img mt-5">
                     <h2>Transforming<br>Industries</h2>
                     <img src="img/flecha-dcha.png" class="d-block flecha-dcha pt-5 pb-1">
                     <h4 class="f-gordita-normal pr-lg-5">
                         ROBOTCORE® <strong style="color:#4d4cf5;">Collaborative</strong> is revolutionizing human-robot interaction across various sectors, enabling safer and more efficient collaborative environments:
                     </h4>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 d-lg-block">
                     <div class="company">
                         <div class="container">
                             <div class="row justify-content-center">
                                 <div class="col-lg-6 col-6 comp1 target-robots">
                                    <img src="img/icon-arm.png">
                                     <p class="mt-0 mb-0"><strong class="f-gordita-bold">Manufacturing</strong><br>
                                         Enabling robots to work alongside humans on assembly lines, enhancing productivity and safety.
                                     </p>
                                 </div>
                                 <div class="col-lg-6 col-6 comp1 target-robots">
                                     <img src="img/icon-healthcare.png">
                                     <p class="mt-0 mb-0"><strong class="f-gordita-bold">Healthcare</strong><br>
                                         Facilitating safe interaction between medical robots and healthcare professionals in surgical and care settings.
                                     </p>
                                 </div>
                                 <div class="col-lg-6 col-6 comp1 target-robots">
                                     <img src="img/icon-shuttle.png">
                                     <p class="mt-0 mb-0"><strong class="f-gordita-bold">Warehousing and Logistics</strong><br>
                                         Ensuring safe coexistence of humans and robotic systems in dynamic warehouse environments.
                                     </p>
                                 </div>
                                 <div class="col-lg-6 col-6 comp1 target-robots">
                                    <img src="img/icon-cobots.png">
                                     <p class="mt-0 mb-0"><strong class="f-gordita-bold">Research and Development</strong><br>
                                         Advancing the field of human-robot interaction with cutting-edge collaborative capabilities.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- <div class="my-5 py-5">
                <img src="img/robotcore-collaborative.gif" class="img-responsive d-none d-lg-block mb-5 pt-0">
             </div> -->
         </div>
     </div>

     <!-- Pre-benchmarks -->
     <div class="py-5 mt-5">
         <div class="container containerAC">
             <div class="row pb-5">
                 <div class="col-12 col-lg-4 div-img mt-5">
                     <h2>Dynamic<br>Collision<br>Avoidance</h2>                     
                     <h4 class="f-gordita-normal pr-lg-5">                     
                        The dynamic collision avoidance system offers unparalleled performance by leveraging depth camera data to detect obstacles and adjust the robot's trajectory in real-time. This system ensures lower and consistent communication latency, crucial for real-time robotic applications, and addresses major bottlenecks in robotic communications<sup style="font-size: small; color: #999;"><a href="#ref1">[1]</a>,<a href="#ref2">[2]</a>,<a href="#ref3">[3]</a></sup>. 
                     </h4>

                    <!-- Footnotes Section -->
                    <ol class="footnotes" style="font-size: x-small; color: #999;">
                        <li class="reference-item" id="ref1">F. Flacco, T. Kroeger, A. De Luca, and O. Khatib, ‘A Depth Space Approach for Evaluating Distance to Objects: with Application to Human-Robot Collision Avoidance’, J Intell Robot Syst, vol. 80, no. S1, pp. 7–22, Dec. 2015, doi: 10.1007/s10846-014-0146-2.</li>
                        <li class="reference-item" id="ref2">F. Flacco, T. Kroger, A. De Luca, and O. Khatib, ‘A depth space approach to human-robot collision avoidance’, in 2012 IEEE International Conference on Robotics and Automation, Saint Paul, MN: IEEE, May 2012, pp. 338–345. doi: 10.1109/ICRA.2012.6225245.</li>
                        <li class="reference-item" id="ref3">Flacco, Fabrizio, and Alessandro De Luca. ‘Real-Time Computation of Distance to Dynamic Obstacles With Multiple Depth Sensors’. IEEE Robotics and Automation Letters 2, no. 1 (January 2017): 56–63. https://doi.org/10.1109/LRA.2016.2535859.</li>                        
                    </ol>            
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 d-lg-block pb-5 justify-content-center align-self-center">                 
                     <img src="img/robotcore-collab-1.jpg" style="margin-top: -10px;"
                         class="img-responsive d-none d-lg-block mb-1 pt-0">
                 </div>
             </div>
         </div>
     </div>

     <div class="pb-5">
         <div class="container containerAC">
             <div class="row pb-5">
                 <div class="col-12 col-lg-5 d-lg-block pb-5 justify-content-center align-self-center">
                     <img src="img/robotcore-collab-4.jpg" style="margin-top: -10px;"
                        class="img-responsive d-none d-lg-block mb-1 pt-0">
                </div>
                 <div class="col-12 offset-lg-1 col-lg-6 div-img mt-5">
                     <h2>Multiple Cameras for Extended Coverage. <span style="color:#4d4cf5;">Occlusion Handling</span></h2>
                     <h4 class="f-gordita-normal pr-lg-5">
                         If the Occlusion Handling (OH) variant of the control system is enabled, a Depth Grid Map is generated in the form of a file that can live either in the CPU or in the FPGA memory. The Depth Grid Map contains the mapping from one camera, the principal camera, and the other cameras introduced in the system, the secondary cameras. The principal camera's view volume is divided into a grid by dividing it into pixels (in x and y) and by a user-defined depth value in the z-axis, generating a 2.5D frustum. Each cell contains data on the pixel region and depth in which they are visible in other cameras. This mapping is then used to query the different images during the distance evaluation stage. As a result, the system can handle occlusions across cameras and provide a more accurate representation of the robot's environment, enhancing its safety and reliability while delivering the evasive behaviors required for safe human-robot collaboration.
                     </h4>
                 </div>
             </div>
         </div>
     </div>

     <div class="pb-5">
         <div class="container containerAC">
             <div class="row pb-5">
                 <div class="col-12 col-lg-12 div-img mt-5">
                    <div class="text-center">
                     <h2><span style="color:#4d4cf5;">The Control Theory Behind</span><br> Depth Image-Based Robot Control</h2>
                    </div>
                     <h4 class="f-gordita-normal pr-lg-5">                     
                        
                        Our system captures <strong>depth images</strong> of the robot and its surroundings, requiring <em>calibration</em> of the relative positions between the robot and the camera. The robot's <strong>geometry</strong> is filtered out, and critical distances from <em>control points</em> on the robot to the surrounding depth camera detections are identified.

                        Control points are defined using <strong>TF frames</strong> on the robot's geometry, typically on the axes connecting the joints. These points can be added by including <em>link elements</em> without geometry to the robot's <strong>URDF/XACRO model</strong>. The distribution of these points should ensure the entire robot is covered within the <em>repulsive potential field's saturation region</em>. The distance between consecutive points should generally be less than \(\left(\frac{-3}{\alpha} + 1\right) \frac{\rho}{2}\). More points increase precision but also computation time.

                        Based on these distances, a <strong>Cartesian repulsive vector</strong> and an <em>attractive configuration (PID) vector</em> are computed. These vectors are combined in joint space to obtain a <strong>velocity command</strong>. The repulsion intensity (\(v_{\text{rep}}\)) is regulated by a curve defined by \(v_{\text{max}}\), \(\rho\), \(d_{\text{min}}\), and \(\alpha\).

                        This velocity command is limited based on <em>joint velocity limits</em> from other control points and smoothed through an <strong>acceleration filter</strong> before being transmitted to the robot.
                     </h4>
                     <!-- Footnotes Section -->
                     
                     <span class="footnotes" style="font-size: x-small; color: #999;">The operation of this system is as follows:</span>
                     <ol class="footnotes" style="font-size: x-small; color: #999;">
                        <li> A stream of depth images is captured, showing the target robot and its immediate surroundings. The relative positions between the robot and the camera must be calibrated.</li>
                        <li> The robot's geometry is filtered out from these images.</li>
                        <li> The filtered image is analyzed to identify critical distances from control points defined on the robot's geometry to the detections from the surrounding depth camera. An example of these control points for a UR10e robot can be seen in the following image. These control points are defined using TF frames located on the robot's geometry, typically on the axes connecting the joints. These points can be simply defined by adding a series of `link` elements without associated geometry to the robot's URDF/XACRO model. The process of adding/modifying these control points to the configuration of the various involved nodes and the controller will be reflected in the documentation provided with the solution code. The distribution of these points along the robot's geometry should generally be sufficient to ensure that the entire volume of the robot is covered within the saturation region of the repulsive potential field function. This function appears in the next step, but as a rule of thumb, the distance between consecutive points should generally be less than \(\left(\frac{-3}{\alpha} + 1\right) \frac{\rho}{2}\). It is worth noting that the greater the number and density of these points, the more precise the coverage of the geometry at the cost of increased computation time.</li>
                        <li> Based on these distances for the end effector control point, a Cartesian repulsive vector is computed, and based on the current goal, an attractive configuration (PID) vector is also computed. These vectors are combined in joint space to obtain a velocity command. The intensity of the repulsion (\(v_{\text{rep}}\)) is regulated by a curve defined by the attached image: Where \(v_{\text{max}}\) is the maximum Cartesian repulsion velocity, \(\rho\) is the radius around a control point where obstacles are considered, \(d_{\text{min}}\) is the minimum distance from the control point to the obstacle, and \(\alpha\) is a shape factor that regulates the slope of the curve.</li>
                        <li> This velocity command is then limited based on velocity limits for each joint computed from the other control points.</li>
                        <li> The joint command limited to these new limits is smoothed through an acceleration filter.</li>
                        <li> This smoothed command is transmitted to the robot.</li>
                     </ol>
                 </div>
                 <!-- <div class="col-12 col-lg-7 offset-lg-1 d-lg-block pb-5 justify-content-center align-self-center">                 
                     <img src="img/robotcore-collab-2.jpg" style="margin-top: -10px;"
                         class="img-responsive d-none d-lg-block mb-1 pt-0">
                </div> -->
             </div>
         </div>
     </div>


     <!-- ROBOTCORE® extensions -->
     <!-- <div class="bg-negro py-5">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 col-lg-6 order-2 order-lg-1 pt-5 pt-lg-0 px-0 pr-lg-4 text-center text-lg-left">
                     <img src="img/cores_framework_udpip.png" alt="" class="img-responsive">
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

                     <p class="f-blanco mb-3 pt-5">
                         <strong>ROBOTCORE Transform</strong> is an optimized robotics transform library. API-compatible
                         with the ROS 2 transform (<span class="f-source">tf2</span>) library, it manages efficiently
                         the transformations between coordinate systems in a robot.
                     </p>
                     <a href="robotcore-transform.php" class="btn btn-linea">ROBOTCORE Transform</a>
                 </div>
             </div>
         </div>
     </div> -->

     <!-- ROS and ROS 2 support -->
     <!-- <div class="mt-5 mb-0 our-duty-home">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 mb-4">
                     <h2>ROS and ROS 2 support</h2>
                     <p>
                         ROBOTCORE® <span style="color:#4d4cf5;"><strong>Framework</strong></span> extends the ROS and
                         ROS 2 build systems to allows roboticists to generate
                         acceleration kernels in the same way they generate CPU libraries. Support for legacy ROS
                         systems, and extensions to other middlewares is also possible.
                     </p>
                     <p class="pt-2 pb-2 text-center">
                         <img src="img/ros_support_udp.png" class="img-responsive">
                     </p>
                     <a href="start-buying.php" class="btn btn-linea mt-3">Accelerate ROS</a>
                     <a href="start-buying.php" class="btn btn-relleno mt-3">Accelerate ROS 2</a>
                 </div>
             </div>
         </div>
     </div> -->

     <!-- Benchmarks -->
     <div class="especify-about" id="benchmarks">
         <div class="container containerAC">
             <!-- <a style="color:#63bfab" class="download-text" href="start-buying.php"> <img src="img/download.svg"
                     class="download"> Download </a> -->
             <h2 class="download-text-2 py-4">Benchmarks</h2>
             <p style="font-size:0.8rem">(plots are interactive)</p>
             
             <!-- <div class="row" style="padding: 3em 0 2em 0;"> -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">REAL-TIME DISTANCE<br> CALCULATION COMPUTE TIME</h3>
                     <p style="color:#4d4cf5">(in ms)</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>ROBOTCORE® Collaborative</strong> @ <span style="color:#c9daf8">CPU</span><br> (<i style="font-size:0.8rem">AMD Ryzen 5 PRO
                     4650G</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#c9daf8;">1112.3125 ms</strong><br> (<u>min</u>: 6.6072, <u>mean</u>: 41.2398)</p>
                     </p>
                 </div>
             </div>

            <!-- 
            data: [9.2831, 6.6072]
            data: [16.0414, 41.2398]
            data: [37.7234, 1112.3125] 
            -->

            <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                    <p> <strong>ROBOTCORE® Collaborative</strong> @ <span style="color:#4d4cf5">FPGA</span><br> (<i style="font-size:0.8rem">AMD Zynq™ UltraScale+™ MPSoC EV (XCK26). Programmable logic running at 156MHz. Other fmax values may lead to better results.</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">37.7234 ms</strong><br> (<u>min</u>: 9.2831, <u>mean</u>: 16.0414)</p>
                     </p>
                 </div>
             </div>

             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                    <p> <strong>Speedup ratio CPU/FPGA</strong></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <!-- <p><strong style="color:#4d4bfb;"> 41.2398/16.0414 </strong><br> (min: 6.6072/9.2831, max: 1112.3125/37.7234)</p> -->
                     <p><strong style="color:#4d4bfb;"> 29.49x </strong><br> (<u>min</u>: 0.71x, <u>mean</u>: 2.57x)</p>
                 </div>
             </div>

             <!-- ----------------------------------------------------------------------------- -->

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">REAL-TIME CONTROL FREQUENCY</h3>
                     <p style="color:#4d4cf5">(in Hz)</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                    <p> <strong>ROBOTCORE® Collaborative</strong> @ <span style="color:#c9daf8">CPU</span><br> (<i style="font-size:0.8rem">AMD Ryzen 5 PRO 4650G</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                    <!-- <p><strong style="color:#c9daf8;">1000/1112.3125 Hz</strong><br> (<u>min</u>: 1000/6.6072, <u>mean</u>: 1000/41.2398)</p> -->
                    <p><strong style="color:#c9daf8;">0.899 Hz</strong><br> (<u>min</u>: 151.34, <u>mean</u>: 24.24)</p>
                 </div>
             </div>

             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                    <p> <strong>ROBOTCORE® Collaborative</strong> @ <span style="color:#4d4cf5">FPGA</span><br> (<i style="font-size:0.8rem">AMD Zynq™ UltraScale+™ MPSoC EV (XCK26). Programmable logic running at 156MHz. Other fmax values may lead to better results.</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                    <!-- <p><strong style="color:#4d4bfb;">1000/37.7234 Hz</strong><br> (<u>min</u>: 1000/9.2831, <u>mean</u>: 1000/16.0414)</p> -->
                    <p><strong style="color:#4d4bfb;">26.51 Hz</strong><br> (<u>min</u>: 107.73, <u>mean</u>: 62.34)</p>
                 </div>
             </div>

             <!-- ----------------------------------------------------------------------------- -->

             <!-- <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">RESOURCES</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>% FPGA resource consumption (LUT, FF, DSP, BRAM)</strong><br> (<i
                             style="font-size:0.8rem">considering an AMD Zynq™ UltraScale+™ MPSoC EV (XCK26)</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <div class=""><canvas id="radarplot_udpip"></canvas></div>
                 </div>
             </div> -->

         </div>
     </div>


    <!-- with IKERLAN -->
    <!-- <div class="pb-5" style="background-color: #1b1b1b;">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 col-lg-12 text-center text-lg-left">
                     <h2 class="f-blanco">Built in cooperation<br> with IKERLAN</h2>
                     <p class="f-blanco mt-3 pb-3">
                         <strong>ROBOTCORE®</strong> Collaborative the result of a cooperation between Acceleration Robotics and results from the projects COBRA and COBRA OH, among others.
                     </p>
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



     <script>
         const labels = [
             'ROBOTCORE for ROS 2',
             'CPU',
         ];

         const DATA_COUNT = 6;
         const NUMBER_CFG = {
             count: DATA_COUNT,
             min: -100,
             max: 100
         };

         const data_corechart = {
             labels: labels,
             datasets: [{
                     label: 'ROBOTCORE for ROS 2 (FPGA@156MHz)',
                     data: [5.9, 0],
                     backgroundColor: '#4d4bfb',
                     stack: 'combined',
                     type: 'bar'
                 },
                 {
                     label: 'CPU (default)',
                     data: [0, 111],
                     backgroundColor: "white",
                     stack: 'combined',
                     type: 'bar'
                 },
                 {
                     label: 'Max',
                     data: [5.9, 510],
                     backgroundColor: "#b8b7fa",
                     borderColor: '#b8b7fa',
                     borderDash: [5, 5],
                     stack: 'combined',
                     fill: false,
                     // hidden: true, // This dataset will be hidden initially
                 }

             ]
         };

         const config_corechart = {
             type: 'line',
             data: data_corechart,
             options: {
                 plugins: {
                     title: {
                         display: false,
                         text: 'Performance-per-watt comparison (10-100 iterations)'
                     },
                     tooltip: {
                         callbacks: {
                             label: function (context) {
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
                         //  type: 'logarithmic',                         
                         title: {
                             display: true,
                             text: 'Round-Trip-Time, RTT (us)',
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

         const data_power = {
            // ROBOTCORE, Connext, FastDDS, CycloneDDS, eCAL
            labels: [
                "ROBOTCORE for ROS 2 + RTPS + UDP/IP (FPGA@156MHz)",
                "ROS 2 + DDS2 + UDP/IP (Workstation CPU)",
                // "ROS 2 + DDS2 + UDP/IP (NVIDIA AGX Orin)",
            ],
            datasets: 
            [
                // Results available at:
                // - https://gitlab.com/accelerationrobotics/products/other/benchmarks_middleware/-/issues/4#note_1632903735
                // - https://gitlab.com/accelerationrobotics/products/robotcore-rtps/-/issues/4
                {
                    label: "FPGA@156 MHz (ROBOTCORE for ROS 2)",
                    data: [281690.14, 0, 0],  // (1/5e-6) / 0.71 = 281690.14
                    backgroundColor: '#4d4cf5',
                },
                {
                    label: "Workstation CPU",
                    data: [0, 518.42, 0],  // (1/339e-6) / 5.69 = 518.42 -> 281690/518 = 543x
                    backgroundColor: '#d9d9da',
                }
                // {
                //     label: "NVIDIA AGX Orin",
                //     data: [0, 0, 15],
                //     backgroundColor: '#eaeaea',
                // }
            ]
        };
        const config_power = {
            type: 'bar',
            data: data_power,
            options: {
                plugins: {
                    title: {
                        display: false,
                        text: 'Barplot diagram'
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                let label = context.dataset.label || '';
                                return label;
                            }
                        }
                    }
                },
                responsive: true,
                indexAxis: 'y',
                scales: {
                    x: {
                        stacked: true,
                        type: 'logarithmic', 
                        title: {
                            display: true,
                            text: "Energy efficiency (Average communication frequency-per-Watt).",  // Calculated as the average communication frequency of the system derived from its average latency, divided by the average power consumption of the system.
                            padding: {
                                top: 30,
                                left: 0,
                                right: 0,
                                bottom: 0
                            }
                        }
                    },
                    y: {
                        stacked: true,
                        title: {
                            display: false,
                            text: "Title",
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


         const data_horizontal = {
            // ROBOTCORE, Connext, FastDDS, CycloneDDS, eCAL
            labels: [
                "ROBOTCORE for ROS 2 + RTPS + UDP/IP (FPGA@156MHz)",
                "ROS 2 + DDS1 + UDP/IP (CPU)",
                "ROS 2 + DDS2 + UDP/IP (CPU)",
                "ROS 2 + DDS3 + UDP/IP (CPU)",
                "ROS 2 + eCAL + UDP/IP (CPU)",
            ],
            datasets: 
            [
                // Results available at:
                // - https://gitlab.com/accelerationrobotics/products/other/benchmarks_middleware/-/issues/4#note_1632903735
                // - https://gitlab.com/accelerationrobotics/products/robotcore-rtps/-/issues/4
                {
                    label: "Mean latency (us)",
                    data: [5, 1044, 314, 369, 376],
                    backgroundColor: '#d9d9da',
                },
                {
                    label: "Max. latency (us)",
                    data: [11, 336750, 22769, 109776, 5532],
                    backgroundColor: "#eaeaea",
                }
            ]
        };
        const config_horizontal = {
            type: 'bar',
            data: data_horizontal,
            options: {
                plugins: {
                    title: {
                        display: false,
                        text: 'Barplot diagram'
                    },
                    // tooltip: {
                    //     callbacks: {
                    //         label: function (context) {
                    //             let label = context.parsed.x + " us" || '';
                    //             return label;
                    //         }
                    //     }
                    // }
                },
                responsive: true,
                indexAxis: 'y',
                scales: {
                    x: {
                        stacked: true,
                        type: 'logarithmic', 
                        title: {
                            display: true,
                            text: "Round-Trip Network Latency (us). Logarithmic scale.",
                            padding: {
                                top: 30,
                                left: 0,
                                right: 0,
                                bottom: 0
                            }
                        }
                    },
                    y: {
                        stacked: true,
                        title: {
                            display: false,
                            text: "Title",
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

        const data_horizontal_simplified = {
            // ROBOTCORE, Connext, FastDDS, CycloneDDS, eCAL
            labels: [
                "ROBOTCORE for ROS 2 (FPGA@156MHz)",
                "ROS 2 + DDS1 + UDP/IP",
                "ROS 2 + DDS2 + UDP/IP",
                "ROS 2 + DDS3 + UDP/IP",
                "ROS 2 + eCAL + UDP/IP",
            ],
            datasets: 
            [
                // Results available at:
                // - https://gitlab.com/accelerationrobotics/products/other/benchmarks_middleware/-/issues/4#note_1632903735
                // - https://gitlab.com/accelerationrobotics/products/robotcore-rtps/-/issues/4
                {
                    label: "Average latency (us)",
                    data: [5, 1044, 314, 369, 376],
                    backgroundColor: '#4d4cf5',
                },
                {
                    label: "Max. latency (us)",
                    data: [11, 336750, 22769, 109776, 5532],
                    backgroundColor: "#eaeaea",
                    hidden: true, // This dataset will be hidden initially
                }
            ]
        };
        const config_horizontal_simplified = {
            type: 'bar',
            data: data_horizontal_simplified,
            options: {
                plugins: {
                    title: {
                        display: false,
                        text: 'Barplot diagram'
                    },
                    // tooltip: {
                    //     callbacks: {
                    //         label: function (context) {
                    //             let label = context.parsed.x + " us" || '';
                    //             return label;
                    //         }
                    //     }
                    // }
                },
                responsive: true,
                indexAxis: 'y',
                scales: {
                    x: {
                        stacked: true,
                        // type: 'logarithmic', 
                        title: {
                            display: true,
                            text: "Round-Trip Network Latency (us). Logarithmic scale.",
                            padding: {
                                top: 30,
                                left: 0,
                                right: 0,
                                bottom: 0
                            }
                        }
                    },
                    y: {
                        stacked: true,
                        title: {
                            display: false,
                            text: "Title",
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

        const data_breakdown = {
            // ROBOTCORE, Connext, FastDDS, CycloneDDS (eCAL not included)
            labels: [
                "ROBOTCORE® Collaborative @ FPGA (156MHz)",
                "ROBOTCORE® Collaborative @ CPU ",
            ],
            datasets: 
            [
                // // Results from:
                // - FPGA: https://gitlab.com/accelerationrobotics/products/robotcore-collaborative/-/issues/1#note_2039085259
                // - CPU: https://gitlab.com/accelerationrobotics/products/robotcore-collaborative/-/issues/1#note_1897733143
                {
                    label: "Min processing time",
                    data: [9.2831, 6.6072],
                    backgroundColor: '#c9daf8',
                },
                {
                    label: "Mean processing time",
                    data: [16.0414, 41.2398],
                    backgroundColor: '#4d4cf5',
                },
                {
                    label: "Max processing time",
                    data: [37.7234, 1112.3125],  // 1112.3125 - 41.2398 = 1071.0727
                    backgroundColor: '#eaeaea',  // 37.7234 - 16.0414 = 21.6786
                },
                // {
                //     label: "ROS 2 (software)",
                //     data: [0, 139, 114, 155],
                //     backgroundColor: '#515456',
                // }                
            ]
        };
        const config_breakdown = {
            type: 'bar',
            data: data_breakdown,
            options: {
                plugins: {
                    title: {
                        display: false,
                        text: 'Barplot diagram'
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                let label = context.dataset.label || '';
                                let value = context.parsed.x || 0;
                                return label + ': ' + value + ' ms';                            }
                        }
                    }
                },
                responsive: true,
                indexAxis: 'y',
                scales: {
                    x: {
                        stacked: true,
                        type: 'logarithmic', 
                        title: {
                            display: true,
                            text: "ROBOTCORE® Collaborative distance calculation operation | Mean and Max Computation Time (ms) breakdown",
                            padding: {
                                top: 30,
                                left: 0,
                                right: 0,
                                bottom: 0
                            }
                        },
                        // grid: {
                        //     color: "#c0c0c0",
                        //     display: true,
                        //     borderDash: [5, 5], // Dashed lines to make it less crowded
                        // },
                        ticks: {
                            autoSkip: true, // Automatically skip some labels to reduce crowding
                            maxTicksLimit: 20, // Limit the number of ticks
                        }
                    },
                    y: {
                        stacked: true,
                        title: {
                            display: false,
                            text: "Title",
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

         const data_cores = {
             // ROBOTCORE, Connext, FastDDS, CycloneDDS, eCAL
             labels: [
                 "ROBOTCORE for ROS 2 + RTPS + UDP/IP (FPGA@156MHz)",
                 "Safe DDS (ARM Cortex R5)",
                 "Safe DDS (AMD MicroBlaze)",
             ],
             datasets: [
                 // Results available at:
                 // - https://gitlab.com/accelerationrobotics/products/other/benchmarks_middleware/-/issues/4#note_1632903735
                 // - https://gitlab.com/accelerationrobotics/products/robotcore-rtps/-/issues/4
                 {
                     label: "Latency (us)",
                     data: [5, 900, 200000],
                     backgroundColor: '#d9d9da',
                 },
             ]
         };
         const config_cores = {
             type: 'bar',
             data: data_cores,
             options: {
                 plugins: {
                     title: {
                         display: false,
                         text: 'Barplot diagram'
                     },
                     // tooltip: {
                     //     callbacks: {
                     //         label: function (context) {
                     //             let label = context.parsed.x + " us" || '';
                     //             return label;
                     //         }
                     //     }
                     // }
                 },
                 responsive: true,
                 indexAxis: 'y',
                 scales: {
                     x: {
                         stacked: true,
                         type: 'logarithmic',
                         title: {
                             display: true,
                             text: "Round-Trip Network Latency (us). Logarithmic scale.",
                             padding: {
                                 top: 30,
                                 left: 0,
                                 right: 0,
                                 bottom: 0
                             }
                         }
                     },
                     y: {
                         stacked: true,
                         title: {
                             display: false,
                             text: "Title",
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

         function radarplot(data_udp, data_ros2_only, data_ros2, placementid, component_udp, component_ros2_only, component_ros2) {
            var radarplot_data = {
             labels: ["LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"],
             datasets: [
            {
                 label: component_udp,
                 //  backgroundColor: "#4d4bfb",  
                 backgroundColor: "rgba(217, 217, 218, 0.5)",
                 //  borderColor: "red",
                 data: data_udp
             },
             {
                 label: component_ros2_only,
                 //  backgroundColor: "#4d4bfb",
                 backgroundColor: "rgba(184, 183, 250, 0.5)",                
                 //  borderColor: "red",
                 data: data_ros2_only
             },
             {
                 label: component_ros2,
                 //  backgroundColor: "#4d4bfb",  
                 backgroundColor: "rgba(77, 75, 251, 0.5)",
                 //  borderColor: "red",
                 data: data_ros2
             }
            ]
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
                                label: function(context) {
                                    // "LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"        
                                    let label = ""
                                    if (context.dataIndex == 0) {                                        
                                        label += Math.round(context.raw*117120/100) + " (" + context.raw + " %)" || '';
                                    } else if (context.dataIndex == 1) {
                                        label += Math.round(context.raw*234240/100) + " (" + context.raw + " %)" || '';
                                    } else if (context.dataIndex == 2) {
                                        label += Math.round(context.raw*1248/100) + " (" + context.raw + " %)" || '';
                                    } else if (context.dataIndex == 3) {
                                        label += Math.round(context.raw*144/100) + " (" + context.raw + " %)" || '';
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
                                callback: function(value, index, values) {
                                    return value + "%";
                                }
                            }
                        }
                    },
                },
            };
            return new Chart(document.getElementById(placementid), radarplot_config);        
         }

         function radarplot_intel(data_udp, data_ros2_only, data_ros2, placementid, component_udp, component_ros2_only, component_ros2) {
             var radarplot_data = {
                 labels: ["ALUT (%)", "REG (%)", "DSP (%)", "M20K (%)"],
                 datasets: [
            {
                 label: component_udp,
                 //  backgroundColor: "#4d4bfb",  
                 backgroundColor: "rgba(217, 217, 218, 0.5)",
                 //  borderColor: "red",
                 data: data_udp
             },
             {
                 label: component_ros2_only,
                 //  backgroundColor: "#4d4bfb",
                 backgroundColor: "rgba(184, 183, 250, 0.5)",                
                 //  borderColor: "red",
                 data: data_ros2_only
             },
             {
                 label: component_ros2,
                 //  backgroundColor: "#4d4bfb",  
                 backgroundColor: "rgba(77, 75, 251, 0.5)",
                 //  borderColor: "red",
                 data: data_ros2
             }
            ]
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
                                     // ["ALUT", "REG", "M20K", "DSP"],
                                     let label = ""
                                     if (context.dataIndex == 0) {
                                         label += Math.round(context.raw * 974400 / 100) + " (" + context.raw +
                                             " %)" || '';
                                     } else if (context.dataIndex == 1) {
                                         label += Math.round(context.raw * 1948800 / 100) + " (" + context.raw +
                                             " %)" || '';
                                     } else if (context.dataIndex == 2) {
                                         label += Math.round(context.raw * 4510 / 100) + " (" + context.raw +
                                             " %)" || '';
                                     } else if (context.dataIndex == 3) {
                                         label += Math.round(context.raw * 7110 / 100) + " (" + context.raw +
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

         //  CORE
        //  const corechart = new Chart(document.getElementById('corechart'), config_corechart);
        //  const graph3node = new Chart(document.getElementById('graph3node'), config_horizontal);
        //  const rttgraph = new Chart(document.getElementById('rttgraph'), config_horizontal_simplified);         
        //  const ddscores = new Chart(document.getElementById('ddscores'), config_cores);
         const breakdownros2 = new Chart(document.getElementById('breakdownros2'), config_breakdown);
        //  const powergraph = new Chart(document.getElementById('powergraph'), config_power);


         let radarplot_udpip = radarplot(
            // labels: ["LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"],
            [4.44, 2.46, 0, 5.90], 
            [42.96, 5.57, 0, 13.88], 
            [48.19, 8.66, 0, 18.06],
            'radarplot_udpip', 
            "ROBOTCORE Collaborative @ FPGA",
        );

         // ["ALUT", "REG", "DSP", "M20K"],
         let radarplot_udpip_intel = radarplot_intel(
            [1.57],
            [16.75],
            [19.29],
            'radarplot_udpip_intel',
            "ROBOTCORE UDP/IP",
            "ROBOTCORE for ROS 2 + RTPS",
            "ROBOTCORE for ROS 2 + RTPS + UDP/IP"
            );
     </script>
 </body>

 </html>