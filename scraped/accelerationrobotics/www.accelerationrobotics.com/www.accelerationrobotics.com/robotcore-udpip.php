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
     <title>ROBOTCORE® UDP/IP | Faster UDP/IP robot networking communications with FPGA hardware acceleration</title>
     <meta name="description" content="Faster UDP/IP robot networking communications with hardware acceleration" />
     <meta name="keywords" content="fpga,robotcore,udp,ip,robotics" />
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
                     <h1 class="titulo-robotcore">ROBOTCORE <span>UDP/IP</span></h1>
                     <h3 class="f-blanco f-gordita-normal py-2" style="font-size:1.8em;">
                         <!-- Accelerated UDP/IP networking robot communications in microseconds -->
                         FPGA UDP/IP Networking Stack to push Robots to Nanosecond Speeds
                     </h3>
                     <p class="mt-1 pb-4" style="color: white;">
                         <strong class="f-blanco">ROBOTCORE® UDP/IP</strong> is an innovative FPGA <strong
                             style="color:#4d4cf5;">robot core</strong> (also known as IP core), specifically engineered
                         to significantly enhance the efficiency and speed of Internet Protocol (<strong
                             style="color:#4d4cf5;">IP</strong>) networking stack communications utilizing the User
                         Datagram Protocol (<strong style="color:#4d4cf5;">UDP</strong>). Designed with the cutting-edge
                         demands of robotics and high-speed communication systems in mind, <strong
                             class="f-blanco">ROBOTCORE® UDP/IP</strong> can send or receive <strong style="color:#4d4cf5;">small
                             packages in 700 nanoseconds</strong>, accelerating networking by <u>more than 19x</u> when
                         compared to traditional CPUs. A pivotal component in modern real-time and fast networking
                         robotic infrastructures.
                     </p>
                     <a href="start-buying.php" class="btn btn-linea btn-relleno smooth mb-2">Get ROBOTCORE® UDP/IP</a>
                     <a href="#benchmarks" class="btn btn-linea btn-linea smooth mb-2">Benchmarks</a>
                     <!-- <a href="#" class="btn btn-linea btn-linea smooth">Read the paper</a> -->
                 </div>
                 <div class="col-12 col-lg-6 my-auto text-center text-lg-right pt-5 pt-lg-0">
                     <img src="img/robotcore_udpip.gif" alt="ROBOTCORE UDP/IP" class="img-responsive iconorobotcore">
                 </div>
             </div>
         </div>
     </div>


     <!-- How does it work -->
     <div class="mt-5 mb-0 our-duty-home" id="our-duty-home">
         <div class="container containerAC">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2 class="pb-0">Ultra-fast UDP/IP robot networking communications</h2>
                     <!-- <h2>Revolutionizing robot connectivity:Lightning-Speed Robot Networking Communications<h2> -->
                     <!-- <h2>How does it work?</h2> -->
                     <img src="img/robotcore_udpip_front.svg" style="margin-top: -10px;"
                         class="img-responsive d-none d-lg-block mb-1 pt-0"> <!-- img-robots-full -->
                     <img src="img/template_web_vertical.svg"
                         class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">

                     <p class="mb-3 text-justify">
                         ROBOTCORE® <strong><span style="color:#4d4cf5;">UDP/IP</span></strong> operates by accelerating
                         the communication speed of the Internet Protocol (<span style="color:#4d4cf5;">IP</span>)
                         networking stack through advanced FPGA hardware acceleration specifically tailored for <span
                             style="color:#4d4cf5;">UDP</span> (User Datagram Protocol) communications. At its core, it
                         implements a streamlined and optimized hardware IP and UDP stack processing mechanism, ensuring
                         microsecond-level (us) rapid handling of network packets. This optimization results in
                         significantly faster robot data transmission and reduced latency, crucial for real-time
                         applications in robotics.<br>
                         <br>
                         The architecture of ROBOTCORE® UDP/IP is designed to be highly scalable and flexible, enabling
                         it to seamlessly integrate into a variety of FPGA and FPGA SoC technologies. It intelligently
                         manages data throughput, ensuring high performance even while maintaining low power
                         consumption. This makes it exceptionally effective in environments where energy efficiency is
                         paramount. ROBOTCORE® UDP/IP can send <u>small packages of <span
                                 style="font-family: SourceCodePro-Regular;">8-byte</span> payloads in less than <span
                                 style="font-family: SourceCodePro-Regular;">1 us</span> (<span
                                 style="font-family: SourceCodePro-Regular;">700 ns</span>)</u> and <span
                             style="font-family: SourceCodePro-Regular;">1024-byte</span> packages in 3us, <span
                             style="color:#4d4cf5;">accelerating networking by more than <span
                                 style="font-family: SourceCodePro-Regular;">19x</span> when compared to traditional
                             CPUs</span>. By accelerating the networking stack, ROBOTCORE® UDP/IP not only boosts data
                         throughput but also maintains robust determinism and performance across diverse operational
                         conditions, ensuring reliability in both industrial and research applications. Its working
                         principle revolves around maximizing networking efficiency while minimizing resource usage,
                         setting a new standard in robotic communication technology.
                     </p>
                     <img src="img/udpip_diagram4.svg" style="margin-top: -40px;"
                         class="img-responsive d-block pb-4 mb-0 pt-4">

                     <a href="#benchmarks" class="mt-0 mb-5 btn btn-relleno">Benchmarks <i class="fas fa-chevron-right"
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
                     <h4 class="f-gordita-normal pr-lg-5">ROBOTCORE® UDP/IP supports the most popular FPGA silicon
                         vendors and hardware acceleration solutions, including development kits to build robots with
                         hardware acceleration and ROS.</h4>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 d-lg-block">
                     <div class="company">
                         <div class="container">
                             <div class="row justify-content-center">
                                 <div class="col-lg-6 col-6 comp1">
                                     <div><a href="robotcore.php"><img src="img/robotcore_render_1080.png"></div></a>
                                     <strong>ROBOTCORE®</strong> Robotic Processing Unit
                                 </div>
                             </div>
                             <div class="row justify-content-center">
                                 <!-- Intel SoCs -->
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/agilex9.png"></div>
                                     Intel's <strong>Agilex 9</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/agilex7.png"></div>
                                     Intel's <strong>Agilex 7</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/agilex5.png"></div>
                                     Intel's <strong>Agilex 5</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/agilex3.png"></div>
                                     Intel's <strong>Agilex 3</strong>
                                 </div>

                                 <!-- AMD SoCs -->
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/zynq7.png"></div>
                                     AMD's <strong>Zynq 7000</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/zu+.png"></div>
                                     AMD's <strong>Zynq Ultrascale+</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/versal.png"></div>
                                     AMD's <strong>Versal</strong>
                                 </div>

                                 <!-- Microchip's SoCs -->
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/polarfire.jpeg"></div>
                                     Microchip's <strong>PolarFire</strong>
                                 </div>

                                 <!-- Dev. Boards -->
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
                                     <div><img src="img/amd-zcu102.png"> </div>
                                     AMD's
                                     <strong>ZCU102</strong>
                                 </div>
                                 <div class="col-lg-3 col-6 comp1">
                                     <div><img src="img/microchip-polarfire.png"></div>
                                     Microchip's
                                     <strong>PolarFire Icicle Kit</strong>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Use cases -->
     <div class="al1-home" id="al1-home">
         <div class="container containerAC">
             <div class="row">
                 <div class="col-12 col-lg-4 div-img mt-5">
                     <h2>Use<br> cases</h2>
                     <img src="img/flecha-dcha.png" class="d-block flecha-dcha pt-5 pb-1">
                     <h4 class="f-gordita-normal pr-lg-5">
                         ROBOTCORE® <strong style="color:#4d4cf5;">UDP/IP</strong> is particularly advantageous in
                         scenarios where high-speed and reliable communication is paramount. It finds its ideal use in:
                     </h4>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 d-lg-block">
                     <div class="company">
                         <div class="container">
                             <div class="row justify-content-center">
                                 <div class="col-lg-6 col-6 comp1 target-robots">
                                     <img src="img/icon-arm.png">
                                     <p class="mt-0 mb-0"><strong class="f-gordita-bold">Industrial Automation</strong><br>
                                         For fast and efficient communication between robotic components in
                                         manufacturing and assembly lines.
                                     </p>
                                 </div>
                                 <div class="col-lg-6 col-6 comp1 target-robots">
                                     <img src="img/icon-healthcare.png">
                                     <p class="mt-0 mb-0"><strong class="f-gordita-bold">Teleoperation Systems</strong><br>
                                         Facilitating smooth and responsive control of remotely operated robots.
                                     </p>
                                 </div>
                                 <div class="col-lg-6 col-6 comp1 target-robots">
                                     <img src="img/icon-shuttle.png">
                                     <p class="mt-0 mb-0"><strong class="f-gordita-bold">Autonomous Vehicles</strong><br>
                                         To ensure rapid data exchange for real-time decision-making in autonomous
                                         driving systems.
                                     </p>
                                 </div>
                                 <div class="col-lg-6 col-6 comp1 target-robots">
                                     <img src="img/icon-cobots.png">
                                     <p class="mt-0 mb-0"><strong class="f-gordita-bold">Research and Development</strong><br>
                                         Providing a robust platform for developing and testing advanced robotic
                                         systems.
                                     </p>
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
             <div class="row py-5">
                 <div class="col-12 text-center">
                     <h2>
                         Faster ROS networking communications<br> with ROBOTCORE® UDP/IP
                     </h2>
                     <p>
                         ROBOTCORE® <span style="color:#4d4cf5;"><strong>UDP/IP</strong></span> significantly enhances
                         the networking architecture of robotic systems, especially those utilizing ROS and ROS 2, by
                         offering accelerated UDP/IP networking capabilities. Its integration into these popular robotic
                         operating systems enables microsecond-level communication speeds, drastically improving
                         real-time data processing and responsiveness. All while delivering the common ROS development
                         flow when combined with ROBOTCORE® <span
                             style="color:#4d4cf5;"><strong>Framework</strong></span>.
                     </p>
                     <p class="pt-4 pb-0 text-center">
                         <img src="img/architecture_framework_udpip.png" class="img-responsive">
                     </p>


                     <a href="start-buying.php" class="mb-4 mt-0 btn btn-relleno">Need a customization? <i
                             class="fas fa-chevron-right" aria-hidden="true"></i>
                     </a>
                     <!-- <a href="https://github.com/ros-acceleration" class="mb-3 btn btn-linea">ROS community
                         contributions <i class="fas fa-chevron-right" aria-hidden="true"></i>
                     </a> -->
                 </div>
             </div>
         </div>
     </div>

     <!-- Use cases -->
     <div class="pb-5">
         <div class="container containerAC">
             <div class="row pb-5">
                 <div class="col-12 col-lg-4 div-img mt-5">
                     <h2>Deterministic<br> communications</h2>                     
                     <h4 class="f-gordita-normal pr-lg-5">
                     Prior research<sup style="font-size: small; color: #999;"><a href="#ref1">[1]</a>,<a href="#ref2">[2]</a>,<a href="#ref3">[3]</a>,<a href="#ref4">[4]</a></sup> helped uncover that traditional networking stacks in robotics have long struggled with indeterminism.

                     ROBOTCORE® <strong style="color:#4d4cf5;">UDP/IP</strong> delivers absolute determinism via hardware. When compared to software-based solutions, it ensures that the communication latency is always the same, regardless of the load of the system. Crucial for real-time robotic systems. 
                     </h4>

                    <!-- Footnotes Section -->
                    <ol class="footnotes" style="font-size: x-small; color: #999;">
                        <li class="reference-item" id="ref1">Gutiérrez, C. S. V., Juan, L. U. S., Ugarte, I. Z., & Mayoral-Vilches, V. (2018). <a style="text-decoration: underline;" href="https://arxiv.org/pdf/1808.10821.pdf">Linux communications: an evaluation of the Linux communication stack for real-time robotic applications</a>. arXiv preprint arXiv:1808.10821.</li>
                        <li class="reference-item" id="ref2">Gutiérrez, C. S. V., Juan, L. U. S., Ugarte, I. Z., & Mayoral-Vilches, V. (2018). <a style="text-decoration: underline;" href="https://arxiv.org/pdf/1809.02595.pdf">Towards a distributed and real-time framework for robots: Evaluation of ROS 2.0 communications for real-time robotic applications</a>. arXiv preprint arXiv:1809.02595.</li>
                        <li class="reference-item" id="ref3">Gutiérrez, C. S. V., Juan, L. U. S., Ugarte, I. Z., & Mayoral-Vilches, V. (2018). <a style="text-decoration: underline;" href="https://arxiv.org/pdf/1804.07643.pdf">Time-sensitive networking for robotics</a>. arXiv preprint arXiv:1804.07643.</li>
                        <li class="reference-item" id="ref4">Gutiérrez, C. S. V., Juan, L. U. S., Ugarte, I. Z., Goenaga, I. M., Kirschgens, L. A., & Mayoral-Vilches, V. (2018). <a style="text-decoration: underline;" href="https://arxiv.org/pdf/1809.07295.pdf">Time synchronization in modular collaborative robots</a>. arXiv preprint arXiv:1809.07295.</li>
                    </ol>            
                    <style>
                        .reference-item::before {
                            content: "";
                            display: block;
                            height: 100px; /* Adjust this value based on your fixed header's height */
                            margin-top: -100px; /* Same value as height but negative */
                            visibility: hidden;
                        }
                    </style>
                 </div>
                 <div class="col-12 col-lg-7 offset-lg-1 d-lg-block pb-5 justify-content-center align-self-center">                 
                     <div class="company">
                        <canvas id="graph3node"></canvas>
                     </div>
                 </div>
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
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">LATENCY</h3>
                     <p style="color:#4d4cf5">(one-way)
                     </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Latency small packets</strong> (us)<br> (<i style="font-size:0.8rem">one-way maximum
                             latency measured after 10K samples and while sending 8-byte payload packets with ROBOTCORE
                             UDP/IP running in an FPGA@156MHz. Other fmax values may lead to better results.</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">0.7 us</strong></p>
                     </p>
                 </div>
             </div>
             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Latency 1024-byte payload</strong> (us)<br> (<i style="font-size:0.8rem">Same as above,
                             but with 1024-byte payload packets</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">2.95 us</strong></p>
                     </p>
                 </div>
             </div>

             <!-- ----------------------------------------------------------------------------- -->

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">ROUND-TRIP-TIME (RTT)</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <!-- <p><strong style="color:#4d4bfb;">3.69x</strong></p>  -->
                     <p> <strong>Round-Trip-Time Latency</strong> (us)<br>(<i style="font-size:0.8rem">Round-Trip-Time
                             (RTT) average latency measured after 10K samples and while sending 8-byte payload packets
                             with ROBOTCORE UDP/IP running in an FPGA@156MHz. CPU used for measurements corresponds with
                             an Intel Core i5-13600K. A dashed line shows the maximum values observed for each case.
                         </i>)</p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <canvas id="corechart"></canvas>
                 </div>
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>RTT max. latency small packets</strong> (us)<br> (<i style="font-size:0.8rem">measured
                             Round-Trip-Time (RTT) with 8-byte payload packets</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">1.4 us</strong></p>
                     </p>
                 </div>
             </div>
             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4"></div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>RTT max. latency 1024-byte payload</strong> (us)<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">5.9 us</strong></p>
                     </p>
                 </div>
             </div>

             <!-- ----------------------------------------------------------------------------- -->

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3 class="mb-1">SPEEDUP</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Speedup when compared to traditional CPUs</strong><br> (<i
                             style="font-size:0.8rem">considering average latency measurements</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">19x</strong></p>
                 </div>
             </div>

             <div class="row" style="padding: 3em 0 2em 0;">
                 <div class="col-lg-12 col-xl-4">
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>Maximum speedup when compared to traditional CPUs</strong><br> (<i
                             style="font-size:0.8rem">considering maximum latency measurements</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">86x</strong></p>
                 </div>
             </div>

             <!-- ----------------------------------------------------------------------------- -->

             <div class="row" style="border-bottom: 0 !important; padding: 3em 0 2em 0;">
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
             </div>

             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">                     
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>% FPGA resource consumption (LUT, FF, DSP, BRAM)</strong><br> (<i
                             style="font-size:0.8rem">considering an Intel Agilex® 7 FPGA F-Series, 1400 KLE, 2486A</i>) </p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                    <div class=""><canvas id="radarplot_udpip_intel"></canvas></div>
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
             'ROBOTCORE UDP/IP',
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
                     label: 'ROBOTCORE UDP/IP (FPGA@156MHz)',
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

         
        const data_horizontal = {
            labels: [
                "ROBOTCORE UDP/IP (FPGA@156MHz)",
                "CPU",
            ],
            datasets: [{
                    label: "Average latency (us)",
                    data: [5.9, 110],
                    backgroundColor: '#d9d9da',
                },
                {
                    label: "Max. latency (us)",
                    data: [0, 400],
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
                        // type: 'logarithmic', 
                        title: {
                            display: true,
                            text: "Round-Trip Network Latency (us) in 1024-byte payload packets",
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
                //  backgroundColor: "rgba(217, 217, 218, 0.7)",
                 backgroundColor: "rgba(77, 75, 251, 0.7)",
                 //  borderColor: "red",
                 data: data_udp
             },
            //  {
            //      label: component_ros2_only,
            //      //  backgroundColor: "#4d4bfb",
            //      backgroundColor: "rgba(184, 183, 250, 0.7)",                
            //      //  borderColor: "red",
            //      data: data_ros2_only
            //  },
            //  {
            //      label: component_ros2,
            //      //  backgroundColor: "#4d4bfb",  
            //      backgroundColor: "rgba(77, 75, 251, 0.7)",
            //      //  borderColor: "red",
            //      data: data_ros2
            //  }
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

         function radarplot_intel(data, placementid, component) {
            var radarplot_data = {
             labels: ["ALUT (%)", "REG (%)", "DSP (%)", "M20K (%)"],
             datasets: [{
                 label: component,
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
                                    // ["ALUT", "REG", "M20K", "DSP"],
                                    let label = ""
                                    if (context.dataIndex == 0) {                                        
                                        label += Math.round(context.raw*974400/100) + " (" + context.raw + " %)" || '';
                                    } else if (context.dataIndex == 1) {
                                        label += Math.round(context.raw*1948800/100) + " (" + context.raw + " %)" || '';
                                    } else if (context.dataIndex == 2) {
                                        label += Math.round(context.raw*4510/100) + " (" + context.raw + " %)" || '';
                                    } else if (context.dataIndex == 3) {
                                        label += Math.round(context.raw*7110/100) + " (" + context.raw + " %)" || '';
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

         //  CORE
         const corechart = new Chart(document.getElementById('corechart'), config_corechart);
         const graph3node = new Chart(document.getElementById('graph3node'), config_horizontal);
        //   let graph3node = barplot_2_horizontal(28.68, 126.32, 'ROBOTCORE® Perception', 'Default ROS', 'Mean runtime (ms)',
        //       'graph3node', color = "black")
        let radarplot_udpip = radarplot(
            // labels: ["LUT (%)", "FF (%)", "DSP (%)", "BRAM (%)"],
            [4.44, 2.46, 0, 5.90], 
            [42.96, 5.57, 0, 13.88], 
            [48.19, 8.66, 0, 18.06],
            'radarplot_udpip', 
            "ROBOTCORE UDP/IP",
            "ROBOTCORE ROS 2 + RTPS",
            "ROBOTCORE ROS 2 + RTPS + UDP/IP"
        );
        
        // ["ALUT", "REG", "M20K", "DSP"],
        let radarplot_udpip_intel = radarplot_intel([1.57, 0.64, 0, 0.30], 'radarplot_udpip_intel', "ROBOTCORE UDP/IP @ Intel Agilex® 7 FPGA F-Series");
     </script>
 </body>

 </html>