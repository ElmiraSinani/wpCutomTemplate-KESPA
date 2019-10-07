<?php
/*
Template Name: Support Page
*/
?>

<?php get_header(); ?>  
<header class="ct-pageHeader">
    <section class="bgSupport ct-backgroundContent ct-u-displayTableVertical innerPageBG" data-type="pattern" data-height="350" data-bg-image="<?php bloginfo('template_directory'); ?>/images/2.jpg" data-bg-image-mobile="<?php bloginfo('template_directory'); ?>/images/2.jpg">
        <div class="container bgMediaSection">
            <div class="row marginB50 ct-u-marginTop50 theSpaceSection " >        
                <div class="col-md-8">
                <div class="padd20 text-center-sm text-center-xs " >
                    <h3 class="join-title marginTop0">
                        <?php echo get_field('support_section1_title'); ?>
                    </h3>
                    <div>
                        <?php echo get_field('support_section1_content1'); ?>
                    </div>
                </div>
            </div>
                <div class="col-md-4 ct-u-paddingBottom20">
                <div class="donate-today bgBlue">
                    <h2 class="no-header-border">Donate Today</h2> 
                    <ul class="list-unstyled">
                        <li class="donation-amount">
                            <a href="#test-popup" class="btn btn-donate-amount open-popup-window" data-amount="25">$25</a>
                        </li>
                        <li class="donation-amount">
                            <a href="#test-popup" class="btn btn-donate-amount open-popup-window" data-amount="50">$50</a>
                        </li>
                        <li class="donation-amount">
                            <a href="#test-popup" class="btn btn-donate-amount open-popup-window" data-amount="100">$100</a>
                        </li>
                        <li class="donation-amount">
                            <a href="#test-popup" class="btn btn-donate-amount open-popup-window" data-amount="200">$200</a>
                        </li>
                        <li class="donation-amount">
                            <a href="#test-popup" class="btn btn-donate-amount open-popup-window" data-amount="500">$500</a>
                        </li>
                        <li class="donation-amount">
                            <a href="#test-popup" class="btn btn-donate-amount open-popup-window" data-amount="1000">$1000</a>
                        </li>
                        <li class="donation-amount w100p">
                            <a href="#test-popup" class="btn btn-donate-amount open-popup-window" data-amount="25">Other amount</a>
                        </li>
                    </ul> 

                </div>
            </div>        
            </div>
        </div>
    </section>
</header>
    
    <!-- Section 1 STRAT -->
   
    <div class="bgGrey supportersSecondSection" >
        <div class="container">
            <div class="row">
            <div class="col-md-12">
               <?php echo get_field('support_section1_content2'); ?>
            </div>
            </div>
        </div>
    </div>
 
<!-- Section 1 END -->
    
<!--Popup Content--> 
<div id="test-popup" class="white-popup mfp-hide">
    <h3 class="title">Make a Contribution</h3>
    <hr/>
    <div class="panel panel-default">
    <div class="panel-heading flex-row">
        <h3 class="panel-title">
            Contribution: 
            <span class="contributationAmount" id="contributationAmount">$25</span>
        </h3>
    </div> 
    
    <div class="panel-body" id="contributationInfoForm">
        <p class="thankyou-title">Thank you for your gift!</p> 
        <?php echo do_shortcode('[purchaser-form]'); ?>
    </div>
    </div>
</div>
  
<?php get_footer('support'); ?>