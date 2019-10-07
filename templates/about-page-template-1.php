<?php
/*
Template Name: About Page 1
*/
?>

<?php get_header(); ?>
    
    
    
    <?php //include (TEMPLATEPATH . '/inc/donateSection.php' ); ?>
    
    <!-- Section 1 STRAT -->
    <?php     
        $section_1 = get_post(30);
        $section_1Content = get_extended($section_1->post_content);
    ?>
    <div class="row bgGrey marginB50">
        <div class="col-md-6 paddRight0">
            <div class="ct-video-poster">
                <a href="#" class="ct-videoPopup" data-video="https://www.youtube.com/watch?v=nEay4ij7ubE">
                    <img src="<?php bloginfo('template_directory'); ?>/images/screenshots/whoIsBehandTheIdea.jpg" alt="<?php echo $section_1->post_title; ?>" title="<?php echo $section_1->post_title; ?>">
                </a>
            </div>
        </div>
        <div class="col-md-6 paddLeft0">                    
            <article class="padd20" >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0">
                   <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray"><?php echo $section_1->post_title; ?></span>
                </h3>
                <p class="ct-u-size16 text-justify-xs paddTop20">
                    <?php echo $section_1->post_content; ?>
                </p>
            </article>                      
        </div>   
    </div> <!-- Section 1 END -->
    
    <!-- Section 2 STRAT -->
    <?php 
        $section_2 = get_post(88);
        $section_2Content = get_extended($section_2->post_content);
    ?>    
    <div class="row marginB50" >        
        <div class="col-md-6 paddRight0">
            <div class="padd20 text-center-sm text-center-xs " >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0"><?php echo $section_2->post_title; ?></h3>
                <p class="ct-u-size16 text-justify-xs">
                    <?php echo $section_2->post_content; ?>
                </p>
            </div>
        </div>
        <div class="col-md-6 paddLeft0">
            <img src="<?php bloginfo('template_directory'); ?>/images/about_section2.jpg" alt="<?php echo $section_2->post_title; ?>" title="<?php echo $section_2->post_title; ?>">
        </div>        
    </div>
    <!-- Section 2 END -->
    
    <!-- Section 3 STRAT -->
    <?php     
        $section_3 = get_post(93);
        $section_3Content = get_extended($section_3->post_content);
    ?>
   
    <div class="row bgGrey marginB50">
        <div class="col-md-6 paddRight0">
           <img src="<?php bloginfo('template_directory'); ?>/images/about_section3.jpg" alt="<?php echo $section_3->post_title; ?>" title="<?php echo $section_3->post_title; ?>">
        </div>
        <div class="col-md-6 paddLeft0">                    
            <article class="padd20" >
                <h3 class="ct-sectionTitle ct-u-colorMotive marginTop0">
                   <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray"><?php echo $section_3->post_title; ?></span>
                </h3>
                <p class="ct-u-size16 text-justify-xs paddTop20">
                    <?php echo $section_3->post_content; ?>
                </p>
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
                    <a href="#" class="ct-videoPopup" data-video="https://www.youtube.com/watch?v=lmdeOgYPOG0">
                        <img src="<?php bloginfo('template_directory'); ?>/images/screenshots/twoSuns.png" alt="<?php echo $section_1->post_title; ?>" title="<?php echo $section_1->post_title; ?>">
                    </a>
                </div>
            </div>
            <div class="col-md-6 paddTop20">
                <div class="ct-video-poster pull-right">
                    <a href="#" class="ct-videoPopup" data-video="https://www.youtube.com/watch?v=v9SXA3EFSpk">
                        <img src="<?php bloginfo('template_directory'); ?>/images/screenshots/twoSuns1.png" alt="<?php echo $section_1->post_title; ?>" title="<?php echo $section_1->post_title; ?>">
                    </a>
                </div>
            </div>          
        </div>
    </div>
    <section class="sectionBaletContent">
        <div class="row ">
            <div class="col-md-3">
                <h3>Background Information</h3>                
                <div>
                    The art of ballet is an infinite realm of emotions that can touch hearts, 
                    minds and spirits, and a unique tool to present our national consciousness and 
                    values to the world. Using the universal language of dance,  ballet can tell our nation’s
                </div>                
                <div class="textForExtend hide">                     
                    stories, presenting its spiritual values, heritage, strength and 
                    millennial history, legends and fairy tales, mystical ancient rituals, codes and 
                    symbols, and national mission. The art of ballet has the power to awaken creative 
                    abstract thinking and can become a means of self-discovery, regeneration, 
                    self-realization, education and empowerment for the Armenian nation.
                </div>
                <a class="toggleContent">Show More →</a>
            </div>
            <div class="col-md-3">
                <h3>Short Description</h3>
                <div>
                    Ballet 2021 is a non-profit founded in 2012 by Roudolf Kharatian to support, 
                    develop and expand the art of ballet in Armenia. 
                    Activities include periodic work with internationally-renowned choreographers, 
                    teachers/repetiteurs and dancers;
                </div>
                <div class="textForExtend hide">                    
                    international collaborations and 
                    co-productions in Armenia and abroad; innovative programming in order 
                    to raise public awareness of and broaden interest in ballet; and presenting 
                    world-class Armenian art on the international stage.
                </div>
                 <a class="toggleContent">Show More →</a>
            </div>
            <div class="col-md-3">
                <h3>Mission</h3>                
                The foundation's mission is to promote the development of ballet in Armenia as a higher artform, thereby contributing to strengthening the spiritual and to inspire and educate the Armenian people through the building of their cultural heritage.
            </div>
            <div class="col-md-3">
                <h3>Accomplishments</h3>
                <div>
                     Ballet 2021 successfully created and produced ballet productions 
                    and world-class cultural events of international scope that 
                    brought tangible and substantive change to the Armenian art in 
                    general and ballet specifically.
                </div>
                <div class="textForExtend hide">
                    In addition to the creation of new productions, Ballet 2021 has produced and realized educational, public and outreach programs. These programs, as well as the successful world premieres of Two Suns and La Boheme, clearly demonstrate the ability of Ballet 2021 to initiate, create, and produce cultural programs that benefit the public good as well as contribute to the wider culture industry of Armenia.
                </div>
                <a class="toggleContent">Show More →</a>
            </div>
        </div>
    </section>
    
    
    
     
    <!-- Section 4  END -->
<?php get_footer(); ?>