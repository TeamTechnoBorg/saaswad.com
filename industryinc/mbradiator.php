<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Saaswad Heat Transfer And Engineering Pvt Ltd</title>
    <meta charset="UTF-8" />
    <meta name="description" content="SAASWAD.com" />
    <meta name="keywords" content="industry, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link href="img/logo_saswadn.png" rel="shortcut icon" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96171225-3">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-96171225-3');
    </script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .hover1:hover {
            color: white;
        }

        .hover1 {
            color: #718090;
        }

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

        .ptop {
            display: none;
        }

        @media (min-width: 992px) {
            .ptop {
                display: block;
                padding-top: 80%;
            }
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <a href="#" id="scroll" style="display: none;"><span></span></a>


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
            <a href="main.html" class="site-logo">
                <img src="img/logo_saswad.png" height="80" alt="" />

                <!-- <span style="color: black;">Saaswad</span> -->
            </a>
            <div class="header-right">
                <div class="header-info-box">
                    <div class="hib-icon">
                        <img src="img/icons/phone.png" alt="" class="" />
                    </div>
                    <div class="hib-text">
                        <h6>+91 8299638409</h6>
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
                    <li><a href="main.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li>
                        <a href="products.php">Products</a>
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
        background: 
          url(img/products_cover.jpeg);
        background-size: cover;
      ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="ptop" style="color: black; font-weight:bolder;">Product/Mechanically</h2>
                    <!-- <p>
             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
             orci purus, sodales in est quis, blandit sollicitudin est. Nam
             ornare ipsum ac accumsan auctor.
           </p> -->
                    <!-- <a href="#expertise" class="site-btn">Know More</a> -->
                </div>
                <div class="col-lg-4" style="text-align: center;">
                    <h2 class="ptop" style="color: black; font-weight:bolder;padding-left:20px">Bonded Radiator</h2>
                </div>
                <div class="col-lg-4" style="text-align: center;">
                    <img src="img/newimage6.png" alt="" height="350px">
                </div>

            </div>
        </div>
    </section>
    <!-- Page top section end  -->

    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-text">

                        <h2 style="font-weight: bolder;">Mechanically Bonded Radiator</h2>

                        <p style="
                  font-size: 1.25rem;
                  font-family: Cambria, Cochin, Georgia, Times,
                    'Times New Roman', serif;
                ">
                            With required emission specifications,we at SAASWAD produce radiators that are the most efficient and optimised design for a compact frontal area. We have proven products for non automotive applications. <br>
                            <ul style="list-style-type: disc; font-size: 1.25rem;
                  font-family: Cambria, Cochin, Georgia, Times,
                    'Times New Roman', serif;color:black;padding-left:20px;">
                                <li>Material: Aluminum & Copper Brass</li>
                                <li>Design Types Fin & Tube/Bar & Plate</li>
                                <li>Industrial Power Generation Engines :125 KVA to 1250 KVA</li>
                                <li>Locomotive Engine : 1350 HP TO 4500 HP Radiators</li>
                            </ul>
                        </p>

                        <div class="about-sign">
                            <!-- <div class="sign">
                  <img src="img/sign.png" alt="" />
                </div> -->
                            <!-- <div class="sign-info">
                  <h5>Mr. Rai Ashwani Kumar</h5>
                  <span>Managing Director</span>
                </div> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: red; border-color: red;">
                                Get Quote
                            </button>
                            <a href="img/MECHANICAL BONDED RADIATOR.pdf" download class="btn btn-primary" style="background-color: black; border-color:black;">Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Interested in Mechanically Bonded Radiator?
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    $Msg = "";

                    if (isset($_GET['error'])) {
                        $Msg = " Please Fill in the Blanks ";
                        echo '<div class="alert alert-danger">' . $Msg . '</div>';
                        echo "<script>alert(' Please Fill in the Blanks ')</script>";
                    }

                    if (isset($_GET['success'])) {

                        $Msg = " Your Message Has Been Sent ";
                        echo '<div class="alert alert-success">' . $Msg . '</div>';
                        echo "<script>alert(' Your Message Has Been Sent ')</script>";
                    }

                    ?>
                    <form action="process6.php" method="post">
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

    <section class="features-section spad" style="
        min-height: 100%;
      
         background-color: black;

        
      ">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-12 text-center" style="margin-bottom: 80px">
            <h2 style="color: white">
              Some of the Prestigious Industries We Serve
            </h2>
          </div> -->

                <div class="col-lg-3 col-md-12">
                    <div class="feature-box">
                        <img src="img/heat_exchangers.jpg" alt="" height="200px" />
                        <div class="fb-text">
                            <h5>HEAT EXCAHNGERS</h5>
                            <p>
                                We at SAASWAD have proven capabilities and expertise ..
                            </p>
                            <a href="mradiator.php" class="site-btn">Know more</a>


                            <!-- <a href="" class="fb-more-btn">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="feature-box">
                        <img src="img/oilcooler.JPG" alt="" height="200px" />
                        <div class="fb-text">
                            <h5>OIL COOLERS</h5>
                            <p>
                                We at Saaswad , make oil coolers of aluminium ..
                            </p>
                            <a href="acooler.php" class="site-btn">Know more</a>

                            <!-- <a href="" class="fb-more-btn">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="feature-box">
                        <img src="img/14.jpg" alt="" height="200px" />
                        <div class="fb-text" style="padding-bottom: 43px">
                            <h5>CHARGED AIR COOLERS</h5>
                            <p>
                                SAASWAD’S range of Charge air coolers (CAC)..
                            </p>
                            <a href="tacooler.php" class="site-btn">Know more</a>

                            <!-- <a href="" class="fb-more-btn">Read More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="feature-box">
                        <img src="img/radiator.JPG" alt="" height="200px" />
                        <div class="fb-text" style="padding-bottom: 43px">
                            <h5>RADIATORS</h5>
                            <p>
                                We at SAASWAD produce radiators ...
                            </p>
                            <a href="radiator.php" class="site-btn">Know more</a>



                            <!-- <a href="" class="fb-more-btn">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- /.container -->
    <!-- Footer section -->
    <div class="footer-buttom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2 p-0">
                    <ul class="footer-menu text-center">
                        <li><a href="main.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="products.php">Products</a></li>
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
                            products and providing complete products through technical
                            expertise and after-sales service to our customers.
                        </p>
                        <div class="footer-social">
                            <a href="mailto: info@saaswad.com"><i class="fa fa-envelope"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
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
                                <a class="hover1" href="./radiator.php"> Radiators</a>
                            </li>
                            <li>
                                <a class="hover1" href="./mradiator.php">Custom designed heat exchangers</a>
                            </li>
                            <li>
                                <a class="hover1" href="./acooler.php">Oil coolers and condensers</a>
                            </li>
                            <li>
                                <a class="hover1" href="./tacooler.php">Charged Air Cooler</a>
                            </li>
                            <li>
                                <a class="hover1" href="./mbradiator.php">Mechanically Bonded Radiators</a>
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
                            <li>
                                <a class="hover1" href="./unit3.html">Varanasi Unit</a>
                            </li>
                            <li>
                                <a class="hover1" href="./unit4.html">Pune Unit</a>
                            </li>
                            <li>
                                <a class="hover1" href="./coorporate_office.html">Coorporate Ofiice</a>
                            </li>
                            <!-- <li><a href="">Oil Extractions</a></li>
                <li><a href="">About our Work</a></li> -->
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
                                    +91 8299638409<br />
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
                                <a class="hover1" href="http://technoborg.in/">Team Technoborg<sup>&copy;</sup></a>
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
    <script type="text/JavaScript">
        //Script courtesy of BoogieJack.com
      var message="NoRightClicking";
      function defeatIE() {if (document.all) {(message);return false;}}
      function defeatNS(e) {if
      (document.layers||(document.getElementById&&!document.all)) {
      if (e.which==2||e.which==3) {(message);return false;}}}
      if (document.layers)
      {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
      else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
      document.oncontextmenu=new Function("return false")
    </script>

</body>

</html>