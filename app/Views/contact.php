<?php echo $this->extend('templates/layout'); ?>

<?php echo $this->section('content'); ?>
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us
                </h1>
                <p class="text-white link-nav"><a href="<?php echo site_url('/'); ?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo site_url('contact'); ?>"> Contact Us</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <?php
            // Display Response
            if (session()->has('message')) {
                ?>
                    <div class="alert <?php echo session()->getFlashdata('alert-class'); ?>">
                        <?php echo session()->getFlashdata('message'); ?>
                    </div>
            <?php
            }
?>
            <div class="col-lg-4 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?php echo config('AppConfig')->address; ?></h5>
                        <p>
                        <?php echo config('AppConfig')->street_address; ?>
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?php echo config('AppConfig')->mobile; ?></h5>
                        <p>Call for inquiry</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5><?php echo config('AppConfig')->siteEmail; ?></h5>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
            <?php $validation = \Config\Services::validation();

?>
                <form class="form-area text-right" action="<?php echo site_url('contact-request'); ?>"  method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" type="text"  required=""  value="<?php echo old('name'); ?>">
                            <!-- Error -->
                            <?php echo $validation->getError('name'); ?>
                            <?php if ($validation->getError('name')) {?>
                                <div class='text-danger mt-2'>
                                    * <?php echo $validation->getError('name'); ?>
                                </div>
                            <?php }?>
                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-4">
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
                            <button type="submit" class="genric-btn primary" style="float: right;">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End contact-page Area -->
<?php echo $this->endSection(); ?>