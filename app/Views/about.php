<?php echo $this->extend('templates/layout'); ?>

<?php echo $this->section('content'); ?>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    About Us
                </h1>
                <p class="text-white link-nav"><a href="<?php echo site_url('/'); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo site_url('about'); ?>"> About Us</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start home-about Area -->
<section class="home-about-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 about-left">
                <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
            <div class="col-lg-6 about-right">
                <h1>Globally Connected
                by Large Network</h1>
                <h4>Our Vision is to empower women from low-income groups to become changemakers and leaders in their communities, thereby contributing to nation-building.</h4>
                <p>We provide complete flexibility in choosing the cab that best suits your needs. From economy hatchbacks to tempo travellers for your extended family, we offer it all! We also ensure that our pricing policy is not only affordable but completely transparent - what you see is what you pay for and not a penny more.
                </p>
                <a class="text-uppercase primary-btn" href="<?php echo site_url('/'); ?>">Book now</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->
<?php echo $this->endSection(); ?>