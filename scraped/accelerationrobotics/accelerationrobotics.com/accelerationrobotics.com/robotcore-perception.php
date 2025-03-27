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
     <title>Accelerated Perception for ROS | Speed up your robotics perception stack</title>
     <meta name="description" content="Accelerated Perception for ROS and ROS 2. Speed up your robotics perception stack" />
     <meta name="keywords" content="robot perception,ROS,ROS 2,IP core,robotcore" />
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
                         <a href="products.php" class="f-azul pb-4"><i class="fa fa-chevron-left"></i> Other products</a>
                     </h4>
                     <h1 class="titulo-robotcore">ROBOTCORE <span>Perception</span></h1>
                     <h3 class="f-blanco f-gordita-normal" style="font-size:1.8em;">Speed up your ROS robotics perception pipelines</h3>
                     <p class="mt-1 pb-4 f-blanco">
                         <strong>ROBOTCORE Perception</strong> is an optimized robotic perception stack that leverages hardware acceleration to provide a <strong class="f-azul">speedup</strong> in your perception
                         computations. <strong class="f-azul">API-compatible with the ROS 2 perception stack</strong>, <strong>ROBOTCORE Perception</strong> delivers high performance, real-time and reliability to
                         your robots' perception.
                     </p>
                     <a href="start-buying.php" class="btn btn-linea btn-relleno smooth mt-3">Get ROBOTCORE® <span>Perception</span></a>                     
                     <a href="robotics-consulting.php" class="btn btn-linea btn-linea smooth mt-3">Perception consulting</a>
                     <!-- <a href="#" class="btn btn-linea btn-linea smooth">Read the paper</a> -->
                 </div>
                 <div class="col-12 col-lg-6 my-auto text-center text-lg-right pt-5 pt-lg-0">
                     <img src="img/perception_500.gif" alt="ROBOTCORE PERCEPTION" class="img-responsive iconorobotcore">
                 </div>
             </div>
         </div>
     </div>

     <!-- How does it work -->
     <div class="mt-5 mb-0 pb-4 our-duty-home" id="our-duty-home">
         <div class="container-fluid">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2>Accelerated robotics perception</h2>
                     <p class="mb-3">
                         Data obtained in a robot from its sensors like cameras and lidar is typically fed into the perception
                         turning into something useful for decision making and planning physical actions. Perception helps sense
                         the static and dynamic objects, and build a reliable and detailed representation of the robot's environment
                         using computer vision and machine learning techniques. The <b>perception layer in a robot is
                             thereby responsible for object detection, segmentation and tracking</b>. Traditionally, a
                         perception pipeline starts with image pre-processing, followed by a region of interest detector and
                         then a classifier that outputs detected objects.
                     </p>
                     <p class="mb-3">
                         <strong class="f-azul">ROBOTCORE Perception</strong> is a hardware accelerated perception stack
                         served as either source code or IP that allows your perception pipelines to reduce their runtime
                         latency and increase throughput. Delivering a <b>perception speedup</b>, it's <strong>API-compatible
                             with
                             the ROS 2 perception stack</strong> simplifying its integration in existing robots, so that you
                         don't spend time reinventing the wheel and re-developing what already works.
                     </p>
                     <img src="img/robotcore-perception-grafo.svg" class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/robotcore-perception-mobile.svg" class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">
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



     <!-- CPU Perception -->
     <div class="bg-gris py-5">
         <div class="container containerAC">
             <div class="row py-5">
                 <div class="col-12 col-lg-4 text-center text-lg-left">
                     <h2><i>Default</i> ROS<br>perception</h2>
                     <h4 class="f-gordita-normal">0.7 Hz/image for a 3-Node perception pipeline in embedded</h4>
                     <p class="mt-4">
                         A simple <span class="f-source">Rectify-Resize-Harris</span> ROS
                         perception pipeline
                         is demonstrated which performs pre-processing (<span class="f-source">Rectify</span> and <span class="f-source">Resize</span>) and region of interest detection
                         (<span class="f-source">Harris</span> corners detector). This simple
                         pipeline consisting of only 3 ROS Nodes takes on average 1266.32 milliseconds to execute for a
                         single pass, which leads to less than 1 Hz when running in an idle embedded Quad-core arm
                         Cortex-A53</i>.
                         <!-- Each corner represents a point in which the gradient of the image have a high variation, which can be used to detect it. -->
                     </p>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 px-0 pr-lg-4 ">
                     <img src="img/harris_cpu.gif" alt="" class="img-responsive">
                 </div>
             </div>
         </div>
     </div>

     <!-- ROBOTCORE Perception -->
     <div class="bg-azul py-5">
         <div class="container containerAC">
             <div class="row py-5">
                 <div class="col-12 col-lg-7 px-0 pr-lg-4 order-2 order-lg-1 my-auto">
                     <img src="img/harris_robotcore_perception_loop.gif" alt="" class="img-responsive">
                 </div>
                 <div class="col-12 col-lg-4 offset-lg-1 mt-5 order-1 order-lg-2 text-center text-lg-left">
                     <h2 class="f-blanco">ROBOTCORE<br>Perception</h2>
                     <h4 class="f-gordita-normal f-blanco">4.5x speedup in simple ROS perception pipelines</h4>
                     <p class="f-blanco mt-4">
                         Faster robots require faster perception. <strong>ROBOTCORE Perception</strong> delivers exactly this upgrading perception
                         pipelines with a 4.5x speedup, impacting pipeline runtime and throughput in embedded. More
                         complex perception graphs can further leverage acceleration, achieving 10x speedups and above.
                     </p>
                 </div>
             </div>
         </div>
     </div>

     <!-- Complex perception pipeline -->
     <div class="bg-blanco py-5">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 text-center">
                     <h2>Towards more <br>capable robots</h2>
                     <!-- <p>
                         Moving faster (or with more dexterity) requires faster perception computations. Atlas below uses
                         perception to identify, navigate and jump around obstacles. Edge perception is key to navigate under
                         environments that change, which are most in the human world. Atlas leverages a time-of-flight depth
                         camera to generate point clouds of the environment at 15 Hz. The point cloud is a large and dense
                         collection of range measurements which needs to be processed at the edge (directly in the robot) for
                         smooth behaviors, reducing any latency from the sensors and all the way into the actuators.
                         By leveraging hardware acceleration, Atlas’ perception extracts surfaces from this point cloud which
                         are then used to plan actions in the order of tenths of milliseconds. All happening on the edge.
                     </p> -->
                     <!-- Original source: https://blog.bostondynamics.com/flipping-the-script-with-atlas -->
                     <p>
                        Moving faster (or with more dexterity) requires faster perception computations. Edge perception is key to navigate under environments that change, which are most in the human world. The robot below is generating information from its sensors which needs to be processed at the edge (directly in the robot) for smooth behaviors, reducing any latency from the sensors and all the way into the actuators. By leveraging hardware acceleration, robots’ perception extracts information from these sensor readings which is then used to plan actions in the order of tenths of milliseconds. All happening on the edge and responding to environmental changes.
                     </p>
                     <p>
                         <strong>ROBOTCORE Perception</strong> delivers faster perception capabilities to
                         ROS computational graphs. So that your robots can move faster and better.
                     </p>
                 </div>
             </div>
             <div class="row pb-5">
                 <div class="col-12 col-lg-10 offset-lg-1 text-center">
                     <div class="embed-responsive embed-responsive-16by9">
                         <video autoplay loop muted>
                             <source src="videos/perception2.mp4" type="video/mp4">
                             Your browser does not support the video tag.
                         </video>
                     </div>
                 </div>
             </div>

         </div>
     </div>


     <!-- with Harvard -->
     <div class="bg-negro py-5">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 col-lg-6 text-center text-lg-left">
                     <h2 class="f-blanco">Co-developed<br> with the best</h2>
                     <p class="f-blanco mt-3">
                         <strong>ROBOTCORE Perception</strong> is the result of joint research and co-development with computer system
                         architects from Harvard University.
                     </p>
                     <a href="https://arxiv.org/pdf/2205.03929.pdf" class="btn btn-linea">Read the paper</a>
                 </div>
                 <div class="col-12 col-lg-5 offset-lg-1 my-auto text-center text-lg-left pt-5 pt-lg-0">
                     <img src="img/Harvard-logo-negativo.png" alt="" class="img-responsive">
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
                 <strong>ROBOTCORE Perception</strong> is served by seasoned ROS developers for ROS development. It includes documentation,
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

             <!-- ///////// -->
             <!-- NODES -->
             <!-- ///////// -->
             <!-- Resize -->
             <!-- <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;"> -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">ROS 2 PERCEPTION NODES</h3>
                     <p>
                         (<i style="font-size:0.8rem">Measurements discard ROS 2 message-passing infrastructure overhead
                             and host-device (GPU or FPGA) data transfer overheads</i>)
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
                             (<i style="font-size:0.8rem">ROBOTCORE Perception running on an AMD KV260, NVIDIA Isaac ROS running in a Jetson Nano 2GB. Measurements present the kernel runtime in milliseconds (ms) and discard ROS 2 message-passing infrastructure overhead
                             and host-device (GPU or FPGA) data transfer overhead</i>)

                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="resizenode"></canvas>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Resize</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_resize"></canvas></div>
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
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="rectifynode"></canvas>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Rectify</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_rectify"></canvas></div>
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
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="harrisnode"></canvas>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Harris</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_harris"></canvas></div>
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
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
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

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Histogram of Oriented Gradients</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_hog"></canvas></div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <!-- Canny Edge Tracing -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Canny Edge Tracing</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">3.26x</strong></p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Canny Edge Tracing</strong> - kernel runtime latency (ms)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="cannynode"></canvas>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Canny Edge Tracing</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_canny"></canvas></div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <!-- Fast Corner Detection -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Fast Corner Detection</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">8.43x</strong></p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Fast Corner Detection</strong> - kernel runtime latency (ms)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="fastcornernode"></canvas>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Fast Corner Detection</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_fast"></canvas></div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <!-- Gaussian Difference -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Gaussian Difference</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">11.94x</strong></p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Gaussian Difference</strong> - kernel runtime latency (ms)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="gaussiannode"></canvas>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Gaussian Difference</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_gaussian"></canvas></div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <!-- Bilateral Filter -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Bilateral Filter</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">9.33x</strong></p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Bilateral Filter</strong> - kernel runtime latency (ms)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="bilateralnode"></canvas>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Bilateral Filter</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_bilateral"></canvas></div>
             </div>

             <div style="border-bottom:1px dashed #555;"></div>

             <!-- Stereo LBM -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Stereo LBM</strong> - speedup</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">5.19x</strong></p>
                 </div>
             </div>
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Stereo LBM</strong> - kernel runtime latency (ms)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="stereonode"></canvas>
                 </div>
             </div>

             <!-- <div class="row" style="border-bottom: 0 !important; padding: 0em 0 2em 0;"> -->
             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Stereo LBM</strong> - % resource consumption (LUT, FF, DSP, BRAM)
                         <br>
                         (<i style="font-size:0.8rem">Considering an AMD KV260 board for resource estimation and an image with 4K resolution as input.
                             Additional details available in the ROBOTCORE Perception documentation.</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4"><canvas id="radarplot_stereo"></canvas></div>
             </div>

            <!-- GRAPHS -->
             <!-- 2-Node pre-processing perception graph latency  -->
             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3>ROS 2 PERCEPTION GRAPHS</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             2-Node pre-processing perception graph latency </strong>(ms)

                         <br> (<i style="font-size:0.8rem">Simple graph with 2 Nodes (<span class="code">Rectify</span>-<span class="code">Resize</span>) demonstrating perception
                             pre-processing with the <a class="f-source" href="/image_pipeline">image_pipeline</a> ROS 2
                             package. AMD's KV260 and NVIDIA's Jetson Nano 2GB boards are used for benchmarking, the
                             former featuring a Quad-core arm Cortex-A53 and the latter a Quad-core arm Cortex-A57.
                             Source code used for the benchmark is available at the <a class="f-source" href="https://github.com/ros-acceleration/acceleration_examples/tree/main/graphs/perception/perception_2nodes">perception_2nodes</a>
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
                         <br> (<i style="font-size:0.8rem">3-Nodes graph (<span class="code">Rectify</span>-<span class="code">Resize</span>-<span class="code">Harris</span>) demonstrating perception
                             pre-processing and region of interest detection with the <a class="f-source" href="/image_pipeline">image_pipeline</a> ROS 2
                             package. AMD's KV260 featuring a Quad-core arm Cortex-A53 is used for benchmarking.
                             Source code used for the benchmark available at the <a class="f-source" href="/acceleration_examples/tree/main/graphs/perception/perception_3nodes">perception_3nodes</a>
                             ROS 2 package</i>)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <!-- <p><strong style="color:#4d4bfb;">1.3x</strong></p> -->
                     <canvas id="graph3node"></canvas>
                 </div>
             </div>
             <div class="row" style="padding: 0em 0 2em 0">
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
             'Default CPU',
             'ROBOTCORE®',
         ];

         const data = {
             labels: labels,
             datasets: [{
                     label: 'ROBOTCORE®',
                     backgroundColor: '#4d4bfb',
                     borderColor: '#4d4bfb',
                     data: [10, 5],
                 },
                 {
                     label: 'Default CPU',
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


         var marksData = {
             labels: ["LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"],
             datasets: [{
                 label: "ROBOTCORE® Perception: " + "Resize",
                 //  backgroundColor: "#4d4bfb",  
                 backgroundColor: "rgba(77, 75, 251, 0.7)",
                 //  borderColor: "red",
                 data: [3.58, 1.57, 3.04, 4.16]
             }]
         };

         const config3 = {
             type: 'radar',
             data: marksData,
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
                                    label += (context.raw*117120).toFixed(2) + " %" || '';
                                 } else if (context.dataIndex == 1) {
                                    label += context.raw + " %" || '';
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
                             label: function(context) {
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
                             label: function(context) {
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

         function radarplot(data, placementid, component) {
            var radarplot_data = {
             labels: ["LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"],
             datasets: [{
                 label: "ROBOTCORE® Perception: " + component,
                 //  backgroundColor: "#4d4bfb",  
                 backgroundColor: "rgba(77, 75, 251, 0.7)",
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


         const myChart4 = new Chart(document.getElementById('myChart4'), config2);
        //  const radarplot_resize = new Chart(document.getElementById('radarplot_resize'), config3);
        // "LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"
         let radarplot_resize = radarplot([3.62, 1.69, 2.89, 4.05], 'radarplot_resize', "Resize");
         let radarplot_rectify = radarplot([12.92, 5.2, 4.23, 9.9], 'radarplot_rectify', "Rectify");
         let radarplot_harris = radarplot([11.35, 5.96, 7.35, 23.15], 'radarplot_harris', "Harris Corner Detection");
         let radarplot_hog = radarplot([15.11, 8.89, 3.02, 15.11], 'radarplot_hog', "Histogram of Oriented Gradients");
         let radarplot_canny = radarplot([6.82, 2.91, 1.27, 11.12], 'radarplot_canny', "Canny Edge Tracing");
         let radarplot_fast = radarplot([17.85, 6.72, 0, 6.92], 'radarplot_fast', "Fast Corner Detection");
         let radarplot_gaussian = radarplot([6.36, 4.6, 10, 4.16], 'radarplot_gaussian', "Gaussian Difference");
         let radarplot_bilateral = radarplot([15.21, 9.97, 6.96, 12.15], 'radarplot_bilateral', "Bilateral Filter");
         let radarplot_stereo = radarplot([17.50, 8.59, 0.54, 18.05], 'radarplot_stereo', "Stereo LBM");

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
         let cannynode = barplot_2(16.52, 53.89, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'cannynode');
         let fastcornernode = barplot_2(4.89, 41.23, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'fastcornernode');
         let gaussiannode = barplot_2(5.26, 62.81, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'gaussiannode');
         let bilateralnode = barplot_2(4.31, 40.24, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'bilateralnode');
         let stereonode = barplot_2(28.12, 145.95, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'stereonode');
         let hognode = barplot_2(0.86, 438.19, 'ROBOTCORE® Perception', 'NVIDIA Isaac ROS', 'Mean runtime (ms)',
             'hognode');
     </script>
 </body>

 </html>