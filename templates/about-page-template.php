<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>
    
    
    
    <?php //include (TEMPLATEPATH . '/inc/donateSection.php' ); ?>
    
    
    <div class="row bgGrey marginB50">
        <div class="col-md-6 paddRight0">
            <div class="ct-video-poster">
                <a href="#" class="ct-videoPopup" data-video="<?php echo get_field('about_section1_video_url'); ?>">
                    <img src="<?php echo get_field('about_section1_image'); ?>" alt="<?php echo get_field('about_section1_title'); ?>" title="<?php echo get_field('about_section1_title'); ?>">
                </a>
            </div>
        </div>
        <div class="col-md-6 paddLeft0">                    
            <article class="padd20" >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0">
                   <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray"><?php echo get_field('about_section1_title'); ?></span>
                </h3>
                <div class="ct-u-size16 text-justify-xs paddTop20">
                    <?php echo get_field('about_section1_content1'); ?>
                </div>
            </article>                      
        </div>   
    </div> <!-- Section 1 END -->
    
    <!-- Section 2 STRAT -->
    <div class="row marginB50" >        
        <div class="col-md-6 paddRight0">
            <div class="padd20 text-center-sm text-center-xs " >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0"><?php echo get_field('about_section2_title'); ?></h3>
                <div class="ct-u-size16 text-justify-xs">
                    <?php echo get_field('about_section2_content1'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 paddLeft0">
            <img src="<?php echo get_field('about_section2_image'); ?>" alt="<?php echo get_field('about_section2_title'); ?>" title="<?php echo get_field('about_section2_title'); ?>">
        </div>        
    </div>
    <!-- Section 2 END -->
    
    <!-- Section 3 STRAT -->
    <div class="row bgGrey marginB50">
        <div class="col-md-6 paddRight0">
           <img src="<?php echo get_field('about_section3_image'); ?>" alt="<?php echo get_field('about_section3_title'); ?>" title="<?php echo get_field('about_section3_title'); ?>">
        </div>
        <div class="col-md-6 paddLeft0">                    
            <article class="padd20" >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0">
                   <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray"><?php echo get_field('about_section3_title'); ?></span>
                </h3>
                <div class="ct-u-size16 text-justify-xs paddTop20">
                    <?php echo get_field('about_section3_content1'); ?>
                </div>
            </article>                      
        </div>     
    </div> <!-- Section 3 END -->
    
    <!-- Section 4 START -->
    <div class="doubleVideo">
        <div class="row">
            <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0 text-center">
                <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray">BALLET 2021</span>
             </h3>
            <div class="col-md-6 paddTop20 ">
                <div class="ct-video-poster ">
                    <a href="#" class="ct-videoPopup" data-video="<?php echo get_field('about_section4_video_url_1'); ?>">
                        <img src="<?php echo get_field('about_section4_image_1'); ?>" alt="<?php echo get_field('about_section4_title'); ?>" title="<?php echo get_field('about_section4_title'); ?>">
                    </a>
                </div>
            </div>
            <div class="col-md-6 paddTop20">
                <div class="ct-video-poster pull-right">
                    <a href="#" class="ct-videoPopup" data-video="<?php echo get_field('about_section4_video_url_2'); ?>">
                        <img src="<?php echo get_field('about_section4_image_2'); ?>" alt="<?php echo get_field('about_section4_title'); ?>" title="<?php echo get_field('about_section4_title'); ?>">
                    </a>
                </div>
            </div>          
        </div>
    </div>
    
    <section class="sectionBaletContent">
        <div class="row ">
             <div class="col-md-6">
                <div class="aboutSection5">
                   <h3><?php echo get_field('about_section5_title'); ?></h3>                
                   <div><?php echo get_field('about_section5_content1'); ?></div>                
                   <div class="textForExtend hide">                     
                       <?php echo get_field('about_section5_content2'); ?>
                   </div>
                   <a class="toggleContent">Show More →</a>
               </div>
                <div class="aboutSection5">
                   <h3><?php echo get_field('about_section6_title'); ?></h3>                
                   <div><?php echo get_field('about_section6_content1'); ?></div>                
                   <div class="textForExtend hide">                     
                       <?php echo get_field('about_section6_content2'); ?>
                   </div>
                   <a class="toggleContent">Show More →</a>
               </div>
                <div class="aboutSection5">
                   <h3><?php echo get_field('about_section7_title'); ?></h3>                
                   <div><?php echo get_field('about_section7_content1'); ?></div>                
                   <div class="textForExtend hide">                     
                       <?php echo get_field('about_section7_content2'); ?>
                   </div>
                   <a class="toggleContent">Show More →</a>
                </div>
             </div>
            
             <div class="col-md-6">
            
                <div class="aboutSection5">
                   <h3><?php echo get_field('about_section8_title'); ?></h3>                
                   <div><?php echo get_field('about_section8_content1'); ?></div>                
                   <div class="textForExtend hide">                     
                       <?php echo get_field('about_section8_content2'); ?>
                   </div>
                   <a class="toggleContent">Show More →</a>
                </div>
                <div class="aboutSection5">
                   <h3><?php echo get_field('about_section9_title'); ?></h3>                
                   <div><?php echo get_field('about_section9_content1'); ?></div>                
                   <div class="textForExtend hide">                     
                       <?php echo get_field('about_section9_content2'); ?>
                   </div>
                   <a class="toggleContent">Show More →</a>
                </div>
                 
             </div>
            
        </div>
    </section>
    
    
    
     
    <!-- Section 4  END -->
<?php get_footer(); ?>