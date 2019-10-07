<?php get_header(); ?>

<div class="ct-u-owlWrapper">
        
        <!-- Main Carousel -->
        <div class="ct-js-owl ct-u-owl ct-mainCarousel ct-mainCarousel--arrowsMiddle" data-single="true" data-height="600" data-animations="true" data-navigation="true" data-pagination="false" data-bg="true" data-snap-ignore="true" data-pagination="true">
            
            <?php 
            
            $args = array(
                'post_type' => 'post',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'people',
                        'field' => 'slug', //can be set to ID
                        'terms' => 'bob' //if field is ID you can reference by cat/term number
                    )
                )
            );
            $query = new WP_Query( $args );
            ?>
            <div class="item" data-bg="<?php bloginfo('template_directory'); ?>/assets/images/slider/Gyumri&Ballet_1.jpg" data-position="center center">
                <!-- 1' OwlSlider item -->
                <div class="inner">
                    <div class="ct-dividedButtons ct-dividedButtons--bottomMiddle">
                        <div class="btn-group btn-block" role="group" aria-label="...">
                            <button type="button" class="btn btn-primary">
                                Support KESPA
                                <i class="fa fa-angle-double-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

 
   
    
    <!--
        Class .ct-backgroundContent data-atributes explanation
        - data-bg-position=" x, y " ( x - horizontal, y - vertical). X, Y can be expressed in px,%
        - data-bg-repeat="x" (x - takes 4 expressions: repeat, repeat-x, repeat-y, no-repeat
    -->
    <div class="ct-backgroundContent" data-type="background-image" data-bg-image="<?php bloginfo('template_directory'); ?>/assets/images/content/pattern6.jpg" data-bg-image-mobile="<?php bloginfo('template_directory'); ?>/assets/images/content/pattern6.jpg" data-height="" data-bg-position="15% 90%" data-bg-repeat="no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="ct-u-marginTop40">
                            <div class="col-md-6 col-md-offset-1">
                                <div class="ct-video-poster">
                                    <a href="#" class="ct-videoPopup">
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/content/pattern3.jpg" alt="Video poster">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <article class="ct-featuredVideo-Info ct-u-paddingHorizontal30 ct-u-paddingTop30 ct-u-paddingBottom40 ct-backgroundContent" data-type="color" data-bg-color="#f5f5f5">
                                            <h3 class="ct-sectionTitle ct-u-colorMotive">
                                               <span class="ct-sectionTitle-decorativeLine--medium ct-sectionTitle-decorativeLine--gray">Overview</span>
                                            </h3>
                                            <p class="ct-u-size16 text-justify-xs">
                                                Ballet2021 has set out to build an International Centre for the Performing Arts in Gyumri, Armenia’s second largest city. It is conceived as a state-of-the-art multi-purpose centre for the performing arts that will act as a hub for a new and interdisciplinary approach to dance and high culture. Its performance space, humanities and movement research centre, dance academy, and choreography program are among the many facets of the project that are designed to bring people from all over Armenia - and all over the world - to Gyumri.
                                            </p>
                                            <a class="pull-right" href=''>More...</a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 ct-md-paddingLeft0">
                    <div class="ct-u-paddingTop60 ct-u-paddingBottom140 text-center-sm text-center-xs animated" data-fx="zoomIn">
                        <h1 class="text-uppercase ct-u-colorMotive ct-fw-400 ct-u-paddingBottom50">Mission</h1>
                        <p class="ct-u-size16 ct-u-paddingBottom30 text-justify-xs">
                            The Kharatian Experiential Centre’s for the Performing Art (KESPA) mission is to serve as a space for inspiration, experimentation and education and as a meeting place for artists of all disciplines from around the world. The Centre will stimulate contribute to economic and cultural development. 
                        </p>
                        <p class="ct-u-size16 ct-u-paddingBottom30 text-justify-xs">
                            As a place for learning and creativity, it will leverage the newest developments in art alongside pioneering interdisciplinary research and an experiential learning program. The centre will be the heart of creativity and its pulse will become universal. 
                        </p>
                        <a href="" class="pull-right">Learn More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="ct-u-paddingTop40 ct-u-paddingBottom40 whoIs">
        <div class="container">
            <div class="row ct-u-paddingBottom40">
                <div class="col-md-6">
                    <div class="ct-u-sectionHeader ">
                        <h2 class="ct-sectionTitle ">Who is  <span class="ct-fw-300">behind the idea?</span></h2>
                            <p class="ct-u-size16 ct-u-paddingTop30">
                                Roudolf Kharatian has a transcultural and innovative approach to dance. A native of Yerevan, Armenia, he remains a celebrated dancer, choreographer, teacher, and director. He has been a principal dancer at the Opera and Ballet Theatre of Armenia, toured the world with the Bolshoi Ballet and been a Star of the Soviet Ballet, and founded and directed the Chamber Ballet of Armenia.  He was a faculty member in both the Kirov Academy of Ballet and the Washington Ballet; he taught the Mariinsky Kirov Ballet as well as at the American Ballet Theatre, the Boston Ballet, and many more. Today, many of his students have received gold and silver medals at prestigious international competitions, and are thriving in successful careers at some of the world’s most important ballet companies, such as New York City Ballet, Dutch National Ballet, Royal Ballet, National Ballet of Canada, etc. Ballet2021 was founded on the very same dedication to artistic excellence in Armenia and is a pillar for the Kharatian Experiential Centre for the Performing Arts. 

                                At the core of his teaching is the belief that ballet, as the confluence of athletics, spirituality, and artistry, is a transcendent tool that rallies humanity. These ideas guide his vision for KESPA.
                            </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="center-block ct-u-marginTop90">
                        <div class="ct-owlCarousel-slideSpacer">
                            <div class="ct-js-owl owl-carousel ct-decorationCarousel ct-decorationCarousel--navBottomCenter" data-single="true" data-pagination="true" data-autoplay="true" data-navigation="false" data-height="" data-stopOnHover="true" data-snap-ignore="true">
                                <div class="item">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/1.jpg" alt="Team Member 1">
                                </div>
                                <div class="item">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/2.jpg" alt="Team Member 2">
                                </div>
                                <div class="item">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/3.jpg" alt="Team Member 3">
                                </div>
                                <div class="item">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/4.jpg" alt="Team Member 4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="row">
                
        </div>
    </section>

    
    
     <!-- Section Blog List -->
    <section class="ct-mediaSection ct-u-paddingBottom40 ct-u-paddingTop60" data-type="parallax" data-bg-image="<?php bloginfo('template_directory'); ?>/assets/images/content/blog-section-1a-optimized.png" data-bg-image-mobile="<?php bloginfo('template_directory'); ?>/assets/images/content/blog-section-1a-optimized.png" data-stellar-background-ratio="0.1" data-height="">
        <div class="container">
       
            <div class="row">
                <div class="col-md-12">
                    <article class="ct-blogList ct-u-paddingBottom50">
                        <div class="ct-blogList-content ct-u-marginBoth20">                            
                            <div class="ct-blogThumbnail">
                                <div class="ct-blogImage">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ct-Description">
                            <h5 class="text-uppercase">
                                <a href="#">The Space</a>
                            </h5>
                            <p class="ct-u-colorWhite text-justify-xs">
                                Award-winning Montreal architect Azad Chichmanian will work with Ballet2021 to realize KESPA as an innovative space. The design will be approached on three levels. First, there is the functional level of designing an efficient centre for the performing arts – this means thinking a space for teaching, its educational components, components of the residency program...
                            </p>
                            <span class="ct-readMore">
                                <a href="#" class="ct-readMore-link text-uppercase pull-right">Read more</a>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                    <article class="ct-blogList ct-u-paddingBottom50">
                        <div class="ct-blogList-content ct-u-marginBoth20">                            
                            <div class="ct-blogThumbnail">
                                <div class="ct-blogImage">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ct-Description">
                            <h5 class="text-uppercase">
                                <a href="#">Lead Architect</a>
                            </h5>
                            <p class="ct-u-colorWhite text-justify-xs">
                                Azad Chichmanian is a partner at NEUF architect(e)s, a 140-person design firm with offices in Montreal, Ottawa and Toronto.  He leads a multi-disciplinary team currently working on complex, mixed-use projects across Canada and overseas, recipient of multiple design awards, most notably for their work...
                            </p>
                            <span class="ct-readMore">
                                <a href="#" class="ct-readMore-link text-uppercase pull-right">Read more</a>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                    <article class="ct-blogList ct-u-paddingBottom50">
                        <div class="ct-blogList-content ct-u-marginBoth20">                            
                            <div class="ct-blogThumbnail">
                                <div class="ct-blogImage">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/5.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ct-Description">
                            <h5 class="text-uppercase">
                                <a href="#">NEUF architect(e)s</a>
                            </h5>
                            <p class="ct-u-colorWhite text-justify-xs">
                                NEUF architect(e)s is a team of creative professionals who have been contributing to Canada’s built environment for nearly 50 years. Active in all sectors, including strategic planning, urban design, institutional, resorts and hotels, residential, interiors, commercial, industrial and office buildings, the firm specializes in finding creative solutions to today’s most...
                            </p>
                            <span class="ct-readMore">
                                <a href="#" class="ct-readMore-link text-uppercase pull-right">Read more</a>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            </div>
        </div>
    </section>

 
   

   <section class="ct-u-paddingTop80 ct-u-paddingBottom90">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="ct-sectionHeader text-center">
                         <h4 class="ct-fw-400 ct-sectionTitle text-uppercase text-left text-center-xs ct-u-paddingBottom40"><strong>In The News</strong> </h4>
                     </div>
                 </div>
             </div>
            <div class="row">
                <div class="col-md-3">
                    <hr class="divider ct-u-marginBottom0">
                    <div class="ct-u-paddingBottom20">
                        <div class="ct-owlSlider-title">
                            <h2 class="text-left ct-u-size28 ct-u-colorMotive ct-fw-400">Ballet 2021</h2>
                            <span class="text-left">View all <a href="#">News</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="ct-js-owl owl-carousel ct-personCarousel ct-personCarousel--arrowsTopRight" data-items="3" data-lgItems="3" data-mdItems="3" data-single="false" data-pagination="false" data-autoplay="true" data-navigation="true"  data-snap-ignore="true">
                        <div class="item">
                            <div class="inner">
                                <article class="ct-coursesBox">
                                    <a href="#">
                                        <div class="ct-coursesBox-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/TwoSuns_3.jpg" class="grayscale grayscale-fade" alt="Team Member 1">
                                            <div class="ct-coursesIcon">
                                                <div class="text-uppercase ct-fw-600 ct-u-paddingTop5">30</div>
                                                <div class="text-capitalize">Sep</div>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="ct-coursesBox-title"><a href="#" class="ct-u-colorInherit">Shuffle Toe Heel Wiggles</a></h4>
                                    <span class="ct-coursesBox-subtitle">Category: <a href="#">Ballet</a></span>
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <article class="ct-coursesBox">
                                    <a href="#">
                                        <div class="ct-coursesBox-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/LaBoheme_6.jpg" class="grayscale grayscale-fade" alt="Team Member 2">
                                            <div class="ct-coursesIcon">
                                                <div class="text-uppercase ct-fw-600 ct-u-paddingTop5">24</div>
                                                <div class="text-capitalize">Nov</div>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="ct-coursesBox-title">
                                        <a href="#" class="ct-u-colorInherit">Supporting Leg Work</a>
                                    </h4>
                                    <span class="ct-coursesBox-subtitle">Category: <a href="#">Lorem ipsum</a></span>
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <article class="ct-coursesBox">
                                    <a href="#">
                                        <div class="ct-coursesBox-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/TwoSuns_2.jpg" class="grayscale grayscale-fade" alt="Team Member 3">
                                            <div class="ct-coursesIcon">
                                                <div class="text-uppercase ct-fw-600 ct-u-paddingTop5">15</div>
                                                <div class="text-capitalize">Dec</div>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="ct-coursesBox-title">
                                        <a href="#" class="ct-u-colorInherit">Pond de Kerimus Direction...</a>
                                    </h4>
                                    <span class="ct-coursesBox-subtitle">Category: <a href="#">Lorem ipsum</a></
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <article class="ct-coursesBox">
                                    <a href="#">
                                        <div class="ct-coursesBox-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/Gyumri&Ballet_2.png" class="grayscale grayscale-fade" alt="Team Member 4">
                                            <div class="ct-coursesIcon">
                                                <div class="text-uppercase ct-fw-600 ct-u-paddingTop5">01</div>
                                                <div class="text-capitalize">May</div>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="ct-coursesBox-title">
                                        <a href="#" class="ct-u-colorInherit">Shuffle Toe Heel Wiggles</a>
                                    </h4>
                                    <span class="ct-coursesBox-subtitle">Category: <a href="#">Lorem ipsum</a></
                                </article>
                            </div>
                        </div>
                        <div class="item">
                            <div class="inner">
                                <article class="ct-coursesBox">
                                    <a href="#">
                                        <div class="ct-coursesBox-image">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/slider/Gyumri_4.jpg" class="grayscale grayscale-fade" alt="Team Member 5">
                                            <div class="ct-coursesIcon">
                                                <div class="text-uppercase ct-fw-600 ct-u-paddingTop5">27</div>
                                                <div class="text-capitalize">Apr</div>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="ct-coursesBox-title">
                                        <a href="#" class="ct-u-colorInherit">Shuffle Toe Heel Wiggles</a>
                                    </h4>
                                    <span class="ct-coursesBox-subtitle">Category: <a href="#">Lorem ipsum</a></
                                </article>
                            </div>
                        </div>
                        
                </div>
            </div>
         </div>
    </section>


    <section class="ct-u-paddingBoth30">
        <div class="ct-socialBar text-center">
            <h4 class="ct-socialTitle"><i class="fa fa-share-alt"></i> Connect with us</h4>
            <hr class="divider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ct-socialList">
                            <ul class="list-inline list-unstyled text-uppercase">
                                <li><a href="#" class="ct-socialLink">Facebook<span rel="Facebook"></span></a></li>
                                <li><a href="#" class="ct-socialLink">Twitter<span rel="Twitter"></span></a></li>
                                <li><a href="#" class="ct-socialLink">YouTube<span rel="YouTube"></span></a></li>
                                <li><a href="#" class="ct-socialLink">Pinterest<span rel="Pinterest"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>