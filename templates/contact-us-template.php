<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>
<header class="ct-pageHeader">
    <section class="ct-backgroundContent ct-u-displayTableVertical innerPageBG" data-type="pattern" data-height="520" data-bg-image="<?php bloginfo('template_directory'); ?>/images/2.jpg" data-bg-image-mobile="<?php bloginfo('template_directory'); ?>/images/2.jpg">
        <div class="inner ct-u-displayTableCell ct-pageHeader--bottomRight">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="ct-pageHeader-title">
                            <a href="<?php home_url( '/' )?>/support">
                                <span class="ct-js-typingAnimation" data-type="typingAnimation" data-animation-speed="2">
                                    Support KESPA
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<div class="ct-u-paddingTop30 ct-u-paddingBottom80">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="ct-titleBox text-uppercase">get in touch with us</h5>
                    <p class="ct-u-paddingTop30 ct-u-size16">We promise to get back to you in 48h or even less:</p>
                    <div class="row">
                        <div class="col-md-9 col-sm-10">
                            <div class="successMessage alert alert-success ct-u-marginTop30" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Thank You!
                            </div>
                            <div class="errorMessage alert alert-danger ct-u-marginTop30" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Ups! An error occured. Please try again later.
                            </div>
                        </div>
                    </div>
                    <form role="form" action="./assets/form/send.php" method="post" class="ct-u-paddingBottom30 contactForm validateIt" data-hide-form="false" data-email-subject="Contact Form" data-show-errors="true">
                        <div class="row">
                            <div class="col-md-5 col-sm-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="field[name]" placeholder="Your Name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-sm-8">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="field[email]" placeholder="Your Email" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-sm-10">
                                <textarea class="form-control" rows="7" name="field[message]" placeholder="Your Message" required="required"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-lg ct-u-marginTop30">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h5 class="ct-titleBox text-uppercase">Subscribe to our newsletter</h5>
                    <p class="ct-u-paddingTop30 ct-u-size16">Be the first to receive our latest news!</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="successMessage alert alert-success ct-u-marginTop20" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Thank You!
                            </div>
                            <div class="errorMessage alert alert-danger ct-u-marginTop20" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                Ups! An error occured. Please try again later.
                            </div>
                        </div>
                    </div>
                    <form action="./assets/form/send.php" method="post" class="contactForm validateIt" data-hide-form="false" data-email-subject="Contact Form" data-show-errors="true">
                        <div class="row">
                            <div class="col-md-10 col-sm-8">
                                <input class="form-control" placeholder="Your Email Address" required="" type="email" name="field[emailSub]">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="ct-u-paddingTop10">
                                    <button class="btn btn-primary btn-xs" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      

<?php get_footer(); ?>