<!doctype html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-9YLJ82GLCN"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-9YLJ82GLCN', {
          'page_path': location.pathname + location.search + location.hash
        });
        </script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Wanderr - Stay Connected</title>
        <meta name="description" content="Wanderr is the eSIM marketplace of the future." />

        <!--Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

        <!--vendors styles-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap CSS / Color Scheme -->
        <link rel="stylesheet" href="css/default.css" id="theme-color">

        <!-- ReCaptcha stuff -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
          function onSubmit(token) {
            document.getElementById("contactForm").submit();
          }
        </script>
        
    </head>
    <body data-spy="scroll" data-target="#ebook-navbar" data-offset="0">

        <!--navigation-->
        <nav class="navbar navbar-expand-md navbar-light fixed-top sticky-navigation" id="ebook-navbar">
            <a class="navbar-brand" href="./">
                Wanderr
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span data-feather="menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="./#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="./#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="./#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="./#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="./#faq">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <a class="btn btn-primary" href="./plans#buy-navbar">
                        Explore plans
                    </a>
                </form>
            </div>
        </nav>

        <!--hero header-->
        <section class="pt-7 pt-md-5" id="home">
            <div class="container">
                <div class="row vh-md-100">
                    <div class="col-md-9 my-md-auto mb-5 mb-md-0 text-center text-md-left">
                        <h1 class="mt-2">We're almost ready!</h1>
                        <p class="lead mb-4">Wanderr is currently in a limited beta program. We&apos;re actively working on getting our product ready for general availability. Please drop
                          us your email to join our waitlist and we'll reach out once we&apos;re ready to go!</p>

			<?php
                          if(isset($_POST['email'])){
                            $email=$_POST['email'];
                          }
                          if(isset($_POST['g-recaptcha-response'])){
                            $captcha=$_POST['g-recaptcha-response'];
                          }

                          if($captcha) {

                            $secretKey = "";
                            $ip = $_SERVER['REMOTE_ADDR'];
                            // post request to server
                            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
                            $response = file_get_contents($url);
                            $responseKeys = json_decode($response,true);

                          // should return JSON with success as true
                            if($responseKeys["success"] && $email) {
			      file_put_contents("emails.txt", filter_var(trim($_POST["email"]), FILTER_SANITIZE_STRING) . "\r\n", FILE_APPEND);
		        ?>

                        <div class="form-submitted">Thanks for submitting your info!</div>

	                <?php
                            } else {
                        ?>

                        <div class="form-error">There was an issue capturing your info.</div>

                        <?php
                            }
                          }
                        ?>

                        <form id="contactForm" method="POST" action="./contact">
                          <input class="share-email" type="text" placeholder="Email" name="email" id="email" /><br /><br />
                          <button href="#" id="submitButton" data-sitekey="6Ld70-seAAAAADuLajmaciWoV5rEsNmRC4FlvtUf" data-callback="onSubmit" class="g-recaptcha btn btn-primary d-inline-flex flex-row align-items-center">
                              Submit
                          </button>
                        </form>
                    </div>
                    <div class="col-md-3 my-md-auto">
                    </div>
                </div>
            </div>
        </section>

        <!--footer-->
        <footer class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>About Wanderr</h5>
                        <p class="text-muted mt-4">
                            Founded in 2020, Wanderr was created by five jetsetting Wharton MBA students with a mission to
                            offer cheap and easy data connectivity to travel aficionados all across the world.
                        </p>
                        <ul class="list-inline social social-sm mt-4">
                            <li class="list-inline-item">
                                <a href="#facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#googleplus"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#linkedin"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <h5>Useful Links</h5>
                        <ul class="list-unstyled mt-4">
                            <li><a href="./">About</a></li>
                            <li><a href="#privacy">Privacy Policy</a></li>
                            <li><a href="#tos">Terms of Service</a></li>
                            <li><a href="#blog">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 text-center">
                        <p class="text-white">
                            <span data-feather="message-circle" width="40" height="40"></span>
                        </p>
                        <h5 class="text-capitalize">Need Help?</h5>
                        <p class="text-muted mt-4">
                            Send us an email at <a href="#contact-support-footer">support@simple.sim</a> if you have any questions. We'll help you out.
                        </p>
                    </div>
                </div>
                <hr class="my-5"/>
                <div class="row">
                    <div class="col-12 text-muted text-center">
                        &copy; 2020 Wanderr - All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>

        <!--scroll to top-->
        <div class="scroll-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.0/feather.min.js"></script>
        <script src="js/scripts.js"></script>

        <!-- LiveReload -->
        <!-- <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->
    </body>
</html>
