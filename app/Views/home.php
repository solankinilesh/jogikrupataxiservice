<?php echo $this->extend('templates/layout'); ?>

<?php echo $this->section('content'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-between">
            <div class="banner-content col-lg-6 col-md-6 ">
                <h6 class="text-white ">Need a ride? just call</h6>
                <h1 class="text-uppercase">
                    <?php echo config('AppConfig')->mobile; ?>
                </h1>
                <p class="pt-10 pb-10 text-white">
                    Whether you enjoy city breaks or extended holidays in the sun, you can always improve your travel experiences by staying in a small.
                </p>
                <a href="tel:<?php echo config('AppConfig')->prefixMobile; ?>" class="primary-btn text-uppercase">Call for taxi</a>
            </div>
            <div class="col-lg-4  col-md-6 header-right">
                <h4 class="pb-30">Book Your taxi Online!</h4>
                <?php $validation = \Config\Services::validation(); ?>
                <form action="<?php echo site_url('booking'); ?>" method="post" class="form">
                    <?php echo csrf_field(); ?>
                    <div class="from-group">
                        <input class="form-control txt-field" type="text" name="name" value="<?php echo old('name'); ?>" required placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
                        <input class="form-control txt-field" type="tel" name="phone" value="<?php echo old('phone'); ?>" required placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
                        <input class="form-control txt-field" type="text" name="from_destination" value="<?php echo old('from_destination'); ?>" required placeholder="From Destination" onfocus="this.placeholder = ''" onblur="this.placeholder = 'From Destination'">
                        <input class="form-control txt-field" type="text" name="to_destination" value="<?php echo old('to_destination'); ?>" required placeholder="To Destination" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To Destination'">
                    </div>

                    <div class="form-group">
                        <div class="input-group dates-wrap">
                            <input id="datepicker2" name="date" readonly class="dates form-control" required value="<?php echo old('date'); ?>"  placeholder="Date & time" type="text">
                            <div class="input-group-prepend">
                                <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                         <!-- reCAPTCHA -->
                         <div class="g-recaptcha"
                                        data-sitekey="<?php echo getenv('GOOGLE_RECAPTCHA_SITEKEY'); ?>"
                                ></div>

                                <!-- Error -->
                                <?php if ($validation->getError('g-recaptcha-response')) {?>
                                        <div class='text-danger mt-2'>
                                                * <?php echo $validation->getError('g-recaptcha-response'); ?>
                                        </div>
                                <?php }?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default btn-lg btn-block text-center text-uppercase">Make reservation</button>
                    </div>
                </form>
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
                <img class="img-fluid" src="<?php echo base_url('img/somnath-places.jpg'); ?>" alt="">
            </div>
            <div class="col-lg-6 about-right">
                <h1>Places to see in Somnath</h1>
                <h4>The shiva linga in Somnath Temple is believed to be one of the 12 jyotirlingas in India</h4>
                <p>
                    <li>Somnath Temple</li>
                    <li>Bhalka Tirth</li>
                    <li>Gita Mandir</li>
                    <li>Triveni Sangam</li>
                    <li>Shree Ram Mandir</li>
                    <li>And other beautiful places.</li>
                </p>
                <a class="text-uppercase primary-btn" href="https://www.gujarattourism.com/saurashtra/gir-somnath/somnath-temple.html">Get Details</a>
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

<!-- Start services Area -->
<?php
echo view('_services');
?>
<!-- End services Area -->

<!-- Start image-gallery Area -->
<section class="image-gallery-area section-gap">
    <div class="container">
        <div class="row section-title">
            <h1>Image Gallery that we like to share</h1>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 single-gallery">
                <a href="<?php echo base_url('img/g1.jpg'); ?>" class="img-gal"><img class="img-fluid" src="img/g1.jpg" alt=""></a>
                <a href="<?php echo base_url('img/g4.jpg'); ?>" class="img-gal"><img class="img-fluid" src="img/g4.jpg" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="<?php echo base_url('img/g2.jpg'); ?>" class="img-gal"><img class="img-fluid" src="img/g2.jpg" alt=""></a>
                <a href="<?php echo base_url('img/g5.jpg'); ?>" class="img-gal"><img class="img-fluid" src="img/g5.jpg" alt=""></a>
            </div>
            <div class="col-lg-4 single-gallery">
                <a href="<?php echo base_url('img/g3.jpg'); ?>" class="img-gal"><img class="img-fluid" src="img/g3.jpg" alt=""></a>
                <a href="<?php echo base_url('img/g6.jpg'); ?>" class="img-gal"><img class="img-fluid" src="img/g6.jpg" alt=""></a>
            </div>
        </div>
    </div>
</section>
<!-- End image-gallery Area -->

<!-- Start reviews Area -->
<section class="reviews-area section-gap">
    <div class="container">
        <div class="row section-title">
            <h1>Client’s Reviews</h1>
            <p>Who are in extremely love with eco friendly system.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Ankita Gaikwad, Pune, Maharashtra</h4>
                    <p>
                        The service was excellent- thankyou. My driver was waiting at arrival for me with clear sign. He introduced himself, was very polite and friendly and drove me without delay. I will definitely use your service again. Your service , and reliability , made a long stressful journey end positively. Everything went perfectly! I will be pleased to recommend this service to my family and friends.
                    </p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Priya Gupta, Diu</h4>
                    <p>
                        We hired the taxi services from Jogi krupa taxi service for a week during our diu trip. The vehicle provided was a good one and our driver Prakash Goswami was very helpful and a reliable person. The pricing for our week long trip for places nearby was reasonable amount. I would definitely hired their services if I plan any further visit to any other place. The support was very nice and polite. Best wishes.
                    </p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-review">
                    <h4>Rahul, ahmedabad</h4>
                    <p>
                        Booked a cab for my family and they were happy with the service and I am very appreciative of all of your support and help with this. Driver was very cooperative and helpful. We’re satisfied. Your website was clear and easy accessible also all calls were answered immediately. We are happy with the service provided and will definitely use it again if required. And also recommend it to my friends and colleagues.
                    </p>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End reviews Area -->
<?php echo $this->endSection(); ?>