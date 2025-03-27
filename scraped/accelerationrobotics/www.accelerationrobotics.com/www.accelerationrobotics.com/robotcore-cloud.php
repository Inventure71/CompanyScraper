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
     <title> ROBOTCORE Cloud | Hardware Acceleration for ROS in the Cloud</title>
     <meta name="description" content="ROBOTCORE Cloud. SHardware Acceleration for ROS in the Cloud" />
     <meta name="keywords" content="robots,hardware acceleration,acceleration,cloud" />
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
                     <h1 class="titulo-robotcore">ROBOTCORE <span>Cloud</span></h1>
                     <h3 class="f-blanco f-gordita-normal pt-4" style="font-size:1.8em;">Tools to accelerate your robotic<BR />computations with/in the Cloud</h3>
                     <p class="mt-1 pb-4 f-blanco">
                         <strong>ROBOTCORE Cloud</strong> helps roboticists launch parts of their ROS 2 computational graphs into the cloud while addressing hardware acceleration, interoperability and scalability issues. It supports the most popular cloud providers including Azure, GCP and AWS.
                     </p>
                     <a href="start-buying.php" class="btn btn-linea btn-relleno smooth mt-3">Get ROBOTCORE® Cloud</a>                     
                     <a href="robotics-consulting.php" class="btn btn-linea btn-linea smooth mt-3">Need robotics consulting?</a>
                     <!-- <a href="#" class="btn btn-linea btn-linea smooth">Read the paper</a> -->
                 </div>
                 <div class="col-12 col-lg-6 my-auto text-center text-lg-right pt-5 pt-lg-0">
                     <img src="img/cloud_500.gif" alt="ROBOTCORE CLOUD" class="img-responsive iconorobotcore">
                 </div>
             </div>
         </div>
     </div>

     <!-- How does it work -->

     <div class="mt-5 mb-0 pb-4 our-duty-home" id="our-duty-home">
         <div class="container-fluid">
             <div class="row no-gutters">
                 <div class="col-12">
                    <h2>How does it work?</h2>
                     <p class="mb-3">
                         <strong class="azul">ROBOTCORE</strong> <span style="color:#4d4cf5;"><strong>Cloud</strong></span> extends ROS 2 to <strong>a)</strong> provision cloud machines from either the ROS 2 CLI or the ROS 2 launch system, <strong>b)</strong> set up a secure private network and address interoperability issues and <strong>c)</strong> deploy the graphs as specified in the ROS 2 launch system extensions. Best of all, it aligns with ROBOTCORE® <span style="color:#4d4cf5;"><strong>Framework</strong></span>, empowering developers with a unique flow to deploy their accelerators into cloud instances in a compute substrate-agnostic manner (across CPUs, GPUs and FPGAs).
                     </p>

                     <img src="img/robotcore-cloud-grafo.svg" class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">
                     <img src="img/robotcore-cloud-mobile.svg" class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">
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

     <!-- Supported hardware -->
     <div class="al1-home" id="al1-home">
         <div class="container pt-5">
             <div class="row">
                 <div class="col-12 col-xl-5 mt-2 pr-lg-5">
                     <h2>Launch your ROS<br> graphs into the cloud</h2>
                     <p class="mt-3">
                         <strong class="f-azul">ROBOTCORE Cloud</strong> extends the ROS 2 launch system to provision, set up, configure and launch computational graphs into remote machines in the Cloud. Supercharge your ROS graphs with the cloud while keeping the same exact development flow and using the common ROS syntax in launch files.
                     </p>
                 </div>
                 <div class="col-12 col-xl-6 offset-xl-1">
                     <!-- <div class="d-block player-ascii dcha"> -->                     
                         <div id="robotcore_cloud"></div>
                         <script src="js/asciinema-player.js"></script>
                        <script>
                            AsciinemaPlayer.create('https://asciinema.org/a/492904.cast', document.getElementById('robotcore_cloud'), {                            
                                loop: true,
                                theme: 'monokai',
                                autoplay: true,
                                speed: 3,
                            });
                        </script>                     

                     <!-- </div> -->
                 </div>

             </div>
         </div>
     </div>

     <div class="al1-home" id="al1-home">
         <div class="container">
             <div class="row">
                 <div class="col-12 col-xl-6 d-none d-lg-block">
                     <img src="img/cloud-service-providers.png" alt="" class="img-responsive d-none d-lg-block">
                 </div>
                 <div class="col-12 col-xl-6 mt-2 my-auto">
                     <h2>Supporting the top<br> cloud service providers</h2>
                     <p class="mt-3">
                         <strong class="f-azul">ROBOTCORE Cloud</strong> offers support for the top cloud service providers including Microsoft Azure, Amazon Web Services (AWS) and Google Cloud Platform (GCP).
                     </p>
                 </div>
             </div>
         </div>
     </div>


     <div class="mt-5 mb-0 pb-4 our-duty-home" id="our-duty-home">
         <div class="container-fluid pb-5">
             <div class="row no-gutters">
                 <div class="col-12">
                     <h2>Hardware acceleration in<br>the cloud for ROS</h2>
                     <p class="mb-3">
                         Leveraging the cloud provides roboticists with unlimited resources to further accelerate computations. Besides lots of CPU, cloud computing providers such as GCP,&nbsp;Azure or AWS offer instances that provide big FPGAs and GPUs for on-cloud hardware acceleration. This means once the ROS graph is partially in the cloud, architects can use custom accelerators to reduce and optimize robotic computations. But tapping into all that power while aligned with common ROS and robotics development flows is non-trivial.
                     </p>
                     <p class="mb-3">
                         <strong class="azul">ROBOTCORE Cloud</strong> helps robotic architects bridge the gap and simplify the use of hardware acceleration in the cloud for ROS. It allows to easily build <i>IP cores</i> for robots that target cloud instances and automate build processes, while aligning to the unified APIs for cloud provisioning, set up, deployment and launch derived from the standard ROS 2 launch system.
                     </p>
                     <img src="img/robotcore+cloud+percpeption-grafo.svg" class="img-responsive img-robots-full d-none d-lg-block mb-1 pt-3">                     
                     <img src="img/robotcore-cloud-perception-mobile.svg" class="img-responsive mx-auto d-block d-lg-none mb-1 pt-3">

                 </div>
             </div>
         </div>
     </div>


     <!-- with Berkeley -->
     <div class="bg-negro py-5">
         <div class="container">
             <div class="row py-5">
                 <div class="col-12 col-lg-12 text-center text-lg-left">
                     <h2 class="f-blanco">In partnership with<br> cloud robotics experts</h2>
                     <p class="f-blanco mt-3 pb-3">
                         <strong>ROBOTCORE Cloud</strong> results from cooperating with researchers from the UC Berkeley Automation Lab.&nbsp;A leading center for research in robotics and automation sciences.
                     </p>
                     <a href="https://arxiv.org/pdf/2205.09778.pdf" class="btn btn-relleno">Read paper</a>
                 </div>
                 <!-- <div class="col-12 col-lg-5 offset-lg-1 my-auto text-center text-lg-left">
                     <img src="img/berkeley-logo-blanco.png" alt="" class="img-responsive">
                 </div> -->
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
                 <strong>ROBOTCORE Cloud</strong> is served by seasoned ROS developers and for ROS development.
                         It ships as a complement to ROBOTCORE, a one-stop shop for hardware acceleration in robotics. ROBOTCORE Cloud includes
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

             <!-- ORB-SLAM2 Node  -->
             <div class="row" style="border-bottom: 0 !important; padding: 0em 0 0em 0;">
                 <div class="col-lg-12 col-xl-4">
                     <h3>ROS 2 NODES</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             ORB-SLAM2 Simultaneous Localization and Mapping (SLAM) Node runtime </strong>(s)
                         <br> (<i style="font-size:0.8rem">Measured the mean per-frame runtime obtained from the ORB-SLAM2 Node while running in two scenarios: 1) <span style="color:white">Default ROS 2</span> running on the edge with an Intel NUC with an Intel® Pentium® Silver J5005 CPU @ 1.50 GHz with 2 cores enabled and with a 10 Mbps network connection and 2) <span style="color:#4d4bfb">ROBOTCORE® Cloud</span> running in the cloud with a 36-core cloud computer provisioned.</i>)
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
                     <h3>OTHER</h3>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p> <strong>
                             Grasp Planning with Dex-Net compute runtime </strong>(s)
                         <br> (<i style="font-size:0.8rem">Measured the mean compute runtime obtained over 10 trials while using a a Dex-Net Grasp Quality Convolutional Neural Network to compute grasps from raw RGBD image observations. Two scenarios are considered: 1) <span style="color:white">Edge</span> - running on the edge with an Intel NUC with an Intel® Pentium® Silver J5005 CPU @ 1.50 GHz with 2 cores enabled and with a 10 Mbps network connection and 2) <span style="color:white">ROBOTCORE® Cloud</span> - the same edge machine to collect raw image observations sent to a cloud computer equiped with an Nvidia Tesla T4 GPU.
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
                     <p> <strong>Grasp Planning speedup</strong> - Dex-Net computation total runtime (including network)<br></p>
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
                         <br> (<i style="font-size:0.8rem">Measuring the mean compute runtime while running multi-core motion planners from the Motion Planning Templates (MPT) on reference planning problems from the Open Motion Planning Library (OMPL). Two scenarios are considered: 1) <span style="color:white">Edge</span> - running on the edge with an Intel NUC with an Intel® Pentium® Silver J5005 CPU @ 1.50 GHz with 2 cores enabled and with a 10 Mbps network connection and 2) <span style="color:white">ROBOTCORE® Cloud</span> - the same edge offloads computations to a 96-core cloud computer.
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
                     <p> <strong>Motion planning speedup</strong> - Motion Planning Templates (MPT) compute runtime (including network)<br></p>
                 </div>
                 <div class="col-lg-6 col-xl-4">
                     <p><strong style="color:#4d4bfb;">28.9x</strong></p>
                 </div>
             </div>

             <!--  -->
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
         /*jQuery(document).ready(function() {
      jQuery('.get-down-btn').click(function(e) {
        e.preventDefault();

        jQuery('html, body').animate({
          scrollTop: jQuery('#our-duty-home').offset().top
        }, 500);
      });
    });*/
     </script>

     <script>
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
                             label: function(context) {
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
                             label: function(context) {
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


         const dexnet = new Chart(document.getElementById('dexnet'), config_dexnet);
         const mpt = new Chart(document.getElementById('mpt'), config_mpt);

         let orblslamnode = barplot_2(0.22, 0.89, 'ROBOTCORE® Cloud (cloud)', 'Default ROS 2 (edge)', 'Mean Node runtime (s)',
             'orblslamnode', color = "white")
     </script>
 </body>

 </html>