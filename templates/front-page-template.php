<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>
    
    <!-- MAIN Page Slider BEGIN-->
    <?php
    $frontSliderArgs = array ( 'post_type' => 'home_slider', 'posts_per_page' => 10 );            
    $frontSliderQ = new WP_Query( $frontSliderArgs ); 
    ?>         
    <div class="ct-u-owlWrapper">        
        <!-- Home Carousel -->
        <div class="ct-js-owl ct-u-owl ct-mainCarousel ct-mainCarousel--arrowsMiddle" data-single="true" data-height="600" data-animations="true" data-navigation="true" data-pagination="false" data-bg="true" data-snap-ignore="true" data-autoplay="true">
        <?php if($frontSliderQ->have_posts() ){
            while ( $frontSliderQ->have_posts() ){ $frontSliderQ->the_post(); ?>

             <div class="item" data-bg="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail'); ?>" data-position="center center">
                <!-- 1' OwlSlider item -->
                
            </div>

            <?php }//while END ?>            
            <?php    
                wp_reset_postdata();
                } else {  
                    _e('Sorry, no posts matched your criteria.');
                } 
            ?>
        </div><!-- /.ct-js-owl ct-u-owl -->
    </div><!-- /.ct-u-owlWrapper -->
    <!-- MAIN Page Slider END-->
    
    <?php include (TEMPLATEPATH . '/inc/donateSection.php' ); ?>
 
    <!-- Section 1 STRAT -->
    <div class="row bgGrey marginB50">
        <div class="col-md-6 paddRight0">
            <div class="ct-video-poster">
                <a href="#" class="ct-videoPopup" data-video="<?php echo get_field('home_section1_video_url'); ?>">
                    <img src="<?php echo get_field('home_section1_image'); ?>" alt="<?php echo get_field('home_section1_title'); ?>" title="<?php echo get_field('home_section1_title'); ?>">
                </a>
            </div>
        </div>
        <div class="col-md-6 ">                    
            <article class="padd20" >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0">
                   <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray"><?php echo get_field('home_section1_title'); ?></span>
                </h3>
                <div class="ct-u-size16 text-justify-xs paddTop20">
                    <?php echo get_field('home_section1_content1'); ?>
                </div>
            </article>                      
        </div>                
    </div>
    <!-- Section 1 END -->
        
    <!-- Section 2 START --> 
    <div class="row marginB50">        
        <div class="col-md-6">
            <div class="padd20 text-center-sm text-center-xs " >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0"><?php echo get_field('home_section2_title'); ?></h3>
                <div class="ct-u-size16 text-justify-xs">
                    <?php echo get_field('home_section2_content1'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 paddLeft0">
            <img src="<?php echo get_field('home_section2_image'); ?>" alt="<?php echo get_field('home_section2_title'); ?>" title="<?php echo get_field('home_section2_title'); ?>">
        </div>
    </div>  
    <!-- Section 2 END -->
    
    <!-- Section 3  START -->
    <section class="ct-mediaSection" data-type="parallax" data-bg-image="<?php echo get_field('home_section3_image'); ?>" data-bg-image-mobile="<?php echo get_field('home_section3_image'); ?>" data-stellar-background-ratio="0.1" data-height="">
        <div class="container bgMediaSection">       
            <div class="row">
                <div class="col-md-12">
                    <article class="theSpaceSection ct-u-paddingBottom50">                      
                        <div class="ct-u-paddingTop100 ct-u-paddingBottom100">
                            <h5 class="text-uppercase"><?php echo get_field('home_section3_title'); ?></h5>
                            <div class="ct-u-colorWhite text-justify ct-u-size16">
                                <?php echo get_field('home_section3_content1'); ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </article>                    
                </div>
            </div>
        </div>
    </section>
    <!-- Section 3 END -->
    
<?php get_footer(); ?>