<?php get_header(); ?>

<header class="ct-pageHeader">
    <section class="ct-backgroundContent ct-u-displayTableVertical" data-type="pattern" data-height="283" data-bg-image="<?php bloginfo('template_directory'); ?>/assets/images/content/header1.jpg" data-bg-image-mobile="./assets/images/content/header1.jpg">
        <div class="inner ct-u-displayTableCell ct-pageHeader--bottomRight">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="ct-pageHeader-title">
                            <span class="ct-js-typingAnimation" data-type="typingAnimation" data-animation-speed="2">Error 404 page</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<section class="ct-u-paddingBottom60 ct-backgroundContent" data-type="color" data-bg-color="#ffffff">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5 class="ct-titleBox text-uppercase ct-u-paddingTop40">
                    404 page
                </h5>
            </div>
        </div>
        <div class="row ct-u-paddingTop100 ct-u-paddingBottom40">
            <div class="col-sm-12">
                <div class="text-center">
                    <span class="ct-404error ct-u-colorMotive">
                        <span class="animated" data-fx="bounce" data-time="250">4</span>
                        <span class="animated" data-fx="bounce" data-time="300">0</span>
                        <span class="animated" data-fx="bounce" data-time="350">4</span>
                    </span>
                    <h4 class="text-uppercase animated ct-u-colorGrey" data-fx="fadeInUp" data-time="400">This page could not be found</h4>
                    <a onclick="goBack()" class="btn btn-primary ct-u-paddingTop10">Back to previous page</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>