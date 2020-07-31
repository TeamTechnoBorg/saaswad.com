<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>SAASWAD</title>
  <meta charset="UTF-8" />
  <meta name="description" content="SAASWAD.com" />
  <meta name="keywords" content="industry, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link href="img/logo_saswad.png" rel="shortcut icon" />

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/slicknav.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="css/style.css" />

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
    #scroll {
      z-index: 999;
      position: fixed;
      right: 10px;
      bottom: 10px;
      cursor: pointer;
      width: 50px;
      height: 50px;
      background-color: black;
      text-indent: -9999px;
      display: none;
      -webkit-border-radius: 60px;
      -moz-border-radius: 60px;
      border-radius: 60px;
    }

    #scroll span {
      position: absolute;
      top: 50%;
      left: 50%;
      margin-left: -8px;
      margin-top: -12px;
      height: 0;
      width: 0;
      border: 8px solid transparent;
      border-bottom-color: #ffffff;
    }

    #scroll:hover {
      background-color: red;
      opacity: 1;
      filter: "alpha(opacity=100)";
      -ms-filter: "alpha(opacity=100)";
    }

    .bg-img {
      width: 100%;
      padding: 10% 0;
      background-size: cover;
      background-position: center;
      border: 1px solid;
    }
  </style>
</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <a href="#" id="scroll" style="display: none;"><span></span></a>
  <?php
  $Msg = "";
  if (isset($_GET['error'])) {
    $Msg = " Please Fill in the Blanks ";
    echo '<div class="alert alert-danger">' . $Msg . '</div>';
  }

  if (isset($_GET['success'])) {
    $Msg = " Your Message Has Been Sent ";
    echo '<div class="alert alert-success">' . $Msg . '</div>';
  }

  ?>

  <!-- Button trigger modal -->
  <button id="model-trigger" style="display: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
            Want to do business with us?
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="process1.php" method="post">
            <div class="form-group">
              <!-- <label for="exampleInputPassword1">Password</label> -->
              <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter Name" />
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputEmail1">Email address</label> -->
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" />
              <!-- <small id="emailHelp" class="form-text text-muted"
                  >We'll never share your email with anyone else.</small
                > -->
            </div>

            <!-- <div class="form-check">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >Check me out</label
                >
              </div> -->
            <button name="btn-send" style="background-color: red; border-color: red;" class="btn btn-primary">
              Submit
            </button>
          </form>
        </div>
        <!-- <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
      </div>
    </div>
  </div>
  <!-- Header section  -->
  <header class="header-section clearfix">
    <!-- <div class="header-top">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-6 text-md-right">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
      </div> -->
    <div class="site-navbar">
      <!-- Logo -->
      <a href="index.html" class="site-logo">
        <img src="img/logo_saswad.png" height="80" alt="" />
        <span style="color: black; font-size: large; font-weight: bolder;">Saaswad Heat Transfers Pvt Ltd</span>
        <!-- <span style="color: black;">Saaswad</span> -->
      </a>
      <div class="header-right">
        <div class="header-info-box">
          <div class="hib-icon">
            <img src="img/icons/phone.png" alt="" class="" />
          </div>
          <div class="hib-text">
            <h6>+91 9839837999</h6>
            <p>info@saaswad.com</p>
          </div>
        </div>
        <div class="header-info-box">
          <div class="hib-icon">
            <img src="img/icons/map-marker.png" alt="" class="" />
          </div>
          <div class="hib-text">
            <h6>Corporate Office-B-38/47 PR,Tulsipur</h6>
            <p>
              Mahmoorganj,Varanasi Uttar Pradesh,India-221010
            </p>
          </div>
        </div>
        <!-- <button class="search-switch"><i class="fa fa-search"></i></button> -->
      </div>
      <!-- Menu -->
      <nav class="site-nav-menu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About us</a></li>
          <li class="active">
            <a href="solutions.php">Products</a>
          </li>
          <li><a href="blog.html">Facilities</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Header section end  -->

  <!-- Page top section  -->
  <section class="page-top-section" style="
        background: linear-gradient(
            0deg,
            rgba(0, 0, 0, 0.3),
            rgba(0, 0, 0, 0.3)
          ),
          url(img/products_cover.jpg);
        background-size: cover;
      ">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h2>Our Products</h2>
          <!-- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
              orci purus, sodales in est quis, blandit sollicitudin est. Nam
              ornare ipsum ac accumsan auctor.
            </p> -->
          <a href="#expertise" class="site-btn">Know More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Page top section end  -->

  <!-- Services section  -->
  <section id="expertise" class="services-2-section spad">
    <div class="container">
      <div class="service-text">
        <h2>Our <span style="color: red;">Expertise</span></h2>
      </div>
      <div>
        <center><img src="img/our expertise.jpg" alt="" /></center>
      </div>

      <!-- <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="si-head">
                <div class="si-icon">
                  <img src="img/icons/cogwheel.png" alt="" />
                </div>
                <h5>Mechanical Engineering</h5>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                orci purus, sodales in est quis, blandit sollicitudin est.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="si-head">
                <div class="si-icon">
                  <img src="img/icons/helmet.png" alt="" />
                </div>
                <h5>Profesional Workers</h5>
              </div>
              <p>
                Quisque orci purus, sodales in est quis, blandit sollicitudin
                est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="si-head">
                <div class="si-icon">
                  <img src="img/icons/wind-engine.png" alt="" />
                </div>
                <h5>Green Energy</h5>
              </div>
              <p>
                Sodales in est quis, blandit sollicitudin est. Nam ornare ipsum
                ac accumsan auctor. Donec con-sequat arcu et commodo interdum.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="si-head">
                <div class="si-icon">
                  <img src="img/icons/pollution.png" alt="" />
                </div>
                <h5>Power Engineering</h5>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                orci purus, sodales in est quis, blandit sollicitudin est.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="si-head">
                <div class="si-icon">
                  <img src="img/icons/pumpjack.png" alt="" />
                </div>
                <h5>Oil & Lubricants</h5>
              </div>
              <p>
                Quisque orci purus, sodales in est quis, blandit sollicitudin
                est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="si-head">
                <div class="si-icon">
                  <img src="img/icons/light-bulb.png" alt="" />
                </div>
                <h5>Power & Energy</h5>
              </div>
              <p>
                Sodales in est quis, blandit sollicitudin est. Nam ornare ipsum
                ac accumsan auctor. Donec con-sequat arcu et commodo interdum.
              </p>
            </div>
          </div>
        </div> -->
    </div>
  </section>
  <!-- Services section end  -->

  <!-- Reserch section  -->
  <section class="reserch-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <ul class="nav nav-tabs reserch-tab-menu" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Radiators</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Mechanically Bonded Radiators</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Radiator, Oil cooler and AfterCoolers Assembly</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Turbo After Cooler</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="tab-content reserch-tab">
            <!-- single tab content -->
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
              <h2>
                Radiators
              </h2>
              <img src="img/11.jpg" alt="" width="500" />
              <a style="display: table-caption; margin-top: 10px;" class="site-btn" href="./radiator.html">
                Know more
              </a>
            </div>
            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
              <h2>
                Mechanically Bonded Radiators
              </h2>
              <img src="img/12.jpg" alt="" width="500" />
              <a style="display: table-caption; margin-top: 10px;" class="site-btn" href="./mradiator.html">
                Know more
              </a>
            </div>
            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
              <h2>
                Radiator, Oil cooler and AfterCoolers Assembly
              </h2>
              <img src="img/13.jpg" alt="" width="500" />
              <a style="display: table-caption; margin-top: 10px;" class="site-btn" href="./acooler.html">
                Know more
              </a>
            </div>
            <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
              <h2>
                Turbo After Cooler
              </h2>
              <img src="img/14.jpg" alt="" width="500" />
              <a style="display: table-caption; margin-top: 10px;" class="site-btn" href="./tacooler.html">
                Know more
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Reserch section end  -->

  <!-- Call to action section  -->
  <section class="cta-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 d-flex align-items-center">
          <h2>We produce or supply Goods, Services, or Sources</h2>
        </div>
        <div class="col-lg-3 text-lg-right">
          <a href="contact.php#contact-form" class="site-btn sb-dark">contact us</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Call to action section end  -->

  <!-- Footer section -->
  <div class="footer-buttom">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 order-1 order-lg-2 p-0">
          <ul class="footer-menu text-center">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About us</a></li>
            <li class="active"><a href="solutions.php">Products</a></li>
            <li><a href="blog.html">Facilities</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <div style="margin-bottom: 25px;">
              <img src="img/logo_saswadw.png" style="margin-right: 5px;" height="30" alt="" />
              <span class="fw-title">Saaswad</span>
            </div>
            <p>
              We introduce ourselves as one of the Leading Manufacturers of
              Industrial Radiators, Oil Coolers, Heat Exchangers and Charged
              Air Coolers in India. We are known for manufacturing quality
              products and providing complete solutions through technical
              expertise and after-sales service to our customers.
            </p>
            <div class="footer-social">
              <a href=""><i class="fa fa-envelope"></i></a>
              <a href=""><i class="fa fa-google"></i></a>
              <!-- <a href=""><i class="fa fa-dribbble"></i></a>
                <a href=""><i class="fa fa-behance"></i></a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-widget">
            <h2 class="fw-title">Our Products</h2>
            <ul>
              <li>
                <a href="./radiator.html" style="color: #718090;">
                  Radiators</a>
              </li>
              <li>
                <a href="./mradiator.html" style="color: #718090;">Mechanically Bonded Radiators</a>
              </li>
              <li>
                <a href="./acooler.html" style="color: #718090;">Radiator, Oil cooler and AfterCoolers Assembly</a>
              </li>
              <li>
                <a href="./tacooler.html" style="color: #718090;">Turbo After Cooler</a>
              </li>
              <!-- <li><a href="">Oil Extractions</a></li>
                <li><a href="">About our Work</a></li> -->
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-widget">
            <h2 class="fw-title">Our Facilities</h2>
            <ul>
              <li>Punching Machine</li>
              <li>Cnc Tube Bender 65CNC3XES( 3M), Hybrid</li>
              <li>Bending Machine</li>
              <li>CNC Vertical Machine Centre ( BMV 80 TC 20)</li>
              <li>Shearing Machine</li>
              <li>Oven</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-7">
          <div class="footer-widget">
            <h2 class="fw-title">Contact Us</h2>
            <div class="footer-info-box">
              <div class="fib-icon">
                <img src="img/icons/map-marker.png" alt="" class="" />
              </div>
              <div class="fib-text">
                <p>
                  B-38/47 PR,Tulsipur<br />
                  Mahmoorganj,Varanasi Uttar Pradesh,India-221010
                </p>
              </div>
            </div>
            <div class="footer-info-box">
              <div class="fib-icon">
                <img src="img/icons/phone.png" alt="" class="" />
              </div>
              <div class="fib-text">
                <p>
                  +91 9839837999<br />
                  info@saaswad.com
                </p>
              </div>
            </div>
            <!-- <form class="footer-search">
                <input type="text" placeholder="Search" />
                <button><i class="fa fa-search"></i></button>
              </form> -->
          </div>
        </div>
      </div>
    </div>
    <div class="footer-buttom">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-2 order-lg-1 p-0">
            <div class="copyright">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              | Saaswad Heat Transfer Private Limited
            </div>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 p-0">
            <ul class="footer-menu">
              <li>
                <a href="http://technoborg.in/">Made By - Team Technoborg</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer section end -->

  <!-- Search model -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here....." />
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/circle-progress.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    window.addEventListener("scroll", myFunction);

    function removeHandler() {
      window.removeEventListener("scroll", myFunction);
    }

    function myFunction() {
      const scrollable =
        document.documentElement.scrollHeight - window.innerHeight;
      const scrolled = window.scrollY;
      if (scrolled / scrollable >= 0.3) {
        document.getElementById("model-trigger").click();
        removeHandler();
      }
    }
  </script>
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
          $("#scroll").fadeIn();
        } else {
          $("#scroll").fadeOut();
        }
      });
      $("#scroll").click(function() {
        $("html, body").animate({
          scrollTop: 0
        }, 600);
        return false;
      });
    });
  </script>
</body>

</html>