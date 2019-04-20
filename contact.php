<!doctype html>
<html lang="en">
  <head>
    <title>Yves Charlesworth</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


            <header role="banner">
              <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container">
                  <a class="navbar-brand" href="index.html">Yves<span>Charlesworth</span></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
                      <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="news.html">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                      </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item cta-btn">
                        <a class="nav-link" href="contact.html">Start Today</a>
                      </li>
                    </ul>

                  </div>
                </div>
              </nav>
            </header>
            <!-- END header -->

    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/about_3.jpeg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Contact</h1>

            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->

    <section class="section element-animate">
      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Get In Touch</h2>
              <span class="back-text">Contact</span>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-6" >
                <form action="#" id="form" method="post" name="form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <label for="name">Name</label>
                        <input type="text" name="vname" id="name" class="form-control ">
                        </div>
                        <div class="col-md-6 form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="sub" id="phone" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                        <label for="email">Email</label>
                        <input type="email" name="vemail" id="email" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                        <label for="message">Write Message</label>
                        <textarea name="msg" id="message" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input id="send" name="submit" type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                    <div class="row">
                            <h3>
                            <?php
                                if(isset($_POST["submit"])){
                                // Checking For Blank Fields..
                                if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
                                echo "Fill All Fields..";
                                }else{
                                // Check if the "Sender's Email" input field is filled out
                                $email=$_POST['vemail'];
                                // Sanitize E-mail Address
                                $email =filter_var($email, FILTER_SANITIZE_EMAIL);
                                // Validate E-mail Address
                                $email= filter_var($email, FILTER_VALIDATE_EMAIL);
                                if (!$email){
                                echo "Invalid Sender's Email";
                                }
                                else{
                                $subject = 'Dietetic Inquiry';
                                $message = 'Phone: '. $_POST['sub']. '\n Message: '.$_POST['msg'];
                                $headers = 'From:'. $email; // Sender's Email
                                // Message lines should not exceed 70 characters (PHP rule), so wrap it
                                $message = wordwrap($message, 70);
                                // Send Mail By PHP Mail Function
                                mail("casey.chicago@hotmail.com", $subject, $message, $headers);
                                echo "Your mail has been sent successfuly ! Thank you for your feedback";
                                }
                                }
                                }
                                ?>
                                </h3>
                        </div>
                    </div>
            </div>
       

          
          

          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Contact Details</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>Melbourne, Australia</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>042 238 2302</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>ycharlesworth@hotmail.com</span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>


    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Individualised care plans based on Medical Nutrition Therapy to meet YOUR needs.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <h3>Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block">
                <span class="d-block">Location:</span>
                <span class="text-white">Melbourne, Australia</span></li>
              <li class="d-block"><span class="d-block">Telephone:</span><span class="text-white">042 238 2302</span></li>
              <li class="d-block"><span class="d-block">Email:</span><span class="text-white">ycharlesworth@hotmail.com</span></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">

          </div>
        </div>
        <div class="row">
            <div class="col-12 text-md-center text-left">
                <p>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Casey Charlesworth</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
              </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <script src="js/main.js"></script>

    
  </body>
</html>
