
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>The Muscle Studio</title>
<!--
si
TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <?php
  $con=mysqli_connect("localhost","root","","gym_project")or die("Database Error"); 
 ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">The Muscle <em> Studio</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#abt">About</a></li>
                            <li class="scroll-to-section"><a href="#features">Services</a></li>
                            <li class="scroll-to-section"><a href="#eq">Equipmentes</a></li>                           
                            <li><a href="login.php">Admin Login</a></li>
                            <li><a href="own_login.php">Owner Login</a></li>
                        </ul>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/gym-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>work harder, get stronger</h6>
                <h2>easy with our <em>gym</em></h2>
               
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
 <section class="section" id="abt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Classes</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="">First Training Class</a></li>
                  <li><a href='#tabs-2'><img src="assets/images/tabs-first-icon.png" alt="">Second Training Class</a></a></li>
                  <li><a href='#tabs-3'><img src="assets/images/tabs-first-icon.png" alt="">Third Training Class</a></a></li>
                  <li><a href='#tabs-4'><img src="assets/images/tabs-first-icon.png" alt="">Fourth Training Class</a></a></li>
                  <div class="main-rounded-button"><a href="#">View All Schedules</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/training-image-01.jpg" alt="First Class">
                    <h4>First Training Class</h4>
                    <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/training-image-02.jpg" alt="Second Training">
                    <h4>Second Training Class</h4>
                    <p>Integer dapibus, est vel dapibus mattis, sem mauris luctus leo, ac pulvinar quam tortor a velit. Praesent ultrices erat ante, in ultricies augue ultricies faucibus. Nam tellus nibh, ullamcorper at mattis non, rhoncus sed massa. Cras quis pulvinar eros. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/training-image-03.jpg" alt="Third Class">
                    <h4>Third Training Class</h4>
                    <p>Fusce laoreet malesuada rhoncus. Donec ultricies diam tortor, id auctor neque posuere sit amet. Aliquam pharetra, augue vel cursus porta, nisi tortor vulputate sapien, id scelerisque felis magna id felis. Proin neque metus, pellentesque pharetra semper vel, accumsan a neque.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <img src="assets/images/training-image-04.jpg" alt="Fourth Training">
                    <h4>Fourth Training Class</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean ultrices elementum odio ac tempus. Etiam eleifend orci lectus, eget venenatis ipsum commodo et.</p>
                    <div class="main-button">
                        <a href="#">View Schedule</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        
                        <img src="assets/images/line-dec.png" alt="waves">
                        
                    </div>
                </div>

                <?php    
      $res2=mysqli_query($con,"SELECT * FROM gym_service ");
      $a=0;
      while($row2=mysqli_fetch_row($res2))
      {
                echo'<div class="col-lg-12">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>'.$row2[1].'</h4>
                                <p>
                                    '.$row2[2].'
                                </p>
                                
                            </div>
                        </li>
                       
                    </ul>
                </div>';
            }

                ?>



            
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

  

    <!-- ***** Our Classes Start ***** -->
   
    <!-- ***** Our Classes End ***** -->
    

    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="eq">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Equipments</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        
                    </div>
                </div>
            </div>
            <div class="row">

                <?php    
      $res=mysqli_query($con,"SELECT * FROM gym_equip");
      $a=0;
      while($row=mysqli_fetch_row($res))
      {
                echo'<div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="owner/'.$row[4].'" alt="" style="150px;width:150px">
                        </div>
                        <div class="down-content">
                            <h4 >'.$row[1].'</h4>
                            <p style="color:blue">Quantity - '.$row[2].'.</p>
                           
                        </div>
                    </div>
                </div>';
            }
            ?>

               
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
   
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2020 Training Studio
                    
                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a><br>

                Distributed by <a rel="nofollow" href="https://themewagon.com" class="tm-text-link" target="_blank">ThemeWagon</a>
                
                </p>
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>