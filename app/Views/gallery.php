<?= $this->extend('templates/layout') ?>

<?= $this->section('content') ?>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="ro  w d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Gallery
                </h1>
                <p class="text-white link-nav"><a href="<?= site_url('/') ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= site_url('gallery') ?>"> Gallery</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start image-gallery Area -->
<section class="image-gallery-area section-gap">
    <div class="container">
        <div class="row section-title">
            <h1>Image Gallery that we like to share</h1>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 single-gallery">
                <a href="img/g1.jpg" class="img-gal"><img class="img-fluid" src="img/g1.jpg" alt=""></a>
                <a href="img/g4.jpg" class="img-gal"><img class="img-fluid" src="img/g4.jpg" alt=""></a>
                <a href="img/g1.jpg" class="img-gal"><img class="img-fluid" src="img/g1.jpg" alt=""></a>
                <a href="img/g4.jpg" class="img-gal"><img class="img-fluid" src="img/g4.jpg" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="img/g2.jpg" class="img-gal"><img class="img-fluid" src="img/g2.jpg" alt=""></a>
                <a href="img/g5.jpg" class="img-gal"><img class="img-fluid" src="img/g5.jpg" alt=""></a>
                <a href="img/g2.jpg" class="img-gal"><img class="img-fluid" src="img/g2.jpg" alt=""></a>
                <a href="img/g5.jpg" class="img-gal"><img class="img-fluid" src="img/g5.jpg" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="img/g3.jpg" class="img-gal"><img class="img-fluid" src="img/g3.jpg" alt=""></a>
                <a href="img/g6.jpg" class="img-gal"><img class="img-fluid" src="img/g6.jpg" alt=""></a>
                <a href="img/g3.jpg" class="img-gal"><img class="img-fluid" src="img/g3.jpg" alt=""></a>
                <a href="img/g6.jpg" class="img-gal"><img class="img-fluid" src="img/g6.jpg" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- End image-gallery Area -->
<?= $this->endSection() ?>