<!DOCTYPE html>
<html lang="<?php echo config('App')->defaultLocale; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title><?php echo $page_title; ?> | <?php echo config('AppConfig')->siteName; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo csrf_meta(); ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.ico">
    <!-- Meta Description -->
    <meta name="description" content="<?php echo $meta_description; ?>">
    <!-- Meta Keyword -->
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <!-- meta character set -->
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/linearicons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/main.css'); ?>">
    <!-- reCAPTCHA JS-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <header id="header">
        <div class="header-top">
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <a href="<?php echo site_url('/'); ?>"><img width="250" src="<?php echo base_url('img/logo.png'); ?>" alt="logo" title="<?php echo config('AppConfig')->siteName; ?>" /></a>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="<?php echo site_url('/'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('/services'); ?>">Services</a></li>
                        <li><a href="<?php echo site_url('/gallery'); ?>">Gallery</a></li>
                        <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->


    <!-- Start Page Content -->
    <?php echo $this->renderSection('content'); ?>


    <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-footer-widget">
                            <h6>About us</h6>
                            <p><?php echo config('AppConfig')->siteName; ?>, cab services provides cab rental services in all major cities of Gujarat. Also taxi hire services available at most popular tourist places of Gujarat state of India.</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Features</h6>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Resources</h6>
                            <ul>
                                <li><a href="#">Guides</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Experts</a></li>
                                <li><a href="#">Agencies</a></li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <form action="<?php echo site_url('newsletter'); ?>" method="post" class="form-inline">
                                <input class="form-control" name="email"  placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                <button type="submit" class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                            </form>
                        </div>
                    </div>
                    <p class="mt-80 mx-auto footer-text col-lg-12">
Copyright &copy;<?php echo date('Y'); ?> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://solankinilesh899.wixsite.com/solankinilesh" target="_blank">Nilesh Solanki</a>
                    </p>
                </div>
            </div>
            <img class="footer-bottom" src="<?php echo base_url('img/footer-bottom.png'); ?>" alt="footer_bottom">
        </footer>
        <!-- End footer Area -->

        <script src="<?php echo base_url('js/vendor/jquery-2.2.4.min.js'); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('js/vendor/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/easing.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/hoverIntent.js'); ?>"></script>
        <script src="<?php echo base_url('js/superfish.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/jquery.magnific-popup.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/jquery-ui.js'); ?>"></script>
        <script src="<?php echo base_url('js/jquery.nice-select.min.js'); ?>"></script>
        <script src="<?php echo base_url('js/mail-script.js'); ?>"></script>
        <script src="<?php echo base_url('js/main.js'); ?>"></script>
    </body>
</html>