<?php
/*
Template Name: Explore Page
*/
?>

<?php get_header(); ?>
    
    
    
    <?php //include (TEMPLATEPATH . '/inc/donateSection.php' ); ?>
    <?php 
        $secton1Img = get_field('section1_image');
    ?>
    <!-- Section 1 STRAT -->
    <div class="row bgGrey marginB50">
        <div class="col-md-6 paddRight0">           
            <img src="<?php  echo get_field('section1_image'); ?>">
        </div>
        <div class="col-md-6 paddLeft0">                    
            <article class="padd20" >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0">
                   <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray"><?php echo get_field('section1_title'); ?></span>
                </h3>
                <div class="ct-u-size16 text-justify-xs paddTop20">
                    <?php echo get_field('section1_content_1'); ?>
                </div>
                <div class="ct-u-size16 text-justify-xs textForExtend hide">
                    <?php echo get_field('section1_content_2'); ?>
                </div>                                            
                <a class="pull-right toggleContent">Show More &#8594;</a>
            </article>                      
        </div>   
    </div> <!-- Section 1 END -->
    
    <!-- Section 2 START -->   
    <div class="row marginB50" >     
        <div class="col-md-6 paddRight0">                    
            <article class="padd20" >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0">
                   <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray">
                    <?php echo get_field('section2_title'); ?>                        
                    </span>
                </h3>
                <div class="ct-u-size16 text-justify-xs paddTop20">
                    <?php echo get_field('section2_content_1'); ?>
                </div>
                <div class="ct-u-size16 text-justify-xs textForExtend hide">
                    <?php echo get_field('section2_content_2'); ?>
                </div>                                            
                <a class="pull-right toggleContent">Show More &#8594;</a>
            </article>                      
        </div>    
        <div class="col-md-6 paddLeft0">
            <div class="ct-video-poster">
                <a href="#" class="ct-videoPopup" data-video="<?php echo get_field('section2_video'); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/screenshots/explore-1.png" />
                </a>
            </div>
        </div>
    </div>
    <!-- Section 2 END -->
    
    <!-- Section 3 STRAT -->
     <div class="row bgGrey marginB50">
        <div class="col-md-6 paddRight0">
            <div class="ct-video-poster">
                <a href="#" class="ct-videoPopup" data-video="<?php echo get_field('section3_video'); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/screenshots/explore-2.png" >
                </a>
            </div>
        </div>
        <div class="col-md-6 paddLeft0">                    
            <article class="padd20" >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0">
                   <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray"><?php echo get_field('section3_title'); ?></span>
                </h3>
                <div class="ct-u-size16 text-justify-xs paddTop20">
                    <?php echo get_field('section3_content_1'); ?>
                </div>
                <div class="ct-u-size16 text-justify-xs textForExtend hide">
                    <?php echo get_field('section3_content_2'); ?>
                </div>                                            
                <a class="pull-right toggleContent">Show More &#8594;</a>
            </article>                      
        </div>   
    </div> <!-- Section 3 END -->
    
    <!-- Section 4 START -->
    <section class="ct-mediaSection" data-type="parallax" data-bg-image="<?php echo get_field('section4_image'); ?>" data-bg-image-mobile="<?php echo get_field('section4_image'); ?>" data-stellar-background-ratio="0.1" data-height="">
        <div class="container bgMediaSection1 ct-u-paddingBottom20 ct-u-paddingTop20">       
            <div class="row padd20">
                <div class="col-md-12">
                    <article class="theSpaceSection ct-u-paddingBottom50">
                        <div class="">
                            <h5 class="text-uppercase">
                                <a href="#"><?php echo get_field('section4_title'); ?></a>
                            </h5>
                            <p class="ct-u-colorWhite text-justify-xs">
                                <?php echo get_field('section4_content_1'); ?>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            </div>
        </div>
    </section>
     
    <!-- Section 4  END -->
<?php get_footer(); ?>