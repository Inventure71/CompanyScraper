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
    <title>Acceleration Robotics | Accelerating industrial legacy robot manipulation</title>
    <meta name="description" content="Accelerating industrial legacy robot manipulation" />
    <meta name="keywords" content="robots,manufacturing,manipulation,legacy" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <style>
        .navbar-superior {
            position: relative;
            z-index: 10;
            /* Ensure the navbar is on top */
        }

        /* .use-case-b {
            margin-top: 5em;
            margin-bottom: 4em;
        } */

        .use-case-b .container {
            max-width: 100%;
        }
        .equation {
            margin: 20px 0;
            padding: 20px;
            /* background-color: #fff; */
            /* border-radius: 10px; */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }
        .equation p {
            text-align: left;
        }

    </style>
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

    <div class="use-case-b" style="background-color: #f6f6f6;">
        <div class="container containerAC">
            <div class="row">
                <div class="">
                    <img class="img-responsive d-none d-sm-block" src="img/header-teknia.png" alt="Card image">
                    <img class="img-responsive d-sm-none pt-5" src="img/header-teknia-mobile.png" alt="Card image">
                </div>
            </div>
        </div>
    </div>

    <!-- How does it work -->
    <div class="mt-5 mb-0 our-duty-home" id="our-duty-home">


        <div class="container containerAC">
            <div class="row no-gutters">
                <div class="col-12">
                    <h2 class="pb-3">                        
                        Accelerating industrial legacy robot manipulation
                    </h2>
                    <h4 class="text-justify f-gordita-normal" style="max-width: 50em; margin: auto;">
                         TEKNIA, an auto parts manufacturer, wanted to speed up their existing robots for faster production cycles. We collaborated to achieve <strong>first a 16.21% increase in robot movement speed</strong> by introducing variations of the robot trajectories, velocities and accelerations, and later, on a second stage a <span style="color:#4d4cf5;">10.78% decrease in cycle time</span> via double-manipulation. Leveraging modern techniques, we pushed the boundaries of the robot's velocity and acceleration with optimized machine-robot interactions and movements (paths and speed), ensuring efficient movement paths with minimal wasted motions. These improvements empowered TEKNIA to produce an additional 800 units per day and over 20,000 units per month.
                    </h4>
                    <!-- <img src="img/robotcore_for_ros2.svg" style="margin-top: -10px;"
                         class="img-responsive d-none d-lg-block mb-1 pt-0">
                     <img src="img/robotcore_ros2_vertical.svg"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3"> -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

        <div class="container pt-5 pb-5">
            <canvas id="powergraph"></canvas>
        </div>
    </div> <!-- our-duty-home -->

    <!-- transition WtoG -->
    <div class="container-fluid no-gutters transition-WtoG">
        <div class="row no-gutters">
            <div class="col-12"></div>
        </div>
    </div>


    <!-- The Challenge -->
    <div class="al1-home" id="al1-home">
        <div class="container containerAC">
            <div class="row pt-5">
                <div class="col-12 col-lg-4 div-img mt-5">
                    <h2>The challenge</h2>
                    <!-- <img src="img/flecha-dcha.png" class="d-block flecha-dcha pt-5 pb-1"> -->
                    <h4 class="f-gordita-normal pr-lg-5">
                        Metallic tubes are manufactured in a continuous process, while going through 
                        various stages of production. A robot is used to manipulate the tubes and move
                        them from one stage to another. The robot's speed and acceleration are limiting
                        factors in the production cycle.
                    </h4>
                </div>
                <div class="col-12 col-lg-7 offset-lg-1 d-lg-block">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video autoplay loop muted>
                            <source src="videos/teknia_real.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Theoretical formulation -->
    <div class="al1-home" id="al1-home">
        <div class="container containerAC">
            <div class="row">
                <div class="col-12 col-lg-6 d-lg-block pb-0 justify-content-center align-self-center">
                    <div class="equation">
                        <p>
                            \[
                            \text{First (n=1):}
                            \begin{cases}
                            T_{\text{start}}^1(M_1) = 0 \\
                            T_{\text{end}}^1(M_1) = T_{\text{start}}^1(M_1) + T_{M1}\\
                            T_{\text{start}}^1(R_1) = T_{\text{end}}^1(M_1) \\
                            T_{\text{end}}^1(R_1) = T_{\text{start}}^1(R_1) + T_{R1} \\
                            T_{\text{start}}^1(M_2) = T_{\text{end}}^1(R_1)\\
                            T_{\text{end}}^1(M_2) = T_{\text{start}}^1(M_2) + T_{M2} \\
                            T_{\text{start}}^1(R_2) = T_{\text{end}}^1(M_2) \\
                            T_{\text{end}}^1(R_2) = T_{\text{start}}^1(R_2) + T_{R2} \\ 
                            \end{cases}
                            \]
                        </p>
                        <p>
                            \[
                            \text{Subsequent (n} \geq \text{2):}
                            \begin{cases}
                            T_{\text{start}}^n(M_1) = T_{\text{end}}^{n-1}(R_1) - T_{M1\_overlap} \\
                            T_{\text{end}}^n(M_1) = T_{\text{start}}^n(M_1) + T_{M1} \\
                            T_{\text{start}}^n(R_1) = T_{\text{end}}^n(M_1) \\
                            T_{\text{end}}^n(R_1) = T_{\text{start}}^n(R_1) + T_{R1} \\
                            T_{\text{start}}^n(M_2) = T_{\text{end}}^n(R_1) \\
                            T_{\text{end}}^n(M_2) = T_{\text{start}}^n(M_2) + T_{M2} \\
                            T_{\text{start}}^n(R_2) = T_{\text{end}}^n(M_2) \\
                            T_{\text{end}}^n(R_2) = T_{\text{start}}^n(R_2) + T_{R2} 
                            \end{cases}
                            \]
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 div-img mt-5">
                    <h2>Mathematical<br>formulation</h2>
                    <h4 class="f-gordita-normal pr-lg-5">
                        Given the constraints of the robot, we formulated a mathematical model to optimize the cycle time. We considered the various possibilities, involving the various involved machines, a faster-moving robot, and also multiple robots. We then used this model to determine the optimal combination of the interactions between the robots and the connected machines in the automation line.
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Modeling the time series -->
    <div class="al1-home" id="al1-home">
        <div class="container containerAC">
            <div class="row pb-5">
                <div class="col-12 col-lg-4 div-img mt-5">
                    <h2>Modeling the<br>time-series</h2>
                    <!-- <img src="img/flecha-dcha.png" class="d-block flecha-dcha pt-5 pb-1"> -->
                    <h4 class="f-gordita-normal pr-lg-5">
                        We modeled the time-series of the robot movements and the machine interactions to optimize the cycle time of the automation line. This allowed us to determine the optimal combination of the interactions between the robots and the connected machines in the automation line.
                    </h4>
                </div>
                <div class="col-12 col-lg-7 offset-lg-1 d-lg-block">
                    <img src="img/time-series-teknia.png" alt="Before">                    
                </div>
            </div>
        </div>
    </div>

    <!-- Digital twin validation -->
    <div class="al1-home" id="al1-home">
        <div class="container containerAC">
            <div class="row">
                <div class="col-12 col-lg-9 d-lg-block pb-5 justify-content-center align-self-center">
                    <div class="slider-container">
                        <img src="img/teknia-real2.png" alt="Before">
                        <img src="img/teknia-twin2.png" alt="After" class="after-slider" style="filter: brightness(0.9);">
                        <div class="slider" id="slider"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 div-img mt-5">
                    <h2>Digital twin-driven<br>validation</h2>
                    <h4 class="f-gordita-normal pr-lg-5">
                        We used digital twins to co-develop and validate the optimal time-series model. This allowed us to simulate the robot movements and the machine interactions in a virtual environment, ensuring the optimal cycle time of the automation line.
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Reality-gap reduction -->
    <div class="al1-home" id="al1-home">
        <div class="container containerAC">
            <div class="row">
                <div class="col-12 col-lg-4 div-img mt-5">
                    <h2>Reducing the reality gap in digital twins</h2>
                    <img src="img/flecha-dcha.png" class="d-block flecha-dcha pb-1">
                    <h4 class="f-gordita-normal pr-lg-5">
                        <!-- Comment on the reduction of the reality gap for digital twins -->
                        We reduced the reality gap in the digital twin which allowed us for faster iterations between the real world and the digital twin. This enabled us to optimize the robot movement speed for real-world performance.
                    </h4>
                </div>                
                <div class="col-12 col-lg-8 d-lg-block">
                    <div class="company">
                        <div class="container">
                            <div class="row pb-5">
                                <div class="col-12 col-lg-12 text-center">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video autoplay loop muted style="filter: brightness(1.2);">
                                            <!-- <source src="videos/teknia_cycle.mp4" type="video/mp4"> -->
                                            <source src="videos/teknia-digital-twin-low.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    
    <!-- Result 1-->
    <div class="pt-5 mt-5">
        <div class="container containerAC">
            <div class="row pb-5">
                <div class="col-12 col-lg-4 div-img mt-5">
                    <h2><strong style="color:#4d4cf5;">Result 1:</strong><br>  16.21% faster<br>robot movement</h2>
                    <h4 class="f-gordita-normal pr-lg-5">
                        On a first iteration, we achieved a 16.21% increase in robot movement speed by means of modifying trajectories and movements (velocities and accelerations), enabling TEKNIA to speed up their production cycles and increase their manufacturing capacity.
                    </h4>
                </div>
                <div class="col-12 col-lg-8 d-lg-block pb-5 justify-content-center align-self-center">
                    <div class="company">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video autoplay loop muted>
                                <source src="videos/teknia-result-compressed.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Result 2-->
    <div class="pb-5 mt-5">
        <div class="container containerAC">
            <div class="row pb-5">
                
                <div class="col-12 col-lg-8 d-lg-block pb-5 justify-content-center align-self-center">
                    <div class="company">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video autoplay loop muted>
                                <source src="videos/teknia-final.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>            
                <div class="col-12 col-lg-4 div-img mt-5">
                    <h2><strong style="color:#4d4cf5;">Result 2:</strong><br>  10.78% faster with<br>  dual manipulation</h2>
                    <h4 class="f-gordita-normal pr-lg-5">
                        We were further challenged to increase the productivity, so we proposed a
                        dual manipulation system. This system allowed for synchronous multi-robot
                        trajectory coordination leading to a 10.78% increase in the manufacturing cycle time.
                    </h4>
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


    <!-- Interpretation of results-->
    <div class="al1-home py-5" id="al1-home">
        <div class="container containerAC">
            <div class="row pt-5 text-center">                
                <div class="col-12 col-lg-6 pb-5 d-flex justify-content-center align-items-center">
                    <h2 class="display-2"><strong style="color:#4d4cf5;">+800</strong>
                    <br><span>units/day</span></h2>
                </div>            
                <div class="col-12 col-lg-6 pb-5 d-flex justify-content-center align-items-center">
                    <h2 class="display-2"><strong style="color:#4d4cf5;">+20K</strong>
                    <br><span>units/month</span></h2>
                </div>                
            </div>
        </div>
    </div>

    <!-- transition WtoG -->
    <div class="container-fluid no-gutters transition-GtoW">
        <div class="row no-gutters">
            <div class="col-12"></div>
        </div>
    </div>


    <div class="wearerobots">
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
</div>    <!-- transition footer -->
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
</script>    <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>

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

        const data_power = {
            // ROBOTCORE, Connext, FastDDS, CycloneDDS, eCAL
            labels: [
                "Customer (stage 0)",
                "Result 1",
                "Result 2",
                // "ROS 2 + DDS2 (NVIDIA AGX Orin)",
            ],
            datasets: [
                // Results available at:
                // - https://gitlab.com/accelerationrobotics/products/other/benchmarks_middleware/-/issues/4#note_1632903735
                // - https://gitlab.com/accelerationrobotics/products/robotcore-rtps/-/issues/4
                {
                    label: "Result 2",
                    data: [0, 0, 11.5],
                    backgroundColor: '#4d4cf5',                    
                },
                {
                    label: "Result 1",
                    data: [0, 10.8, 0],
                    backgroundColor: '#d9d9da',
                },
                {
                    label: "Customer (stage 0)",
                    data: [12.89, 0, 0],
                    backgroundColor: '#929291',                    
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
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                // Use the existing value and append at the end an "s" for seconds
                                let label = context.raw + ' s';
                                return label;
                            }
                        }
                    },                    

                },
                responsive: true,
                indexAxis: 'y',
                scales: {
                    x: {
                        stacked: true,
                        type: 'linear',
                        title: {
                            display: true,
                            text: "Robot perception average latency (s).", // Calculated as the average communication frequency of the system derived from its average latency, divided by the average power consumption of the system.
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
            // ROBOTCORE, Connext, FastDDS, CycloneDDS, eCAL
            labels: [
                "Customer (stage 0)",
            ],
            datasets: [
                // Use a cromatic scale in grey in RGB format:
                // - https://www.colorhexa.com/d9d9da
                {
                    label: "Acquisition",
                    data: [0.968, 0, 0],
                    backgroundColor: '#878787',
                },
                {
                    label: "3D Comparison",
                    data: [1.530, 0, 0],
                    backgroundColor: '#919191',
                },
                {
                    label: "3D Elaboration",
                    data: [1.0, 0, 0],
                    backgroundColor: '#9b9b9b',
                },
                {
                    label: "Preprocessing",
                    data: [0.532, 0, 0],
                    backgroundColor: '#a5a5a5',
                },
                {
                    label: "Segmentation",
                    data: [1.906, 0, 0],
                    backgroundColor: '#aeaeae',
                },
                {
                    label: "3D Localization",
                    data: [0.968, 0, 0],
                    backgroundColor: '#b8b8b8',
                },
                {
                    label: "Postprocessing",
                    data: [3.658, 0, 0],
                    backgroundColor: '#c2c2c2',
                },
                {
                    label: "Point selection",
                    data: [1.954, 0, 0],
                    backgroundColor: '#cccccc',
                },
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
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                let label = context.dataset.label + ": " + context.raw || '';
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
                        type: 'linear',
                        title: {
                            display: true,
                            text: "Perception system latency (s).", // Calculated as the average communication frequency of the system derived from its average latency, divided by the average power consumption of the system.
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

        //  CORE
        const powergraph = new Chart(document.getElementById('powergraph'), config_power);
        const breakdown = new Chart(document.getElementById('breakdown'), config_breakdown);
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var whiteLogo = document.querySelector('.navbar-brand .img-white');
            if (whiteLogo) {
                // whiteLogo.parentNode.removeChild(whiteLogo);
                whiteLogo.src = "img/acceleration-robotics-logo-black-526w.png";
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('slider');
            const afterImage = document.querySelector('.after-slider');
            const container = document.querySelector('.slider-container');

            function setInitialPosition() {
                const containerWidth = container.offsetWidth;
                const initialPosition = containerWidth * 0.45;
                slider.style.left = initialPosition + 'px';
                afterImage.style.clip = `rect(0, ${initialPosition}px, ${container.offsetHeight}px, 0)`;
            }

            setInitialPosition();

            slider.addEventListener('mousedown', (e) => {
                e.preventDefault();
                document.addEventListener('mousemove', moveSlider);
                document.addEventListener('mouseup', () => {
                    document.removeEventListener('mousemove', moveSlider);
                });
            });

            function moveSlider(e) {
                let rect = container.getBoundingClientRect();
                let offsetX = e.clientX - rect.left;
                if (offsetX < 0) offsetX = 0;
                if (offsetX > rect.width) offsetX = rect.width;
                slider.style.left = offsetX + 'px';
                afterImage.style.clip = `rect(0, ${offsetX}px, ${rect.height}px, 0)`;
            }

            window.addEventListener('resize', setInitialPosition);
        });

        document.addEventListener('DOMContentLoaded', () => {
            const custom_slider = document.getElementById('custom_slider');
            const custom_slider2 = document.getElementById('custom_slider2');
            const custom_afterImage = document.querySelector('.custom-after-slider');
            const custom_afterImage2 = document.querySelector('.custom-after-slider2');
            const custom_container = document.querySelector('.custom-slider-container');

            function custom_setInitialPosition() {
                const containerWidth = custom_container.offsetWidth;
                const initialPosition1 = containerWidth * 0.6;
                const initialPosition2 = containerWidth * 0.5 - 150; // offset by 150px for the second slider
                custom_slider.style.left = initialPosition1 + 'px';
                custom_slider2.style.left = initialPosition2 + 'px';
                custom_afterImage.style.clip =
                    `rect(0, ${initialPosition1}px, ${custom_container.offsetHeight}px, 0)`;
                custom_afterImage2.style.clip =
                    `rect(0, ${initialPosition2}px, ${custom_container.offsetHeight}px, 0)`;
            }

            custom_setInitialPosition();

            custom_slider.addEventListener('mousedown', (e) => {
                e.preventDefault();
                document.addEventListener('mousemove', custom_moveSlider);
                document.addEventListener('mouseup', () => {
                    document.removeEventListener('mousemove', custom_moveSlider);
                });
            });

            custom_slider2.addEventListener('mousedown', (e) => {
                e.preventDefault();
                document.addEventListener('mousemove', custom_moveSlider2);
                document.addEventListener('mouseup', () => {
                    document.removeEventListener('mousemove', custom_moveSlider2);
                });
            });

            function custom_moveSlider(e) {
                let rect = custom_container.getBoundingClientRect();
                let offsetX = e.clientX - rect.left;
                if (offsetX < 0) offsetX = 0;
                if (offsetX > rect.width) offsetX = rect.width;
                custom_slider.style.left = offsetX + 'px';
                custom_afterImage.style.clip = `rect(0, ${offsetX}px, ${rect.height}px, 0)`;
            }

            function custom_moveSlider2(e) {
                let rect = custom_container.getBoundingClientRect();
                let offsetX = e.clientX - rect.left;
                if (offsetX < 0) offsetX = 0;
                if (offsetX > rect.width) offsetX = rect.width;
                custom_slider2.style.left = offsetX + 'px';
                custom_afterImage2.style.clip = `rect(0, ${offsetX}px, ${rect.height}px, 0)`;
            }

            window.addEventListener('resize', custom_setInitialPosition);
        });
    </script>

</body>

</html>